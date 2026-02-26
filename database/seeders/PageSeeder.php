<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            'gioi-thieu' => 'Giới thiệu',
            'lien-he' => 'Liên hệ',
        ];

        foreach ($pages as $slug => $title) {
            Page::updateOrCreate(
                ['slug' => $slug],
                [
                    'title' => $title,
                    'content' => '<p>Demo content</p>',
                    'status' => true,
                ]
            );
        }
    }
}
