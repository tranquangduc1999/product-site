<style>
    .main-menu ul {
        display: none;
        position: absolute;
        background: #fff;
    }

    .menu-item:hover > .submenu {
        display: block;
    }
</style>
@if($headerMenu)
    <ul class="main-menu">
        @foreach($headerMenu->items as $item)
            <li class="menu-item">
                <a href="{{ url($item->url) }}">
                    {{ $item->title }}
                </a>

                @if($item->children->count())
                    <ul class="submenu">
                        @foreach($item->children as $child)
                            <li>
                                <a href="{{ url($child->url) }}">
                                    {{ $child->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </li>
        @endforeach
    </ul>
@endif
<header class="header">
    <div class="top-link header-link hidden-sm hidden-xs" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-md-6 col-xs-12" bis_skin_checked="1">
                    <div class="header-static" bis_skin_checked="1">
                        <i class="ion ion-md-globe"></i> Chào mừng bạn đến với Ant Furniture
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 right" bis_skin_checked="1">
                    <div class="top-link-dropdown" bis_skin_checked="1">
                        <ul class="header-links">
                            <li class="customer welcome customer-welcome">
								<span class="customer">
									<a class="account">Tài khoản</a>
								</span>
                                <div class="customer-menu" bis_skin_checked="1">
                                    <ul class="header links">

                                        <li><a href="/account/login">Đăng nhập</a></li>
                                        <li><a href="/account/register">Đăng ký</a></li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-md-3 col-100-h" bis_skin_checked="1">
                    <button type="button" class="navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo" bis_skin_checked="1">
                        <a href="/" class="logo-wrapper">
                            <img src="//theme.hstatic.net/1000343108/1000435493/14/logo.png?v=230" data-lazyload="//theme.hstatic.net/1000343108/1000435493/14/logo.png?v=230" alt="logo ">
                        </a>
                    </div>
                    <div class="mobile-cart visible-sm visible-xs" bis_skin_checked="1">
                        <a href="/cart" title="Giỏ hàng">
                            <i class="ion ion-md-appstore"></i>
                            <div class="cart-right" bis_skin_checked="1">
                                <span class="count_item_pr">0</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 hidden-sm hidden-xs" bis_skin_checked="1">
                    <div class="our-service" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="box col-md-4" bis_skin_checked="1">
                                <div class="box-inner" bis_skin_checked="1">
                                    <i class="ion ion-md-globe"></i>
                                    <div class="content" bis_skin_checked="1">
                                        <h5>Giao hàng 24h</h5>
                                        <p>Với đơn hàng trên 500.000 đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box col-md-4" bis_skin_checked="1">
                                <div class="box-inner" bis_skin_checked="1">
                                    <i class="ion ion-md-checkmark-circle-outline"></i>
                                    <div class="content" bis_skin_checked="1">
                                        <h5>Chất lượng</h5>
                                        <p>Bảo đảm chất lượng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box col-md-4" bis_skin_checked="1">
                                <div class="box-inner" bis_skin_checked="1">
                                    <i class="ion ion-ios-notifications"></i>
                                    <div class="content" bis_skin_checked="1">
                                        <h5>Nguồn gốc</h5>
                                        <p>Nhập khẩu chính hãng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs" bis_skin_checked="1">
                    <div class="minicart-wrapper" bis_skin_checked="1">
                        <a class="showcart" href="/cart">
                            <i class="ion ion-md-cart"></i>
                            <span class="cart-value count_item_pr">0</span>
                            <span class="content">
								<span class="content-inner">
									<span class="text">Giỏ hàng</span>
								</span>
							</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-md-9 hidden-sm hidden-xs" bis_skin_checked="1">
                    <nav class="hidden-sm hidden-xs">
                        <ul id="nav" class="nav">






                            <li class="nav-item active"><a class="nav-link" href="/">Trang chủ</a></li>







                            <li class="nav-item "><a class="nav-link" href="/pages/about-us">Giới thiệu</a></li>







                            <li class="nav-item  has-mega">
                                <a href="/collections/all" class="nav-link">Sản phẩm <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>

                                <div class="mega-content" bis_skin_checked="1">
                                    <div class="level0-wrapper2" bis_skin_checked="1">
                                        <div class="nav-block nav-block-center" bis_skin_checked="1">
                                            <ul class="level0">


                                                <li class="level1 parent item"> <h2 class="h4"><a href="/collections/phong-khach"><span>Phòng khách</span></a></h2>
                                                    <ul class="level1">

                                                        <li class="level2"> <a href="/collections/sofa-ghe-pho-ng-kha-ch"><span>Sofa &amp; ghế phòng khách</span></a> </li>

                                                        <li class="level2"> <a href="/collections/ke-cho-tv-thie-t-bi-die-n-tu"><span>Kệ cho TV &amp; thiết bị điện tử</span></a> </li>

                                                        <li class="level2"> <a href="/collections/ba-n-ca-phe"><span>Bàn cà phê</span></a> </li>

                                                        <li class="level2"> <a href="/collections/ban-goc"><span>Bàn góc</span></a> </li>

                                                        <li class="level2"> <a href="/collections/ghe-luo-i-don-me-m"><span>Ghế lười &amp; đôn mềm</span></a> </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item"> <h2 class="h4"><a href="/collections/phong-ngu"><span>Phòng ngủ</span></a></h2>
                                                    <ul class="level1">

                                                        <li class="level2"> <a href="/collections/giuo-ng-ngu"><span>Giường ngủ</span></a> </li>

                                                        <li class="level2"> <a href="/collections/ba-n-ke-da-u-giuo-ng"><span>Bàn kê đầu giường</span></a> </li>

                                                        <li class="level2"> <a href="/collections/ba-n-trang-die-m"><span>Bàn trang điểm</span></a> </li>

                                                        <li class="level2"> <a href="/collections/chan-ga"><span>Chăn ga</span></a> </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item"> <h2 class="h4"><a href="/collections/phong-bep"><span>Phòng bếp</span></a></h2>
                                                    <ul class="level1">

                                                        <li class="level2"> <a href="/collections/ban-an"><span>Bàn ăn</span></a> </li>

                                                        <li class="level2"> <a href="/collections/ghe-an"><span>Ghế ăn</span></a> </li>

                                                        <li class="level2"> <a href="/collections/do-dung-ban-an"><span>Đồ dùng bàn ăn</span></a> </li>

                                                        <li class="level2"> <a href="/collections/dem-ngoi"><span>Đệm ngồi</span></a> </li>

                                                        <li class="level2"> <a href="/collections/tu-ba-t-di-a"><span>Tủ bát đĩa</span></a> </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item"> <h2 class="h4"><a href="/collections/do-trang-tri"><span>Đồ trang trí</span></a></h2>
                                                    <ul class="level1">

                                                        <li class="level2"> <a href="/collections/de-n-pho-ng-kha-ch"><span>Đèn phòng khách</span></a> </li>

                                                        <li class="level2"> <a href="/collections/guong"><span>Gương</span></a> </li>

                                                        <li class="level2"> <a href="/collections/goi-trang-tri"><span>Gối trang trí</span></a> </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 item"> <h2 class="h4"><a href="/collections/ghe-sofa"><span>Ghế Sofa</span></a> </h2>



                                                </li><li class="level1 item"> <h2 class="h4"><a href="/collections/giuong-ngu"><span>Giường ngủ</span></a> </h2>



                                                </li><li class="level1 item"> <h2 class="h4"><a href="/collections/tham-trai-san"><span>Thảm trải sàn</span></a> </h2>



                                                </li><li class="level1 item"> <h2 class="h4"><a href="/collections/ghe-thu-gian"><span>Ghế thư giãn</span></a> </h2>


                                                </li></ul>
                                        </div>
                                    </div>
                                </div>

                            </li>







                            <li class="nav-item "><a class="nav-link" href="/blogs/news">Tin tức</a></li>







                            <li class="nav-item "><a class="nav-link" href="/pages/lien-he">Liên hệ</a></li>


                        </ul>
                    </nav>
                </div>
                <div class="col-md-3" bis_skin_checked="1">
                    <div class="block block-search" bis_skin_checked="1">
                        <form class="input-group search-bar search_form has-validation-callback" action="/search" method="get" role="search" id="voice-search">
                            <input type="search" name="q" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text search-voice" autocomplete="off">
                            <input type="hidden" name="type" value="product">
                            <span class="input-group-btn">
								<button class="btn icon-fallback-text">
									<i class="fa fa-search"></i>
								</button>
							</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
