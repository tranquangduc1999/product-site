<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostCategoryResource\Pages;
use App\Filament\Resources\PostCategoryResource\RelationManagers;
use App\Models\PostCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\{TextInput, Textarea, Select, Toggle, RichEditor, FileUpload, DateTimePicker, Section};
use Filament\Tables\Columns\{TextColumn, IconColumn, ImageColumn};
use Filament\Tables\Filters\TernaryFilter;
class PostCategoryResource extends Resource
{
    protected static ?string $model = PostCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Section::make('Thông tin danh mục')->schema([

                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),

                Toggle::make('status')
                    ->default(true),

            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->searchable(),

                IconColumn::make('status')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('status'),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListPostCategories::route('/'),
            'create' => Pages\CreatePostCategory::route('/create'),
            'edit' => Pages\EditPostCategory::route('/{record}/edit'),
        ];
    }
}
