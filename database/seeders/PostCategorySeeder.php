<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostCategory;
class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['News', 'Tips'];

        foreach ($categories as $name) {
            PostCategory::updateOrCreate(
                ['slug' => \Str::slug($name)],
                [
                    'name' => $name,
                    'status' => true,
                ]
            );
        }
    }
}
