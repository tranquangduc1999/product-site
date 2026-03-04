<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\{
    TextInput,
    Textarea,
    Select,
    Section
};
use Filament\Tables\Columns\{
    TextColumn,
    BadgeColumn
};
use Filament\Tables\Filters\SelectFilter;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Liên hệ';
    protected static ?string $navigationGroup = 'Khách hàng';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin khách gửi')
                    ->schema([
                        TextInput::make('name')->disabled(),
                        TextInput::make('phone')->disabled(),
                        TextInput::make('email')->disabled(),
                        TextInput::make('subject')->disabled(),
                        Textarea::make('message')
                            ->rows(4)
                            ->disabled(),
                    ]),

                Section::make('Xử lý')
                    ->schema([
                        Select::make('status')
                            ->options([
                                'new' => 'Mới',
                                'replied' => 'Đã xử lý',
                            ])
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Tên')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('SĐT')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                BadgeColumn::make('status')
                    ->label('Trạng thái')
                    ->colors([
                        'warning' => 'new',
                        'success' => 'replied',
                    ]),

                TextColumn::make('created_at')
                    ->label('Ngày gửi')
                    ->dateTime('d/m/Y H:i'),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'new' => 'Mới',
                        'replied' => 'Đã xử lý',
                    ])
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
