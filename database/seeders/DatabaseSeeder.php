<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo admin mặc định (không bị duplicate)
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        $this->call([
            ProductCategorySeeder::class,
            ProductSeeder::class,
            PostCategorySeeder::class,
            PostSeeder::class,
            PageSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
