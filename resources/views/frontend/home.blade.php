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
                                    srcset="{{ asset('storage/' . $value->image) }}">
                            <source media="(min-width: 992px)"
                                    srcset="{{ asset('storage/' . $value->image) }}">
                            <source media="(min-width: 569px)"
                                    srcset="{{ asset('storage/' . $value->image) }}">
                            <source media="(min-width: 480px)"
                                    srcset="{{ asset('storage/' . $value->image) }}">
                            <source media="(min-width: 319px)"
                                    srcset="{{ asset('storage/' . $value->image) }}">
                            <img src="{{ asset('storage/' . $value->image) }}" alt=""
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
                                        <img src="{{@$value->image}}" data-lazyload="{{@$value->image}}"
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

                    <!-- LEFT CATEGORY -->
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="mainmenu">
                            <span><i class="fa fa-dashcube"></i> Danh mục sản phẩm</span>
                            <div class="nav-cate">
                                <ul id="menu2017">
                                    @foreach($categories as $key => $category)
                                        <li class="category-item {{ $key == 0 ? 'active' : '' }}"
                                            data-target="cat-{{ $category->id }}">
                                            <a href="javascript:void(0)">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT PRODUCTS -->
                    <div class="col-md-9">
                        <div class="section-head">
                            <h2>Sản phẩm theo danh mục</h2>
                        </div>

                        @foreach($categories as $key => $category)
                            <div class="category-content"
                                 id="cat-{{ $category->id }}"
                                 style="{{ $key == 0 ? '' : 'display:none' }}">

                                <div class="row">
                                    @forelse($category->products as $product)
                                        <div class="col-md-3 col-sm-6">
                                            <div class="product-item">
                                                <img src="{{ image_url($product->thumbnail) }}"
                                                     class="img-responsive"
                                                     alt="{{ $product->name }}">

                                                <h4>{{ $product->name }}</h4>
                                                <p>{{ number_format($product->price) }} đ</p>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-md-12">
                                            <p>Không có sản phẩm.</p>
                                        </div>
                                    @endforelse
                                </div>

                            </div>
                        @endforeach

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
                                    <div class="item">
                                        <div class="image_reviews">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/customer_image_2.png?v=230"
                                                alt="Nguyễn Ngọc Huyền">
                                            <p class="description_review">Lần đầu tham quan showroom, tôi đã
                                                thật sự ngạc nhiên trước sự rộng lớn của showroom Ant
                                                Furniture. Ant Furniture có rất nhiều bộ sưu tập đẹp từ cổ
                                                điển cho đến hiện đại. Ngoài ra thì công ty còn có nhà máy
                                                với máy móc hiện đại. Tôi hài lòng với thiết kế của nội thất
                                                Ant Furniture: rất đẹp, hài hòa với căn nhà và phù hợp với
                                                phong cách của tôi.</p>
                                            <div class="info_reviews">
                                                <p>Nguyễn Ngọc Huyền</p>
                                                <span>-</span>
                                                <span>Nhân viên ngân hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image_reviews">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/customer_image_2.png?v=230"
                                                alt="Nguyễn Ngọc Huyền">
                                            <p class="description_review">Lần đầu tham quan showroom, tôi đã
                                                thật sự ngạc nhiên trước sự rộng lớn của showroom Ant
                                                Furniture. Ant Furniture có rất nhiều bộ sưu tập đẹp từ cổ
                                                điển cho đến hiện đại. Ngoài ra thì công ty còn có nhà máy
                                                với máy móc hiện đại. Tôi hài lòng với thiết kế của nội thất
                                                Ant Furniture: rất đẹp, hài hòa với căn nhà và phù hợp với
                                                phong cách của tôi.</p>
                                            <div class="info_reviews">
                                                <p>Nguyễn Ngọc Huyền</p>
                                                <span>-</span>
                                                <span>Nhân viên ngân hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image_reviews">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/customer_image_2.png?v=230"
                                                alt="Nguyễn Ngọc Huyền">
                                            <p class="description_review">Lần đầu tham quan showroom, tôi đã
                                                thật sự ngạc nhiên trước sự rộng lớn của showroom Ant
                                                Furniture. Ant Furniture có rất nhiều bộ sưu tập đẹp từ cổ
                                                điển cho đến hiện đại. Ngoài ra thì công ty còn có nhà máy
                                                với máy móc hiện đại. Tôi hài lòng với thiết kế của nội thất
                                                Ant Furniture: rất đẹp, hài hòa với căn nhà và phù hợp với
                                                phong cách của tôi.</p>
                                            <div class="info_reviews">
                                                <p>Nguyễn Ngọc Huyền</p>
                                                <span>-</span>
                                                <span>Nhân viên ngân hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image_reviews">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/customer_image_2.png?v=230"
                                                alt="Nguyễn Ngọc Huyền">
                                            <p class="description_review">Lần đầu tham quan showroom, tôi đã
                                                thật sự ngạc nhiên trước sự rộng lớn của showroom Ant
                                                Furniture. Ant Furniture có rất nhiều bộ sưu tập đẹp từ cổ
                                                điển cho đến hiện đại. Ngoài ra thì công ty còn có nhà máy
                                                với máy móc hiện đại. Tôi hài lòng với thiết kế của nội thất
                                                Ant Furniture: rất đẹp, hài hòa với căn nhà và phù hợp với
                                                phong cách của tôi.</p>
                                            <div class="info_reviews">
                                                <p>Nguyễn Ngọc Huyền</p>
                                                <span>-</span>
                                                <span>Nhân viên ngân hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image_reviews">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/customer_image_2.png?v=230"
                                                alt="Nguyễn Ngọc Huyền">
                                            <p class="description_review">Lần đầu tham quan showroom, tôi đã
                                                thật sự ngạc nhiên trước sự rộng lớn của showroom Ant
                                                Furniture. Ant Furniture có rất nhiều bộ sưu tập đẹp từ cổ
                                                điển cho đến hiện đại. Ngoài ra thì công ty còn có nhà máy
                                                với máy móc hiện đại. Tôi hài lòng với thiết kế của nội thất
                                                Ant Furniture: rất đẹp, hài hòa với căn nhà và phù hợp với
                                                phong cách của tôi.</p>
                                            <div class="info_reviews">
                                                <p>Nguyễn Ngọc Huyền</p>
                                                <span>-</span>
                                                <span>Nhân viên ngân hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project_reviews">
                            <div class="heading">
                                <span class="group-icon"><i class="fa fa-dashcube" aria-hidden="true"></i></span>
                                <h2 class="title-head">
                                    <span>Ảnh bàn giao khách hàng</span>
                                </h2>
                            </div>
                            <div class="ant-image-handover">
                                <div class="content_views owl-carousel not-dqowl owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage">
                                            <div class="owl-item cloned">
                                                <div class="item-inner clearfix">
                                                    <div class="blog-image">
                                                        <a href="javascript:void(0)">
                                                            <img
                                                                src="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png"
                                                                data-lazyload="//file.hstatic.net/1000343108/article/shapeimage-9_grande.png"
                                                                alt="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp"
                                                                class="img-responsive center-block">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content">
                                                        <div class="blog-content-inner">
                                                            <h3 class="blog-title">
                                                                <a href="javascript:void(0)"
                                                                   title="Những thiết kế nội thất nhà bếp với chất liệu gỗ tuyệt đẹp">Những
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

                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                                        <div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="owl-dots">
                                        <div class="owl-dot active"><span></span></div>
                                        <div class="owl-dot"><span></span></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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
                                                            src="{{$value->featured_image}}"
                                                            data-lazyload="{{$value->featured_image}}"
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
        document.addEventListener("DOMContentLoaded", function() {

            const menuItems = document.querySelectorAll('.category-item');
            const contents = document.querySelectorAll('.category-content');

            menuItems.forEach(item => {
                item.addEventListener('click', function() {

                    const target = this.getAttribute('data-target');

                    // Remove active class
                    menuItems.forEach(el => el.classList.remove('active'));
                    this.classList.add('active');

                    // Hide all content
                    contents.forEach(content => {
                        content.style.display = 'none';
                    });

                    // Show selected content
                    const activeContent = document.getElementById(target);
                    if (activeContent) {
                        activeContent.style.display = 'block';
                    }
                });
            });

        });
    </script>
@endsection
