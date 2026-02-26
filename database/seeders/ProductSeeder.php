<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ProductCategory::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 3; $i++) {

                $name = $category->name . ' Product ' . $i;
                $slug = Str::slug($category->name . '-product-' . $i);

                Product::updateOrCreate(
                    ['slug' => $slug],
                    [
                        'name' => $name,
                        'short_description' => 'Demo description',
                        'content' => '<p>Demo product content</p>',
                        'price' => rand(100, 1000),
                        'product_category_id' => $category->id,
                        'status' => true,
                        'published_at' => now(),
                    ]
                );
            }
        }
    }
}
