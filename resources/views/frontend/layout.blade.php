<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $settings['site_name'] ?? config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', '')">
    <link rel="canonical" href="{{ url()->current() }}">
    @include('frontend.style.css')
    @stack('styles')

    <meta property="og:title" content="@yield('title', config('app.name'))">
    <meta property="og:description" content="@yield('meta_description', '')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    @hasSection('og_image')
        <meta property="og:image" content="@yield('og_image')">
    @endif
</head>

@php
    $menuPages = \App\Models\Page::published()->get();
    $siteName = $settings['site_name'] ?? config('app.name');
    $logo = $settings['logo'] ?? null;
    $footerContent = $settings['footer_content'] ?? null;
@endphp

<body class="index">
    <x-frontend.header :site-name="$siteName" :logo="$logo" :menu-pages="$menuPages" />

    @yield('content')

    <x-frontend.footer :footer-content="$footerContent" />
    @include('frontend.style.js')
    @stack('scripts')
</body>
</html>
