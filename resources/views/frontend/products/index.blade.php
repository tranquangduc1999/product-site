@extends('frontend.layout')

@section('title', 'Products')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/frontend/evo-collections.scss.css') }}">
@endpush

@section('content')
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
                    <strong itemprop="name">Tất cả sản phẩm</strong>
                    <meta itemprop="position" content="2">
                </li>
            </ul>
        </div>
    </section>
    <div class="container margin-top-20" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="main_container col-md-12 margin-bottom-25" bis_skin_checked="1">
                <h1 class="col-title">Tất cả sản phẩm</h1>
                <div class="category-gallery" bis_skin_checked="1">
                    <div class="single_image_effect" bis_skin_checked="1">
                        <img src="//cdn.hstatic.net/themes/200001110831/1001434972/14/cat-banner-1.jpg?v=255" data-src="//cdn.hstatic.net/themes/200001110831/1001434972/14/cat-banner-1.jpg?v=255" alt="Tất cả sản phẩm" title="Tất cả sản phẩm" class="lazy img-responsive center-block loaded" data-was-processed="true">
                    </div>
                </div>
                <div class="group-category slick-initialized slick-slider" bis_skin_checked="1">
                    <button type="button" data-role="none" class="slick-prev slick-arrow slick-disabled" aria-label="Previous" role="button" aria-disabled="true" style="display: block;">Previous</button>
                    <div aria-live="polite" class="slick-list draggable" bis_skin_checked="1">
                        <div class="slick-track" role="listbox" bis_skin_checked="1" style="opacity: 1; width: 1552px; transform: translate3d(0px, 0px, 0px);">
                            <div class="category-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" bis_skin_checked="1" style="width: 184px;">
                                <a href="/collections/noi-that-go" title="Nội thất gỗ" tabindex="0">
                                    <div class="group-category-image" bis_skin_checked="1">
                                        <img src="https://cdn.hstatic.net/files/200001110831/collection/tu-go-van-phong-tg08_9bb2ed8495f948b68c95fb34d3f208bc.jpg" data-src="https://cdn.hstatic.net/files/200001110831/collection/tu-go-van-phong-tg08_9bb2ed8495f948b68c95fb34d3f208bc.jpg" alt="Nội thất gỗ" class="img-responsive center-block lazy loaded" data-was-processed="true">
                                    </div>
                                    <h6>Nội thất gỗ</h6>
                                </a>
                            </div>
                            <div class="category-item slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide01" bis_skin_checked="1" style="width: 184px;">
                                <a href="/collections/sofa-ghe-thu-gian-nem" title="Sofa, Ghế thư giãn &amp; Nệm" tabindex="0">
                                    <div class="group-category-image" bis_skin_checked="1">
                                        <img src="https://cdn.hstatic.net/files/200001110831/collection/sofa-giuong-sofa-bed-hgk-58-sp_ed9bef52fcdc439b8a224a9d164f6013.jpg" data-src="https://cdn.hstatic.net/files/200001110831/collection/sofa-giuong-sofa-bed-hgk-58-sp_ed9bef52fcdc439b8a224a9d164f6013.jpg" alt="Sofa, Ghế thư giãn &amp; Nệm" class="img-responsive center-block lazy loaded" data-was-processed="true">
                                    </div>
                                    <h6>Sofa, Ghế thư giãn &amp; Nệm</h6>
                                </a>
                            </div>
                            <div class="category-item slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide02" bis_skin_checked="1" style="width: 184px;">
                                <a href="/collections/do-trang-tri" title="Đồ trang trí" tabindex="0">
                                    <div class="group-category-image" bis_skin_checked="1">
                                        <img src="https://cdn.hstatic.net/files/200001110831/collection/do-trang-tri_112653d4fbcd4d458dad49b78436db52.jpg" data-src="https://cdn.hstatic.net/files/200001110831/collection/do-trang-tri_112653d4fbcd4d458dad49b78436db52.jpg" alt="Đồ trang trí" class="img-responsive center-block lazy loaded" data-was-processed="true">
                                    </div>
                                    <h6>Đồ trang trí</h6>
                                </a>
                            </div>
                            <div class="category-item slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide03" bis_skin_checked="1" style="width: 184px;">
                                <a href="/collections/do-dung-vai" title="Đồ dùng vải" tabindex="0">
                                    <div class="group-category-image" bis_skin_checked="1">
                                        <img src="https://cdn.hstatic.net/files/200001110831/collection/images_f07f559229214c8f8360c24e6acb9610.jpg" data-src="https://cdn.hstatic.net/files/200001110831/collection/images_f07f559229214c8f8360c24e6acb9610.jpg" alt="Đồ dùng vải" class="img-responsive center-block lazy loaded" data-was-processed="true">
                                    </div>
                                    <h6>Đồ dùng vải</h6>
                                </a>
                            </div>
                            <div class="category-item slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide04" bis_skin_checked="1" style="width: 184px;">
                                <a href="/collections/vat-dung-ban-an" title="Vật dụng bàn ăn" tabindex="0">
                                    <div class="group-category-image" bis_skin_checked="1">
                                        <img src="https://cdn.hstatic.net/files/200001110831/collection/nia_a59fe9c2e7294da38768e9264c48444d.jpg" data-src="https://cdn.hstatic.net/files/200001110831/collection/nia_a59fe9c2e7294da38768e9264c48444d.jpg" alt="Vật dụng bàn ăn" class="img-responsive center-block lazy loaded" data-was-processed="true">
                                    </div>
                                    <h6>Vật dụng bàn ăn</h6>
                                </a>
                            </div>
                            <div class="category-item slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide05" bis_skin_checked="1" style="width: 184px;">
                                <a href="/collections/do-dung-van-phong" title="Đồ dùng văn phòng" tabindex="0">
                                    <div class="group-category-image" bis_skin_checked="1">
                                        <img src="https://cdn.hstatic.net/files/200001110831/collection/16_copy-500x500_c9ba23dd33be4913a438ddcd63f471f8.jpg" data-src="https://cdn.hstatic.net/files/200001110831/collection/16_copy-500x500_c9ba23dd33be4913a438ddcd63f471f8.jpg" alt="Đồ dùng văn phòng" class="img-responsive center-block lazy loaded" data-was-processed="true">
                                    </div>
                                    <h6>Đồ dùng văn phòng</h6>
                                </a>
                            </div>
                            <div class="category-item slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide06" bis_skin_checked="1" style="width: 184px;">
                                <a href="/collections/den" title="Đèn" tabindex="-1">
                                    <div class="group-category-image" bis_skin_checked="1">
                                        <img class="img-fluid lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//cdn.hstatic.net/themes/200001110831/1001434972/14/noimage.gif?v=255" alt="Đèn">
                                    </div>
                                    <h6>Đèn</h6>
                                </a>
                            </div>
                            <div class="category-item slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide07" bis_skin_checked="1" style="width: 184px;">
                                <a href="/collections/dung-cu-nha-bep" title="Dụng cụ nhà bếp" tabindex="-1">
                                    <div class="group-category-image" bis_skin_checked="1">
                                        <img class="img-fluid lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//cdn.hstatic.net/themes/200001110831/1001434972/14/noimage.gif?v=255" alt="Dụng cụ nhà bếp">
                                    </div>
                                    <h6>Dụng cụ nhà bếp</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;" aria-disabled="false">Next</button>
                </div>
            </div>
            <section class="main_container collection col-md-9 col-md-push-3">
                <div class="category-products products category-products-grids" id="product-list" bis_skin_checked="1">
                    <div class="sort-cate clearfix margin-bottom-10 hidden-xs" bis_skin_checked="1">
                        <div class="sort-cate-left hidden-xs" bis_skin_checked="1">
                            <h3>Xếp theo:</h3>
                            <ul>
                                <li class="btn-quick-sort default-asc active">
                                    <a href="javascript:;" onclick="changeSort('default')" title="Mặc định"><i></i>Mặc định</a>
                                </li>
                                <li class="btn-quick-sort alpha-asc">
                                    <a href="javascript:;" onclick="changeSort('alpha-asc')" title="Tên A-Z"><i></i>Tên A-Z</a>
                                </li>
                                <li class="btn-quick-sort alpha-desc">
                                    <a href="javascript:;" onclick="changeSort('alpha-desc')" title="Tên Z-A"><i></i>Tên Z-A</a>
                                </li>
                                <li class="btn-quick-sort price-asc">
                                    <a href="javascript:;" onclick="changeSort('price-asc')" title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                </li>
                                <li class="btn-quick-sort price-desc">
                                    <a href="javascript:;" onclick="changeSort('price-desc')" title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <section class="products-view products-view-grid row">
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <div class="product-sale" bis_skin_checked="1">
                                        <span>-10%</span>
                                    </div>
                                    <a href="/products/vo-goi-habitat" title="Vỏ gối HABITAT" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_f7e56bf60331453faacea515159e9f41_0a16bc4f71ec474dbdbe3363304ddf76_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_f7e56bf60331453faacea515159e9f41_0a16bc4f71ec474dbdbe3363304ddf76_large.jpg" alt="Vỏ gối HABITAT" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137058">
                                        <button title="Tùy chọn" type="button" onclick="location.href='/products/vo-goi-habitat'" class="action cart-button"><i class="fa fa-link" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        HABITAT
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/vo-goi-habitat" title="Vỏ gối HABITAT">Vỏ gối HABITAT</a>
                                    </h3>
                                    <p class="pro-price">
                                        190,000₫
                                        <span class="pro-price-del">
                           <del class="compare-price">210,000₫</del>
                           </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tu-giay-dep-bang-go-soi-tu-nhien-hien-dai" title="Tủ giày dép bằng gỗ sồi tự nhiên hiện đại" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_9927f9013bab418eb33584d1007d4e6c_dee750dd7e0b425aa1359713d4d77a88_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_9927f9013bab418eb33584d1007d4e6c_dee750dd7e0b425aa1359713d4d77a88_large.jpg" alt="Tủ giày dép bằng gỗ sồi tự nhiên hiện đại" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137057">
                                        <input type="hidden" name="id" value="1163593359">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593359')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        Evo Nội thất
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-giay-dep-bang-go-soi-tu-nhien-hien-dai" title="Tủ giày dép bằng gỗ sồi tự nhiên hiện đại">Tủ giày dép bằng gỗ sồi tự nhiên hiện đại</a>
                                    </h3>
                                    <p class="pro-price">
                                        6,490,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tu-dung-giay-gia-dinh-go-cong-nghiep-hien-dai" title="Tủ đựng giày gia đình gỗ công nghiệp hiện đại" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_ee177fbabfeb4d359d78669a16070484_1cd8075158144d6bb03abbdb9272f375_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_ee177fbabfeb4d359d78669a16070484_1cd8075158144d6bb03abbdb9272f375_large.jpg" alt="Tủ đựng giày gia đình gỗ công nghiệp hiện đại" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137056">
                                        <input type="hidden" name="id" value="1163593358">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593358')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        IKEA
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-dung-giay-gia-dinh-go-cong-nghiep-hien-dai" title="Tủ đựng giày gia đình gỗ công nghiệp hiện đại">Tủ đựng giày gia đình gỗ công nghiệp hiện đại</a>
                                    </h3>
                                    <p class="pro-price">
                                        14,400,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tu-dau-giuong-suecia-1" title="Tủ đầu giường SUECIA" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_fe4fd08fe3a94cb7882953393afb1aab_302fe08043c246d594799c586b1f1bda_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_fe4fd08fe3a94cb7882953393afb1aab_302fe08043c246d594799c586b1f1bda_large.jpg" alt="Tủ đầu giường SUECIA" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137055">
                                        <input type="hidden" name="id" value="1163593357">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593357')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        Ant Furni
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-dau-giuong-suecia-1" title="Tủ đầu giường SUECIA">Tủ đầu giường SUECIA</a>
                                    </h3>
                                    <p class="pro-price">
                                        1,800,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tu-dau-giuong-suecia" title="Tủ đầu giường SUECIA" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_7061827f68b14801914c3a99760d2185_5106e187d20e4439b75bb5f32e43cb3f_large.jpg" alt="Tủ đầu giường SUECIA" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137054">
                                        <input type="hidden" name="id" value="1163593356">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593356')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        Ant Furni
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-dau-giuong-suecia" title="Tủ đầu giường SUECIA">Tủ đầu giường SUECIA</a>
                                    </h3>
                                    <p class="pro-price">
                                        1,900,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tu-dau-giuong-mozart" title="Tủ đầu giường MOZART" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_fb989d1a581046958164bbc8ac04310c_484ff23cc27f41cfbffa77b95f127b98_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_fb989d1a581046958164bbc8ac04310c_484ff23cc27f41cfbffa77b95f127b98_large.jpg" alt="Tủ đầu giường MOZART" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137053">
                                        <input type="hidden" name="id" value="1163593355">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593355')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        Ant Furni
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-dau-giuong-mozart" title="Tủ đầu giường MOZART">Tủ đầu giường MOZART</a>
                                    </h3>
                                    <p class="pro-price">
                                        1,500,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tu-dau-giuong-attila" title="Tủ đầu giường ATTILA" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_46e48fc8c3524f2c9cee60e6e7c24fcb_c4ded1a7c5ae4ac59213229910c70c59_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_46e48fc8c3524f2c9cee60e6e7c24fcb_c4ded1a7c5ae4ac59213229910c70c59_large.jpg" alt="Tủ đầu giường ATTILA" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137052">
                                        <input type="hidden" name="id" value="1163593354">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593354')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        Khác
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-dau-giuong-attila" title="Tủ đầu giường ATTILA">Tủ đầu giường ATTILA</a>
                                    </h3>
                                    <p class="pro-price">
                                        2,900,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tu-bep-go-tu-nhien-thiet-ke-da-nang-dep-hien-dai" title="Tủ bếp gỗ tự nhiên thiết kế đa năng đẹp hiện đại" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_1f3b93f123f9452f8d19554e00f89255_cf97cb220f2d47bd9f616a9ff72b90d3_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_1f3b93f123f9452f8d19554e00f89255_cf97cb220f2d47bd9f616a9ff72b90d3_large.jpg" alt="Tủ bếp gỗ tự nhiên thiết kế đa năng đẹp hiện đại" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137051">
                                        <input type="hidden" name="id" value="1163593353">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593353')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        IKEA
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-bep-go-tu-nhien-thiet-ke-da-nang-dep-hien-dai" title="Tủ bếp gỗ tự nhiên thiết kế đa năng đẹp hiện đại">Tủ bếp gỗ tự nhiên thiết kế đa năng đẹp hiện đại</a>
                                    </h3>
                                    <p class="pro-price">
                                        9,100,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <div class="product-sale" bis_skin_checked="1">
                                        <span>-21%</span>
                                    </div>
                                    <a href="/products/tu-bep-gia-dinh-go-soi-tu-nhien-thiet-ke-hien-dai" title="Tủ bếp gia đình gỗ sồi tự nhiên thiết kế hiện đại" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_83e9e8523fe64f4886b4da17b8bf02db_877818292b56449e8c31f74248022fb3_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_83e9e8523fe64f4886b4da17b8bf02db_877818292b56449e8c31f74248022fb3_large.jpg" alt="Tủ bếp gia đình gỗ sồi tự nhiên thiết kế hiện đại" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137050">
                                        <input type="hidden" name="id" value="1163593352">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593352')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        IKEA
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-bep-gia-dinh-go-soi-tu-nhien-thiet-ke-hien-dai" title="Tủ bếp gia đình gỗ sồi tự nhiên thiết kế hiện đại">Tủ bếp gia đình gỗ sồi tự nhiên thiết kế hiện đại</a>
                                    </h3>
                                    <p class="pro-price">
                                        7,500,000₫
                                        <span class="pro-price-del">
                           <del class="compare-price">9,500,000₫</del>
                           </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <div class="product-sale" bis_skin_checked="1">
                                        <span>-23%</span>
                                    </div>
                                    <a href="/products/tu-bep-gia-dinh-go-cong-nghiep-nho-gon-da-nang" title="Tủ bếp gia đình gỗ công nghiệp nhỏ gọn đa năng" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_314b6947f06042e0a7ae1a3d06d84c63_7eeeadd2083641c4947a5050c328b3cf_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_314b6947f06042e0a7ae1a3d06d84c63_7eeeadd2083641c4947a5050c328b3cf_large.jpg" alt="Tủ bếp gia đình gỗ công nghiệp nhỏ gọn đa năng" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137049">
                                        <input type="hidden" name="id" value="1163593351">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593351')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        IKEA
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-bep-gia-dinh-go-cong-nghiep-nho-gon-da-nang" title="Tủ bếp gia đình gỗ công nghiệp nhỏ gọn đa năng">Tủ bếp gia đình gỗ công nghiệp nhỏ gọn đa năng</a>
                                    </h3>
                                    <p class="pro-price">
                                        5,000,000₫
                                        <span class="pro-price-del">
                           <del class="compare-price">6,500,000₫</del>
                           </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tu-bep-bang-go-tu-nhien-nho-gon-da-nang-tien-loi" title="Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_52b146daaf3b4d978ff3d7cfaba9e483_55e0ce615b334533ac2f02aebae28ae9_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_52b146daaf3b4d978ff3d7cfaba9e483_55e0ce615b334533ac2f02aebae28ae9_large.jpg" alt="Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137048">
                                        <input type="hidden" name="id" value="1163593350">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593350')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        Evo Nội thất
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tu-bep-bang-go-tu-nhien-nho-gon-da-nang-tien-loi" title="Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi">Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi</a>
                                    </h3>
                                    <p class="pro-price">
                                        12,500,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" bis_skin_checked="1">
                            <div class="evo-product-block-item " bis_skin_checked="1">
                                <div class="product-img" bis_skin_checked="1">
                                    <a href="/products/tha-m-tra-i-sa-n-mu-a-he-ssjg-angelina" title="Thảm trải sàn mùa hè SSJG Angelina" class="image-resize">
                                        <img class="lazy loaded" src="//cdn.hstatic.net/products/200001110831/upload_c041cdab4c5c43bbb0ef2162c67038c5_8e7070b64d734014987e500bd597822a_large.jpg" data-src="//cdn.hstatic.net/products/200001110831/upload_c041cdab4c5c43bbb0ef2162c67038c5_8e7070b64d734014987e500bd597822a_large.jpg" alt="Thảm trải sàn mùa hè SSJG Angelina" data-was-processed="true">
                                    </a>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-1072137047">
                                        <input type="hidden" name="id" value="1163593348">
                                        <button type="button" title="Mua ngay" class="action" onclick="buy_now('1163593348')"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                        <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="product-detail clearfix" bis_skin_checked="1">
                                    <div class="pro-brand" bis_skin_checked="1">
                                        Angelina
                                    </div>
                                    <h3 class="pro-name">
                                        <a href="/products/tha-m-tra-i-sa-n-mu-a-he-ssjg-angelina" title="Thảm trải sàn mùa hè SSJG Angelina">Thảm trải sàn mùa hè SSJG Angelina</a>
                                    </h3>
                                    <p class="pro-price">
                                        750,000₫
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix" bis_skin_checked="1"></div>
                        <div class="text-xs-right" bis_skin_checked="1">
                            <nav class="text-center">
                                <ul class="pagination clearfix">
                                    <li class="page-item disabled"><a class="page-link" href="#" title="«">«</a></li>
                                    <li class="active page-item disabled"><a class="page-link" href="javascript:;" title="1">1</a></li>
                                    <li class="page-item"><a class="page-link" data-page="2" href="javascript:;" title="2">2</a></li>
                                    <li class="page-item"><a class="page-link" data-page="3" href="javascript:;" title="3">3</a></li>
                                    <li class="page-item"><a class="page-link" data-page="4" href="javascript:;" title="4">4</a></li>
                                    <li class="page-item"><a class="page-link" data-page="2" href="javascript:;" title="»">»</a></li>
                                </ul>
                            </nav>
                        </div>
                    </section>
                </div>
            </section>
            <aside class="evo-sidebar sidebar left-content col-md-3 col-md-pull-9">
                <aside class="aside-item collection-category">
                    <div class="aside-title" bis_skin_checked="1">
                        <h3 class="title-head margin-top-0">Danh mục</h3>
                    </div>
                    <div class="aside-content" bis_skin_checked="1">
                        <ul class="nav navbar-pills nav-category">
                            <li class="nav-item ">
                                <a class="nav-link" href="/" title="Trang chủ">Trang chủ</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/pages/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                            </li>
                            <li class="nav-item active">
                                <a href="/collections/all" class="nav-link" title="Sản phẩm">Sản phẩm</a>
                                <span class="Collapsible__Plus"></span>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu nav-item ">
                                        <a class="nav-link" href="/collections/noi-that-go" title="Nội thất gỗ">Nội thất gỗ</a>
                                        <span class="Collapsible__Plus"></span>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu nav-item ">
                                                <a class="nav-link" href="/collections/ban" title="Bàn">Bàn</a>
                                                <span class="Collapsible__Plus"></span>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/ban-an" title="Bàn ăn">Bàn ăn</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/ban-trang-tri" title="Bàn trang trí">Bàn trang trí</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/ban-ca-phe" title="Bàn cà phê">Bàn cà phê</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/ban-trang-diem" title="Bàn trang điểm">Bàn trang điểm</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu nav-item ">
                                                <a class="nav-link" href="/collections/bo-ban-an" title="Bộ bàn ăn">Bộ bàn ăn</a>
                                                <span class="Collapsible__Plus"></span>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/bo-ban-4-ghe-an" title="Bộ bàn &amp; 4 ghế ăn">Bộ bàn &amp; 4 ghế ăn</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/bo-ban-6-ghe-an" title="Bộ bàn &amp; 6 ghế ăn">Bộ bàn &amp; 6 ghế ăn</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu nav-item ">
                                                <a class="nav-link" href="/collections/giuong" title="Giường">Giường</a>
                                                <span class="Collapsible__Plus"></span>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/giuong-1-2m" title="Giường 1,2m">Giường 1,2m</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/giuong-1-6m" title="Giường 1,6m">Giường 1,6m</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/giuong-1-8m" title="Giường 1,8m">Giường 1,8m</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/giuong-tang" title="Giường tầng">Giường tầng</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu nav-item ">
                                                <a class="nav-link" href="/collections/ghe" title="Ghế">Ghế</a>
                                                <span class="Collapsible__Plus"></span>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/ghe-an" title="Ghế ăn">Ghế ăn</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/ghe-ngoai-troi" title="Ghế ngoài trời">Ghế ngoài trời</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/ghe-dai" title="Ghế dài">Ghế dài</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/ghe-don-ngoai-troi" title="Ghế đôn ngoài trời">Ghế đôn ngoài trời</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu nav-item ">
                                                <a class="nav-link" href="/collections/tu-ke" title="Tủ kệ">Tủ kệ</a>
                                                <span class="Collapsible__Plus"></span>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/tu-kinh" title="Tủ kính">Tủ kính</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/tu-bat-dia" title="Tủ bát đĩa">Tủ bát đĩa</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/tu-quan-ao" title="Tủ quần áo">Tủ quần áo</a>
                                                    </li>
                                                    <li class="dropdown-submenu nav-item ">
                                                        <a class="nav-link" href="/collections/tu-ngan-keo" title="Tủ ngăn kéo">Tủ ngăn kéo</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu nav-item ">
                                        <a class="nav-link" href="/collections/sofa-ghe-thu-gian-nem" title="Sofa, Ghế thư giãn &amp; Nệm">Sofa, Ghế thư giãn &amp; Nệm</a>
                                        <span class="Collapsible__Plus"></span>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/sofa" title="Sofa">Sofa</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/ghe-phong-khach" title="Ghế phòng khách">Ghế phòng khách</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/nem" title="Nệm">Nệm</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/don-mem" title="Đôn mềm">Đôn mềm</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu nav-item ">
                                        <a class="nav-link" href="/collections/do-trang-tri" title="Đồ trang trí">Đồ trang trí</a>
                                        <span class="Collapsible__Plus"></span>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/tinh-dau-tui-thom" title="Tinh dầu &amp; Túi thơm">Tinh dầu &amp; Túi thơm</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/cay-hoa-gia" title="Cây &amp; Hoa giả">Cây &amp; Hoa giả</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/nen-chan-nen" title="Nến &amp; Chân nến">Nến &amp; Chân nến</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/dong-ho" title="Đồng hồ">Đồng hồ</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="/collections/khung-tranh-anh" title="Khung &amp; Tranh ảnh">Khung &amp; Tranh ảnh</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/collections/do-dung-vai" title="Đồ dùng vải">Đồ dùng vải</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/collections/vat-dung-ban-an" title="Vật dụng bàn ăn">Vật dụng bàn ăn</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/collections/do-dung-van-phong" title="Đồ dùng văn phòng">Đồ dùng văn phòng</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/collections/den" title="Đèn">Đèn</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="/collections/dung-cu-nha-bep" title="Dụng cụ nhà bếp">Dụng cụ nhà bếp</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/collections/hang-moi-ve" title="Hàng mới về">Hàng mới về</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/blogs/tin-tuc" title="Tin tức">Tin tức</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/pages/lien-he" title="Liên hệ">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <script src="//cdn.hstatic.net/themes/200001110831/1001434972/14/search_filter.js?v=255" type="text/javascript"></script>
                <div class="aside-filter clearfix" bis_skin_checked="1">
                    <div class="heading" bis_skin_checked="1">
                        Tìm theo
                    </div>
                    <div class="aside-hidden-mobile" bis_skin_checked="1">
                        <div class="filter-container" bis_skin_checked="1">
                            <div class="filter-containers" bis_skin_checked="1">
                                <div class="filter-container__selected-filter" style="display: none;" bis_skin_checked="1">
                                    <div class="filter-container__selected-filter-header clearfix" bis_skin_checked="1">
                                        <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                                        <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all" title="Bỏ hết">Bỏ hết <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="filter-container__selected-filter-list" bis_skin_checked="1">
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix" bis_skin_checked="1"></div>
                            <aside class="aside-item filter-price">
                                <div class="aside-title" bis_skin_checked="1">
                                    Giá sản phẩm
                                </div>
                                <div class="aside-content filter-group" bis_skin_checked="1">
                                    <ul>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="price-under-100000">
                              <input type="checkbox" id="price-under-100000" class="filter-checkbox" data-group="price" value="&lt;= 100000">
                              <i class="fa"></i>
                              Giá dưới 100.000đ
                              </label>
                              </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="price-between-100000-200000">
                              <input type="checkbox" id="price-between-100000-200000" class="filter-checkbox" data-group="price" value="100000-200000">
                              <i class="fa"></i> 100,000₫ -  200.000đ
                              </label>
                              </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="price-between-200000-300000">
                              <input type="checkbox" id="price-between-200000-300000" class="filter-checkbox" data-group="price" value="200000-300000">
                              <i class="fa"></i> 200,000₫ -  300.000đ
                              </label>
                              </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="price-between-300000-500000">
                              <input type="checkbox" id="price-between-300000-500000" class="filter-checkbox" data-group="price" value="300000-500000">
                              <i class="fa"></i> 300,000₫ - 500.000đ
                              </label>
                              </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="price-between-500000-1000000">
                              <input type="checkbox" id="price-between-500000-1000000" class="filter-checkbox" data-group="price" value="500000-1000000">
                              <i class="fa"></i> 500,000₫ - 1.000.000đ
                              </label>
                              </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="price-over-1000000">
                              <input type="checkbox" id="price-over-1000000" class="filter-checkbox" data-group="price" value="&gt;= 1000000">
                              <i class="fa"></i> Trên 1.000.000đ
                              </label>
                              </span>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="aside-item filter-vendor">
                                <div class="aside-title" bis_skin_checked="1">
                                    Thương hiệu
                                </div>
                                <div class="aside-content filter-group" bis_skin_checked="1">
                                    <div class="field-search input-group" bis_skin_checked="1">
                                        <input type="text" placeholder="Tìm Thương hiệu" class="form-control filter-vendor-list" onkeyup="filterItemInList(jQuery('.filter-vendor-list'))">
                                        <span class="input-group-btn">
                           <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                           </span>
                                    </div>
                                    <ul class="filter-vendor">
                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="ant furni" for="filter-ant-furni" class="ant-furni">
                                                <input type="checkbox" id="filter-ant-furni" class="filter-checkbox" data-group="vendor" value="Ant Furni">
                                                <i class="fa"></i>
                                                Ant Furni
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="evo nội thất" for="filter-evo-noi-that" class="evo-noi-that">
                                                <input type="checkbox" id="filter-evo-noi-that" class="filter-checkbox" data-group="vendor" value="Evo Nội thất">
                                                <i class="fa"></i>
                                                Evo Nội thất
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="ikea" for="filter-ikea" class="ikea">
                                                <input type="checkbox" id="filter-ikea" class="filter-checkbox" data-group="vendor" value="IKEA">
                                                <i class="fa"></i>
                                                IKEA
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="eroomn" for="filter-eroomn" class="eroomn">
                                                <input type="checkbox" id="filter-eroomn" class="filter-checkbox" data-group="vendor" value="Eroomn">
                                                <i class="fa"></i>
                                                Eroomn
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="harmonydeco" for="filter-harmonydeco" class="harmonydeco">
                                                <input type="checkbox" id="filter-harmonydeco" class="filter-checkbox" data-group="vendor" value="Harmonydeco">
                                                <i class="fa"></i>
                                                Harmonydeco
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="angelina" for="filter-angelina" class="angelina">
                                                <input type="checkbox" id="filter-angelina" class="filter-checkbox" data-group="vendor" value="Angelina">
                                                <i class="fa"></i>
                                                Angelina
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="khác" for="filter-khac" class="khac">
                                                <input type="checkbox" id="filter-khac" class="filter-checkbox" data-group="vendor" value="Khác">
                                                <i class="fa"></i>
                                                Khác
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="habitat" for="filter-habitat" class="habitat">
                                                <input type="checkbox" id="filter-habitat" class="filter-checkbox" data-group="vendor" value="HABITAT">
                                                <i class="fa"></i>
                                                HABITAT
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="aside-item filter-type">
                                <div class="aside-title" bis_skin_checked="1">
                                    Loại
                                </div>
                                <div class="aside-content filter-group" bis_skin_checked="1">
                                    <div class="field-search input-group" bis_skin_checked="1">
                                        <input type="text" placeholder="Tìm Loại" class="form-control filter-type-list" onkeyup="filterItemInList(jQuery('.filter-type-list'))">
                                        <span class="input-group-btn">
                           <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                           </span>
                                    </div>
                                    <ul class="filter-type">
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="bàn cà phê" for="filter-ban-ca-phe">
                                                <input type="checkbox" id="filter-ban-ca-phe" class="filter-checkbox" data-group="type" value="Bàn cà phê">
                                                <i class="fa"></i>
                                                Bàn cà phê
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="tủ bếp" for="filter-tu-bep">
                                                <input type="checkbox" id="filter-tu-bep" class="filter-checkbox" data-group="type" value="Tủ bếp">
                                                <i class="fa"></i>
                                                Tủ bếp
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="giường ngủ" for="filter-giuong-ngu">
                                                <input type="checkbox" id="filter-giuong-ngu" class="filter-checkbox" data-group="type" value="Giường Ngủ">
                                                <i class="fa"></i>
                                                Giường Ngủ
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="gương" for="filter-guong">
                                                <input type="checkbox" id="filter-guong" class="filter-checkbox" data-group="type" value="Gương">
                                                <i class="fa"></i>
                                                Gương
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="kệ ti vi" for="filter-ke-ti-vi">
                                                <input type="checkbox" id="filter-ke-ti-vi" class="filter-checkbox" data-group="type" value="Kệ ti vi">
                                                <i class="fa"></i>
                                                Kệ ti vi
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="tủ đầu giường" for="filter-tu-dau-giuong">
                                                <input type="checkbox" id="filter-tu-dau-giuong" class="filter-checkbox" data-group="type" value="Tủ đầu giường">
                                                <i class="fa"></i>
                                                Tủ đầu giường
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="đèn bàn" for="filter-den-ban">
                                                <input type="checkbox" id="filter-den-ban" class="filter-checkbox" data-group="type" value="Đèn bàn">
                                                <i class="fa"></i>
                                                Đèn bàn
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="ghế" for="filter-ghe">
                                                <input type="checkbox" id="filter-ghe" class="filter-checkbox" data-group="type" value="Ghế">
                                                <i class="fa"></i>
                                                Ghế
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="giá sách" for="filter-gia-sach">
                                                <input type="checkbox" id="filter-gia-sach" class="filter-checkbox" data-group="type" value="Giá sách">
                                                <i class="fa"></i>
                                                Giá sách
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="giường" for="filter-giuong">
                                                <input type="checkbox" id="filter-giuong" class="filter-checkbox" data-group="type" value="Giường">
                                                <i class="fa"></i>
                                                Giường
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="sofa" for="filter-sofa">
                                                <input type="checkbox" id="filter-sofa" class="filter-checkbox" data-group="type" value="Sofa">
                                                <i class="fa"></i>
                                                Sofa
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="tủ giày" for="filter-tu-giay">
                                                <input type="checkbox" id="filter-tu-giay" class="filter-checkbox" data-group="type" value="Tủ giày">
                                                <i class="fa"></i>
                                                Tủ giày
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="bàn trang điểm" for="filter-ban-trang-diem">
                                                <input type="checkbox" id="filter-ban-trang-diem" class="filter-checkbox" data-group="type" value="Bàn trang điểm">
                                                <i class="fa"></i>
                                                Bàn trang điểm
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="nệm" for="filter-nem">
                                                <input type="checkbox" id="filter-nem" class="filter-checkbox" data-group="type" value="Nệm">
                                                <i class="fa"></i>
                                                Nệm
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="chao đèn" for="filter-chao-den">
                                                <input type="checkbox" id="filter-chao-den" class="filter-checkbox" data-group="type" value="Chao đèn">
                                                <i class="fa"></i>
                                                Chao đèn
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="đèn trang trí" for="filter-den-trang-tri">
                                                <input type="checkbox" id="filter-den-trang-tri" class="filter-checkbox" data-group="type" value="Đèn trang trí">
                                                <i class="fa"></i>
                                                Đèn trang trí
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="đèn trần" for="filter-den-tran">
                                                <input type="checkbox" id="filter-den-tran" class="filter-checkbox" data-group="type" value="Đèn trần">
                                                <i class="fa"></i>
                                                Đèn trần
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="ghế mấy" for="filter-ghe-may">
                                                <input type="checkbox" id="filter-ghe-may" class="filter-checkbox" data-group="type" value="Ghế mấy">
                                                <i class="fa"></i>
                                                Ghế mấy
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="kệ tivi" for="filter-ke-tivi">
                                                <input type="checkbox" id="filter-ke-tivi" class="filter-checkbox" data-group="type" value="Kệ tivi">
                                                <i class="fa"></i>
                                                Kệ tivi
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="tấm trải giường" for="filter-tam-trai-giuong">
                                                <input type="checkbox" id="filter-tam-trai-giuong" class="filter-checkbox" data-group="type" value="Tấm trải giường">
                                                <i class="fa"></i>
                                                Tấm trải giường
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="thảm trải sàn" for="filter-tham-trai-san">
                                                <input type="checkbox" id="filter-tham-trai-san" class="filter-checkbox" data-group="type" value="Thảm trải sàn">
                                                <i class="fa"></i>
                                                Thảm trải sàn
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="khác" for="filter-khac">
                                                <input type="checkbox" id="filter-khac" class="filter-checkbox" data-group="type" value="Khác">
                                                <i class="fa"></i>
                                                Khác
                                            </label>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="vỏ gối" for="filter-vo-goi">
                                                <input type="checkbox" id="filter-vo-goi" class="filter-checkbox" data-group="type" value="Vỏ gối">
                                                <i class="fa"></i>
                                                Vỏ gối
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="aside-item filter-tag-style-1 tag-filtster">
                                <div class="aside-title" bis_skin_checked="1">
                                    Kích thước
                                </div>
                                <div class="aside-content filter-group" bis_skin_checked="1">
                                    <ul>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-lon">
                              <input type="checkbox" id="filter-lon" class="filter-checkbox" data-group="tag" value="Lớn">
                              <i class="fa"></i>
                              Lớn
                              </label>
                              </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-nho">
                              <input type="checkbox" id="filter-nho" class="filter-checkbox" data-group="tag" value="Nhỏ">
                              <i class="fa"></i>
                              Nhỏ
                              </label>
                              </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-vua">
                              <input type="checkbox" id="filter-vua" class="filter-checkbox" data-group="tag" value="Vừa">
                              <i class="fa"></i>
                              Vừa
                              </label>
                              </span>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <aside class="evo-aside-banner">
                    <div class="heading" bis_skin_checked="1">Khuyến mãi</div>
                    <div class="aside-content" bis_skin_checked="1">
                        <a class="single_image_effect" href="#" title="Khuyến mãi">
                            <img class="lazy img-responsive center-block loaded" src="//cdn.hstatic.net/themes/200001110831/1001434972/14/aside_banner.jpg?v=255" data-src="//cdn.hstatic.net/themes/200001110831/1001434972/14/aside_banner.jpg?v=255" alt="Khuyến mãi" data-was-processed="true">
                        </a>
                    </div>
                </aside>
            </aside>
            <div id="open-filters" class="open-filters hidden-lg hidden-md" bis_skin_checked="1">
                <i class="fa fa-filter" aria-hidden="true"></i>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    (function ($) {
        function normalizeItem($item) {
            var slickClasses = (($item.attr('class') || '').match(/(^|\s)slick-\S+/g) || []).join(' ');

            if (slickClasses) {
                $item.removeClass(slickClasses);
            }

            $item.removeAttr('style aria-hidden data-slick-index tabindex role aria-describedby');
        }

        function initCategorySlider() {
            var $sliders = $('.group-category');

            if (!$sliders.length || typeof $.fn.slick !== 'function') {
                return;
            }

            $sliders.each(function () {
                var $el = $(this);
                var $items = $el.find('.category-item').clone(true, true);

                if (!$items.length) {
                    return;
                }

                if ($el.hasClass('slick-initialized')) {
                    $el.slick('unslick');
                }

                $el.removeClass('slick-initialized slick-slider');
                $el.empty();

                $items.each(function () {
                    normalizeItem($(this));
                });

                $el.append($items);

                $el.slick({
                    dots: false,
                    arrows: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 6,
                    slidesToScroll: 2,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: { slidesToShow: 5, slidesToScroll: 2 }
                        },
                        {
                            breakpoint: 992,
                            settings: { slidesToShow: 4, slidesToScroll: 2 }
                        },
                        {
                            breakpoint: 768,
                            settings: { slidesToShow: 3, slidesToScroll: 1 }
                        },
                        {
                            breakpoint: 576,
                            settings: { slidesToShow: 2, slidesToScroll: 1 }
                        }
                    ]
                });

                // Force arrow behavior even if theme scripts override events.
                $el.off('click.forceSlick');
                $el.on('click.forceSlick', '.slick-prev', function (e) {
                    e.preventDefault();
                    $el.slick('slickPrev');
                });
                $el.on('click.forceSlick', '.slick-next', function (e) {
                    e.preventDefault();
                    $el.slick('slickNext');
                });
            });
        }

        $(document).ready(initCategorySlider);
        $(window).on('load', initCategorySlider);
    })(jQuery);
</script>
@endpush
