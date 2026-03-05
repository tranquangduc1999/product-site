{{--<script src="{{ asset('js/frontend/jquery-2.2.3.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/jquery.form-validator.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/owl.carousel.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/appear.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/bootstrap-notify.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/api.jquery.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/option_selection.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/beacon.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/frontend/main.js') }}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $('.home-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true
        });
        $('.section-tour-owl2').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { items: 2 },
                480: { items: 2 },
                768: { items: 3 },
                992: { items: 4 },
                1200: { items: 4 }
            }
        });
        $('.section-tour-owl3').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { items: 2 },
                480: { items: 3 },
                768: { items: 4 },
                992: { items: 5 },
                1200: { items: 5 }
            }
        });
        $('.section-news-owl').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { items: 1 },
                480: { items: 3 },
                768: { items: 3 },
                992: { items: 3 },
                1200: { items: 3 }
            }
        });
        $('.content_views').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: { items: 1 },
                768: { items: 1 },
                992: { items: 1 }
            }
        });
    });
</script>
