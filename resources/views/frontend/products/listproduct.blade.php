@if(!empty($listProduct))
    <div class="row">
        @foreach($listProduct as $value)
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
            {{ $listProduct->links('pagination::bootstrap-4') }}
        </nav>
    </div>
@endif
