@extends('frontend.layout')

@section('title', 'Blog')

@section('content')

    <h1>Blog</h1>

    @foreach($posts as $post)

        <div style="margin-bottom:20px; border-bottom:1px solid #ddd; padding-bottom:10px;">

            @if($post->thumbnail)
                <img src="{{ asset('storage/'.$post->thumbnail) }}" width="150">
            @endif

            <h3>
                <a href="{{ url('/blog/'.$post->slug) }}">
                    {{ $post->title }}
                </a>
            </h3>

            <p>{{ $post->excerpt }}</p>

        </div>

    @endforeach

    {{ $posts->links() }}

@endsection
