@extends('frontend.layout')

@section('title', 'Home')
@section('content')
    <section class="awe-section-1">
        <div class="home-slider owl-carousel not-dqowl owl-loaded owl-drag">
            @foreach($sliders as $value)
                <div class="item">
                    <a href="#" class="clearfix">
                        <picture>
                            <source media="(min-width: 1200px)"
                                    srcset="{{ image_url($value->image) }}">
                            <source media="(min-width: 992px)"
                                    srcset="{{ image_url($value->image) }}">
                            <source media="(min-width: 569px)"
                                    srcset="{{ image_url($value->image) }}">
                            <source media="(min-width: 480px)"
                                    srcset="{{ image_url($value->image) }}">
                            <source media="(min-width: 319px)"
                                    srcset="{{ image_url($value->image) }}">
                            <img src="{{ image_url($value->image) }}" alt=""
                                 class="img-responsive center-block">
                        </picture>
                    </a>
                </div>
            @endforeach
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-bg margin-top-5 hidden-md hidden-lg">
                        <div class="scrollmenu">
                            <div class="navhome">
                                <a href="/collections/phong-khach">
                                    <div>
                                        <img src="//theme.hstatic.net/1000343108/1000435493/14/loader.svg?v=230"
                                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-1.png?v=230"
                                             alt="Phòng khách">
                                    </div>
                                    <h3>Phòng khách</h3>
                                </a>
                                <a href="/collections/phong-ngu">
                                    <div>
                                        <img src="//theme.hstatic.net/1000343108/1000435493/14/loader.svg?v=230"
                                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-2.png?v=230"
                                             alt="Phòng ngủ">
                                    </div>
                                    <h3>Phòng ngủ</h3>
                                </a>
                                <a href="/collections/phong-bep">
                                    <div>
                                        <img src="//theme.hstatic.net/1000343108/1000435493/14/loader.svg?v=230"
                                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-3.png?v=230"
                                             alt="Phòng bếp">
                                    </div>
                                    <h3>Phòng bếp</h3>
                                </a>
                                <a href="/collections/do-trang-tri">
                                    <div>
                                        <img src="//theme.hstatic.net/1000343108/1000435493/14/loader.svg?v=230"
                                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-4.png?v=230"
                                             alt="Đồ trang trí">
                                    </div>
                                    <h3>Đồ trang trí</h3>
                                </a>
                                <a href="/collections/ghe-sofa">
                                    <div>
                                        <img src="//theme.hstatic.net/1000343108/1000435493/14/loader.svg?v=230"
                                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-5.png?v=230"
                                             alt="Ghế Sofa">
                                    </div>
                                    <h3>Ghế Sofa</h3>
                                </a>
                                <a href="/collections/giuong-ngu">
                                    <div>
                                        <img src="//theme.hstatic.net/1000343108/1000435493/14/loader.svg?v=230"
                                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-6.png?v=230"
                                             alt="Giường ngủ">
                                    </div>
                                    <h3>Giường ngủ</h3>
                                </a>
                                <a href="/collections/tham-trai-san">
                                    <div>
                                        <img src="//theme.hstatic.net/1000343108/1000435493/14/loader.svg?v=230"
                                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-7.png?v=230"
                                             alt="Thảm trải sàn">
                                    </div>
                                    <h3>Thảm trải sàn</h3>
                                </a>
                                <a href="/collections/ghe-thu-gian">
                                    <div>
                                        <img src="//theme.hstatic.net/1000343108/1000435493/14/loader.svg?v=230"
                                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-8.png?v=230"
                                             alt="Ghế thư giãn">
                                    </div>
                                    <h3>Ghế thư giãn</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-2">
        <div class="section_banner_home hidden-xs">
            <div class="container">
                <div class="row">
                    @if(!empty($banners))
                        @foreach($banners as $key=>$value)
                            <div
                                class="col-md-{{$value->sort_order==2 ? '6' :'3'}} col-sm-{{$value->sort_order==2 ? '6' :'3'}} box box{{$key+1}}">
                                <div class="box-inner">
                                    <a href="#">
                                        <img src="{{image_url($value->image)}}" data-lazyload="{{image_url($value->image)}}"
                                             alt="{{@$value->title}}">
                                    </a>
                                    <div class="text">
                                        <p>{{@$value->title}} </p>
                                        <h5>{{@$value->description}}</h5>
                                        <p>{{@$value->seo_title}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-3">
        <div class="section_product">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="mainmenu">
                            <span class="edit-span"><i class="fa fa-dashcube" aria-hidden="true"></i> Danh mục sản phẩm</span>
                            <div class="nav-cate">
                                <ul id="menu2017">
                                    @foreach($categories as $value)
                                        <li class="dropdown menu-item-count category-item" data-id="{{ $value->id }}">
                                            <h3>
                                                <img
                                                    src="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-2.png?v=230"
                                                    data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/index-cate-icon-2.png?v=230"
                                                    alt="{{ @$value->name }}">
                                                <a href="javascript:void(0)">
                                                    {{ @$value->name }}
                                                </a>
                                            </h3>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-head">
                                    <span class="group-icon"><i class="fa fa-dashcube" aria-hidden="true"></i></span>
                                    <h2>Sản phẩm nổi bật</h2>
                                </div>
                            </div>
                            <div class="col-md-12 e-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1">
                                <div class="content">
                                    <div>
                                        <div class="tab-1 tab-content current">
                                            <div
                                                class="section-tour-owl2 products products-view-grid owl-carousel owl-loaded owl-drag product-category">
                                                @include('components.frontend.productCategoryHome', ['listProduct' => $listProduct])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-5">
        <div class="section_banner_2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#">
                            <img src="{{@$bannerCenter->image}}"
                                 data-lazyload="{{@$bannerCenter->image}}"
                                 alt="{{@$bannerCenter->title}}" class="img-responsive center-block">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($categoriesWithProducts as $value)
        <section class="awe-section-4">
            <div class="section_product">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-head">
                                        <span class="group-icon"><i class="fa fa-dashcube"
                                                                    aria-hidden="true"></i></span>
                                        <h2>{{$value->name}}</h2>
                                    </div>
                                </div>
                                <div class="col-md-12 e-tabs not-dqtab ajax-tab-2" data-section="ajax-tab-2"
                                     data-view="grid_4">
                                    <div class="content">
                                        <div>
                                            <div class="tab-1 tab-content current">
                                                <div
                                                    class="section-tour-owl3 products products-view-grid owl-carousel owl-loaded owl-drag">
                                                    @foreach($value->products as $product)
                                                        <div class="item">
                                                            <div class="ant-product-item" bis_skin_checked="1">
                                                                <div class="product_row" bis_skin_checked="1">
                                                                    <div class="item" bis_skin_checked="1">
                                                                        <div class="item-inner" bis_skin_checked="1">
                                                                            <div class="image-container"
                                                                                 bis_skin_checked="1">


                                                                                <a href="/products/{{$product->slug}}"
                                                                                   class="product-item-photo">
                                                                                    <img
                                                                                        class="product-image-photo img-responsive center-block"
                                                                                        src="{{image_url($product->thumbnail)}}"
                                                                                        data-lazyload="{{image_url($product->thumbnail)}}"
                                                                                        alt="{{$product->name}}">
                                                                                </a>
                                                                            </div>
                                                                            <div class="box-info" bis_skin_checked="1">
                                                                                <h2 class="product-item-name">
                                                                                    <a title="{{$product->name}}"
                                                                                       href="/products/{{$product->slug}}"
                                                                                       class="product-item-link">
                                                                                        {{$product->name}}
                                                                                    </a>
                                                                                </h2>
                                                                                <div class="product-reviews-summary"
                                                                                     bis_skin_checked="1">
                                                                                    <div class="rating-summary"
                                                                                         bis_skin_checked="1">
                                                                                        <div
                                                                                            class="haravan-product-reviews-badge"
                                                                                            data-id="1017908255"
                                                                                            bis_skin_checked="1"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item-price"
                                                                                     bis_skin_checked="1">
                                                                                    <div
                                                                                        class="price-box price-final_price"
                                                                                        bis_skin_checked="1">


                        <span class="special-price">
                            <span class="price-container">
                                <span class="price-wrapper">
                                    <span class="price">{{$product->price}}</span>
                                </span>
                            </span>
                        </span>


                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="box-hover hidden-sm hidden-xs hidden-md"
                                                                                    bis_skin_checked="1">
                                                                                    <div class="add-to-links"
                                                                                         bis_skin_checked="1">
                                                                                        <div class="actions-primary"
                                                                                             bis_skin_checked="1">
                                                                                            <form action="/cart/add"
                                                                                                  method="post"
                                                                                                  class="variants form-nut-grid has-validation-callback"
                                                                                                  data-id="product-actions-1017908255"
                                                                                                  enctype="multipart/form-data">


                                                                                                <input type="hidden"
                                                                                                       name="id"
                                                                                                       value="1035080096">
                                                                                                <button
                                                                                                    class="tt-btn-addtocart btn-buy btn-cart btn btn-gray left-to add_to_cart"
                                                                                                    title="Cho vào giỏ hàng">
                                                                                                    <i class="ion ion-md-cart"></i>
                                                                                                </button>


                                                                                            </form>
                                                                                        </div>

                                                                                        <a href="/products/{{$product->slug}}"
                                                                                           class="quick-view"
                                                                                           title="Xem nhanh">
                                                                                            <i class="ion ion-ios-search"></i>
                                                                                        </a>

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <script></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <section class="awe-section-9">
        <div class="section_customer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="customer_reviews">
                            <div class="heading">
                                <span class="group-icon"><i class="fa fa-dashcube" aria-hidden="true"></i></span>
                                <h2 class="title-head">
                                    <span>Ý kiến khách hàng</span>
                                </h2>
                            </div>
                            <div class="wrap_views">
                                <div class="content_views owl-carousel not-dqowl owl-loaded owl-drag review">
                                    @foreach($testimonials as $value)
                                        <div class="item">
                                            <div class="image_reviews">
                                                <img
                                                    src="{{image_url($value->avatar)}}"
                                                    data-lazyload="{{image_url($value->avatar)}}"
                                                    alt="{{$value->name}}">
                                                <p class="description_review">{{$value->content}}</p>
                                                <div class="info_reviews">
                                                    <p>{{$value->name}}</p>
                                                    <span>-</span>
                                                    <span>{{$value->position}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project_reviews" bis_skin_checked="1">
                            <div class="heading" bis_skin_checked="1">
                                <span class="group-icon"><i class="fa fa-dashcube" aria-hidden="true"></i></span>
                                <h2 class="title-head">
                                    <span>Ảnh bàn giao khách hàng</span>
                                </h2>
                            </div>
                            <div class="ant-image-handover" bis_skin_checked="1">
                                <div class="content_views owl-carousel not-dqowl owl-loaded owl-drag" bis_skin_checked="1">
                                    <div class="owl-stage-outer" bis_skin_checked="1">
                                        <div class="owl-stage" style="width: 2925px; transform: translate3d(-1170px, 0px, 0px); transition: all;" bis_skin_checked="1"><div class="owl-item cloned" bis_skin_checked="1" style="width: 565px; margin-right: 20px;">
                                                <div class="item-inner clearfix" bis_skin_checked="1">
                                                    <div class="blog-image" bis_skin_checked="1">
                                                        <a href="javascript:void(0)">
                                                            <img src="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png" data-lazyload="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png" alt="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp" class="img-responsive center-block">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content" bis_skin_checked="1">
                                                        <div class="blog-content-inner" bis_skin_checked="1">
                                                            <h3 class="blog-title">
                                                                <a href="javascript:void(0)" title="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp">Những
                                                                    thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt
                                                                    đẹp</a>
                                                            </h3>
                                                            <p class="short-des">Gỗ là vật liệu phổ biến được sử dụng
                                                                nhiều nhất trong thiết kế nhà đẹp nhà bếp. Bên cạnh
                                                                những thiết kế truyền thống ...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="owl-item cloned" bis_skin_checked="1" style="width: 565px; margin-right: 20px;">
                                                <div class="item-inner clearfix" bis_skin_checked="1">
                                                    <div class="blog-image" bis_skin_checked="1">
                                                        <a href="javascript:void(0)">
                                                            <img src="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png" data-lazyload="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png" alt="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp" class="img-responsive center-block">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content" bis_skin_checked="1">
                                                        <div class="blog-content-inner" bis_skin_checked="1">
                                                            <h3 class="blog-title">
                                                                <a href="javascript:void(0)" title="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp">Những
                                                                    thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt
                                                                    đẹp</a>
                                                            </h3>
                                                            <p class="short-des">Gỗ là vật liệu phổ biến được sử dụng
                                                                nhiều nhất trong thiết kế nhà đẹp nhà bếp. Bên cạnh
                                                                những thiết kế truyền thống ...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="owl-item cloned" bis_skin_checked="1" style="width: 565px; margin-right: 20px;">
                                                <div class="item-inner clearfix" bis_skin_checked="1">
                                                    <div class="blog-image" bis_skin_checked="1">
                                                        <a href="javascript:void(0)">
                                                            <img src="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png" data-lazyload="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png" alt="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp" class="img-responsive center-block">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content" bis_skin_checked="1">
                                                        <div class="blog-content-inner" bis_skin_checked="1">
                                                            <h3 class="blog-title">
                                                                <a href="javascript:void(0)" title="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp">Những
                                                                    thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt
                                                                    đẹp</a>
                                                            </h3>
                                                            <p class="short-des">Gỗ là vật liệu phổ biến được sử dụng
                                                                nhiều nhất trong thiết kế nhà đẹp nhà bếp. Bên cạnh
                                                                những thiết kế truyền thống ...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="owl-item cloned active" bis_skin_checked="1" style="width: 565px; margin-right: 20px;">
                                                <div class="item-inner clearfix" bis_skin_checked="1">
                                                    <div class="blog-image" bis_skin_checked="1">
                                                        <a href="javascript:void(0)">
                                                            <img src="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png" data-lazyload="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png" alt="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp" class="img-responsive center-block">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content" bis_skin_checked="1">
                                                        <div class="blog-content-inner" bis_skin_checked="1">
                                                            <h3 class="blog-title">
                                                                <a href="javascript:void(0)" title="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp">Những
                                                                    thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt
                                                                    đẹp</a>
                                                            </h3>
                                                            <p class="short-des">Gỗ là vật liệu phổ biến được sử dụng
                                                                nhiều nhất trong thiết kế nhà đẹp nhà bếp. Bên cạnh
                                                                những thiết kế truyền thống ...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                    </div>
                                    <div class="owl-nav disabled" bis_skin_checked="1">
                                        <div class="owl-prev" bis_skin_checked="1"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                                        <div class="owl-next" bis_skin_checked="1"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="owl-dots" bis_skin_checked="1">
                                        <div class="owl-dot active" bis_skin_checked="1"><span></span></div>
                                        <div class="owl-dot" bis_skin_checked="1"><span></span></div>
                                    </div>
                                    <div class="owl-nav disabled" bis_skin_checked="1"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled" bis_skin_checked="1"></div></div>
                                <div class="clearfix" bis_skin_checked="1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="awe-section-10">
        <section class="section-news">
            <div class="container">
                <div class="blogs-content">
                    <div class="heading">
               <span class="group-icon">
               <i class="ion ion-ios-images" aria-hidden="true"></i>
               </span>
                        <h2 class="title-head">
                            Tin tức
                        </h2>
                        <a href="/blogs" class="news-more" title="Xem thêm">Xem thêm</a>
                    </div>
                    <div class="list-blogs-link">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-news-owl owl-carousel not-dqowl owl-loaded owl-drag">
                                    @if(!empty($blogs))
                                        @foreach($blogs as $value)
                                            <div class="item-inner">
                                                <div class="blog-image">
                                                    <a href="/blog/{{$value->slug}}">
                                                        <img
                                                            src="{{image_url($value->thumbnail)}}"
                                                            data-lazyload="{{image_url($value->thumbnail)}}"
                                                            alt="{{$value->title}}"
                                                            class="img-responsive center-block">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-content-inner">
                                                        <h3 class="blog-title">
                                                            <a href="/blog/{{$value->slug}}"
                                                               title="{{$value->title}}">{{$value->title}}</a>
                                                        </h3>
                                                        <div class="time-comment">
                                             <span class="date-time">
                                             <i class="ion ion-ios-alarm"></i> {{ \Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}
                                             </span>
                                                            <span class="comment">
                                             </span>
                                                        </div>
                                                        <p class="short-des">{{$value->excerpt}}</p>
                                                        <a class="readmore"
                                                           href="/blog/{{$value->slug}}">Đọc
                                                            tin</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script>
        $(document).ready(function () {
            $('.category-item').on('click', function () {
                let categoryId = $(this).data('id');
                $.ajax({
                    url: '/products-by-category/' + categoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (res) {
                        if (res.status) {
                            let $container = $('.product-category');
                            $container.trigger('destroy.owl.carousel'); // Xóa instance cũ
                            $container.html(res.html); // Thay HTML mới

                            // Khởi tạo lại carousel
                            $container.owlCarousel({
                                loop: true,
                                margin: 10,
                                nav: true,
                                dots: false,
                                responsive: {
                                    0: {items: 1},
                                    600: {items: 3},
                                    1000: {items: 5}
                                }
                            });
                        }
                    },
                    error: function () {
                        alert('Lỗi tải sản phẩm!');
                    }
                });
            });
        });

    </script>
@endsection
