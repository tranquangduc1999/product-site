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
                            @if(!empty($headerMenu))
                                @foreach($headerMenu->items as $value)
                                    <li class="nav-item {{request()->is(ltrim($value->url,'/')) ? 'active' : ''}}"><a class="nav-link" href="{{$value->url}}">{{$value->title}}</a></li>
                                @endforeach
                            @endif
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
