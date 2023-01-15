<!DOCTYPE html>
<html lang="en">
<x-comp.head></x-comp.head>
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
