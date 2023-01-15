@if($routeName == "home")
<header id="header" class="u-header u-header--abs-top u-header--white-nav-links-xl u-header--bg-transparent u-header--show-hide border-bottom border-xl-bottom-0 border-color-white" data-header-fix-moment="500" data-header-fix-effect="slide">
    <div class="u-header__section u-header__shadow-on-show-hide">
        <!-- Topbar -->
        <div class="container-fluid u-header__hide-content u-header__topbar u-header__topbar-lg border-bottom border-color-white">
            <div class="d-flex align-items-center">
                <ul class="list-inline u-header__topbar-nav-divider mb-0">
                    <li class="list-inline-item mr-0"><a href="tel:(000)999-898-999" class="u-header__navbar-link">(000) 999 - 898 -999</a></li>
                    <li class="list-inline-item mr-0"><a href="mailto:info@mytravel.com" class="u-header__navbar-link">info@mytravel.com</a></li>
                </ul>
                <div class="ml-auto d-flex align-items-center">
                    <ul class="list-inline mb-0 mr-2 pr-1">
                        <li class="list-inline-item">
                            <a class="btn btn-sm btn-icon btn-pill btn-soft-white btn-bg-transparent transition-3d-hover" href="https://www.facebook.com/" target="_blank">
                                <span class="fab fa-facebook-f btn-icon__inner"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-sm btn-icon btn-pill btn-soft-white btn-bg-transparent transition-3d-hover" href="https://twitter.com/" target="_blank">
                                <span class="fab fa-twitter btn-icon__inner"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-sm btn-icon btn-pill btn-soft-white btn-bg-transparent transition-3d-hover" href="https://www.instagram.com/" target="_blank">
                                <span class="fab fa-instagram btn-icon__inner"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-sm btn-icon btn-pill btn-soft-white btn-bg-transparent transition-3d-hover" href="https://www.linkedin.com/" target="_blank">
                                <span class="fab fa-linkedin-in btn-icon__inner"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="position-relative px-3 u-header__login-form dropdown-connector-xl u-header__topbar-divider">
                        <a id="signUpDropdownInvoker"  href="javascript:;" class="d-flex align-items-center text-white py-3" aria-controls="signUpDropdown" aria-haspopup="true" aria-expanded="true" data-unfold-event="click" data-unfold-target="#signUpDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                            <i class="flaticon-user mr-2 ml-1 font-size-18"></i>
                            <span class="d-inline-block font-size-14 mr-1">Sign in or Register</span>
                        </a>
                        <div id="signUpDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right py-0 mt-0" aria-labelledby="signUpDropdownInvoker" style="min-width: 500px;">
                            <div class="card rounded-xs">
                                <form class="js-validate" novalidate="novalidate" method="post">
                                    <!-- Login -->
                                    <div id="login" style="opacity: 1;" data-target-group="idForm" class="animated fadeIn">
                                        <!-- Header -->
                                        <div class="card-header text-center">
                                            <h3 class="h5 mb-0 font-weight-semi-bold">Login</h3>
                                        </div>
                                        <!-- End Header -->
                                        <div class="card-body pt-6 pb-4">
                                            <!-- Form Group -->
                                            <div class="form-group pb-1">
                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                    <label class="sr-only" for="signinSrEmail">Email</label>
                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                        <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email Or Username" aria-label="Email Or Username" aria-describedby="signinEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                        <div class="input-group-append">
                                                                    <span class="input-group-text" id="signinEmail">
                                                                        <span class="far fa-envelope font-size-20"></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- Form Group -->
                                            <div class="form-group pb-1">
                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                    <label class="sr-only" for="signinSrPassword">Password</label>
                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                        <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                        <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="signinPassword">
                                                                        <span class="flaticon-password font-size-20"></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <div class="mb-3 pb-1">
                                                <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Login</button>
                                            </div>
                                            <div class="d-flex justify-content-between mb-1">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customCheckboxInline1">Remember me</label>
                                                </div>
                                                <a class="js-animation-link text-primary font-size-14" href="javascript:;" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn"><u>Forgot Password?</u></a>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="card-footer__top border-bottom border-color-8 py-3">
                                                <div class="text-center mt-2 mb-4 pb-1">
                                                    <span class="d-block text-gray-1 fontsize-14">or continue with</span>
                                                </div>
                                                <div class="d-flex mb-3">
                                                    <a class="btn btn-block btn-sm btn-facebook transition-3d-hover" href="index.html#">
                                                        <span class="fab fa-facebook-f mr-2"></span>
                                                        Facebook
                                                    </a>
                                                    <a class="btn btn-block btn-sm btn-twitter transition-3d-hover ml-5 mt-0" href="index.html#">
                                                        <span class="fab fa-twitter mr-2"></span>
                                                        Twitter
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="card-footer__bottom p-4 text-center font-size-14">
                                                <span class="text-gray-1">Do not have an account?</span>
                                                <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Login -->

                                    <!-- Signup -->
                                    <div id="signup" style="opacity: 0; display: none;" data-target-group="idForm">
                                        <!-- Header -->
                                        <div class="card-header text-center">
                                            <h3 class="h5 mb-0 font-weight-semi-bold">Register</h3>
                                        </div>
                                        <!-- End Header -->
                                        <div class="card-body pt-5 pb-4">
                                            <ul class="nav nav-default nav-pills nav-white nav-justified nav-rounded-pill font-weight-medium px-6 pb-5" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-one-code-sample-tab" data-toggle="pill" href="index.html#pills-one-code-sample" role="tab" aria-controls="pills-one-code-sample" aria-selected="true">Normal User</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-two-code-sample-tab" data-toggle="pill" href="index.html#pills-two-code-sample" role="tab" aria-controls="pills-two-code-sample" aria-selected="false">Partner User</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="pills-one-code-sample" role="tabpanel" aria-labelledby="pills-one-code-sample-tab">
                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="uname">User Name</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="text" class="form-control" name="uname" id="uname" placeholder="User Name" aria-label="User Name" aria-describedby="username" required="" data-msg="Please enter a valid user name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-append">
                                                                            <span class="input-group-text" id="username">
                                                                                <span class="flaticon-user font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="name">Full Name</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" aria-label="Full Name" aria-describedby="normalname" required="" data-msg="Please enter a valid name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-append">
                                                                            <span class="input-group-text" id="normalname">
                                                                                <span class="flaticon-browser-1 font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="signupSrEmail">Email</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="email" class="form-control" name="email" id="signupSrEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-append">
                                                                            <span class="input-group-text" id="signupEmail">
                                                                                <span class="far fa-envelope font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="signupSrPassword">Password</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="password" class="form-control" name="password" id="signupSrPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPassword">
                                                                                <span class="flaticon-password font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->
                                                    <div class="mb-3 pb-1">
                                                        <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Register</button>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" id="customCheckboxInline2" name="customCheckboxInline2" class="custom-control-input">
                                                            <label class="custom-control-label" for="customCheckboxInline2">I have read and accept the <a href="index.html#">Terms and Privacy Policy</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-two-code-sample" role="tabpanel" aria-labelledby="pills-two-code-sample-tab">
                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="puname">User Name</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="text" class="form-control" name="puname" id="puname" placeholder="User Name" aria-label="User Name" aria-describedby="partnerusername" required="" data-msg="Please enter a valid user name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-append">
                                                                            <span class="input-group-text" id="partnerusername">
                                                                                <span class="flaticon-user font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="pname">Full Name</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="text" class="form-control" name="pname" id="pname" placeholder="Full Name" aria-label="Full Name" aria-describedby="partnername" required="" data-msg="Please enter a valid name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-append">
                                                                            <span class="input-group-text" id="partnername">
                                                                                <span class="flaticon-browser-1 font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="signupPartnerSrEmail">Email</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="email" class="form-control" name="pemail" id="signupPartnerSrEmail" placeholder="Email" aria-label="Email" aria-describedby="signupPartnerEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-append">
                                                                            <span class="input-group-text" id="signupPartnerEmail">
                                                                                <span class="far fa-envelope font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="signupPartnerSrPassword">Password</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="password" class="form-control" name="Partnerpassword" id="signupPartnerSrPassword" placeholder="Password" aria-label="PartnerPassword" aria-describedby="signupPartnerPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPartnerPassword">
                                                                                <span class="flaticon-password font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="signupPartnerSrConfirmPassword">Confirm Password</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="password" class="form-control" name="confirmpartnerpassword" id="signupPartnerSrConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupPartnerConfirmPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPartnerConfirmPassword">
                                                                                <span class="fas fa-key font-size-20"></span>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->

                                                    <div class="mb-3 pb-1">
                                                        <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Register</button>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" id="customCheckboxInline3" name="customCheckboxInline3" class="custom-control-input">
                                                            <label class="custom-control-label" for="customCheckboxInline3">I have read and accept the <a href="index.html#">Terms and Privacy Policy</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="card-footer__top border-bottom border-color-8 py-3">
                                                <div class="text-center mt-2 mb-4 pb-1">
                                                    <span class="d-block text-gray-1 fontsize-14">or continue with</span>
                                                </div>
                                                <div class="d-flex mb-3">
                                                    <a class="btn btn-block btn-sm btn-facebook transition-3d-hover" href="index.html#">
                                                        <span class="fab fa-facebook-f mr-2"></span>
                                                        Facebook
                                                    </a>
                                                    <a class="btn btn-block btn-sm btn-twitter transition-3d-hover ml-5 mt-0" href="index.html#">
                                                        <span class="fab fa-twitter mr-2"></span>
                                                        Twitter
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="card-footer__bottom p-4 text-center font-size-14">
                                                <span class="text-gray-1">Already have an account?</span>
                                                <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Log In</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Signup -->

                                    <!-- Forgot Passwrd -->
                                    <div id="forgotPassword" style="opacity: 0; display: none;" data-target-group="idForm">
                                        <!-- Header -->
                                        <div class="card-header bg-light text-center py-3 px-5">
                                            <h3 class="h6 mb-0 font-weight-semi-bold">Recover password</h3>
                                        </div>
                                        <!-- End Header -->
                                        <div class="card-body px-10 py-5">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                    <label class="sr-only" for="recoverSrEmail">Your email</label>
                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                        <input type="email" class="form-control" name="email" id="recoverSrEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                        <div class="input-group-append">
                                                                    <span class="input-group-text" id="recoverEmail">
                                                                        <span class="far fa-envelope font-size-20"></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <div class="mb-2">
                                                <button type="submit" class="btn btn-sm btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Recover Password</button>
                                            </div>
                                            <div class="text-center font-size-14">
                                                <span class="text-gray-1">Remember your password?</span>
                                                <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Log In</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Forgot Passwrd -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative pl-3 language-switcher dropdown-connector-xl u-header__topbar-divider">
                        <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center ml-1 py-3" href="javascript:;" role="button" aria-controls="languageDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#languageDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                            <span class="d-inline-block">EUR</span>
                        </a>
                        <div id="languageDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right mt-0" aria-labelledby="languageDropdownInvoker">
                            <a class="dropdown-item" href="index.html#">USD</a>
                            <a class="dropdown-item active" href="index.html#">EUR</a>
                            <a class="dropdown-item" href="index.html#">TUR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <x-bar.nav-bar></x-bar.nav-bar>
    </div>
</header>
@else
    <header id="header" class="u-header u-header--dark-nav-links-xl u-header--show-hide-xl u-header--static-xl" data-header-fix-moment="500" data-header-fix-effect="slide">
        <div class="u-header__section u-header__shadow-on-show-hide py-4 py-xl-0">
            <!-- Topbar -->
            <div class="container-fluid u-header__hide-content u-header__topbar u-header__topbar-lg border-bottom border-color-8">
                <div class="d-flex align-items-center">
                    <ul class="list-inline list-inline-dark u-header__topbar-nav-divider--dark mb-0">
                        <li class="list-inline-item mr-0"><a href="tel:(000)999-898-999" class="u-header__navbar-link">(000) 999 - 898 -999</a></li>
                        <li class="list-inline-item mr-0"><a href="mailto:info@mytravel.com" class="u-header__navbar-link">info@mytravel.com</a></li>
                    </ul>
                    <div class="ml-auto d-flex align-items-center">
                        <ul class="list-inline mb-0 mr-2 pr-1">
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-pill btn-soft-dark btn-bg-transparent transition-3d-hover" href="https://www.facebook.com/" target="_blank">
                                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-pill btn-soft-dark btn-bg-transparent transition-3d-hover" href="https://twitter.com/" target="_blank">
                                    <span class="fab fa-twitter btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-pill btn-soft-dark btn-bg-transparent transition-3d-hover" href="https://www.instagram.com/" target="_blank">
                                    <span class="fab fa-instagram btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-pill btn-soft-dark btn-bg-transparent transition-3d-hover" href="https://www.linkedin.com/" target="_blank">
                                    <span class="fab fa-linkedin-in btn-icon__inner"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="position-relative px-3 u-header__login-form dropdown-connector-xl u-header__topbar-divider--dark">
                            <a id="signUpDropdownInvoker"  href="javascript:;" class="d-flex align-items-center text-dark" aria-controls="signUpDropdown" aria-haspopup="true" aria-expanded="true" data-unfold-event="click" data-unfold-target="#signUpDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                <i class="flaticon-user mr-2 ml-1 font-size-18"></i>
                                <span class="d-inline-block font-size-14 mr-1">Sign in or Register</span>
                            </a>
                            <div id="signUpDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right py-0 mt-0" aria-labelledby="signUpDropdownInvoker" style="min-width: 500px;">
                                <div class="card rounded-xs">
                                    <form class="js-validate" novalidate="novalidate" method="post">
                                        <!-- Login -->
                                        <div id="login" style="opacity: 1;" data-target-group="idForm" class="animated fadeIn">
                                            <!-- Header -->
                                            <div class="card-header text-center">
                                                <h3 class="h5 mb-0 font-weight-semi-bold">Login</h3>
                                            </div>
                                            <!-- End Header -->
                                            <div class="card-body pt-6 pb-4">
                                                <!-- Form Group -->
                                                <div class="form-group pb-1">
                                                    <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                        <label class="sr-only" for="signinSrEmail">Email</label>
                                                        <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                            <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email Or Username" aria-label="Email Or Username" aria-describedby="signinEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                            <div class="input-group-append">
                                                                    <span class="input-group-text" id="signinEmail">
                                                                        <span class="far fa-envelope font-size-20"></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Form Group -->
                                                <!-- Form Group -->
                                                <div class="form-group pb-1">
                                                    <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                        <label class="sr-only" for="signinSrPassword">Password</label>
                                                        <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                            <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                            <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="signinPassword">
                                                                        <span class="flaticon-password font-size-20"></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Form Group -->
                                                <div class="mb-3 pb-1">
                                                    <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Login</button>
                                                </div>
                                                <div class="d-flex justify-content-between mb-1">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customCheckboxInline1">Remember me</label>
                                                    </div>
                                                    <a class="js-animation-link text-primary font-size-14" href="javascript:;" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn"><u>Forgot Password?</u></a>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0">
                                                <div class="card-footer__top border-bottom border-color-8 py-3">
                                                    <div class="text-center mt-2 mb-4 pb-1">
                                                        <span class="d-block text-gray-1 fontsize-14">or continue with</span>
                                                    </div>
                                                    <div class="d-flex mb-3">
                                                        <a class="btn btn-block btn-sm btn-facebook transition-3d-hover" href="hotel-single-v2.html#">
                                                            <span class="fab fa-facebook-f mr-2"></span>
                                                            Facebook
                                                        </a>
                                                        <a class="btn btn-block btn-sm btn-twitter transition-3d-hover ml-5 mt-0" href="hotel-single-v2.html#">
                                                            <span class="fab fa-twitter mr-2"></span>
                                                            Twitter
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="card-footer__bottom p-4 text-center font-size-14">
                                                    <span class="text-gray-1">Do not have an account?</span>
                                                    <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Sign Up</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Login -->

                                        <!-- Signup -->
                                        <div id="signup" style="opacity: 0; display: none;" data-target-group="idForm">
                                            <!-- Header -->
                                            <div class="card-header text-center">
                                                <h3 class="h5 mb-0 font-weight-semi-bold">Register</h3>
                                            </div>
                                            <!-- End Header -->
                                            <div class="card-body pt-5 pb-4">
                                                <ul class="nav nav-default nav-pills nav-white nav-justified nav-rounded-pill font-weight-medium px-6 pb-5" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-one-code-sample-tab" data-toggle="pill" href="hotel-single-v2.html#pills-one-code-sample" role="tab" aria-controls="pills-one-code-sample" aria-selected="true">Normal User</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-two-code-sample-tab" data-toggle="pill" href="hotel-single-v2.html#pills-two-code-sample" role="tab" aria-controls="pills-two-code-sample" aria-selected="false">Partner User</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane fade active show" id="pills-one-code-sample" role="tabpanel" aria-labelledby="pills-one-code-sample-tab">
                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="uname">User Name</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="text" class="form-control" name="uname" id="uname" placeholder="User Name" aria-label="User Name" aria-describedby="username" required="" data-msg="Please enter a valid user name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-append">
                                                                            <span class="input-group-text" id="username">
                                                                                <span class="flaticon-user font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->

                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="name">Full Name</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" aria-label="Full Name" aria-describedby="normalname" required="" data-msg="Please enter a valid name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-append">
                                                                            <span class="input-group-text" id="normalname">
                                                                                <span class="flaticon-browser-1 font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->

                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="signupSrEmail">Email</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="email" class="form-control" name="email" id="signupSrEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-append">
                                                                            <span class="input-group-text" id="signupEmail">
                                                                                <span class="far fa-envelope font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->

                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="signupSrPassword">Password</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="password" class="form-control" name="password" id="signupSrPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPassword">
                                                                                <span class="flaticon-password font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->
                                                        <div class="mb-3 pb-1">
                                                            <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Register</button>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" id="customCheckboxInline2" name="customCheckboxInline2" class="custom-control-input">
                                                                <label class="custom-control-label" for="customCheckboxInline2">I have read and accept the <a href="hotel-single-v2.html#">Terms and Privacy Policy</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-two-code-sample" role="tabpanel" aria-labelledby="pills-two-code-sample-tab">
                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="puname">User Name</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="text" class="form-control" name="puname" id="puname" placeholder="User Name" aria-label="User Name" aria-describedby="partnerusername" required="" data-msg="Please enter a valid user name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-append">
                                                                            <span class="input-group-text" id="partnerusername">
                                                                                <span class="flaticon-user font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->

                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="pname">Full Name</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="text" class="form-control" name="pname" id="pname" placeholder="Full Name" aria-label="Full Name" aria-describedby="partnername" required="" data-msg="Please enter a valid name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-append">
                                                                            <span class="input-group-text" id="partnername">
                                                                                <span class="flaticon-browser-1 font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->

                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="signupPartnerSrEmail">Email</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="email" class="form-control" name="pemail" id="signupPartnerSrEmail" placeholder="Email" aria-label="Email" aria-describedby="signupPartnerEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-append">
                                                                            <span class="input-group-text" id="signupPartnerEmail">
                                                                                <span class="far fa-envelope font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->

                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="signupPartnerSrPassword">Password</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="password" class="form-control" name="Partnerpassword" id="signupPartnerSrPassword" placeholder="Password" aria-label="PartnerPassword" aria-describedby="signupPartnerPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPartnerPassword">
                                                                                <span class="flaticon-password font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->

                                                        <!-- Form Group -->
                                                        <div class="form-group pb-1">
                                                            <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                <label class="sr-only" for="signupPartnerSrConfirmPassword">Confirm Password</label>
                                                                <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                    <input type="password" class="form-control" name="confirmpartnerpassword" id="signupPartnerSrConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupPartnerConfirmPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                    <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPartnerConfirmPassword">
                                                                                <span class="fas fa-key font-size-20"></span>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Form Group -->

                                                        <div class="mb-3 pb-1">
                                                            <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Register</button>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" id="customCheckboxInline3" name="customCheckboxInline3" class="custom-control-input">
                                                                <label class="custom-control-label" for="customCheckboxInline3">I have read and accept the <a href="hotel-single-v2.html#">Terms and Privacy Policy</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0">
                                                <div class="card-footer__top border-bottom border-color-8 py-3">
                                                    <div class="text-center mt-2 mb-4 pb-1">
                                                        <span class="d-block text-gray-1 fontsize-14">or continue with</span>
                                                    </div>
                                                    <div class="d-flex mb-3">
                                                        <a class="btn btn-block btn-sm btn-facebook transition-3d-hover" href="hotel-single-v2.html#">
                                                            <span class="fab fa-facebook-f mr-2"></span>
                                                            Facebook
                                                        </a>
                                                        <a class="btn btn-block btn-sm btn-twitter transition-3d-hover ml-5 mt-0" href="hotel-single-v2.html#">
                                                            <span class="fab fa-twitter mr-2"></span>
                                                            Twitter
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="card-footer__bottom p-4 text-center font-size-14">
                                                    <span class="text-gray-1">Already have an account?</span>
                                                    <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Log In</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Signup -->

                                        <!-- Forgot Passwrd -->
                                        <div id="forgotPassword" style="opacity: 0; display: none;" data-target-group="idForm">
                                            <!-- Header -->
                                            <div class="card-header bg-light text-center py-3 px-5">
                                                <h3 class="h6 mb-0 font-weight-semi-bold">Recover password</h3>
                                            </div>
                                            <!-- End Header -->
                                            <div class="card-body px-10 py-5">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                        <label class="sr-only" for="recoverSrEmail">Your email</label>
                                                        <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                            <input type="email" class="form-control" name="email" id="recoverSrEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                            <div class="input-group-append">
                                                                    <span class="input-group-text" id="recoverEmail">
                                                                        <span class="far fa-envelope font-size-20"></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Form Group -->
                                                <div class="mb-2">
                                                    <button type="submit" class="btn btn-sm btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Recover Password</button>
                                                </div>
                                                <div class="text-center font-size-14">
                                                    <span class="text-gray-1">Remember your password?</span>
                                                    <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Log In</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Forgot Passwrd -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative pl-3 language-switcher dropdown-connector-xl u-header__topbar-divider--dark">
                            <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center ml-1" href="javascript:;" role="button" aria-controls="languageDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#languageDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                <span class="d-inline-block">EUR</span>
                            </a>
                            <div id="languageDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right mt-0" aria-labelledby="languageDropdownInvoker">
                                <a class="dropdown-item" href="hotel-single-v2.html#">USD</a>
                                <a class="dropdown-item active" href="hotel-single-v2.html#">EUR</a>
                                <a class="dropdown-item" href="hotel-single-v2.html#">TUR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar -->
            <x-bar.nav-bar></x-bar.nav-bar>
        </div>
    </header>

@endif
