Number.prototype.formatMoney = function(c, d, t) {
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "." : t,
        s = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
var GLOBAL = {
    common: {
        init: function() {
            $('.add_to_cart').bind('click', addToCart);
        }
    },
    templateIndex: { init: function() {} },
    templateProduct: { init: function() {} },
    templateCart: { init: function() {} }
}

var UTIL = {
    fire: function(func, funcname, args) {
        var namespace = GLOBAL;
        funcname = (funcname === undefined) ? 'init' : funcname;
        if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function') {
            namespace[func][funcname](args);
        }
    },
    loadEvents: function() {
        var bodyId = document.body.id;
        UTIL.fire('common');
        $.each(document.body.className.split(/\s+/), function(i, classnm) {
            UTIL.fire(classnm);
            UTIL.fire(classnm, bodyId);
        });
    }
};

$(document).ready(UTIL.loadEvents);
$(document).on('click', '.add_to_cart_detail', function(e) {
    e.preventDefault();
    $('#quickview').modal('hide');
    var $this = $(this);
    var form = $this.parents('form');
    $.ajax({
        type: 'POST',
        url: '/cart/add.js',
        async: false,
        data: form.serialize(),
        dataType: 'json',
        error: addToCartFail,
        beforeSend: function() {},
        success: addToCartSuccess,
        cache: false
    });
});
function addToCart(e) {
    if (typeof e !== 'undefined') e.preventDefault();
    var $this = $(this);
    var form = $this.parents('form');
    $.ajax({
        type: 'POST',
        url: '/cart/add.js',
        async: false,
        data: form.serialize(),
        dataType: 'json',
        error: addToCartFail,
        beforeSend: function() {},
        success: addToCartSuccess,
        cache: false
    });
}
function addToCartSuccess(jqXHR, textStatus, errorThrown) {
    $.ajax({
        type: 'GET',
        url: '/cart.js',
        async: false,
        cache: false,
        dataType: 'json',
        success: function(cart) {
            if (typeof awe_hidePopup === 'function') {
                awe_hidePopup('.loading');
            }
            Haravan.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
            Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
            Haravan.updateCartPageForm(cart, '.cart_desktop_page .page_cart');
        }
    });
    var url_product = jqXHR['url'];
    var name = jqXHR['title'];
    var id = jqXHR['variant_id'];
    var price = jqXHR['price'];
    var src = "https://cdn.hstatic.net/themes/200001110831/1001434972/14/noimage.gif?v=131";
    if (jqXHR['image'] != null) {
        src = Haravan.resizeImage(jqXHR['image'], 'medium');
    }
    $('.title-popup-cart .cart-popup-name').html(`<a href="${url_product}" style="color:red;" title="${name}">${name}</a>`);
    $(".item-info > p:contains(" + id + ")").html('<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm!</span>');
    var windowW = $(window).width();
    if (windowW > 768) {
        $('#popup-cart').modal();
    } else {
        $('#myModal').html('');
        var $popupMobile = `
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title"><span><i class="fa fa-check" aria-hidden="true"></i></span>Thêm vào giỏ hàng thành công</h4>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left">
                                <div class="thumb-1x1">
                                    <img width="70px" src="${src}" alt="${jqXHR['title']}">
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="product-title">${jqXHR['name']}</div>
                                <div class="product-new-price"><span>${(price).formatMoney(0)} đ</span></div>
                            </div>
                        </div>
                        <button class="btn btn-block btn-outline-red" data-dismiss="modal">Tiếp tục mua hàng</button>
                        <a href="/checkout" class="btn btn-block btn-red">Tiến hành thanh toán »</a>
                    </div>
                </div>
            </div>`;
        $('#myModal').html($popupMobile);
        $('#myModal').modal();
        clearTimeout($('#myModal').data('hideInterval'));
    }
}
function addToCartFail(jqXHR, textStatus, errorThrown) {
    var response = $.parseJSON(jqXHR.responseText);
    var $info = '<div class="error">' + response.description + '</div>';
    alert(response.description);
}
$(document).on('click', ".remove-item-cart", function() {
    var variantId = $(this).attr('data-id');
    removeItemCart(variantId);
});
$(document).on('click', ".items-count", function() {
    $(this).parent().children('.items-count').prop('disabled', true);
    var variantId = $(this).parent().find('.variantID').val();
    var qty = $(this).parent().children('.number-sidebar').val();
    updateQuantity(qty, variantId);
});
$(document).on('change', ".number-sidebar", function() {
    var variantId = $(this).parent().children('.variantID').val();
    var qty = $(this).val();
    updateQuantity(qty, variantId);
});
function updateQuantity(qty, variantId) {
    var variantIdUpdate = variantId;
    $.ajax({
        type: "POST",
        url: "/cart/change.js",
        data: {
            "quantity": qty,
            "id": variantId 
        },
        dataType: "json",
        success: function(cart) {
            Haravan.onCartUpdateClick(cart, variantIdUpdate);
        },
        error: function(jqXHR, textStatus) {
            Haravan.onError(jqXHR, textStatus);
        }
    });
}
function removeItemCart(variantId) {
    var variantIdRemove = variantId;
    $.ajax({
        type: "POST",
        url: "/cart/change.js",
        data: {
            "quantity": 0,
            "id": variantId
        },
        dataType: "json",
        success: function(cart) {
            Haravan.onCartRemoveClick(cart, variantIdRemove);
            $('.productid-' + variantIdRemove).remove();
            if ($('.tbody-popup>div').length == '0') {
                $('#popup-cart').modal('hide');
            }
            if ($('.list-item-cart>li').length == '0') {
                $('.mini-products-list').html('<div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>');
            }
            if ($('.cart_page_mobile>div').length == '0') {
                $('.cart_page_mobile').remove();
                $('.header-cart-price').remove();
                $('.header-cart').remove();
                var emptyMobile = `
                    <div class="cart-empty">
                        <span class="empty-icon"><i class="ico ico-cart"></i></span>
                        <div class="btn-cart-empty">
                            <a class="btn btn-default" href="/" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>
                        </div>
                    </div>`;
                $(emptyMobile).appendTo('.header-cart-content');
            }
            if ($('.cart-tbody .shopping-cart-item').length == 0 && $('.cart-tbody .row').length == 0) { 
                $('.bg-cart-page').remove();
                $('.bg-cart-page-mobile').remove();
                $('.cart_des_page').remove();
                
                var emptyDesktop = `
                    <div class="cart-empty">
                        <span class="empty-icon"><i class="ico ico-cart"></i></span>
                        <div class="btn-cart-empty">
                            <a class="btn btn-default" href="/" title="Tiếp tục mua sắm">Tiếp tục lựa chọn</a>
                        </div>
                    </div>`;
                $(emptyDesktop).appendTo('.cart_desktop_page');
                if($('.cart_desktop_page').length === 0){
                     $('<div class="bg-cart-page" style="min-height: auto"><p>Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="/">cửa hàng</a> để tiếp tục mua sắm.</p></div>').appendTo('.cart');
                }
            }
        },
        error: function(jqXHR, textStatus) {
            Haravan.onError(jqXHR, textStatus);
        }
    });
}