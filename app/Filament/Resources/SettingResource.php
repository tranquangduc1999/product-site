<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Resources\Resource;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Cấu hình website';
    protected static ?string $navigationGroup = 'Hệ thống';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSetting::route('/'),
        ];
    }
}
