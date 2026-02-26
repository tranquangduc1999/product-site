
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
    </url>

    @foreach($products as $product)
        <url>
            <loc>{{ url('/products/'.$product->slug) }}</loc>
        </url>
    @endforeach

    @foreach($posts as $post)
        <url>
            <loc>{{ url('/blog/'.$post->slug) }}</loc>
        </url>
    @endforeach

    @foreach($pages as $page)
        <url>
            <loc>{{ url('/'.$page->slug) }}</loc>
        </url>
    @endforeach

</urlset>
