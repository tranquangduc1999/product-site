<?php

namespace App\Filament\Resources\SettingResource\Pages;

use App\Filament\Resources\SettingResource;
use App\Models\Setting;
use Filament\Resources\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Forms\Components\{TextInput, Textarea, FileUpload, Section};

class ManageSetting extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = SettingResource::class;

    protected static string $view = 'filament.resources.settings-resource.pages.manage-setting';

    public ?array $data = [];

    public function mount(): void
    {
        $setting = Setting::firstOrCreate([]);

        $this->form->fill($setting->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->statePath('data')
            ->schema([

                Section::make('Thông tin chung')
                    ->schema([
                        TextInput::make('site_name')->label('Tên website'),

                        FileUpload::make('logo')
                            ->disk('public')
                            ->directory('settings')
                            ->image(),

                        FileUpload::make('favicon')
                            ->disk('public')
                            ->directory('settings')
                            ->image(),
                    ])
                    ->columns(2),

                Section::make('Liên hệ')
                    ->schema([
                        TextInput::make('hotline'),
                        TextInput::make('email')->email(),
                        TextInput::make('address'),
                    ])
                    ->columns(2),
                Textarea::make('google_map_embed')
                    ->label('Google Map Iframe')
                    ->rows(5)
                    ->columnSpanFull()
                    ->helperText('Dán iframe từ Google Maps'),

                Section::make('SEO mặc định')
                    ->schema([
                        TextInput::make('meta_title'),
                        Textarea::make('meta_description')->rows(3),
                    ]),

                Section::make('Analytics')
                    ->schema([
                        Textarea::make('google_analytics')->rows(4),
                    ]),
            ]);
    }


    public function save(): void
    {
        $setting = Setting::firstOrCreate([]);

        $setting->update($this->form->getState());

        Notification::make()
            ->title('Cập nhật thành công')
            ->success()
            ->send();
    }
}
