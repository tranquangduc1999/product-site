<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;

class PostController extends Controller
{
    public function index()
    {
        $query = Post::published()->with('category');

        if (request('category')) {
            $category = PostCategory::where('slug', request('category'))->firstOrFail();
            $query->where('post_category_id', $category->id);
        }

        $posts = $query->latest('published_at')->paginate(10);

        return view('frontend.posts.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->with('category')
            ->firstOrFail();

        $related = Post::published()
            ->where('post_category_id', $post->post_category_id)
            ->where('id', '!=', $post->id)
            ->take(4)
            ->get();

        return view('frontend.posts.show', compact('post', 'related'));
    }
}
