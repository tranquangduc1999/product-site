@extends('frontend.layout')
@section('og_image', asset('storage/'.$product->thumbnail))
@section('title', $product->meta_title ?? $product->name)
@section('meta_description', $product->meta_description ?? $product->short_description)

@section('content')
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="variant_id" value="{{ $variant->id ?? null }}">
        <input type="hidden" name="name" value="{{ $product->name }}">
        <input type="hidden" name="price" value="{{ $variant->price ?? $product->price }}">

        <button type="submit">Thêm vào giỏ</button>
    </form>

    <section class="bread-crumb margin-bottom-10">
        <div class="container" bis_skin_checked="1">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li class="home" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="/" title="Trang chủ">
                        <span itemprop="name">Trang chủ</span>
                        <meta itemprop="position" content="1">
                    </a>
                    <span><i class="fa fa-angle-right"></i></span>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <span itemprop="name">Tủ đầu giường SUECIA</span>
                    <meta itemprop="position" content="3">
                </li>
            </ul>
        </div>
    </section>
    <section class="product margin-top-30" itemscope="" itemtype="http://schema.org/Product">
        <meta itemprop="category" content="">
        <meta itemprop="url" content="https://wolf-noi-that.myharavan.com/products/tu-dau-giuong-suecia">
        <meta itemprop="name" content="Tủ đầu giường SUECIA">
        <meta itemprop="image" content="http://cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f_grande.jpg">
        <meta itemprop="description" content="Tủ đầu giường phong cách Á châu đương đại gồm 1 ngăn kéo và 1 ngăn chứa mở. Chân tủ bằng gỗ phủ sơn trắng đem lại độ vững chãi cho sản phẩm và vẻ đẹp sang trọng cho căn phòng.&nbsp;
- Vệ sinh sản phẩm thường xuyên bằng khăn ẩm đã được vắt ráo nước
- Đặt sản phẩm tại nơi khô thoáng, tránh độ ẩm cao, tránh nhiệt độ cao, nguồn sáng mạnh và các vật dễ cháy.
- Tránh để...">
        <div class="d-none hidden" itemprop="brand" itemtype="https://schema.org/Brand" itemscope="" bis_skin_checked="1">
            <meta itemprop="name" content="Ant Furni">
        </div>
        <meta itemprop="model" content="Tủ đầu giường">
        <div class="d-none hidden" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" bis_skin_checked="1">
            <div class="inventory_quantity hidden" itemscope="" itemtype="http://schema.org/ItemAvailability" bis_skin_checked="1">
		<span class="a-stock" itemprop="supersededBy">
			Còn hàng
		</span>
            </div>
            <link itemprop="availability" href="http://schema.org/InStock">
            <meta itemprop="priceCurrency" content="VND">
            <meta itemprop="price" content="190000000">
            <meta itemprop="url" content="https:https://wolf-noi-that.myharavan.com/products/tu-dau-giuong-suecia">
            <span itemprop="UnitPriceSpecification" itemscope="" itemtype="https://schema.org/Downpayment">
		<meta itemprop="priceType" content="190000000">
	</span>
            <meta itemprop="priceValidUntil" content="2099-01-01">
        </div>
        <div class="d-none hidden" id="https://wolf-noi-that.myharavan.com" itemprop="seller" itemtype="http://schema.org/Organization" itemscope="" bis_skin_checked="1">
            <meta itemprop="name" content="">
            <meta itemprop="url" content="https://wolf-noi-that.myharavan.com">
            <meta itemprop="logo" content="http://cdn.hstatic.net/themes/200001110831/1001434972/14/logo.png?v=255">
        </div>	<div class="container" bis_skin_checked="1">
            <div class="row details-product padding-bottom-10" bis_skin_checked="1">
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 product-bottom" bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 details-pro" bis_skin_checked="1">
                            <div class="product-top clearfix" bis_skin_checked="1">
                                <h1 class="title-head">Tủ đầu giường SUECIA</h1>
                                <div class="sku-product clearfix" bis_skin_checked="1">
                                    <div class="item-sku" bis_skin_checked="1">
                                        SKU: <span class="variant-sku">(Đang cập nhật...)</span>
                                    </div>
                                    <div class="item-sku" bis_skin_checked="1">
                                        Thương hiệu:
                                        <span class="vendor">
										Ant Furni
									</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="relative product-image-block" bis_skin_checked="1">
                                <div class="slider-big-video clearfix margin-bottom-10" bis_skin_checked="1">
                                    <div class="slider slider-for slick-initialized slick-slider" bis_skin_checked="1">
                                        <div aria-live="polite" class="slick-list draggable" bis_skin_checked="1"><div class="slick-track" role="listbox" bis_skin_checked="1" style="opacity: 1; width: 2825px;"><a href="//cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f_1024x1024.jpg" title="Click để xem" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10" rel="lightbox-demo" style="width: 565px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                    <img src="//cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f_large.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f.jpg" class="img-responsive center-block" style="opacity: 1;">
                                                </a><a href="//cdn.hstatic.net/products/200001110831/upload_7e940d1b30734ce192cfcbd2ac1fa494_839f4554a42d464989a5ae234f790e2e_1024x1024.jpg" title="Click để xem" class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide11" rel="lightbox-demo" style="width: 565px; position: relative; left: -565px; top: 0px; z-index: 998; opacity: 0;">
                                                    <img src="//cdn.hstatic.net/products/200001110831/upload_7e940d1b30734ce192cfcbd2ac1fa494_839f4554a42d464989a5ae234f790e2e_large.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_7e940d1b30734ce192cfcbd2ac1fa494_839f4554a42d464989a5ae234f790e2e.jpg" class="img-responsive center-block" style="opacity: 1;">
                                                </a><a href="//cdn.hstatic.net/products/200001110831/upload_5ce9a7ad5c9a4fe3b9a29e1759f8b85b_84af98e2f1404994842318c65fbf94a7_1024x1024.jpg" title="Click để xem" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide12" rel="lightbox-demo" style="width: 565px; position: relative; left: -1130px; top: 0px; z-index: 998; opacity: 0;">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-lazy="//cdn.hstatic.net/products/200001110831/upload_5ce9a7ad5c9a4fe3b9a29e1759f8b85b_84af98e2f1404994842318c65fbf94a7_large.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_5ce9a7ad5c9a4fe3b9a29e1759f8b85b_84af98e2f1404994842318c65fbf94a7.jpg" class="img-responsive center-block">
                                                </a><a href="//cdn.hstatic.net/products/200001110831/upload_cd34646ac5244e04b997337426a1e22e_4d19268f6b484bafb20783bb0a344120_1024x1024.jpg" title="Click để xem" class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide13" rel="lightbox-demo" style="width: 565px; position: relative; left: -1695px; top: 0px; z-index: 998; opacity: 0;">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-lazy="//cdn.hstatic.net/products/200001110831/upload_cd34646ac5244e04b997337426a1e22e_4d19268f6b484bafb20783bb0a344120_large.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_cd34646ac5244e04b997337426a1e22e_4d19268f6b484bafb20783bb0a344120.jpg" class="img-responsive center-block">
                                                </a><a href="//cdn.hstatic.net/products/200001110831/upload_edaabfc832e84135a67dc9068e0907ca_bbdba9fb339748f488fc7c9a42c539aa_1024x1024.jpg" title="Click để xem" class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide14" rel="lightbox-demo" style="width: 565px; position: relative; left: -2260px; top: 0px; z-index: 998; opacity: 0;">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-lazy="//cdn.hstatic.net/products/200001110831/upload_edaabfc832e84135a67dc9068e0907ca_bbdba9fb339748f488fc7c9a42c539aa_large.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_edaabfc832e84135a67dc9068e0907ca_bbdba9fb339748f488fc7c9a42c539aa.jpg" class="img-responsive center-block">
                                                </a></div></div>




                                    </div>
                                </div>
                                <div class="slider-has-video clearfix" bis_skin_checked="1">
                                    <div class="slider slider-nav slick-initialized slick-slider" bis_skin_checked="1">
                                        <div aria-live="polite" class="slick-list draggable" bis_skin_checked="1"><div class="slick-track" role="listbox" bis_skin_checked="1" style="opacity: 1; width: 535px; transform: translate3d(0px, 0px, 0px);"><div class="fixs slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" bis_skin_checked="1" style="width: 97px;">
                                                    <img class="lazy loaded" src="https://cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f.jpg" data-src="https://cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f.jpg" data-was-processed="true">
                                                </div><div class="fixs slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide01" bis_skin_checked="1" style="width: 97px;">
                                                    <img class="lazy loaded" src="https://cdn.hstatic.net/products/200001110831/upload_7e940d1b30734ce192cfcbd2ac1fa494_839f4554a42d464989a5ae234f790e2e.jpg" data-src="https://cdn.hstatic.net/products/200001110831/upload_7e940d1b30734ce192cfcbd2ac1fa494_839f4554a42d464989a5ae234f790e2e.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_7e940d1b30734ce192cfcbd2ac1fa494_839f4554a42d464989a5ae234f790e2e.jpg" data-was-processed="true">
                                                </div><div class="fixs slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide02" bis_skin_checked="1" style="width: 97px;">
                                                    <img class="lazy loaded" src="https://cdn.hstatic.net/products/200001110831/upload_5ce9a7ad5c9a4fe3b9a29e1759f8b85b_84af98e2f1404994842318c65fbf94a7.jpg" data-src="https://cdn.hstatic.net/products/200001110831/upload_5ce9a7ad5c9a4fe3b9a29e1759f8b85b_84af98e2f1404994842318c65fbf94a7.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_5ce9a7ad5c9a4fe3b9a29e1759f8b85b_84af98e2f1404994842318c65fbf94a7.jpg" data-was-processed="true">
                                                </div><div class="fixs slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide03" bis_skin_checked="1" style="width: 97px;">
                                                    <img class="lazy loaded" src="https://cdn.hstatic.net/products/200001110831/upload_cd34646ac5244e04b997337426a1e22e_4d19268f6b484bafb20783bb0a344120.jpg" data-src="https://cdn.hstatic.net/products/200001110831/upload_cd34646ac5244e04b997337426a1e22e_4d19268f6b484bafb20783bb0a344120.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_cd34646ac5244e04b997337426a1e22e_4d19268f6b484bafb20783bb0a344120.jpg" data-was-processed="true">
                                                </div><div class="fixs slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide04" bis_skin_checked="1" style="width: 97px;">
                                                    <img class="lazy loaded" src="https://cdn.hstatic.net/products/200001110831/upload_edaabfc832e84135a67dc9068e0907ca_bbdba9fb339748f488fc7c9a42c539aa.jpg" data-src="https://cdn.hstatic.net/products/200001110831/upload_edaabfc832e84135a67dc9068e0907ca_bbdba9fb339748f488fc7c9a42c539aa.jpg" alt="Tủ đầu giường SUECIA" data-image="https://cdn.hstatic.net/products/200001110831/upload_edaabfc832e84135a67dc9068e0907ca_bbdba9fb339748f488fc7c9a42c539aa.jpg" data-was-processed="true">
                                                </div></div></div>




                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 details-pro" bis_skin_checked="1">
                            <div bis_skin_checked="1">
                                <div class="price-box clearfix" bis_skin_checked="1">
                                    <div class="special-price" bis_skin_checked="1">
                                        <span class="price product-price">1,900,000₫</span>
                                    </div>
                                </div>
                                <div class="inventory_quantity" bis_skin_checked="1">
                                    <span class="stock-brand-title">Tình trạng:</span>
                                    <span class="a-stock a2">Còn hàng</span>
                                </div>							<div class="evo-product-summary product_description margin-bottom-10" bis_skin_checked="1">
                                    <a class="evo-product-tabs-header hidden-lg hidden-md hidden-sm" href="javascript:void(0);">
                                        <span>Tổng quan</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903" viewBox="0 0 5.658 9.903">
                                            <path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c" stroke-linecap="round" fill="none" transform="translate(-5428.5 -1331.44)"></path>
                                        </svg>
                                    </a>
                                    <div class="rte description rte-summary" bis_skin_checked="1">
                                        Tủ đầu giường phong cách Á châu đương đại gồm 1 ngăn kéo và 1 ngăn chứa mở. Chân tủ bằng gỗ phủ sơn trắng đem lại độ vững chãi cho sản phẩm và vẻ đẹp sang trọng cho căn phòng.&nbsp;
                                        - Vệ sinh sản phẩm thường xuyên bằng khăn ẩm đã được vắt ráo nước
                                        - Đặt sản phẩm tại nơi khô thoáng, tránh độ ẩm ca...
                                    </div>
                                </div>
                            </div>
                            <div class="form-product" bis_skin_checked="1">
                                <form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="clearfix form-inline has-validation-callback">
                                    <div class="box-variant clearfix  hidden " bis_skin_checked="1">
                                        <input type="hidden" name="id" value="1163593356">
                                    </div>
                                    <div class="clearfix form-group " bis_skin_checked="1">
                                        <div class="qty-ant clearfix custom-btn-number" bis_skin_checked="1">
                                            <label>Số lượng:</label>
                                            <div class="custom custom-btn-numbers form-control" bis_skin_checked="1">
                                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) &amp; qty &gt; 1 ) result.value--;return false;" class="btn-minus btn-cts" type="button">–</button>
                                                <input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3">
                                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">+</button>
                                            </div>
                                        </div>
                                        <div class="btn-mua" bis_skin_checked="1">
                                            <button type="submit" data-role="addtocart" class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">
                                                <span class="txt-main">Mua ngay với giá <b class="product-price">1,900,000₫</b></span>
                                                <span class="text-add">Đặt mua giao hàng tận nơi</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="call-and-payment" bis_skin_checked="1">
                                <div class="hotline_products" bis_skin_checked="1">
                                    Gọi điện để được tư vấn: <a href="tel:1900636099" title="1900636099">1900 636 099</a>
                                </div>
                                <div class="payment_product" bis_skin_checked="1">
                                    <span class="payment_product_text">Hình thức thanh toán</span>
                                    <img src="//cdn.hstatic.net/themes/200001110831/1001434972/14/ppayment-1.svg?v=255" alt="Wolf Nội Thất">
                                    <img src="//cdn.hstatic.net/themes/200001110831/1001434972/14/ppayment-2.svg?v=255" alt="Wolf Nội Thất">
                                    <img src="//cdn.hstatic.net/themes/200001110831/1001434972/14/ppayment-3.svg?v=255" alt="Wolf Nội Thất">
                                </div>
                            </div>
                            <div class="size-guide" bis_skin_checked="1">
                                <button class="size-title" data-toggle="modal" data-target="#mySize" title="Hướng dẫn Mua hàng">
                                    <img src="//cdn.hstatic.net/themes/200001110831/1001434972/14/size_image.svg?v=255" alt="Hướng dẫn Mua hàng"> Hướng dẫn Mua hàng
                                </button>
                                <div class="modal fade" id="mySize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" bis_skin_checked="1">
                                    <div class="modal-dialog" role="document" bis_skin_checked="1">
                                        <div class="modal-content" bis_skin_checked="1">
                                            <div class="modal-header" bis_skin_checked="1">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Hướng dẫn Mua hàng</h4>
                                            </div>
                                            <div class="modal-body" bis_skin_checked="1">
                                                <p>Chính sách bảo mật này nhằm giúp Quý khách hiểu về cách website thu thập và sử dụng thông tin cá nhân của mình thông qua việc sử dụng trang web, bao gồm mọi thông tin có thể cung cấp thông qua trang web khi Quý khách đăng ký tài khoản, đăng ký nhận thông tin liên lạc từ chúng tôi, hoặc khi Quý khách mua sản phẩm, dịch vụ, yêu cầu thêm thông tin dịch vụ từ chúng tôi.</p><p>Chúng tôi sử dụng thông tin cá nhân của Quý khách để liên lạc khi cần thiết liên quan đến việc Quý khách sử dụng website của chúng tôi, để trả lời các câu hỏi hoặc gửi tài liệu và thông tin Quý khách yêu cầu.</p><p><span class="wysiwyg-font-size-medium">Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất để bảo vệ thông tin cũng như việc thanh toán của khách hàng.&nbsp;</span></p><p><span class="wysiwyg-font-size-medium">Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan pháp luật yêu cầu.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-9 col-md-9 margin-top-20" bis_skin_checked="1">
                    <div class="product-tab e-tabs padding-bottom-10 evo-tab-product-mobile" bis_skin_checked="1">
                        <ul class="tabs tabs-title clearfix hidden-xs">
                            <li class="tab-link current" data-tab="tab-1">Mô tả</li><li class="tab-link" data-tab="tab-2">Điều khoản dịch vụ</li>					</ul>
                        <div id="tab-1" class="tab-content active current" bis_skin_checked="1">
                            <a class="evo-product-tabs-header hidden-lg hidden-md hidden-sm" href="javascript:void(0);">
                                <span>Mô tả</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903" viewBox="0 0 5.658 9.903">
                                    <path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c" stroke-linecap="round" fill="none" transform="translate(-5428.5 -1331.44)"></path>
                                </svg>
                            </a>
                            <div class="rte" bis_skin_checked="1">
                                <p>Tủ đầu giường phong cách Á châu đương đại gồm 1 ngăn kéo và 1 ngăn chứa mở. Chân tủ bằng gỗ phủ sơn trắng đem lại độ vững chãi cho sản phẩm và vẻ đẹp sang trọng cho căn phòng.&nbsp;</p>
                                <p>- Vệ sinh sản phẩm thường xuyên bằng khăn ẩm đã được vắt ráo nước<br>
                                    - Đặt sản phẩm tại nơi khô thoáng, tránh độ ẩm cao, tránh nhiệt độ cao, nguồn sáng mạnh và các vật dễ cháy.<br>
                                    - Tránh để sản phẩm tiếp xúc với nước và nhiệt độ cao trong thời gian dài. Khi sản phẩm bị ướt, cần lau khô ngay lập tức.<br>
                                    - Không dùng vật sắc nhọn chà xát sản phẩm.</p>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-content" bis_skin_checked="1">
                            <a class="evo-product-tabs-header hidden-lg hidden-md hidden-sm" href="javascript:void(0);">
                                <span>Điều khoản dịch vụ</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903" viewBox="0 0 5.658 9.903">
                                    <path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c" stroke-linecap="round" fill="none" transform="translate(-5428.5 -1331.44)"></path>
                                </svg>
                            </a>
                            <div class="rte" bis_skin_checked="1">
                                <p><span class="wysiwyg-font-size-medium"><strong>1. Giới thiệu</strong></span></p><p><span class="wysiwyg-font-size-medium">Chào mừng quý khách hàng đến với website chúng tôi.</span></p><p><span class="wysiwyg-font-size-medium">Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.</span></p><p><span class="wysiwyg-font-size-medium">Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.</span></p><p><span class="wysiwyg-font-size-medium"><strong>2. Hướng dẫn sử dụng website</strong></span></p><p><span class="wysiwyg-font-size-medium">Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.</span></p><p><span class="wysiwyg-font-size-medium">Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span></p><p><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"></span><br></p><p><span class="wysiwyg-font-size-medium"><strong>3. Thanh toán an toàn và tiện lợi</strong></span></p><p><span class="wysiwyg-font-size-medium">Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:</span></p><p><span class="wysiwyg-font-size-medium"><strong><u>Cách 1</u></strong>: Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)<br></span><span class="wysiwyg-font-size-medium"><strong><u>Cách 2</u></strong><strong>:</strong>&nbsp;Thanh toán sau (COD – giao hàng và thu tiền tận nơi)<br></span><span class="wysiwyg-font-size-medium"><strong><u>Cách 3</u></strong><strong>:</strong>&nbsp;Thanh toán online qua thẻ tín dụng, chuyển khoản</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-3 col-md-3 margin-top-20" bis_skin_checked="1">
                    <div class="similar-product" bis_skin_checked="1">
                        <div class="right-bestsell" bis_skin_checked="1">
                            <h2><a href="/collections/san-pham-moi" title="Bạn có thể thích">Bạn có thể thích</a></h2>
                            <div class="list-bestsell" bis_skin_checked="1">
                                <div class="evo-product-slide-item" bis_skin_checked="1">
                                    <div class="product-img" bis_skin_checked="1">
                                        <a href="/products/gia-sach-gia-re-kieu-dang-nho-gon" title="Giá sách giá rẻ kiểu dáng nhỏ gọn" class="image-resize">
                                            <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_e3fc489d7c624d3c9d9fb80f499b6ec6_e8fd7163c25b4608a110760d072b8b41_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_e3fc489d7c624d3c9d9fb80f499b6ec6_e8fd7163c25b4608a110760d072b8b41_large.jpg" alt="Giá sách giá rẻ kiểu dáng nhỏ gọn" data-was-processed="true">
                                        </a>
                                    </div>
                                    <div class="product-detail clearfix" bis_skin_checked="1">
                                        <div class="pro-brand" bis_skin_checked="1">
                                            IKEA
                                        </div>
                                        <h3 class="pro-name">
                                            <a href="/products/gia-sach-gia-re-kieu-dang-nho-gon" title="Giá sách giá rẻ kiểu dáng nhỏ gọn">Giá sách giá rẻ kiểu dáng nhỏ gọn</a>
                                        </h3>
                                        <div class="box-pro-prices" bis_skin_checked="1">
                                            <p class="pro-price">
                                                4,000,000₫
                                            </p>
                                        </div>
                                    </div>
                                </div><div class="evo-product-slide-item" bis_skin_checked="1">
                                    <div class="product-img" bis_skin_checked="1">
                                        <a href="/products/gia-sach-go-tu-nhien-thiet-ke-dep" title="Giá sách gỗ tự nhiên thiết kế đẹp" class="image-resize">
                                            <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_2e5bb06c2f914751b7acf4151ad6c6e0_34352c1f39f147e88865b57934f59925_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_2e5bb06c2f914751b7acf4151ad6c6e0_34352c1f39f147e88865b57934f59925_large.jpg" alt="Giá sách gỗ tự nhiên thiết kế đẹp" data-was-processed="true">
                                        </a>
                                    </div>
                                    <div class="product-detail clearfix" bis_skin_checked="1">
                                        <div class="pro-brand" bis_skin_checked="1">
                                            IKEA
                                        </div>
                                        <h3 class="pro-name">
                                            <a href="/products/gia-sach-go-tu-nhien-thiet-ke-dep" title="Giá sách gỗ tự nhiên thiết kế đẹp">Giá sách gỗ tự nhiên thiết kế đẹp</a>
                                        </h3>
                                        <div class="box-pro-prices" bis_skin_checked="1">
                                            <p class="pro-price">
                                                13,990,000₫
                                            </p>
                                        </div>
                                    </div>
                                </div><div class="evo-product-slide-item" bis_skin_checked="1">
                                    <div class="product-img" bis_skin_checked="1">
                                        <div class="product-sale" bis_skin_checked="1">
                                            <span>-16%</span>
                                        </div>		<a href="/products/giuong-ngu-go-chat-luong-cao-cho-gia-dinh" title="Giường ngủ gỗ chất lượng cao cho gia đình" class="image-resize">
                                            <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_3fe7a64433d046e290922e3a5bd1905c_9204918b69624e53811ffc3f71bf089a_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_3fe7a64433d046e290922e3a5bd1905c_9204918b69624e53811ffc3f71bf089a_large.jpg" alt="Giường ngủ gỗ chất lượng cao cho gia đình" data-was-processed="true">
                                        </a>
                                    </div>
                                    <div class="product-detail clearfix" bis_skin_checked="1">
                                        <div class="pro-brand" bis_skin_checked="1">
                                            Evo Nội thất
                                        </div>
                                        <h3 class="pro-name">
                                            <a href="/products/giuong-ngu-go-chat-luong-cao-cho-gia-dinh" title="Giường ngủ gỗ chất lượng cao cho gia đình">Giường ngủ gỗ chất lượng cao cho gia đình</a>
                                        </h3>
                                        <div class="box-pro-prices" bis_skin_checked="1">
                                            <p class="pro-price">
                                                1,290,000₫
                                                <span class="pro-price-del">
					<del class="compare-price">1,540,000₫</del>
				</span>
                                            </p>
                                        </div>
                                    </div>
                                </div><div class="evo-product-slide-item" bis_skin_checked="1">
                                    <div class="product-img" bis_skin_checked="1">
                                        <a href="/products/giuong-ngu-go-gia-dinh-phun-son-hien-dai" title="Giường ngủ gỗ gia đình phun sơn hiện đại" class="image-resize">
                                            <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_85bed5bdcaf24d27af2b8ad673082647_b981895aacb64bbf8299edc3b48ee6a8_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_85bed5bdcaf24d27af2b8ad673082647_b981895aacb64bbf8299edc3b48ee6a8_large.jpg" alt="Giường ngủ gỗ gia đình phun sơn hiện đại" data-was-processed="true">
                                        </a>
                                    </div>
                                    <div class="product-detail clearfix" bis_skin_checked="1">
                                        <div class="pro-brand" bis_skin_checked="1">
                                            IKEA
                                        </div>
                                        <h3 class="pro-name">
                                            <a href="/products/giuong-ngu-go-gia-dinh-phun-son-hien-dai" title="Giường ngủ gỗ gia đình phun sơn hiện đại">Giường ngủ gỗ gia đình phun sơn hiện đại</a>
                                        </h3>
                                        <div class="box-pro-prices" bis_skin_checked="1">
                                            <p class="pro-price">
                                                18,000,000₫
                                            </p>
                                        </div>
                                    </div>
                                </div>		</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
