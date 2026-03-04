@extends('frontend.layout')
@section('og_image', asset('storage/'.$post->thumbnail))
@section('title', $post->meta_title ?? $post->title)
@section('meta_description', $post->meta_description ?? $post->excerpt)

@section('content')
    <section class="bread-crumb margin-bottom-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a itemprop="url" href="/blogs/news" title="Tin tức"><span itemprop="title">Tin tức</span></a><span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">{{$post->title}}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container article-wraper">
        <div class="row">
            <section class="right-content col-md-9 col-md-push-3">
                <article class="article-main" itemscope="" itemtype="http://schema.org/Article">
                    <div class="hidden" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                        <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                            <img src="//theme.hstatic.net/1000343108/1000435493/14/logo.png?v=230" alt="">
                            <meta itemprop="url" content="https://theme.hstatic.net/1000343108/1000435493/14/logo.png?v=230">
                            <meta itemprop="width" content="200">
                            <meta itemprop="height" content="49">
                        </div>
                        <meta itemprop="name" content="{{$post->title}}">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-head">{{$post->title}}</h1>
                            <div class="postby">
                                <span>Đăng bởi <b>GiaDungAlPha</b> vào lúc {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}
</span>
                            </div>
                            <div class="article-details">
                                <div class="article-content">
                                    <div class="rte">
                                        <div class="caption" id="fancy-image-view">
                                            {!! $post->content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a099baca270babc"></script>
                            <div class="addthis_inline_share_toolbox_jje8"></div>
                        </div>

                    </div>
                </article>
            </section>
            <aside class="left left-content col-md-3 col-md-pull-9">
                <aside class="aside-blog-item margin-bottom-15">
                    <a href="#">
                        <img src="//theme.hstatic.net/1000343108/1000435493/14/blogs_banner.png?v=230" data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/blogs_banner.png?v=230" alt="Ant Furniture" class="img-responsive center-block">
                    </a>
                </aside>
                <div class="aside-item">
                    <div class="heading">
                        <h2 class="title-head"><a href="news"><span>Xem nhiều nhất</span></a></h2>
                    </div>
                    <div class="list-blogs">
                        @if(!empty($listPost))
                            @foreach($listPost as $value)
                                <article class="blog-item blog-item-list clearfix">
                                    <a href="/blog/{{$value->slug}}" class="panel-box-media">
                                        <img src="{{$value->featured_image}}" data-lazyload="{{$value->featured_image}}" width="70" alt="{{$value->title}}">
                                    </a>
                                    <div class="blogs-rights">
                                        <h3 class="blog-item-name"><a href="/blog/{{$value->slug}}" title="{{$value->title}}">{{$value->title}}</a></h3>
                                        <div class="post-time"></div>
                                    </div>
                                </article>
                            @endforeach
                        @endif
                    </div>

                </div>

            </aside>
        </div>
    </div>
@endsection
