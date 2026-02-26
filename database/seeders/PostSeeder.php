<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = PostCategory::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 3; $i++) {

                $title = $category->name . ' Post ' . $i;
                $slug = Str::slug($category->name . '-post-' . $i);

                Post::updateOrCreate(
                    ['slug' => $slug],
                    [
                        'title' => $title,
                        'excerpt' => 'Demo excerpt',
                        'content' => '<p>Demo blog content</p>',
                        'post_category_id' => $category->id,
                        'status' => true,
                        'published_at' => now(),
                    ]
                );
            }
        }
    }
}
