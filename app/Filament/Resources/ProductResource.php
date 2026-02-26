<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\{TextInput, Textarea, Select, Toggle, RichEditor, FileUpload, DateTimePicker, Section,Repeater};
use Filament\Tables\Columns\{TextColumn, IconColumn, ImageColumn};
use Filament\Tables\Filters\TernaryFilter;
class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Section::make('Thông tin chính')->schema([

                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', \Illuminate\Support\Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Select::make('product_category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable(),

                Textarea::make('short_description'),

                RichEditor::make('content')
                    ->columnSpanFull(),

                TextInput::make('price')
                    ->numeric()
                    ->prefix('₫'),

                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('products'),

                FileUpload::make('gallery')
                    ->multiple()
                    ->image()
                    ->directory('products/gallery'),

                Toggle::make('status')
                    ->default(true),
                Toggle::make('has_variants')
                    ->label('Có biến thể')
                    ->default(false)
                    ->live(),
                Repeater::make('variants')
                    ->relationship()
                    ->schema([
                        TextInput::make('sku')
                            ->label('SKU'),

                        TextInput::make('price')
                            ->numeric()
                            ->label('Giá'),

                        TextInput::make('stock')
                            ->numeric()
                            ->label('Tồn kho'),

                        Toggle::make('is_default')
                            ->label('Mặc định'),
                    ])
                    ->visible(fn ($get) => $get('has_variants'))
                    ->columns(2)
                    ->columnSpanFull(),

                DateTimePicker::make('published_at'),
            ])->columns(2),

            Section::make('SEO')->schema([
                TextInput::make('meta_title'),
                Textarea::make('meta_description'),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail'),
                TextColumn::make('name')->searchable(),
                TextColumn::make('category.name'),
                IconColumn::make('status')->boolean(),
                TextColumn::make('published_at')->dateTime(),
            ])
            ->filters([
                TernaryFilter::make('status'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
