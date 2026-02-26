@extends('frontend.layout')
@section('og_image', asset('storage/'.$post->thumbnail))
@section('title', $post->meta_title ?? $post->title)
@section('meta_description', $post->meta_description ?? $post->excerpt)

@section('content')

    <h1>{{ $post->title }}</h1>

    @if($post->thumbnail)
        <img src="{{ asset('storage/'.$post->thumbnail) }}" width="300">
    @endif

    <div>
        {!! $post->content !!}
    </div>

    <hr>

    <h3>Related Posts</h3>

    @foreach($related as $item)
        <div>
            <a href="{{ url('/blog/'.$item->slug) }}">
                {{ $item->title }}
            </a>
        </div>
    @endforeach

@endsection
