@extends('frontend.layout')
@section('og_image', asset('storage/'.$product->thumbnail))
@section('title', $product->meta_title ?? $product->name)
@section('meta_description', $product->meta_description ?? $product->short_description)

@section('content')
    <link href="{{ asset('css/frontend/lightbox.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <section class="bread-crumb margin-bottom-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a itemprop="url" href="/collections/all" title="All"><span
                                    itemprop="title">All</span></a><span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong><span itemprop="title">{{@$product->name}}</span></strong></li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product" itemscope="" itemtype="http://schema.org/Product">
        <meta itemprop="url" content="/products/sofa-co-ghe-nam">
        <meta itemprop="image"
              content="//product.hstatic.net/1000343108/product/upload_956e4b235bd04b459ec68d647be596e6_grande.jpg">
        <meta itemprop="description" content="">
        <meta itemprop="name" content="Sofa có ghế nằm">
        <div class="container">
            <div class="pp_pic_holder pp_woocommerce" style="top: 62px; left: 400px; display: none; width: 697px;">
                <div class="pp_top">
                    <div class="pp_left"></div>
                    <div class="pp_middle"></div>
                    <div class="pp_right"></div>
                </div>
                <div class="pp_content_container">
                    <div class="pp_left">
                        <div class="pp_right">
                            <div class="pp_content" style="height: 693px; width: 657px;">
                                <div class="pp_loaderIcon" style="display: none;"></div>
                                <div class="pp_fade" style="display: block;">
                                    <div class="pp_hoverContainer" style="height: 657px; width: 657px;"> </div>
                                    <div id="pp_full_res">
                                        <img id="fullResImage"
                                             src="//product.hstatic.net/1000343108/product/upload_7be42f22bef54b048660e7d8c3eb73a2_1024x1024.jpg"
                                             style="height: 657px; width: 657px;">
                                    </div>
                                    <div class="pp_details" style="width: 657px;">
                                        <p class="pp_description" style="display: none;"></p>
                                        <div class="pp_social"></div>
                                        <a class="pp_close" href="#"><i class="fa fa-times"></i></a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pp_bottom">
                    <div class="pp_left"></div>
                    <div class="pp_middle"></div>
                    <div class="pp_right"></div>
                </div>
            </div>
            <div class="pp_overlay" style="opacity: 0.8; height: 2192px; width: 1497px; display: none;"></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 details-product">
                    <div class="row product-bottom">
                        <div class="clearfix padding-bottom-10">
                            <div class="col-xs-12 col-sm-6 col-lg-5 col-md-4">
                                <div class="product-image-block">
                                    <div class="large-image">
                                        <a href="{{$product->featured_image}}" class="large_image_url">
                                            <img src="{{$product->featured_image}}" alt="{{$product->name}}"
                                                 id="zoom_01" class="img-responsive center-block">
                                        </a>
                                    </div>
                                    <div id="gallery_01" class="owl-carousel thumbnail-product">
                                        @if(!empty($product->images))
                                            @foreach($product->images as $value)
                                                <div class="item">
                                                    <a class="thumb-link" href="javascript:void(0);"
                                                       data-image="{{$value->image_path}}">
                                                        <img src="{{$value->image_path}}" alt="">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    // Khi click vào ảnh nhỏ
                                    $(document).on('click', '.large_image_url', function (e) {
                                        e.preventDefault();

                                        let imageUrl = $(this).attr('href');
                                        let productName = $(this).data('name');

                                        // Đổ dữ liệu vào modal
                                        $('#fullResImage').attr('src', imageUrl);
                                        $('.pp_pic_holder .ppt').text(productName);

                                        // Hiện modal
                                        $('.pp_overlay').fadeIn(200);
                                        $('.pp_pic_holder').fadeIn(200);
                                    });

                                    // Đóng modal khi click vào nút Close hoặc overlay
                                    $(document).on('click', '.pp_close, .pp_overlay', function (e) {
                                        e.preventDefault();
                                        $('.pp_pic_holder').fadeOut(200);
                                        $('.pp_overlay').fadeOut(200);
                                    });
                                });

                            </script>
                            <div class="col-xs-12 col-sm-6 col-lg-4 col-md-5 details-pro">
                                <div class="product-top clearfix">
                                    <h1 class="title-head">{{@$product->name}}</h1>
                                </div>
                                <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <div class="inve_brand">
                                        <span class="stock-brand-title"><strong><i
                                                    class="ion ion-ios-checkmark-circle"></i> Thương hiệu:</strong></span>
                                        <span class="a-brand">{{@$product->brand->name}}</span>
                                    </div>
                                    <div class="inventory_quantity  deny 1">
                                        <span class="stock-brand-title"><strong><i
                                                    class="ion ion-ios-checkmark-circle"></i> Tình trạng:</strong></span>
                                        <span class="a-stock a0">
                              <link itemprop="availability" href="http://schema.org/InStock">
                              Còn hàng
                           </span>
                                    </div>
                                    <div class="price-box clearfix">
                                        <div class="special-price">
                                            <span class="price product-price">{{number_format($product->sale_price,0,'.','.')}}₫</span>
                                            <meta itemprop="price" content="16,400,000₫">
                                            <meta itemprop="priceCurrency" content="">
                                        </div>
                                        <!-- Giá -->
                                    </div>
                                </div>
                                <div class="product-summary product_description margin-bottom-15 margin-top-15">
                                    <div class="rte description">
                                        {{@$product->short_description}}
                                    </div>
                                </div>
                                <div class="form-product">
                                    <form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add"
                                          method="post" class="form-inline has-validation-callback">
                                        <div class="box-variant clearfix  hidden ">
                                            <input type="hidden" name="id" value="1035080114">
                                        </div>
                                        <div class="form-group ">
                                            <div class="clearfix">
                                                <div class="custom custom-btn-number form-control">
                                                    <div class="group-label">
                                                        Số lượng
                                                    </div>
                                                    <button
                                                        onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) &amp; qty &gt; 1 ) result.value--;return false;"
                                                        class="btn-minus btn-cts" type="button">–
                                                    </button>
                                                    <input type="text" class="qty input-text" id="qty" name="quantity"
                                                           size="4" value="1">
                                                    <button
                                                        onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;"
                                                        class="btn-plus btn-cts" type="button">+
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="btn-mua">
                                                <button type="submit" data-role="addtocart"
                                                        class="btn btn-lg btn-gray btn-cart add_to_cart btn_buy add_to_cart">
                                                    <span class="txt-main">Mua ngay</span>
                                                </button>
                                            </div>
                                        </div>
                                        <button class="btn-callmeback" type="button" data-toggle="modal"
                                                data-target="#myModalCall">
                                            <i class="ion ion-ios-alarm"></i> Hẹn lịch
                                        </button>
                                        <button class="btn-callmeback" type="button"
                                                onclick="window.location.href='tel:0123456789'">
                                            <i class="ion ion-ios-call"></i> 0123456789
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3 hidden-sm hidden-xs">
                                <div class="sidebar-block service-block">
                                    <div class="sidebar-content">
                                        <div class="service-item service-item-two">
                                            <div class="item-top">
                                 <span class="img">
                                 <img src="//theme.hstatic.net/1000343108/1000435493/14/policy_image_1.png?v=230"
                                      data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/policy_image_1.png?v=230"
                                      alt="Giao hàng trong 24h">
                                 </span>
                                                <span class="title">
                                 Giao hàng trong 24h
                                 </span>
                                            </div>
                                            <p class="caption">
                                                Áp dụng với đơn hàng trên 500.000 đ ở Hồ Chí Minh và Hà Nội.
                                            </p>
                                        </div>
                                        <div class="service-item service-item-two">
                                            <div class="item-top">
                                 <span class="img">
                                 <img src="//theme.hstatic.net/1000343108/1000435493/14/policy_image_2.png?v=230"
                                      data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/policy_image_2.png?v=230"
                                      alt="Bảo đảm chất lượng">
                                 </span>
                                                <span class="title">
                                 Bảo đảm chất lượng
                                 </span>
                                            </div>
                                            <p class="caption">
                                                Tất cả các sản phẩm Ant Furniture cung cấp đều đảm bảo chất lượng khi
                                                đến tay người tiêu dùng.
                                            </p>
                                        </div>
                                        <div class="service-item service-item-two">
                                            <div class="item-top">
                                 <span class="img">
                                 <img src="//theme.hstatic.net/1000343108/1000435493/14/policy_image_3.png?v=230"
                                      data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/policy_image_3.png?v=230"
                                      alt="Sản phẩm chính hãng">
                                 </span>
                                                <span class="title">
                                 Sản phẩm chính hãng
                                 </span>
                                            </div>
                                            <p class="caption">
                                                Chúng tôi cung cấp các sản phẩm nhập khẩu chính hãng.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-10">
                        <div class="col-md-9">
                            <div class="product-tab e-tabs padding-bottom-10">
                                <div class="border-ghghg margin-bottom-20">
                                    <ul class="tabs tabs-title clearfix">
                                        <li class="tab-link current" data-tab="tab-1">
                                            <h3><span>Mô tả</span></h3>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab-1" class="tab-content current">
                                    <div class="rte">
                                        {!! @$product->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="right_module">
                                <div id="top-tabs-info" class=" hidden-sm hidden-xs">
                                    <div class="productAnchor_horizonalNavs">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="productAnchor_horizonalNav">
                                                    <div class="product_info_image hidden-xs">
                                                        <img class="pict imagelazyload img-responsive center-block"
                                                             src="{{$product->featured_image}}"
                                                             alt="Sofa có ghế nằm">
                                                    </div>
                                                    <div class="product_info_content hidden-xs">
                                                        <h2 class="product_info_name" title="{{@$product->name}}">{{@$product->name}}</h2>
                                                        <div class="product_info_price">
                                                            <div class="product_info_price_title">
                                                                Giá bán:
                                                            </div>
                                                            <div class="product_info_price_value">
                                                                <div class="product_info_price_value-final">
                                                                    {{number_format($product->sale_price,0,'.','.')}}₫
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product_info_buttons">
                                                        <button class="btn btn_buyNow btn-buy-now-click">
                                                            <span class="txt-main">MUA NGAY</span>
                                                        </button>
                                                        <a class="btn btn_traGop btn-tra-gop-click s-flag"
                                                           href="tel:09878787871">
                                                            Liên hệ <span class="txt-sub hidden-xs">0987 878 7871</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function ($) {
                                        jQuery(document).ready(function (e) {
                                            var WindowHeight = jQuery(window).height();
                                            var load_element = 0;
                                            //position of element
                                            var scroll_position = jQuery('.product-bottom').offset().top + jQuery('.product-bottom').outerHeight(true);
                                            ;
                                            var screen_height = jQuery(window).height();
                                            var activation_offset = 0;
                                            var max_scroll_height = jQuery('body').height() + screen_height;
                                            var scroll_activation_point = scroll_position - (screen_height * activation_offset);
                                            jQuery(window).on('scroll', function (e) {
                                                var y_scroll_pos = window.pageYOffset;
                                                var element_in_view = y_scroll_pos > scroll_activation_point;
                                                var has_reached_bottom_of_page = max_scroll_height <= y_scroll_pos && !element_in_view;
                                                if (element_in_view || has_reached_bottom_of_page) {
                                                    jQuery('.productAnchor_horizonalNavs').addClass("ins-Drop");
                                                } else {
                                                    jQuery('.productAnchor_horizonalNavs').removeClass("ins-Drop");
                                                }
                                            });
                                        });
                                    });
                                </script>
                                <div class="similar-product">
                                    <div class="right-bestsell">
                                        <h2><a href="#" title="Sản phẩm mới ra mắt">Sản phẩm mới ra mắt</a></h2>
                                        <div class="list-bestsell">
                                            @foreach($newProducts as $value)
                                                <div class="list-bestsell-item">
                                                    <div class="thumbnail-container clearfix">
                                                        <div class="product-image">
                                                            <a href="/products/{{$value->slug}}">
                                                                <img class="img-responsive"
                                                                     src="{{$value->featured_image}}"
                                                                     data-lazyload="{{$value->featured_image}}"
                                                                     alt="{{$value->name}}">
                                                            </a>
                                                        </div>
                                                        <div class="product-meta">
                                                            <h3><a href="/products/{{$value->slug}}"
                                                                   title="{{$value->name}}">{{$value->name}}</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="1017908240"></div>
                                                            <div class="product-price-and-shipping">
                                                                <span class="price">{{number_format($value->sale_price,0,',','.')}}₫</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20 margin-bottom-10">
                <div class="col-lg-12">
                    <div class="related-product">
                        <div class="home-title">
                            <h2><a href="/all">Sản phẩm cùng loại</a></h2>
                        </div>
                        <div
                            class="section-tour-owl owl-carousel not-dqowl products-view-grid margin-top-10 owl-loaded owl-drag"
                            data-md-items="5" data-sm-items="4" data-xs-items="2" data-margin="10">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1864px;">
                                    @if(!empty($relatedProducts))
                                        @foreach($relatedProducts as $value)
                                            <div class="owl-item active" style="width: 218px; margin-right: 15px;">
                                                <div class="item">
                                                    <div class="ant-product-item">
                                                        <div class="product_row">
                                                            <div class="item">
                                                                <div class="item-inner">
                                                                    <div class="image-container">
                                                                        <a href="/products/{{$value->slug}}"
                                                                           class="product-item-photo">
                                                                            <img
                                                                                class="product-image-photo img-responsive center-block"
                                                                                src="{{$value->featured_image}}"
                                                                                data-lazyload="{{$value->featured_image}}"
                                                                                alt="{{$value->name}}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-info">
                                                                        <h2 class="product-item-name">
                                                                            <a title="{{$value->name}}"
                                                                               href="/products/{{$value->slug}}"
                                                                               class="product-item-link">
                                                                                {{$value->name}}
                                                                            </a>
                                                                        </h2>
                                                                        <div class="product-reviews-summary">
                                                                            <div class="rating-summary">
                                                                                <div
                                                                                    class="haravan-product-reviews-badge"
                                                                                    data-id="1017908265"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box price-final_price">
                                                   <span class="special-price">
                                                   <span class="price-container">
                                                   <span class="price-wrapper">
                                                   <span
                                                       class="price">{{number_format($value->sale_price,0,',','.')}}₫</span>
                                                   </span>
                                                   </span>
                                                   </span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="box-hover hidden-sm hidden-xs hidden-md">
                                                                            <div class="add-to-links">
                                                                                <div class="actions-primary">
                                                                                    <form action="/cart/add"
                                                                                          method="post"
                                                                                          class="variants form-nut-grid has-validation-callback"
                                                                                          data-id="product-actions-1017908265"
                                                                                          enctype="multipart/form-data">
                                                                                        <input type="hidden" name="id"
                                                                                               value="1035080112">
                                                                                        <button
                                                                                            class="tt-btn-addtocart btn-buy btn-cart btn btn-gray left-to add_to_cart"
                                                                                            title="Cho vào giỏ hàng">
                                                                                            <i class="ion ion-md-cart"></i>
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                                <a href="/products/{{$value->slug}}"
                                                                                   class="quick-view" title="Xem nhanh">
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
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            // Kích hoạt Owl Carousel
            $('#gallery_01').owlCarousel({
                items: 4,
                margin: 10,
                nav: true,
                dots: false
            });

            // Click thumbnail → đổi ảnh lớn
            $(document).on('click', '.thumb-link', function (e) {
                e.preventDefault();
                var newImage = $(this).data('image');
                $('#zoom_01').attr('src', newImage);
                $('.large_image_url').attr('href', newImage);
            });
        });
    </script>

@endsection
