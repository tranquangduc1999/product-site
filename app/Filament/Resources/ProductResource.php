<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Forms\Components\{
    TextInput,
    Textarea,
    Select,
    Toggle,
    RichEditor,
    FileUpload,
    DateTimePicker,
    Section,
    Repeater
};
use Filament\Tables\Columns\{
    TextColumn,
    IconColumn,
    ImageColumn
};
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationGroup = 'Sản phẩm';
    protected static ?string $navigationLabel = 'Sản phẩm';

    public static function form(Form $form): Form
    {
        return $form->schema([

            /*
            |--------------------------------------------------------------------------
            | THÔNG TIN CHÍNH
            |--------------------------------------------------------------------------
            */

            Section::make('Thông tin chính')
                ->schema([

                    TextInput::make('name')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', Str::slug($state))
                        ),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),

                    Select::make('product_category_id')
                        ->relationship('category', 'name')
                        ->required()
                        ->searchable(),
                    Select::make('brand_id')
                        ->relationship('brand', 'name')
                        ->searchable()
                        ->preload()
                        ->nullable(),

                    Textarea::make('short_description')
                        ->rows(3),

                    RichEditor::make('content')
                        ->columnSpanFull(),

                    TextInput::make('price')
                        ->numeric()
                        ->prefix('₫')
                        ->required(),

                    TextInput::make('sale_price')
                        ->numeric()
                        ->prefix('₫')
                        ->required(),

                    FileUpload::make('thumbnail')
                        ->image()
                        ->directory('products')
                        ->disk('public'),

                    FileUpload::make('gallery')
                        ->multiple()
                        ->image()
                        ->directory('products/gallery')
                        ->disk('public'),

                    Toggle::make('status')
                        ->label('Hiển thị')
                        ->default(true),

                    DateTimePicker::make('published_at'),

                ])
                ->columns(2),

            /*
            |--------------------------------------------------------------------------
            | BIẾN THỂ & TỒN KHO
            |--------------------------------------------------------------------------
            */

            Section::make('Tồn kho & Biến thể')
                ->schema([

                    Toggle::make('has_variants')
                        ->label('Có biến thể')
                        ->default(false)
                        ->live(),

                    TextInput::make('stock')
                        ->label('Tồn kho')
                        ->numeric()
                        ->default(0)
                        ->visible(fn ($get) => !$get('has_variants')),

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
                ])
                ->columns(2),

            /*
            |--------------------------------------------------------------------------
            | BẢO HÀNH
            |--------------------------------------------------------------------------
            */

            Section::make('Bảo hành')
                ->schema([

                    TextInput::make('warranty_period')
                        ->label('Thời gian bảo hành')
                        ->placeholder('Ví dụ: 12 tháng'),

                    Textarea::make('warranty_policy')
                        ->label('Chính sách bảo hành')
                        ->rows(4)
                        ->columnSpanFull(),
                ])
                ->columns(2),

            /*
            |--------------------------------------------------------------------------
            | SEO
            |--------------------------------------------------------------------------
            */

            Section::make('SEO')
                ->schema([
                    TextInput::make('meta_title'),
                    Textarea::make('meta_description')
                        ->rows(3),
                ])
                ->columns(2),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('thumbnail')
                    ->label('Ảnh'),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category.name')
                    ->label('Danh mục'),

                TextColumn::make('price')
                    ->money('VND', true),

                TextColumn::make('sale_price')
                    ->money('VND', true),

                IconColumn::make('status')
                    ->boolean(),

                TextColumn::make('published_at')
                    ->dateTime('d/m/Y H:i'),
            ])
            ->filters([
                // Lọc theo trạng thái
                TernaryFilter::make('status')
                    ->label('Trạng thái')
                    ->trueLabel('Hiển thị')
                    ->falseLabel('Ẩn'),
                SelectFilter::make('brand')
                    ->relationship('brand', 'name'),
                // Lọc theo danh mục
                SelectFilter::make('product_category_id')
                    ->label('Danh mục')
                    ->options(
                        ProductCategory::pluck('name', 'id')
                    )
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit'   => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
