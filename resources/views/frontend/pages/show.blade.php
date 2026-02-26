@extends('frontend.layout')

@section('title', $page->meta_title ?? $page->title)
@section('meta_description', $page->meta_description)

@section('content')

    <h1>{{ $page->title }}</h1>

    <div>
        {!! $page->content !!}
    </div>

@endsection
