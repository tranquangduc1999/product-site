@if(!empty($listProduct))
    @foreach($listProduct as $value)
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
                                        src="{{image_url($value->thumbnail)}}"
                                        data-lazyload="{{image_url($value->thumbnail)}}"
                                        alt="{{@$value->name}}">
                                </a>
                            </div>
                            <div class="box-info">
                                <h2 class="product-item-name">
                                    <a title="{{@$value->name}}"
                                       href="/products/{{$value->slug}}"
                                       class="product-item-link">
                                        {{$value->name}}
                                    </a>
                                </h2>
                                <div
                                    class="product-reviews-summary">
                                    <div class="rating-summary">
                                        <div
                                            class="haravan-product-reviews-badge"
                                            data-id="1017908240"></div>
                                    </div>
                                </div>
                                <div class="item-price">
                                    <div
                                        class="price-box price-final_price">
                                                      <span class="special-price">
                                                      <span class="price-container">
                                                      <span class="price-wrapper">
                                                      <span class="price">{{$value->price}}</span>
                                                      </span>
                                                      </span>
                                                      </span>
                                    </div>
                                </div>
                                <div
                                    class="box-hover hidden-sm hidden-xs hidden-md">
                                    <div class="add-to-links">
                                        <div
                                            class="actions-primary">
                                            <form action="/cart/add"
                                                  method="post"
                                                  class="variants form-nut-grid has-validation-callback"
                                                  data-id="product-actions-1017908240"
                                                  enctype="multipart/form-data">
                                                <input type="hidden"
                                                       name="id"
                                                       value="1035080072">
                                                {{--                                            <button--}}
                                                {{--                                                class="tt-btn-addtocart btn-buy btn-cart btn btn-gray left-to add_to_cart"--}}
                                                {{--                                                title="Cho vào giỏ hàng">--}}
                                                {{--                                                <i class="ion ion-md-cart"></i>--}}
                                                {{--                                            </button>--}}
                                            </form>
                                        </div>
                                        <a href="/products/{{$value->slug}}"
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
@endif
