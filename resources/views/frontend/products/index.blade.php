@extends('frontend.layout')
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
                        <li><strong itemprop="title">Tất cả sản phẩm</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <section class="main_container collection col-md-9 col-md-push-3">
                <h1 class="title-head margin-top-0">Tất cả sản phẩm</h1>
                <div class="category-gallery margin-bottom-15">
                    <div class="image pd-bt30">
                        <img src="//theme.hstatic.net/1000343108/1000435493/14/cat-banner-1.jpg?v=230"
                             data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/cat-banner-1.jpg?v=230"
                             alt="Tất cả sản phẩm" class="img-responsive center-block">
                    </div>
                </div>
                {{--                <div class="group-category">--}}
                {{--                    <div class="section-tour-owl-2 products products-view-grid owl-carousel">--}}
                {{--                        @if(!empty($categories))--}}
                {{--                            @foreach($categories as $value)--}}
                {{--                                <div class="item">--}}
                {{--                                    <div class="category-item">--}}
                {{--                                        <a href="#" title="{{$value->name}}">--}}
                {{--                                            <div class="group-category-image">--}}
                {{--                                                <img class="img-fluid"--}}
                {{--                                                     src="{{$value->image}}"--}}
                {{--                                                     alt="{{$value->name}}">--}}
                {{--                                            </div>--}}
                {{--                                            <h6>{{$value->name}}</h6>--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            @endforeach--}}
                {{--                        @endif--}}
                {{--                    </div>--}}

                {{--                </div>--}}
                <div class="category-products products category-products-grids">
                    <div class="sort-cate clearfix margin-top-10 margin-bottom-10">
                        <div class="sort-cate-left hidden-xs">
                            <h3>Ưu tiên theo:</h3>
                            <ul>
                                <li class="btn-quick-sort alpha-asc">
                                    <a href="javascript:;" onclick="sortby('alpha-asc')"><i></i>Tên A-Z</a>
                                </li>
                                <li class="btn-quick-sort alpha-desc">
                                    <a href="javascript:;" onclick="sortby('alpha-desc')"><i></i>Tên Z-A</a>
                                </li>
                                <li class="btn-quick-sort position-desc">
                                    <a href="javascript:;" onclick="sortby('created-desc')"><i></i>Hàng mới</a>
                                </li>
                                <li class="btn-quick-sort price-asc">
                                    <a href="javascript:;" onclick="sortby('price-asc')"><i></i>Giá thấp đến cao</a>
                                </li>
                                <li class="btn-quick-sort price-desc">
                                    <a href="javascript:;" onclick="sortby('price-desc')"><i></i>Giá cao xuống thấp</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sort-cate-right-mobile hidden-lg hidden-md hidden-sm">
                            <div id="sort-by">
                                <label class="left">Ưu tiên theo: </label>
                                <ul>
                                    <li>
                                        <span>Thứ tự</span>
                                        <ul>
                                            <li><a href="javascript:;" class="filter-sort" data-sort="name_asc"><i></i>Tên A-Z</a></li>
                                            <li><a href="javascript:;" class="filter-sort" data-sort="name_desc"><i></i>Tên Z-A</a></li>
                                            <li><a href="javascript:;" class="filter-sort" data-sort="price_asc"><i></i>Giá tăng dần</a></li>
                                            <li><a href="javascript:;" class="filter-sort" data-sort="price_desc"><i></i>Giá giảm dần</a></li>
                                            <li><a href="javascript:;" class="filter-sort" data-sort="newest"><i></i>Hàng mới</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section class="products-view products-view-grid" id="product-list">
                        <div class="row">
                            @foreach($products as $value)
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                    <div class="ant-product-item">
                                        <div class="product_row">
                                            <div class="item">
                                                <div class="item-inner">
                                                    <div class="image-container">
                                                        @if(!empty($value->sale_price))
                                                            <span class="sale">
                                                                {{ round((($value->sale_price - $value->price) / $value->sale_price) * 100) }}%
                                                            </span>
                                                        @endif
                                                        <a href="/products/{{@$value->slug}}"
                                                           class="product-item-photo">
                                                            <img class="product-image-photo img-responsive center-block"
                                                                 src="{{$value->featured_image}}"
                                                                 data-lazyload="{{$value->featured_image}}"
                                                                 alt="{{@$value->name}}">
                                                        </a>
                                                    </div>
                                                    <div class="box-info">
                                                        <h2 class="product-item-name">
                                                            <a title="{{@$value->name}}"
                                                               href="/products/{{@$value->slug}}"
                                                               class="product-item-link">
                                                                {{@$value->name}}
                                                            </a>
                                                        </h2>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="haravan-product-reviews-badge"
                                                                     data-id="1017908264"></div>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box price-final_price">
                                          <span class="special-price">
                                          <span class="price-container">
                                          <span class="price-wrapper">
                                          <span
                                              class="price">{{ number_format($value->sale_price, 0, ',', '.') }}₫</span>
                                          </span>
                                          </span>
                                          </span>
                                                                <span class="old-price">
                                          <span class="price-container">
                                          <span class="price-wrapper">
                                          <span class="price">{{ number_format($value->price, 0, ',', '.') }}₫</span>
                                          </span>
                                          </span>
                                          </span>
                                                            </div>
                                                        </div>
                                                        <div class="box-hover hidden-sm hidden-xs hidden-md">
                                                            <div class="add-to-links">
                                                                {{--                                                                <div class="actions-primary">--}}
                                                                {{--                                                                    <form action="/cart/add" method="post"--}}
                                                                {{--                                                                          class="variants form-nut-grid has-validation-callback"--}}
                                                                {{--                                                                          data-id="product-actions-1017908264"--}}
                                                                {{--                                                                          enctype="multipart/form-data">--}}
                                                                {{--                                                                        <input type="hidden" name="id"--}}
                                                                {{--                                                                               value="1035080111">--}}
                                                                {{--                                                                        <button--}}
                                                                {{--                                                                            class="tt-btn-addtocart btn-buy btn-cart btn btn-gray left-to add_to_cart"--}}
                                                                {{--                                                                            title="Cho vào giỏ hàng">--}}
                                                                {{--                                                                            <i class="ion ion-md-cart"></i>--}}
                                                                {{--                                                                        </button>--}}
                                                                {{--                                                                    </form>--}}
                                                                {{--                                                                </div>--}}
                                                                <a href="/products/{{@$value->slug}}"
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
                            @endforeach
                        </div>
                        <div class="text-xs-right">
                            <nav class="text-center">
                                {{ $products->links('pagination::bootstrap-4') }}
                            </nav>
                        </div>
                    </section>
                </div>
            </section>
            <aside class="ant-sidebar sidebar  left-content col-md-3 col-md-pull-9">
                <aside class="aside-item collection-category">
                    <div class="aside-title">
                        <h3 class="title-head margin-top-0"><span>Danh mục</span></h3>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                @foreach($categories as $value)
                                    <li class="nav-item ">
                                        <a class="nav-link category-link" data-slug="{{@$value->slug}}"
                                           data-id="{{$value->id}}" href="javascript:void(0)">{{@$value->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </aside>
                <script src="//theme.hstatic.net/1000343108/1000435493/14/search_filter.js?v=230"
                        type="text/javascript"></script>
                <div class="aside-filter">
                    <div class="heading hidden">
                        <h2 class="title-head">Bộ lọc</h2>
                    </div>
                    <div class="aside-hidden-mobile">
                        <div class="filter-container">
                            <div class="filter-containers">
                                <div class="filter-container__selected-filter" style="display: none;">
                                    <div class="filter-container__selected-filter-header clearfix">
                                        <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                                        <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                           class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="filter-container__selected-filter-list">
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                            <aside class="aside-item filter-vendor">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0"><span>Thương hiệu</span></h2>
                                </div>
                                <div class="aside-content filter-group">
                                    <div class="field-search input-group">
                                        <input type="text" placeholder="Tìm Thương hiệu"
                                               class="form-control filter-vendor-list"
                                               onkeyup="filterItemInList(jQuery('.filter-vendor-list'))">
                                        <span class="input-group-btn">
                           <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                           </span>
                                    </div>
                                    <ul class="filter-vendor">
                                        @foreach($brands as $value)
                                            <li class="filter-item filter-item--check-box filter-item--green">
                                                <label>
                                                    <input type="checkbox"
                                                           class="filter-brand"
                                                           value="{{ $value->id }}">
                                                    <i class="fa"></i>
                                                    {{ $value->name }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </aside>
                            <aside class="aside-item filter-price">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0"><span>Giá sản phẩm</span></h2>
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-200-300">
                        <input type="checkbox" class="filter-price" id="filter-200-300"
                               value="200000-300000">
                        <i class="fa"></i>
                        200.000đ - 300.000đ
                    </label>
                </span>
                                        </li>

                                        <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-300-500">
                        <input type="checkbox" class="filter-price" id="filter-300-500"
                               value="300000-500000">
                        <i class="fa"></i>
                        300.000đ - 500.000đ
                    </label>
                </span>
                                        </li>

                                        <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-500-1000">
                        <input type="checkbox" class="filter-price" id="filter-500-1000"
                               value="500000-1000000">
                        <i class="fa"></i>
                        500.000đ - 1.000.000đ
                    </label>
                </span>
                                        </li>

                                        <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-tren-1000">
                        <input type="checkbox" class="filter-price" id="filter-tren-1000"
                               value="1500000">
                        <i class="fa"></i>
                        Giá trên 1.000.000đ
                    </label>
                </span>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                        </div>
                    </div>
                </div>
            </aside>
            <div id="open-filters" class="open-filters hidden-lg hidden-md">
                <i class="fa fa-filter" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.section-tour-owl-2').owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive:{
                    0:{items:2},
                    600:{items:3},
                    1000:{items:5}
                }
            });
        });
        let currentSort = '';
        function loadProducts(extraParams = {}) {

            let slug = $('.category-link.active').data('slug') || '';
            let categoryId = $('.category-link.active').data('id') || '';

            let brands = $('.filter-brand:checked').map(function () {
                return $(this).val();
            }).get();

            let prices = $('.filter-price:checked').map(function () {
                return $(this).val();
            }).get();

            let minPrice = '';
            let maxPrice = '';

            if (prices.length > 0) {

                let range = prices[0].split('-');

                minPrice = range[0];
                maxPrice = range[1] || '';

            }

            $.ajax({

                url: '/products-by-filter',
                type: 'GET',

                data: {
                    slug: slug,
                    id: categoryId,
                    brands: brands,
                    price_min: minPrice,
                    price_max: maxPrice,
                    sort: currentSort
                },

                success: function (response) {
                    $('#product-list').html(response);
                }

            });
        }

        // Click chọn danh mục
        $(document).on('click', '.category-link', function (e) {
            e.preventDefault();
            $('.category-link').removeClass('active');
            $(this).addClass('active');
            loadProducts();
        });

        // Click chọn thương hiệu
        $(document).on('change', '.filter-brand', function () {
            loadProducts();
        });
        $(document).on('change', '.filter-price', function () {
            if ($(this).is(':checked')) {

                // bỏ check tất cả checkbox khác
                $('.filter-price').not(this).prop('checked', false);

            }
            loadProducts();
        });
        $(document).on('click', '.filter-sort', function () {
            currentSort = $(this).data('sort');
            loadProducts();
        });
        // Click phân trang
        // $(document).on('click', '.pagination a', function (e) {
        //     e.preventDefault();
        //     let page = $(this).attr('href').split('page=')[1];
        //     loadProducts({page: page});
        // });

    </script>
@endsection
