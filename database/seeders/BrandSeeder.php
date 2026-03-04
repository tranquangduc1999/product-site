<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung',
                'description' => 'Thương hiệu điện tử nổi tiếng từ Hàn Quốc',
            ],
            [
                'name' => 'Apple',
                'description' => 'Thương hiệu công nghệ cao cấp từ Mỹ',
            ],
            [
                'name' => 'Sony',
                'description' => 'Thương hiệu điện tử và giải trí',
            ],
        ];

        foreach ($brands as $brand) {
            Brand::updateOrCreate(
                ['slug' => Str::slug($brand['name'])],
                [
                    'name' => $brand['name'],
                    'slug' => Str::slug($brand['name']),
                    'description' => $brand['description'],
                    'is_active' => true,
                ]
            );
        }
    }
}
