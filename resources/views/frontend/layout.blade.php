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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

@php
    $menuPages = \App\Models\Page::published()->get();
    $siteName = $settings['site_name'] ?? config('app.name');
    $logo = $settings['logo'] ?? null;
@endphp

<body class="index">
    <x-frontend.header :site-name="$siteName" :logo="$logo" :menu-pages="$menuPages" />

    @yield('content')
    <x-frontend.footer :footer-content="$settings" />
    @include('frontend.style.js')
    @stack('scripts')
    <div class="ajax-load">
	<span class="loading-icon">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;"
             xml:space="preserve">
			<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s"
                         repeatCount="indefinite"/>
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s"
                         repeatCount="indefinite"/>
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s"
                         repeatCount="indefinite"/>
			</rect>
			<rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s"
                         repeatCount="indefinite"/>
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s"
                         repeatCount="indefinite"/>
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s"
                         repeatCount="indefinite"/>
			</rect>
			<rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s"
                         repeatCount="indefinite"/>
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s"
                         repeatCount="indefinite"/>
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s"
                         repeatCount="indefinite"/>
			</rect>
		</svg>
	</span>
    </div>

    <div class="loading awe-popup">
        <div class="overlay"></div>
        <div class="loader" title="2">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;"
                 xml:space="preserve">
			<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s"
                         repeatCount="indefinite"/>
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s"
                         repeatCount="indefinite"/>
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s"
                         repeatCount="indefinite"/>
            </rect>
                <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s"
                             repeatCount="indefinite"/>
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s"
                             repeatCount="indefinite"/>
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s"
                             repeatCount="indefinite"/>
                </rect>
                <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s"
                             repeatCount="indefinite"/>
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s"
                             repeatCount="indefinite"/>
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s"
                             repeatCount="indefinite"/>
                </rect>
		</svg>
        </div>

    </div>

    <div class="addcart-popup product-popup awe-popup">
        <div class="overlay no-background"></div>
        <div class="content">
            <div class="row row-noGutter">
                <div class="col-xl-6 col-xs-12">
                    <div class="btn btn-full btn-primary a-left popup-title"><i class="fa fa-check"></i>Thêm vào giỏ hàng
                        thành công
                    </div>
                    <a href="javascript:void(0)" class="close-window close-popup"><i class="fa fa-close"></i></a>
                    <div class="info clearfix">
                        <div class="product-image margin-top-5">
                            <img alt="popup" src="../theme.hstatic.net/1000343108/1000435493/14/logo2174.png?v=230"
                                 style="max-width:150px; height:auto"/>
                        </div>
                        <div class="product-info">
                            <p class="product-name"></p>
                            <p class="quantity color-main"><span>Số lượng: </span></p>
                            <p class="total-money color-main"><span>Tổng tiền: </span></p>

                        </div>
                        <div class="actions">
                            <button class="btn  btn-primary  margin-top-5 btn-continue">Tiếp tục mua hàng</button>
                            <button class="btn btn-gray margin-top-5" onclick="window.location='cart.html'">Kiểm tra giỏ
                                hàng
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="error-popup awe-popup">
        <div class="overlay no-background"></div>
        <div class="popup-inner content">
            <div class="error-message"></div>
        </div>
    </div>
    <div id="popup-cart" class="modal fade" role="dialog">
        <div id="popup-cart-desktop" class="clearfix">
            <div class="title-popup-cart">
                <i class="ion ion-md-notifications-outline" aria-hidden="true"></i> Bạn đã thêm <span
                    class="cart-popup-name"></span> vào giỏ hàng
            </div>
            <div class="title-quantity-popup">
                <a href="cart.html">Giỏ hàng của bạn có <span class="cart-popup-count"></span> sản phẩm</a>
            </div>
            <div class="content-popup-cart clearfix">
                <div class="thead-popup">
                    <div style="width: 55%;" class="text-left">Sản phẩm</div>
                    <div style="width: 15%;" class="text-center">Đơn giá</div>
                    <div style="width: 15%;" class="text-center">Số lượng</div>
                    <div style="width: 15%;" class="text-center">Thành tiền</div>
                </div>
                <div class="tbody-popup">

                </div>
                <div class="tfoot-popup">
                    <div class="tfoot-popup-1 clearfix">
                        <div class="pull-left popupcon">
                            <a class="button btn-continue" title="Tiếp tục mua hàng"
                               onclick="$('#popup-cart').modal('hide');"><span><span><i class="fa fa-caret-left"
                                                                                        aria-hidden="true"></i> Tiếp tục mua hàng</span></span></a>
                        </div>
                        <div class="pull-right popup-total">
                            <p>Thành tiền: <span class="total-price"></span></p>
                        </div>
                    </div>
                    <div class="tfoot-popup-2 clearfix">
                        <a class="button btn-proceed-checkout" title="Thanh toán đơn hàng" href="cart.html"><span>Thanh toán đơn hàng</span></a>
                    </div>
                </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;"
               onclick="$('#popup-cart').modal('hide');"><i class="ion ion-ios-close"></i></a>
        </div>

    </div>
    <div id="myModal" class="modal fade" role="dialog">
    </div>

    <div class="backdrop__body-backdrop___1rvky"></div>
    <div class="mobile-main-menu">
        <div class="drawer-header">
            <a href="account/login.html">
                <div class="drawer-header--auth">
                    <div class="_object">
                        <img src="../theme.hstatic.net/1000343108/1000435493/14/user2174.svg?v=230" alt=""/>
                    </div>

                    <div class="_body">
                        ĐĂNG NHẬP
                        <br>
                        Nhận nhiều ưu đãi hơn
                    </div>

                </div>
            </a>
        </div>
        <ul class="ul-first-menu">

            <li><a href="account/login.html"><i class="ion ion-ios-log-in"></i> Đăng nhập</a></li>
            <li><a href="account/register.html"><i class="ion ion-ios-person-add"></i> Đăng ký</a></li>


        </ul>
        <div class="la-scroll-fix-infor-user">
            <!--CATEGORY-->
            <div class="la-nav-menu-items">
                <div class="la-title-nav-items"><strong>Danh mục</strong></div>

                <ul class="la-nav-list-items">


                    <li class="ng-scope">
                        <a href="index.html">Trang chủ</a>
                    </li>


                    <li class="ng-scope">
                        <a href="pages/about-us.html">Giới thiệu</a>
                    </li>


                    <li class="ng-scope">
                        <a href="collections/all.html">Sản phẩm</a>
                    </li>


                    <li class="ng-scope">
                        <a href="blogs/news.html">Tin tức</a>
                    </li>


                    <li class="ng-scope">
                        <a href="pages/lien-he.html">Liên hệ</a>
                    </li>


                </ul>

            </div>
        </div>
        <ul class="mobile-support">
            <li>
                <div class="drawer-text-support">HỖ TRỢ</div>
            </li>

            <li><i class="fa fa-phone" aria-hidden="true"></i> HOTLINE: <a href="tel:"></a></li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL: <a href="mailto:"></a></li>

        </ul>
    </div>
</body>
</html>
