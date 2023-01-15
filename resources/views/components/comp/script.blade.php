<!-- JS Global Compulsory -->
<script src="{{asset("assets-open/vendor/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/jquery-migrate/dist/jquery-migrate.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/popper.js/dist/umd/popper.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/bootstrap/bootstrap.min.js")}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{asset("assets-open/vendor/hs-megamenu/src/hs.megamenu.js")}}"></script>
<script src="{{asset("assets-open/vendor/jquery-validation/dist/jquery.validate.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/flatpickr/dist/flatpickr.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/slick-carousel/slick/slick.js")}}"></script>

<script src="{{asset("assets-open/vendor/gmaps/gmaps.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/player.js/dist/player.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/svg-injector/dist/svg-injector.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/fancybox/jquery.fancybox.min.js")}}"></script>
<script src="{{asset("assets-open/vendor/appear.js")}}"></script>

<!-- JS MyTravel -->
<script src="{{asset("assets-open/js/hs.core.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.header.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.unfold.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.validation.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.show-animation.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.range-datepicker.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.selectpicker.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.go-to.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.slick-carousel.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.quantity-counter.js")}}"></script>

<script src="{{asset("assets-open/js/components/hs.g-map.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.video-player.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.svg-injector.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.fancybox.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.scroll-nav.js")}}"></script>
<script src="{{asset("assets-open/js/components/hs.sticky-block.js")}}"></script>
<!-- JS Plugins Init. -->
<script>
    $(window).on('load', function () {
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 1199.98,
            hideTimeOut: 0
        });

        // initialization of svg injector module
        $.HSCore.components.HSSVGIngector.init('.js-svg-injector');


        // Page preloader
        setTimeout(function() {
            $('#jsPreloader').fadeOut(500)
        }, 800);
    });

    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of google map
        function initMap() {
            $.HSCore.components.HSGMap.init('.js-g-map');
        }


        // initialization of popups
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of video player
        $.HSCore.components.HSVideoPlayer.init('.js-inline-video-player');


        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of datepicker
        $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

        // initialization of select
        $.HSCore.components.HSSelectPicker.init('.js-select');

        // initialization of quantity counter
        $.HSCore.components.HSQantityCounter.init('.js-quantity');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuY6I4hZQvxo5RqCH7kogGKzcrjetRKQI&amp;callback=initMap" async defer></script>

@yield("script")
