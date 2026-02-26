<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Furniture',
            'Accessories',
        ];

        foreach ($categories as $name) {
            ProductCategory::updateOrCreate(
                ['slug' => \Str::slug($name)],
                [
                    'name' => $name,
                    'status' => true,
                ]
            );
        }
    }
}
