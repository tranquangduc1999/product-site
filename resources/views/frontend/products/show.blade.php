@extends('frontend.layout')
@section('og_image', asset('storage/'.$product->thumbnail))
@section('title', $product->meta_title ?? $product->name)
@section('meta_description', $product->meta_description ?? $product->short_description)

@section('content')

    <h1>{{ $product->name }}</h1>

    @if($product->thumbnail)
        <img src="{{ asset('storage/'.$product->thumbnail) }}" width="300">
    @endif

    @if($product->gallery)
        <h3>Gallery</h3>
        @foreach($product->gallery as $image)
            <img src="{{ asset('storage/'.$image) }}" width="120">
        @endforeach
    @endif

    <div>
        {!! $product->content !!}
    </div>

    <hr>

    <h3>Related Products</h3>

    @foreach($related as $item)
        <div>
            <a href="{{ url('/products/'.$item->slug) }}">
                {{ $item->name }}
            </a>
        </div>
    @endforeach

@endsection
