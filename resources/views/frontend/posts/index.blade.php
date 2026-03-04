@extends('frontend.layout')

@section('title', 'Blog')

@section('content')
    <section class="bread-crumb margin-bottom-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">Tin tức</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container" itemscope="" itemtype="http://schema.org/Blog">
        <meta itemprop="name" content="">
        <meta itemprop="description" content="Chủ đề không có mô tả">
        <div class="row">
            <section class="right-content col-md-9 list-blog-page">
                <div class="box-heading hidden">
                    <h1 class="title-head"></h1>
                </div>
                <section class="list-blogs blog-main margin-top-30">
                    <div class="row">
                        @if(!empty($posts))
                            @foreach($posts as $value)
                                <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
                                    <article class="blog-item">
                                        <div class="blog-item-thumbnail">
                                            <a href="/blog/{{$value->slug}}">
                                                <img src="{{$value->featured_image}}" data-lazyload="{{$value->featured_image}}" alt="{{$value->title}}" class="img-responsive center-block">
                                            </a>
                                        </div>
                                        <div class="blog-item-mains">
                                            <h3 class="blog-item-name"><a href="/blog/{{$value->slug}}" title="{{$value->title}}">{{$value->title}}</a></h3>
                                            <div class="post-time">
                                                - GiaDungAlPha
                                            </div>
                                            <p class="blog-item-summary margin-bottom-5">{{$value->excerpt}}</p>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </section>
            </section>
            <aside class="left left-content col-md-3">
                <aside class="aside-blog-item margin-bottom-15">
                    <a href="#">
                        <img src="//theme.hstatic.net/1000343108/1000435493/14/blogs_banner.png?v=230" data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/blogs_banner.png?v=230" alt="Ant Furniture" class="img-responsive center-block">
                    </a>
                </aside>
                <div class="aside-item">
                    <div class="heading">
                        <h2 class="title-head"><a href="/blogs"><span>Bài viết mới nhất</span></a></h2>
                    </div>
                    <div class="list-blogs">
                        @if(!empty($posts))
                            @foreach($posts as $value)
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
