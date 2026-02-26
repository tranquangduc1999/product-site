@extends('frontend.layout')

@section('title', 'Products')

@section('content')

    <h1>Products</h1>

    @if($products->count())
        @foreach($products as $product)
            <div style="margin-bottom:20px; border-bottom:1px solid #ddd; padding-bottom:10px;">

                @if($product->thumbnail)
                    <img src="{{ asset('storage/'.$product->thumbnail) }}" width="150">
                @endif

                <h3>
                    <a href="{{ url('/products/'.$product->slug) }}">
                        {{ $product->name }}
                    </a>
                </h3>

                <p>{{ $product->short_description }}</p>

            </div>
        @endforeach

        {{ $products->links() }}

    @else
        <p>No products found.</p>
    @endif

@endsection
