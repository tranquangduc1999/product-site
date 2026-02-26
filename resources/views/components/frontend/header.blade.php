<header>
    @if($logo)
        <img src="{{ asset('storage/' . $logo) }}" alt="{{ $siteName }}" height="40">
    @else
        <h2>{{ $siteName }}</h2>
    @endif

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/products') }}">Products</a>
        <a href="{{ url('/blog') }}">Blog</a>

        @foreach($menuPages as $page)
            <a href="{{ url('/' . $page->slug) }}">{{ $page->title }}</a>
        @endforeach
    </nav>
</header>
