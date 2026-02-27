<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuItemResource\Pages;
use App\Models\MenuItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class MenuItemResource extends Resource
{
    protected static ?string $model = MenuItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3';

    protected static ?string $navigationGroup = 'Giao diện';

    protected static ?string $navigationLabel = 'Menu Items';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Select::make('menu_id')
                ->relationship('menu', 'name')
                ->required()
                ->live(),

            TextInput::make('title')
                ->required(),

            TextInput::make('url')
                ->helperText('Ví dụ: /products hoặc https://google.com')
                ->required(),

            Select::make('parent_id')
                ->label('Menu cha')
                ->options(function ($get) {
                    if (!$get('menu_id')) {
                        return [];
                    }

                    return MenuItem::where('menu_id', $get('menu_id'))
                        ->pluck('title', 'id');
                })
                ->nullable()
                ->helperText('Để trống nếu là menu cấp 1'),

            TextInput::make('sort_order')
                ->numeric()
                ->default(0),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('menu.name')
                    ->label('Menu'),

                TextColumn::make('title')
                    ->label('Tiêu đề')
                    ->searchable(),

                TextColumn::make('parent.title')
                    ->label('Menu cha')
                    ->default('-'),

                TextColumn::make('sort_order')
                    ->label('Thứ tự'),

                TextColumn::make('created_at')
                    ->dateTime('d/m/Y'),

            ])
            ->defaultSort('sort_order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuItems::route('/'),
            'create' => Pages\CreateMenuItem::route('/create'),
            'edit' => Pages\EditMenuItem::route('/{record}/edit'),
        ];
    }
}
