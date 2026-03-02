<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left';
    protected static ?string $navigationLabel = 'Ý kiến khách hàng';
    protected static ?string $navigationGroup = 'Nội dung';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Tên khách hàng'),

            Forms\Components\TextInput::make('position')
                ->label('Chức vụ / Công ty'),

            Forms\Components\FileUpload::make('avatar')
                ->disk('public')
                ->directory('testimonials')
                ->image()
                ->label('Ảnh đại diện'),

            Forms\Components\Textarea::make('content')
                ->required()
                ->rows(4)
                ->label('Nội dung'),

            Forms\Components\TextInput::make('rating')
                ->numeric()
                ->minValue(1)
                ->maxValue(5)
                ->default(5)
                ->label('Số sao'),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0)
                ->label('Thứ tự'),

            Forms\Components\Toggle::make('status')
                ->default(true)
                ->label('Hiển thị'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('avatar')
                ->disk('public')
                ->label('Ảnh'),

            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->label('Tên'),

            Tables\Columns\TextColumn::make('rating')
                ->label('Sao'),

            Tables\Columns\ToggleColumn::make('status')
                ->label('Hiển thị'),

            Tables\Columns\TextColumn::make('sort_order')
                ->sortable()
                ->label('Thứ tự'),
        ])
            ->defaultSort('sort_order', 'asc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
