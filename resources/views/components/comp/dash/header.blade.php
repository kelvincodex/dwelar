<div class="header header-style-4" id="header">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-3">
                    <div class="welcome-text">
                        <p>Welcome to Affiliate Gain</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-right">
                        <ul>
                            <li>
                                <span class="simple-text">Sever Time : </span>
                                <div class="server-time">
                                    <div class="single-time clock-time">
                                                    <span class="icon">
                                                        <i class="far fa-clock"></i>
                                                    </span>
                                        <span class="text">
                                                        <span id="hours"></span>
                                                        <span id="minutes"></span>
                                                        <span id="seconds"></span>
                                                    </span>
                                    </div>
                                    <div class="single-time">
                                                    <span class="icon">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </span>
                                        <span class="text">
                                                        <span id="date"></span>
                                                        <span id="month"></span>
                                                        <span id="year"></span>
                                                    </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="user-panel">
{{--                                                <span>--}}
{{--                                                    <a href="#" class="login-btn">Login</a> or--}}
{{--                                                </span>--}}
{{--                                    <a href="#" class="register-btn">Register</a>--}}
                                    <a href="#" class="register-btn">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="row">
                        <div class="col-4 d-xl-none d-lg-none d-block">
                            <button class="navbar-toggler" type="button">
                                <span class="dag"></span>
                                <span class="dag2"></span>
                                <span class="dag3"></span>
                            </button>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-8 d-xl-block d-lg-block d-flex align-items-center justify-content-end">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset("assets-open/image/logo.png")}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-10">
                    <div class="mainmenu">
                        <div class="d-xl-none d-lg-none d-block">
                            <div class="user-profile">
                                <div class="part-img">
                                    <img src="{{asset("assets-close/img/member-1.jpg")}}" alt="">
                                </div>
                                <div class="user-info">
                                    <span class="user-name">Sadwel Eunton</span>
                                    <span class="user-balance">Bal : $202.25</span>
                                </div>
                                <div class="log-out-area">
                                    <a href="#">Log out</a>
                                </div>
                            </div>
                        </div>
                        <nav class="navbar navbar-expand-lg">

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="{{route("home")}}">
                                            Home
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route("home")}}">about us<span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown show">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" id="db-Dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            dashboard
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="db-Dropdown">
                                            <a class="dropdown-item" href="dashboard.html">My account</a>
                                            <a class="dropdown-item" href="db-investment.html">Investment</a>
                                            <a class="dropdown-item" href="db-withdraw.html">Withdraw</a>
                                            <a class="dropdown-item" href="db-history.html">History</a>
                                            <a class="dropdown-item" href="db-referral.html">Referrals</a>
                                            <a class="dropdown-item" href="db-settings.html">Settings</a>
                                        </div>
                                    </li>

{{--                                    <li class="nav-item dropdown show">--}}
{{--                                        <a class="nav-link dropdown-toggle" href="#" role="button" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                            pages--}}
{{--                                        </a>--}}
{{--                                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">--}}
{{--                                            <a class="dropdown-item" href="affiliate.html">Affiliate</a>--}}
{{--                                            <a class="dropdown-item" href="faq.html">Faq</a>--}}
{{--                                            <a class="dropdown-item" href="error.html">Error</a>--}}
{{--                                            <a class="dropdown-item" href="privacy-policy.html">privacy & policy</a>--}}
{{--                                            <a class="dropdown-item" href="transaction.html">transaction</a>--}}
{{--                                            <a class="dropdown-item" href="login.html">Login</a>--}}
{{--                                            <a class="dropdown-item" href="register.html">Register</a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}

                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route("home")}}" >
                                            Blog
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route("home")}}">contact</a>
                                    </li>
{{--                                    <li class="nav-item join-now-btn">--}}
{{--                                        <a class="nav-link" href="#">Join Now</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
