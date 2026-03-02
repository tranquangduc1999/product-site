<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarrantyResource\Pages;
use App\Models\Warranty;
use Filament\Forms\Form;
use Filament\Forms\Components\{
    Select,
    TextInput,
    DatePicker,
    Textarea,
    Section
};
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\{
    TextColumn,
    BadgeColumn
};
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\WarrantyImport;
use App\Exports\WarrantyTemplateExport;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;
class WarrantyResource extends Resource
{
    protected static ?string $model = Warranty::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static ?string $navigationGroup = 'Bảo hành';
    protected static ?string $navigationLabel = 'Quản lý bảo hành';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Section::make('Thông tin bảo hành')
                ->schema([

                    Select::make('customer_id')
                        ->label('Khách hàng')
                        ->relationship('customer', 'name')
                        ->searchable()
                        ->required(),

                    Select::make('product_id')
                        ->label('Sản phẩm')
                        ->relationship('product', 'name')
                        ->searchable()
                        ->required(),

                    TextInput::make('serial_number')
                        ->label('Serial / IMEI'),

                    DatePicker::make('start_date')
                        ->label('Ngày bắt đầu')
                        ->required(),

                    DatePicker::make('end_date')
                        ->label('Ngày kết thúc')
                        ->required(),

                    Textarea::make('note')
                        ->label('Ghi chú')
                        ->rows(3)
                        ->columnSpanFull(),
                ])
                ->columns(2),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('customer.name')
                    ->label('Khách hàng')
                    ->searchable(),

                TextColumn::make('product.name')
                    ->label('Sản phẩm')
                    ->searchable(),

                TextColumn::make('serial_number')
                    ->label('Serial'),

                TextColumn::make('start_date')
                    ->date('d/m/Y')
                    ->label('Bắt đầu'),

                TextColumn::make('end_date')
                    ->date('d/m/Y')
                    ->label('Kết thúc'),

                BadgeColumn::make('status')
                    ->label('Trạng thái')
                    ->getStateUsing(fn ($record) =>
                    now()->lessThanOrEqualTo($record->end_date)
                        ? 'Còn hạn'
                        : 'Hết hạn'
                    )
                    ->colors([
                        'success' => 'Còn hạn',
                        'danger'  => 'Hết hạn',
                    ]),
            ])

            ->filters([
                SelectFilter::make('customer_id')
                    ->relationship('customer', 'name')
                    ->label('Khách hàng'),

                SelectFilter::make('product_id')
                    ->relationship('product', 'name')
                    ->label('Sản phẩm'),
            ])

            ->headerActions([

                // ✅ DOWNLOAD TEMPLATE
                Action::make('download_template')
                    ->label('Download file mẫu')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->action(fn () =>
                    Excel::download(
                        new WarrantyTemplateExport,
                        'warranty_template.xlsx'
                    )
                    ),

                // ✅ IMPORT EXCEL + BẮT LỖI
                Action::make('import')
                    ->label('Import Excel')
                    ->icon('heroicon-o-arrow-up-tray')
                    ->form([
                        FileUpload::make('file')
                            ->required()
                            ->disk('public')
                            ->directory('imports')
                            ->acceptedFileTypes([
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                'application/vnd.ms-excel',
                            ]),
                    ])
                    ->action(function (array $data) {

                        try {

                            \DB::beginTransaction();

                            Excel::import(
                                new WarrantyImport,
                                storage_path('app/public/' . $data['file'])
                            );

                            \DB::commit();

                            Notification::make()
                                ->title('Import thành công')
                                ->success()
                                ->send();

                        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {

                            \DB::rollBack();

                            $failures = $e->failures();

                            $errorMessages = collect($failures)
                                ->map(fn ($failure) =>
                                    "Dòng {$failure->row()}: " .
                                    implode(', ', $failure->errors())
                                )
                                ->implode("\n");

                            Notification::make()
                                ->title('Import thất bại - Không có dữ liệu nào được lưu')
                                ->body($errorMessages)
                                ->danger()
                                ->send();

                        } catch (\Exception $e) {

                            \DB::rollBack();

                            Notification::make()
                                ->title('Lỗi hệ thống')
                                ->body($e->getMessage())
                                ->danger()
                                ->send();
                        }
                    }),
            ])

            ->defaultSort('created_at', 'desc')

            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListWarranties::route('/'),
            'create' => Pages\CreateWarranty::route('/create'),
            'edit'   => Pages\EditWarranty::route('/{record}/edit'),
        ];
    }
}
