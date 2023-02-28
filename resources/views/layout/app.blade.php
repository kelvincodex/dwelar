<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>{{ env("APP_NAME") }}</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("assets-open/favicon.png") }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset("assets-open/vendor/font-awesome/css/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets-open/css/font-mytravel.css")}}">
    <link rel="stylesheet" href="{{asset("assets-open/vendor/animate.css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets-open/vendor/hs-megamenu/src/hs.megamenu.css")}}">
    <link rel="stylesheet" href="{{asset("assets-open/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css")}}">
    <link rel="stylesheet" href="{{asset("assets-open/vendor/flatpickr/dist/flatpickr.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets-open/vendor/flatpickr/dist/flatpickr.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets-open/vendor/bootstrap-select/dist/css/bootstrap-select.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets-open/vendor/slick-carousel/slick/slick.css")}}">
    <link rel="stylesheet" href="{{asset("assets-open/vendor/fancybox/jquery.fancybox.css")}}">

    <!-- CSS MyTravel Template -->
    <link rel="stylesheet" href="{{asset("assets-open/css/theme.css")}}">
</head>

<body>
<!-- ========== HEADER ========== -->
<x-comp.header></x-comp.header>
<!-- ========== End HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
@yield("content")
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== FOOTER ========== -->
<x-comp.footer></x-comp.footer>
<!-- ========== End FOOTER ========== -->

<!-- Page Preloader -->
<!-- <div id="jsPreloader" class="page-preloader">
            <div class="page-preloader__content-centered">
                <div class="spinner-grow text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div> -->
<!-- End Page Preloader -->

<!-- Go to Top -->
<a class="js-go-to u-go-to-modern" href="index.html#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
    <span class="flaticon-arrow u-go-to-modern__inner"></span>
</a>
<!-- End Go to Top -->

<x-comp.script></x-comp.script>

</body>
</html>
