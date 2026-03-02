<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
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
class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Bài viết';

    protected static ?string $navigationLabel = 'Bài viết';
    public static function form(Form $form): Form
    {
        return $form->schema([

            Section::make('Thông tin bài viết')->schema([

                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Select::make('post_category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable(),

                Textarea::make('excerpt')
                    ->rows(3)
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('posts'),

                Toggle::make('status')
                    ->default(true),

                DateTimePicker::make('published_at'),

            ])->columns(2),

            Section::make('SEO')->schema([

                TextInput::make('meta_title')
                    ->maxLength(255),

                Textarea::make('meta_description')
                    ->rows(3),

            ])->collapsible(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->square(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category.name')
                    ->sortable(),

                IconColumn::make('status')
                    ->boolean(),

                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),

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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
