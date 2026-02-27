<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::firstOrCreate(
            ['id' => 1],
            [
                'site_name' => 'My Product Website',
                'hotline' => '0123456789',
                'email' => 'admin@example.com',
                'meta_title' => 'My Product Website',
                'meta_description' => 'Website bán sản phẩm chuyên nghiệp',
            ]
        );
    }
}
