<!DOCTYPE html>
<html lang="zxx">

<x-comp.dash.head></x-comp.dash.head>

<body>

<div class="notification-alert">
    <div class="notice-list">

    </div>
</div>

<!-- preloader begin-->
<div class="preloader">
    <img src="{{asset("assets-close/img/tenor.gif")}}" alt="">
</div>
<!-- preloader end -->

<div class="mobile-navbar-wrapper">

    <!-- header begin -->
    <x-comp.dash.header></x-comp.dash.header>
    <!-- header end -->

    <!-- breadcrumb begin -->
    <div class="breadcrumb-oitila db-breadcrumb">
        <div class="container">
            <div class="row justify-content-lg-around">
                <div class="col-xl-6 col-lg-7 col-md-5 col-sm-6 col-8">
                    <div class="part-txt">
                        <h1>User Dashboard</h1>
                        <ul>
                            <li>home</li>
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7 col-sm-6 col-4 d-flex align-items-center">
                    <div class="db-user-profile">
                        <div class="part-data">
                            <span class="name">Sadwel Eunton</span>
                            <ul>
                                <li>
                                    <span class="text">Invest</span>
                                    <span class="number">$100</span>
                                </li>
                                <li>
                                    <span class="text">Earings</span>
                                    <span class="number">$250</span>
                                </li>
                            </ul>
                        </div>
                        <div class="part-img">
                            <img src="{{asset("assets-close/img/member-1.jpg")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- account begin -->
    <div class="user-dashboard">
        @yield("content")
    </div>
    <!-- account end -->

    <!-- footer begin -->
    <x-comp.dash.footer></x-comp.dash.footer>
    <!-- footer end -->

</div> <!-- mobile navbar wrapper end -->

<div class="d-xl-none d-lg-none d-block">
    <div class="mobile-navigation-bar">
        <ul>
            <li>
                <a href="#0">
                    <img src="{{asset("assets-close/img/svg/profile.svg")}}" alt="">
                </a>
            </li>
            <li>
                <a href="#0">
                    <img src="{{asset("assets-close/img/svg/money-transfering.svg")}}" alt="">
                </a>
            </li>
            <li>
                <a href="#0">
                    <img src="{{asset("assets-close/img/svg/calculator.svg")}}" alt="">
                </a>
            </li>
            <li>
                <a href="#header">
                    <img src="{{asset("assets-close/img/svg/arrow.svg")}}" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="d-xl-block d-lg-block d-none">
    <div class="back-to-top-btn">
        <a href="#">
            <img src="{{asset("assets-close/img/svg/arrow.svg")}}" alt="">
        </a>
    </div>
</div>

<x-comp.dash.script></x-comp.dash.script>
</body>


</html>
