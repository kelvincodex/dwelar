@if($routeName == "home")
<div id="logoAndNav" class="container-fluid py-1 py-xl-0">
    <!-- Nav -->
    <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space">
        <!-- My Account -->
        <a href="../others/about.html" class="text-white d-xl-none font-size-20 scroll-icon">
            <i class="flaticon-user"></i>
        </a>
        <!-- End My Account -->

        <!-- Logo -->
        <a class="navbar-brand u-header__navbar-brand-default u-header__navbar-brand-center u-header__navbar-brand-text-white mr-0 mr-xl-5" href="index.html" aria-label="MyTravel">
            <svg class="d-none d-xl-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55px" height="53px" style="margin-bottom: 0;">
                <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                      d="M53.175,51.207 C50.755,53.610 46.848,53.595 44.448,51.172 L40.766,47.484 C40.378,47.082 40.378,46.443 40.766,46.041 C41.164,45.629 41.821,45.617 42.233,46.016 L45.915,49.702 C47.503,51.246 50.030,51.246 51.619,49.703 C53.243,48.125 53.283,45.529 51.708,43.902 L50.100,42.292 C49.712,41.889 49.712,41.251 50.100,40.849 C50.498,40.436 51.155,40.425 51.567,40.823 L53.174,42.433 C53.186,42.445 53.198,42.456 53.210,42.469 C55.610,44.892 55.594,48.804 53.175,51.207 ZM47.857,37.404 C47.757,37.404 47.657,37.389 47.561,37.360 C47.561,37.360 47.561,37.360 47.561,37.360 C47.012,37.196 46.700,36.617 46.864,36.068 C48.542,30.412 47.740,24.310 44.659,19.281 C38.665,9.497 25.886,6.432 16.116,12.434 C16.085,12.456 16.054,12.475 16.021,12.493 C15.518,12.767 14.888,12.581 14.614,12.078 C14.340,11.574 14.526,10.943 15.029,10.669 C18.623,8.455 22.761,7.284 26.981,7.287 C29.178,7.289 31.363,7.608 33.469,8.234 C45.556,11.831 52.442,24.559 48.851,36.662 C48.719,37.102 48.315,37.403 47.857,37.404 ZM13.802,8.022 L12.765,6.983 C12.377,6.581 12.377,5.943 12.765,5.540 C13.163,5.128 13.820,5.117 14.232,5.515 L15.269,6.553 C15.657,6.956 15.657,7.594 15.269,7.996 C14.871,8.409 14.214,8.420 13.802,8.022 ZM9.654,3.868 L9.084,3.297 C7.495,1.753 4.968,1.752 3.379,3.296 C1.755,4.874 1.715,7.470 3.291,9.096 L10.083,15.900 C10.278,16.094 10.387,16.358 10.387,16.634 C10.387,17.208 9.923,17.672 9.350,17.672 C9.075,17.672 8.812,17.563 8.617,17.368 L1.824,10.566 C1.812,10.554 1.800,10.542 1.788,10.530 C-0.611,8.107 -0.596,4.195 1.824,1.792 C4.243,-0.611 8.150,-0.596 10.550,1.827 L11.121,2.400 C11.129,2.408 11.138,2.416 11.146,2.425 C11.544,2.838 11.533,3.495 11.121,3.894 C10.709,4.292 10.052,4.280 9.654,3.868 ZM7.742,19.850 C8.260,20.096 8.480,20.715 8.234,21.233 C5.232,27.580 5.635,35.016 9.305,41.001 C15.302,50.780 28.080,53.839 37.845,47.834 C37.876,47.813 37.908,47.793 37.940,47.775 C38.444,47.501 39.073,47.687 39.347,48.191 C39.621,48.695 39.435,49.326 38.932,49.599 C35.338,51.814 31.200,52.984 26.981,52.981 C23.606,52.979 20.273,52.228 17.223,50.782 C5.829,45.380 0.966,31.751 6.360,20.342 C6.606,19.824 7.225,19.603 7.742,19.850 ZM40.262,35.347 C40.601,35.280 40.951,35.387 41.196,35.631 L43.270,37.708 C43.675,38.113 43.675,38.771 43.270,39.176 L39.551,42.900 C37.191,45.264 33.364,45.264 31.004,42.900 L24.906,36.795 L21.491,40.215 C21.086,40.620 20.430,40.620 20.025,40.215 L17.951,38.138 C17.719,37.905 17.612,37.576 17.660,37.251 L18.624,30.501 L12.590,24.460 C11.040,22.907 11.040,20.390 12.590,18.837 C14.141,17.285 16.654,17.285 18.205,18.837 L24.077,24.716 L35.851,18.820 C36.250,18.620 36.732,18.699 37.048,19.015 L39.122,21.092 C39.527,21.498 39.527,22.155 39.122,22.561 L30.521,31.173 L35.622,36.277 L40.262,35.347 ZM20.758,38.012 L23.440,35.327 L20.454,32.337 L19.784,37.036 L20.758,38.012 ZM34.541,38.138 L28.318,31.907 C27.914,31.501 27.914,30.844 28.318,30.439 L36.919,21.826 L36.107,21.013 L24.333,26.910 C23.934,27.109 23.452,27.031 23.136,26.715 L16.735,20.306 C16.379,19.949 15.897,19.749 15.394,19.750 C14.347,19.750 13.498,20.600 13.499,21.649 C13.496,22.153 13.695,22.638 14.051,22.995 L20.449,29.401 L25.635,34.593 L32.464,41.432 C34.014,42.984 36.528,42.984 38.078,41.432 L41.064,38.442 L40.115,37.492 L35.474,38.421 C35.135,38.488 34.786,38.382 34.541,38.138 Z"/>
            </svg>
            <svg class="d-xl-none"
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 width="43px" height="42px"
                 style="margin-bottom: 0;">
                <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                      d="M41.386,40.588 C39.503,42.459 36.462,42.447 34.594,40.561 L31.729,37.691 C31.427,37.378 31.427,36.881 31.729,36.568 C32.038,36.247 32.549,36.238 32.870,36.548 L35.735,39.417 C36.972,40.619 38.938,40.619 40.175,39.418 C41.439,38.190 41.470,36.169 40.244,34.903 L38.993,33.649 C38.691,33.336 38.691,32.840 38.993,32.527 C39.303,32.205 39.814,32.197 40.134,32.507 L41.386,33.760 C41.395,33.768 41.404,33.778 41.413,33.787 C43.281,35.673 43.269,38.718 41.386,40.588 ZM37.247,29.845 C37.169,29.845 37.092,29.834 37.017,29.811 C37.017,29.811 37.017,29.811 37.017,29.811 C36.590,29.684 36.347,29.233 36.474,28.806 C37.780,24.404 37.156,19.654 34.758,15.740 C30.093,8.126 20.147,5.740 12.543,10.411 C12.519,10.428 12.495,10.443 12.469,10.458 C12.077,10.671 11.587,10.526 11.374,10.134 C11.161,9.742 11.306,9.251 11.697,9.038 C14.494,7.314 17.715,6.403 20.999,6.406 C22.709,6.407 24.410,6.655 26.049,7.143 C35.456,9.942 40.816,19.848 38.021,29.268 C37.918,29.610 37.604,29.845 37.247,29.845 ZM10.742,6.977 L9.935,6.169 C9.633,5.856 9.633,5.359 9.935,5.046 C10.245,4.725 10.756,4.716 11.077,5.026 L11.884,5.834 C12.186,6.148 12.186,6.644 11.884,6.957 C11.574,7.278 11.063,7.287 10.742,6.977 ZM7.514,3.744 L7.070,3.299 C5.833,2.098 3.867,2.098 2.630,3.299 C1.366,4.527 1.335,6.548 2.561,7.814 L7.848,13.109 C7.999,13.260 8.084,13.466 8.084,13.680 C8.084,14.127 7.723,14.488 7.277,14.488 C7.063,14.488 6.858,14.403 6.707,14.251 L1.420,8.957 C1.410,8.948 1.401,8.939 1.392,8.929 C-0.476,7.044 -0.464,3.999 1.419,2.129 C3.302,0.258 6.343,0.270 8.211,2.156 L8.655,2.601 C8.662,2.608 8.669,2.614 8.675,2.621 C8.985,2.943 8.976,3.454 8.655,3.764 C8.335,4.074 7.823,4.065 7.514,3.744 ZM6.026,16.183 C6.429,16.374 6.600,16.857 6.409,17.260 C4.072,22.199 4.385,27.987 7.242,32.645 C11.909,40.256 21.854,42.637 29.455,37.963 C29.479,37.947 29.504,37.931 29.529,37.917 C29.921,37.704 30.411,37.849 30.624,38.241 C30.837,38.633 30.692,39.124 30.301,39.337 C27.504,41.060 24.283,41.971 20.999,41.969 C18.372,41.967 15.778,41.383 13.404,40.258 C4.536,36.053 0.751,25.446 4.950,16.566 C5.142,16.163 5.623,15.991 6.026,16.183 ZM31.336,28.245 C31.600,28.193 31.872,28.275 32.063,28.466 L33.677,30.082 C33.992,30.398 33.992,30.909 33.677,31.225 L30.783,34.123 C28.946,35.963 25.967,35.963 24.130,34.123 L19.385,29.372 L16.727,32.033 C16.412,32.348 15.901,32.348 15.585,32.033 L13.971,30.417 C13.791,30.235 13.707,29.979 13.745,29.726 L14.495,24.473 L9.799,19.771 C8.592,18.563 8.592,16.603 9.799,15.395 C11.006,14.187 12.962,14.187 14.169,15.395 L18.739,19.970 L27.903,15.381 C28.214,15.226 28.589,15.287 28.834,15.533 L30.449,17.150 C30.764,17.465 30.764,17.977 30.449,18.293 L23.755,24.996 L27.724,28.968 L31.336,28.245 ZM16.156,30.318 L18.243,28.228 L15.920,25.902 L15.398,29.559 L16.156,30.318 ZM26.883,30.417 L22.040,25.567 C21.725,25.251 21.725,24.740 22.040,24.424 L28.734,17.721 L28.102,17.089 L18.938,21.678 C18.628,21.833 18.252,21.772 18.007,21.526 L13.025,16.538 C12.748,16.260 12.372,16.105 11.981,16.105 C11.166,16.105 10.506,16.767 10.506,17.583 C10.504,17.976 10.659,18.353 10.936,18.631 L15.916,23.617 L19.951,27.658 L25.267,32.980 C26.473,34.189 28.430,34.189 29.636,32.980 L31.960,30.653 L31.222,29.914 L27.610,30.637 C27.346,30.689 27.074,30.606 26.883,30.417 Z"/>
            </svg>
            <span class="u-header__navbar-brand-text">{{env("APP_NAME")}}</span>
        </a>
        <!-- End Logo -->

        <!-- Handheld Logo -->
        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-collapsed" href="index.html" aria-label="MyTravel">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55px" height="53px" style="margin-bottom: 0;">
                <path fill-rule="evenodd"  class="fill-primary"
                      d="M53.175,51.207 C50.755,53.610 46.848,53.595 44.448,51.172 L40.766,47.484 C40.378,47.082 40.378,46.443 40.766,46.041 C41.164,45.629 41.821,45.617 42.233,46.016 L45.915,49.702 C47.503,51.246 50.030,51.246 51.619,49.703 C53.243,48.125 53.283,45.529 51.708,43.902 L50.100,42.292 C49.712,41.889 49.712,41.251 50.100,40.849 C50.498,40.436 51.155,40.425 51.567,40.823 L53.174,42.433 C53.186,42.445 53.198,42.456 53.210,42.469 C55.610,44.892 55.594,48.804 53.175,51.207 ZM47.857,37.404 C47.757,37.404 47.657,37.389 47.561,37.360 C47.561,37.360 47.561,37.360 47.561,37.360 C47.012,37.196 46.700,36.617 46.864,36.068 C48.542,30.412 47.740,24.310 44.659,19.281 C38.665,9.497 25.886,6.432 16.116,12.434 C16.085,12.456 16.054,12.475 16.021,12.493 C15.518,12.767 14.888,12.581 14.614,12.078 C14.340,11.574 14.526,10.943 15.029,10.669 C18.623,8.455 22.761,7.284 26.981,7.287 C29.178,7.289 31.363,7.608 33.469,8.234 C45.556,11.831 52.442,24.559 48.851,36.662 C48.719,37.102 48.315,37.403 47.857,37.404 ZM13.802,8.022 L12.765,6.983 C12.377,6.581 12.377,5.943 12.765,5.540 C13.163,5.128 13.820,5.117 14.232,5.515 L15.269,6.553 C15.657,6.956 15.657,7.594 15.269,7.996 C14.871,8.409 14.214,8.420 13.802,8.022 ZM9.654,3.868 L9.084,3.297 C7.495,1.753 4.968,1.752 3.379,3.296 C1.755,4.874 1.715,7.470 3.291,9.096 L10.083,15.900 C10.278,16.094 10.387,16.358 10.387,16.634 C10.387,17.208 9.923,17.672 9.350,17.672 C9.075,17.672 8.812,17.563 8.617,17.368 L1.824,10.566 C1.812,10.554 1.800,10.542 1.788,10.530 C-0.611,8.107 -0.596,4.195 1.824,1.792 C4.243,-0.611 8.150,-0.596 10.550,1.827 L11.121,2.400 C11.129,2.408 11.138,2.416 11.146,2.425 C11.544,2.838 11.533,3.495 11.121,3.894 C10.709,4.292 10.052,4.280 9.654,3.868 ZM7.742,19.850 C8.260,20.096 8.480,20.715 8.234,21.233 C5.232,27.580 5.635,35.016 9.305,41.001 C15.302,50.780 28.080,53.839 37.845,47.834 C37.876,47.813 37.908,47.793 37.940,47.775 C38.444,47.501 39.073,47.687 39.347,48.191 C39.621,48.695 39.435,49.326 38.932,49.599 C35.338,51.814 31.200,52.984 26.981,52.981 C23.606,52.979 20.273,52.228 17.223,50.782 C5.829,45.380 0.966,31.751 6.360,20.342 C6.606,19.824 7.225,19.603 7.742,19.850 ZM40.262,35.347 C40.601,35.280 40.951,35.387 41.196,35.631 L43.270,37.708 C43.675,38.113 43.675,38.771 43.270,39.176 L39.551,42.900 C37.191,45.264 33.364,45.264 31.004,42.900 L24.906,36.795 L21.491,40.215 C21.086,40.620 20.430,40.620 20.025,40.215 L17.951,38.138 C17.719,37.905 17.612,37.576 17.660,37.251 L18.624,30.501 L12.590,24.460 C11.040,22.907 11.040,20.390 12.590,18.837 C14.141,17.285 16.654,17.285 18.205,18.837 L24.077,24.716 L35.851,18.820 C36.250,18.620 36.732,18.699 37.048,19.015 L39.122,21.092 C39.527,21.498 39.527,22.155 39.122,22.561 L30.521,31.173 L35.622,36.277 L40.262,35.347 ZM20.758,38.012 L23.440,35.327 L20.454,32.337 L19.784,37.036 L20.758,38.012 ZM34.541,38.138 L28.318,31.907 C27.914,31.501 27.914,30.844 28.318,30.439 L36.919,21.826 L36.107,21.013 L24.333,26.910 C23.934,27.109 23.452,27.031 23.136,26.715 L16.735,20.306 C16.379,19.949 15.897,19.749 15.394,19.750 C14.347,19.750 13.498,20.600 13.499,21.649 C13.496,22.153 13.695,22.638 14.051,22.995 L20.449,29.401 L25.635,34.593 L32.464,41.432 C34.014,42.984 36.528,42.984 38.078,41.432 L41.064,38.442 L40.115,37.492 L35.474,38.421 C35.135,38.488 34.786,38.382 34.541,38.138 Z"/>
            </svg>
            <span class="u-header__navbar-brand-text">{{env("APP_NAME")}}</span>
        </a>
        <!-- End Handheld Logo -->

        <!-- Scroll Logo -->
        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-on-scroll" href="index.html" aria-label="MyTravel">
            <svg class="d-none d-xl-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55px" height="53px" style="margin-bottom: 0;">
                <path fill-rule="evenodd"  class="fill-primary"
                      d="M53.175,51.207 C50.755,53.610 46.848,53.595 44.448,51.172 L40.766,47.484 C40.378,47.082 40.378,46.443 40.766,46.041 C41.164,45.629 41.821,45.617 42.233,46.016 L45.915,49.702 C47.503,51.246 50.030,51.246 51.619,49.703 C53.243,48.125 53.283,45.529 51.708,43.902 L50.100,42.292 C49.712,41.889 49.712,41.251 50.100,40.849 C50.498,40.436 51.155,40.425 51.567,40.823 L53.174,42.433 C53.186,42.445 53.198,42.456 53.210,42.469 C55.610,44.892 55.594,48.804 53.175,51.207 ZM47.857,37.404 C47.757,37.404 47.657,37.389 47.561,37.360 C47.561,37.360 47.561,37.360 47.561,37.360 C47.012,37.196 46.700,36.617 46.864,36.068 C48.542,30.412 47.740,24.310 44.659,19.281 C38.665,9.497 25.886,6.432 16.116,12.434 C16.085,12.456 16.054,12.475 16.021,12.493 C15.518,12.767 14.888,12.581 14.614,12.078 C14.340,11.574 14.526,10.943 15.029,10.669 C18.623,8.455 22.761,7.284 26.981,7.287 C29.178,7.289 31.363,7.608 33.469,8.234 C45.556,11.831 52.442,24.559 48.851,36.662 C48.719,37.102 48.315,37.403 47.857,37.404 ZM13.802,8.022 L12.765,6.983 C12.377,6.581 12.377,5.943 12.765,5.540 C13.163,5.128 13.820,5.117 14.232,5.515 L15.269,6.553 C15.657,6.956 15.657,7.594 15.269,7.996 C14.871,8.409 14.214,8.420 13.802,8.022 ZM9.654,3.868 L9.084,3.297 C7.495,1.753 4.968,1.752 3.379,3.296 C1.755,4.874 1.715,7.470 3.291,9.096 L10.083,15.900 C10.278,16.094 10.387,16.358 10.387,16.634 C10.387,17.208 9.923,17.672 9.350,17.672 C9.075,17.672 8.812,17.563 8.617,17.368 L1.824,10.566 C1.812,10.554 1.800,10.542 1.788,10.530 C-0.611,8.107 -0.596,4.195 1.824,1.792 C4.243,-0.611 8.150,-0.596 10.550,1.827 L11.121,2.400 C11.129,2.408 11.138,2.416 11.146,2.425 C11.544,2.838 11.533,3.495 11.121,3.894 C10.709,4.292 10.052,4.280 9.654,3.868 ZM7.742,19.850 C8.260,20.096 8.480,20.715 8.234,21.233 C5.232,27.580 5.635,35.016 9.305,41.001 C15.302,50.780 28.080,53.839 37.845,47.834 C37.876,47.813 37.908,47.793 37.940,47.775 C38.444,47.501 39.073,47.687 39.347,48.191 C39.621,48.695 39.435,49.326 38.932,49.599 C35.338,51.814 31.200,52.984 26.981,52.981 C23.606,52.979 20.273,52.228 17.223,50.782 C5.829,45.380 0.966,31.751 6.360,20.342 C6.606,19.824 7.225,19.603 7.742,19.850 ZM40.262,35.347 C40.601,35.280 40.951,35.387 41.196,35.631 L43.270,37.708 C43.675,38.113 43.675,38.771 43.270,39.176 L39.551,42.900 C37.191,45.264 33.364,45.264 31.004,42.900 L24.906,36.795 L21.491,40.215 C21.086,40.620 20.430,40.620 20.025,40.215 L17.951,38.138 C17.719,37.905 17.612,37.576 17.660,37.251 L18.624,30.501 L12.590,24.460 C11.040,22.907 11.040,20.390 12.590,18.837 C14.141,17.285 16.654,17.285 18.205,18.837 L24.077,24.716 L35.851,18.820 C36.250,18.620 36.732,18.699 37.048,19.015 L39.122,21.092 C39.527,21.498 39.527,22.155 39.122,22.561 L30.521,31.173 L35.622,36.277 L40.262,35.347 ZM20.758,38.012 L23.440,35.327 L20.454,32.337 L19.784,37.036 L20.758,38.012 ZM34.541,38.138 L28.318,31.907 C27.914,31.501 27.914,30.844 28.318,30.439 L36.919,21.826 L36.107,21.013 L24.333,26.910 C23.934,27.109 23.452,27.031 23.136,26.715 L16.735,20.306 C16.379,19.949 15.897,19.749 15.394,19.750 C14.347,19.750 13.498,20.600 13.499,21.649 C13.496,22.153 13.695,22.638 14.051,22.995 L20.449,29.401 L25.635,34.593 L32.464,41.432 C34.014,42.984 36.528,42.984 38.078,41.432 L41.064,38.442 L40.115,37.492 L35.474,38.421 C35.135,38.488 34.786,38.382 34.541,38.138 Z"/>
            </svg>
            <svg class="d-xl-none"
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 width="43px" height="42px"
                 style="margin-bottom: 0;">
                <path fill-rule="evenodd"  class="fill-primary"
                      d="M41.386,40.588 C39.503,42.459 36.462,42.447 34.594,40.561 L31.729,37.691 C31.427,37.378 31.427,36.881 31.729,36.568 C32.038,36.247 32.549,36.238 32.870,36.548 L35.735,39.417 C36.972,40.619 38.938,40.619 40.175,39.418 C41.439,38.190 41.470,36.169 40.244,34.903 L38.993,33.649 C38.691,33.336 38.691,32.840 38.993,32.527 C39.303,32.205 39.814,32.197 40.134,32.507 L41.386,33.760 C41.395,33.768 41.404,33.778 41.413,33.787 C43.281,35.673 43.269,38.718 41.386,40.588 ZM37.247,29.845 C37.169,29.845 37.092,29.834 37.017,29.811 C37.017,29.811 37.017,29.811 37.017,29.811 C36.590,29.684 36.347,29.233 36.474,28.806 C37.780,24.404 37.156,19.654 34.758,15.740 C30.093,8.126 20.147,5.740 12.543,10.411 C12.519,10.428 12.495,10.443 12.469,10.458 C12.077,10.671 11.587,10.526 11.374,10.134 C11.161,9.742 11.306,9.251 11.697,9.038 C14.494,7.314 17.715,6.403 20.999,6.406 C22.709,6.407 24.410,6.655 26.049,7.143 C35.456,9.942 40.816,19.848 38.021,29.268 C37.918,29.610 37.604,29.845 37.247,29.845 ZM10.742,6.977 L9.935,6.169 C9.633,5.856 9.633,5.359 9.935,5.046 C10.245,4.725 10.756,4.716 11.077,5.026 L11.884,5.834 C12.186,6.148 12.186,6.644 11.884,6.957 C11.574,7.278 11.063,7.287 10.742,6.977 ZM7.514,3.744 L7.070,3.299 C5.833,2.098 3.867,2.098 2.630,3.299 C1.366,4.527 1.335,6.548 2.561,7.814 L7.848,13.109 C7.999,13.260 8.084,13.466 8.084,13.680 C8.084,14.127 7.723,14.488 7.277,14.488 C7.063,14.488 6.858,14.403 6.707,14.251 L1.420,8.957 C1.410,8.948 1.401,8.939 1.392,8.929 C-0.476,7.044 -0.464,3.999 1.419,2.129 C3.302,0.258 6.343,0.270 8.211,2.156 L8.655,2.601 C8.662,2.608 8.669,2.614 8.675,2.621 C8.985,2.943 8.976,3.454 8.655,3.764 C8.335,4.074 7.823,4.065 7.514,3.744 ZM6.026,16.183 C6.429,16.374 6.600,16.857 6.409,17.260 C4.072,22.199 4.385,27.987 7.242,32.645 C11.909,40.256 21.854,42.637 29.455,37.963 C29.479,37.947 29.504,37.931 29.529,37.917 C29.921,37.704 30.411,37.849 30.624,38.241 C30.837,38.633 30.692,39.124 30.301,39.337 C27.504,41.060 24.283,41.971 20.999,41.969 C18.372,41.967 15.778,41.383 13.404,40.258 C4.536,36.053 0.751,25.446 4.950,16.566 C5.142,16.163 5.623,15.991 6.026,16.183 ZM31.336,28.245 C31.600,28.193 31.872,28.275 32.063,28.466 L33.677,30.082 C33.992,30.398 33.992,30.909 33.677,31.225 L30.783,34.123 C28.946,35.963 25.967,35.963 24.130,34.123 L19.385,29.372 L16.727,32.033 C16.412,32.348 15.901,32.348 15.585,32.033 L13.971,30.417 C13.791,30.235 13.707,29.979 13.745,29.726 L14.495,24.473 L9.799,19.771 C8.592,18.563 8.592,16.603 9.799,15.395 C11.006,14.187 12.962,14.187 14.169,15.395 L18.739,19.970 L27.903,15.381 C28.214,15.226 28.589,15.287 28.834,15.533 L30.449,17.150 C30.764,17.465 30.764,17.977 30.449,18.293 L23.755,24.996 L27.724,28.968 L31.336,28.245 ZM16.156,30.318 L18.243,28.228 L15.920,25.902 L15.398,29.559 L16.156,30.318 ZM26.883,30.417 L22.040,25.567 C21.725,25.251 21.725,24.740 22.040,24.424 L28.734,17.721 L28.102,17.089 L18.938,21.678 C18.628,21.833 18.252,21.772 18.007,21.526 L13.025,16.538 C12.748,16.260 12.372,16.105 11.981,16.105 C11.166,16.105 10.506,16.767 10.506,17.583 C10.504,17.976 10.659,18.353 10.936,18.631 L15.916,23.617 L19.951,27.658 L25.267,32.980 C26.473,34.189 28.430,34.189 29.636,32.980 L31.960,30.653 L31.222,29.914 L27.610,30.637 C27.346,30.689 27.074,30.606 26.883,30.417 Z"/>
            </svg>
            <span class="u-header__navbar-brand-text">{{env("APP_NAME")}}</span>
        </a>
        <!-- End Scroll Logo -->

        <!-- Search Form -->
        <div class="position-relative u-header__search-lg u-header__hide-content pl-2 ml-2">
            <a id="searchSlideDownInvoker" class="d-block u-search-slide-down-trigger" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="searchSlideDown" data-unfold-type="css-animation" data-unfold-hide-on-scroll="false" data-unfold-target="#searchSlideDown" data-unfold-animation-in="active" data-unfold-animation-out="fadeOutUp" data-unfold-delay="0" data-unfold-duration="800" data-unfold-overlay='{ "className": "u-search-slide-down-bg-overlay", "background": "rgba(59, 68, 79, 0.851)", "animationSpeed": 400 }'>
                <div class="d-flex align-items-center">
                    <span class="text-white min-width-220">Destination, tour, hotel, etc</span>
                    <span class="d-flex align-items-center text-white p-0">
                                        <span class="flaticon-magnifying-glass font-size-20"></span>
                                    </span>
                </div>
            </a>
            <!-- Search Content -->
            <div id="searchSlideDown" class="dropdown-unfold u-search-slide-down" aria-labelledby="searchSlideDownInvoker">
                <form class="rounded-xs overflow-hidden">
                    <!-- Input Group -->
                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless u-search-slide-down__input rounded-0 px-1">
                        <input type="search" class="form-control" placeholder="Destination, tour, hotel, etc" aria-label="Destination, tour, hotel, etc">
                        <div class="input-group-append">
                            <button type="submit" class="btn py-0">
                                <span class="flaticon-magnifying-glass font-size-20"></span>
                            </button>
                        </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Suggestions Content -->
                    <div class="rounded-0 bg-white u-search-slide-down__suggestions py-3">
                        <ul class="list-group list-group-flush list-group-borderless mb-1">
                            <li>
                                <a class="list-group-item list-group-item-action" href="index.html">
                                                    <span class="btn btn-icon btn-medium btn-blue rounded-circle">
                                                        <span class="flaticon-pin-1 btn-icon__inner"></span>
                                                    </span>
                                    <span>London</span>
                                    <span class="ml-auto font-size-14 text-gray-1 mr-1">United kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action" href="index.html">
                                                    <span class="btn btn-icon btn-medium btn-blue rounded-circle">
                                                        <span class="flaticon-pin-1 btn-icon__inner"></span>
                                                    </span>
                                    <span>New York</span>
                                    <span class="ml-auto font-size-14 text-gray-1 mr-1">United States</span>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action" href="index.html">
                                                    <span class="btn btn-icon btn-medium btn-blue rounded-circle">
                                                        <span class="flaticon-pin-1 btn-icon__inner"></span>
                                                    </span>
                                    <span>Istanbul</span>
                                    <span class="ml-auto font-size-14 text-gray-1 mr-1">Turkey</span>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action" href="index.html">
                                                    <span class="btn btn-icon btn-medium btn-violet rounded-circle">
                                                        <span class="flaticon-building btn-icon__inner"></span>
                                                    </span>
                                    <span>Max Royal Hotel</span>
                                    <span class="ml-auto font-size-14 text-gray-1 mr-1">Hotel</span>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action" href="index.html">
                                                    <span class="btn btn-icon btn-medium btn-coral rounded-circle">
                                                        <span class="flaticon-global-1 btn-icon__inner"></span>
                                                    </span>
                                    <span>Paris Tour</span>
                                    <span class="ml-auto font-size-14 text-gray-1 mr-1">Tour</span>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action" href="index.html">
                                                    <span class="btn btn-icon btn-medium btn-yellow-light rounded-circle">
                                                        <span class="flaticon-home btn-icon__inner"></span>
                                                    </span>
                                    <span>My Villa Home</span>
                                    <span class="ml-auto font-size-14 text-gray-1 mr-1">Rental</span>
                                </a>
                            </li>
                            <li>
                                <a class="list-group-item list-group-item-action" href="index.html">
                                                    <span class="btn btn-icon btn-medium btn-green-light rounded-circle">
                                                        <span class="flaticon-climbing btn-icon__inner"></span>
                                                    </span>
                                    <span>Millennium Park</span>
                                    <span class="ml-auto font-size-14 text-gray-1 mr-1">Activity</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Suggestions Content -->
                </form>
            </div>
            <!-- End Search Content -->
        </div>
        <!-- End Search Form -->

        <!-- Responsive Toggle Button -->
        <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white order-2 ml-3" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                            <span id="hamburgerTrigger" class="u-hamburger__box">
                                <span class="u-hamburger__inner"></span>
                            </span>
        </button>
        <!-- End Responsive Toggle Button -->

        <!-- Navigation -->
        <div id="navBar" class="navbar-collapse u-header__navbar-collapse collapse order-2 order-xl-0 pt-4 p-xl-0 position-relative mx-n3 mx-xl-0">
            <ul class="navbar-nav u-header__navbar-nav">
                <!-- Home -->
                <li class="nav-item  u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a id="homeMenu" class="nav-link u-header__nav-link  u-header__nav-link-border" href="{{route("home")}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">Home</a>
                </li>
                <!-- End Home -->

                <!-- Hotel -->
                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a id="hotelMenu" class="nav-link u-header__nav-link  u-header__nav-link-border" href="{{route("hotels")}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="hotelSubMenu">Hotel</a>
{{--                    <!-- Hotel Submenu -->--}}
{{--                    <ul id="hotelSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="hotelMenu" style="min-width: 230px;">--}}
{{--                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-list.html">Sidebar</a></li>--}}
{{--                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-list-02.html">List With Map</a></li>--}}
{{--                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v1.html">Hotel Single v1</a></li>--}}
{{--                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v2.html">Hotel Single v2</a></li>--}}
{{--                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v3.html">Hotel Single v3</a></li>--}}
{{--                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-booking.html">Hotel Booking</a></li>--}}
{{--                    </ul>--}}
{{--                    <!-- End Hotel Submenu -->--}}
                </li>
                <!-- End Hotel -->

                <!-- Tour -->
                <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="722px" data-position="right">
                    <a id="tourMegaMenu" class="nav-link u-header__nav-link " href="{{route("tours")}}" aria-haspopup="true" aria-expanded="false">Tour</a>

{{--                    <!-- Tour - Mega Menu -->--}}
{{--                    <div class="hs-mega-menu u-header__sub-menu u-header__sub-menu-rounded" aria-labelledby="tourMegaMenu">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-xl-3dot64">--}}
{{--                                <span class="u-header__sub-menu-title">List Style</span>--}}
{{--                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">--}}
{{--                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-list.html">Sidebar</a></li>--}}
{{--                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-fullwidth.html">Full Width</a></li>--}}
{{--                                </ul>--}}
{{--                                <span class="u-header__sub-menu-title">Tour Booking</span>--}}
{{--                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">--}}
{{--                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-booking.html">Tour Booking</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-3dot64">--}}
{{--                                <span class="u-header__sub-menu-title">Single</span>--}}
{{--                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">--}}
{{--                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-single-v1.html">Tour Single v1</a></li>--}}
{{--                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-single-v2.html">Tour Single v2</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl">--}}
{{--                                <!-- Banner Image -->--}}
{{--                                <div class="u-header__banner u-header__banner-no-overlay rounded-xs" style="background-image: url({{asset("assets-open/img/240x243/img1.jpg")}});">--}}
{{--                                    <div class="u-header__banner-content u-header__banner-content-not-centered">--}}
{{--                                        <span class="u-header__banner-title">Special Offers</span>--}}
{{--                                        <p class="u-header__banner-text">Find Your Perfect Hotels Get the best prices on 20,000+ properties the best  prices on</p>--}}
{{--                                        <a class="btn btn-white text-blue btn-sm rounded-xs transition-3d-hover" href="index.html#">See Deals</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- End Banner Image -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Tour - Mega Menu -->--}}
                </li>
                <!-- End Tour -->
{{--
                <!-- Activity -->
                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a id="ActivityMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="ActivitySubMenu">Activity</a>
                    <!-- Activity Submenu -->
                    <ul id="ActivitySubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="ActivityMenu" style="min-width: 230px;">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-list.html">Sidebar</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-fullwidth.html">Full Width</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-single-v1.html">Activity Single v1</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-single-v2.html">Activity Single v2</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-booking.html">Activity Booking</a></li>
                    </ul>
                    <!-- End Activity Submenu -->
                </li>
                <!-- End Activity -->

                <!-- Rental -->
                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a id="rentalMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="rentalSubMenu">Rental</a>
                    <!-- Rental Submenu -->
                    <ul id="rentalSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="rentalMenu" style="min-width: 230px;">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-list.html">Sidebar</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-list-02.html">List With Map</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-single-v1.html">Rental Single v1</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-single-v2.html">Rental Single v2</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-booking.html">Rental Booking</a></li>
                    </ul>
                    <!-- End Rental Submenu -->
                </li>
                <!-- End Rental -->

                <!-- Car -->
                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a id="carMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="carSubMenu">Car</a>
                    <!-- Car Submenu -->
                    <ul id="carSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="carMenu" style="min-width: 230px;">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-list.html">Sidebar</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-fullwidth.html">Full Width</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-single-v1.html">Car Single v1</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-single-v2.html">Car Single v2</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-booking.html">Car Booking</a></li>
                    </ul>
                    <!-- End Car Submenu -->
                </li>
                <!-- End Car -->

                <!-- Yacht -->
                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a id="yachtMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="yachtSubMenu">Yacht</a>
                    <!-- Yacht Submenu -->
                    <ul id="yachtSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="yachtMenu" style="min-width: 230px;">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-list.html">Sidebar</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-fullwidth.html">Full Width</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-single-v1.html">Yacht Single v1</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-single-v2.html">Yacht Single v2</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-booking.html">Yacht Booking</a></li>
                    </ul>
                    <!-- End Yacht Submenu -->
                </li>
                <!-- End Yacht -->

                <!-- Flights -->
                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a id="flightsMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="flightsSubMenu">Flights</a>
                    <!-- Flights Submenu -->
                    <ul id="flightsSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="flightsMenu" style="min-width: 230px;">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../flights/flights-list.html">Sidebar</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../flights/flights-booking.html">Flights Booking</a></li>
                    </ul>
                    <!-- End Flights Submenu -->
                </li>
                <!-- End Flights -->

                <!-- Pages -->
                <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="722px" data-position="right">
                    <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <!-- Pages - Mega Menu -->
                    <div class="hs-mega-menu u-header__sub-menu u-header__sub-menu-rounded" aria-labelledby="pagesMegaMenu">
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/destination.html">Destination</a></li>
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/about.html">About us</a></li>
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/contact.html">Contact</a></li>
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/terms-conditions.html">Terms of Use</a></li>
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/faq.html">FAQs</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-xl-4">
                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-list.html">Blog</a></li>
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-single.html">Blog Single</a></li>
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/become-expert.html">Become Expert</a></li>
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/404.html">404</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-xl-4">
                                <a href="../../documentation/index.html" class="btn btn-soft-primary mb-3 mb-md-0 mb-xl-3 min-width-xl-100 btn-wide ml-4 ml-xl-0"><span class="fas fa-laptop-code mr-2"></span>Documentation</a>
                                <a href="../../starter/index.html" class="btn btn-soft-secondary min-width-xl-100 btn-wide ml-4 ml-xl-0"><span class="fas fa-th mr-2"></span>Starter</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pages - Mega Menu -->
                </li>
                <!-- End Pages -->
                --}}
            </ul>
        </div>
        <!-- End Navigation -->

        <!-- Shopping Cart -->
        <div class="pl-2 pl-md-4 ml-auto shopping-cart d-none d-xl-block">
            <a id="shoppingCartDropdownInvoker" class="btn-text-secondary py-4 position-relative" href="javascript:;" role="button" aria-controls="shoppingCartDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#shoppingCartDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                <span class="flaticon-shopping-basket font-size-25"></span>
            </a>

            <div id="shoppingCartDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right dropdown-menu-right-fix-wd-10 p-0 mt-0 w-max-sm-100 u-unfold--css-animation font-size-16" aria-labelledby="shoppingCartDropdownInvoker" style="width: 500px; animation-duration: 300ms; right: 0px;">
                <div class="card">
                    <!-- Header -->
                    <div class="card-header border-color-8 py-3 px-5">
                        <span class="font-weight-semi-bold">Your Cart</span>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body p-0">
                        <div class="px-2 px-md-3 py-2 py-md-1 border-bottom border-color-8">
                            <div class="media p-2 p-md-3">
                                <div class="u-avatar u-lg-avatar-md mr-2 mr-md-3">
                                    <img class="img-fluid rounded-pill" src="{{asset("assets-open/img/80x80/img1.jpg")}}" alt="Image Description">
                                </div>
                                <div class="media-body position-relative pl-md-1">
                                    <div class="d-flex justify-content-between align-items-start mb-2 mb-md-3">
                                        <span class="d-block text-dark font-weight-bold">Hyatt Centric Times  Square</span>
                                        <button type="button" class="close close-rounded position-md-absolute right-0 ml-2" aria-label="Close">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                    <span class="d-block text-gray-1">Price  £590.00 </span>
                                </div>
                            </div>
                        </div>
                        <div class="px-2 px-md-3 py-2 py-md-1 border-bottom border-color-8">
                            <div class="media p-2 p-md-3">
                                <div class="u-avatar u-lg-avatar-md mr-2 mr-md-3">
                                    <img class="img-fluid rounded-pill" src="{{asset("assets-open/img/80x80/img2.jpg")}}" alt="Image Description">
                                </div>
                                <div class="media-body position-relative pl-md-1">
                                    <div class="d-flex justify-content-between align-items-start mb-2 mb-md-3">
                                        <span class="d-block text-dark font-weight-bold">Hyatt Centric Times  Square</span>
                                        <button type="button" class="close close-rounded position-md-absolute right-0 ml-2" aria-label="Close">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                    <span class="d-block text-gray-1">Price  £590.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer border-0 p-3 px-md-5 py-md-4">
                        <div class="mb-4 pb-md-1">
                            <span class="d-block font-weight-semi-bold">Subtotal: £1180.00</span>
                        </div>
                        <div class="d-md-flex button-inline-group-md mb-1">
                            <a class="btn btn-block btn-md btn-gray-1 rounded-xs font-weight-bold transition-3d-hover" href="index.html#">
                                View cart
                            </a>
                            <a class="btn btn-block btn-md btn-blue-1 rounded-xs font-weight-bold transition-3d-hover mt-md-0 ml-md-5" href="index.html#">
                                Check Out
                            </a>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
        <!-- End Shopping Cart -->

        <!-- Button -->
        <div class="pl-4 ml-1 u-header__last-item-btn u-header__last-item-btn-xl">
            <a class="btn btn-wide rounded-xs btn-white transition-3d-hover" href="../others/become-expert.html">Become Local Expert</a>
        </div>
        <!-- End Button -->
    </nav>
    <!-- End Nav -->
</div>
@else
    <div id="logoAndNav" class="container-fluid py-xl-2 border-bottom-xl">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space">
            <!-- Logo -->
            <a class="navbar-brand u-header__navbar-brand-default u-header__navbar-brand-center u-header__navbar-brand-text-dark-xl" href="../home/index.html" aria-label="MyTour">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55px" height="53px" style="margin-bottom: 0;">
                    <path fill-rule="evenodd" class="fill-primary" d="M53.175,51.207 C50.755,53.610 46.848,53.594 44.448,51.171 L40.766,47.484 C40.378,47.082 40.378,46.443 40.766,46.041 C41.164,45.628 41.821,45.617 42.233,46.016 L45.915,49.702 C47.503,51.246 50.030,51.246 51.619,49.702 C53.243,48.125 53.283,45.528 51.708,43.902 L50.100,42.291 C49.712,41.889 49.712,41.251 50.100,40.849 C50.498,40.436 51.155,40.425 51.567,40.823 L53.174,42.433 C53.186,42.444 53.198,42.456 53.210,42.468 C55.610,44.891 55.594,48.804 53.175,51.207 ZM47.857,37.404 C47.757,37.404 47.657,37.389 47.561,37.360 C47.561,37.360 47.561,37.360 47.561,37.360 C47.012,37.196 46.700,36.617 46.864,36.068 C48.542,30.412 47.740,24.309 44.659,19.280 C38.665,9.497 25.886,6.432 16.116,12.434 C16.085,12.456 16.054,12.475 16.021,12.493 C15.518,12.767 14.888,12.581 14.614,12.077 C14.340,11.574 14.526,10.943 15.029,10.669 C18.623,8.455 22.761,7.284 26.981,7.287 C29.178,7.289 31.363,7.608 33.469,8.234 C45.556,11.831 52.442,24.559 48.851,36.662 C48.719,37.102 48.315,37.403 47.857,37.404 ZM13.802,8.022 L12.765,6.983 C12.377,6.581 12.377,5.943 12.765,5.540 C13.163,5.128 13.820,5.116 14.232,5.515 L15.269,6.553 C15.657,6.956 15.657,7.594 15.269,7.996 C14.871,8.409 14.214,8.420 13.802,8.022 ZM9.654,3.868 L9.084,3.296 C7.495,1.753 4.968,1.752 3.379,3.296 C1.755,4.873 1.715,7.470 3.291,9.096 L10.083,15.900 C10.278,16.094 10.387,16.358 10.387,16.634 C10.387,17.208 9.923,17.672 9.350,17.672 C9.075,17.672 8.812,17.563 8.617,17.368 L1.824,10.566 C1.812,10.554 1.800,10.542 1.788,10.530 C-0.611,8.107 -0.596,4.195 1.824,1.792 C4.243,-0.612 8.150,-0.596 10.550,1.827 L11.121,2.399 C11.129,2.408 11.138,2.416 11.146,2.425 C11.544,2.838 11.533,3.495 11.121,3.894 C10.709,4.292 10.052,4.280 9.654,3.868 ZM7.742,19.850 C8.260,20.095 8.480,20.715 8.234,21.233 C5.232,27.580 5.635,35.016 9.305,41.001 C15.302,50.779 28.080,53.839 37.845,47.834 C37.876,47.813 37.908,47.793 37.940,47.775 C38.444,47.501 39.073,47.687 39.347,48.191 C39.621,48.695 39.435,49.326 38.932,49.599 C35.338,51.813 31.200,52.984 26.981,52.980 C23.606,52.979 20.273,52.228 17.223,50.782 C5.829,45.379 0.966,31.751 6.360,20.342 C6.606,19.824 7.225,19.603 7.742,19.850 ZM40.262,35.347 C40.601,35.280 40.951,35.386 41.196,35.631 L43.270,37.708 C43.675,38.113 43.675,38.770 43.270,39.176 L39.551,42.900 C37.191,45.264 33.364,45.264 31.004,42.900 L24.906,36.795 L21.491,40.215 C21.086,40.620 20.430,40.620 20.025,40.215 L17.951,38.138 C17.719,37.905 17.612,37.576 17.660,37.251 L18.624,30.501 L12.590,24.460 C11.040,22.907 11.040,20.390 12.590,18.837 C14.141,17.285 16.654,17.285 18.205,18.837 L24.077,24.716 L35.851,18.820 C36.250,18.620 36.732,18.699 37.048,19.015 L39.122,21.092 C39.527,21.498 39.527,22.155 39.122,22.561 L30.521,31.173 L35.622,36.277 L40.262,35.347 ZM20.758,38.012 L23.440,35.326 L20.454,32.337 L19.784,37.036 L20.758,38.012 ZM34.541,38.138 L28.318,31.907 C27.914,31.501 27.914,30.844 28.318,30.439 L36.919,21.826 L36.107,21.013 L24.333,26.910 C23.934,27.109 23.452,27.031 23.136,26.714 L16.735,20.306 C16.379,19.949 15.897,19.749 15.394,19.749 C14.347,19.750 13.498,20.600 13.499,21.649 C13.496,22.153 13.695,22.638 14.051,22.995 L20.449,29.401 L25.635,34.593 L32.464,41.432 C34.014,42.984 36.528,42.984 38.078,41.432 L41.064,38.442 L40.115,37.492 L35.474,38.421 C35.135,38.488 34.786,38.382 34.541,38.138 Z"></path>
                </svg>
                <span class="u-header__navbar-brand-text">{{env("APP_NAME")}}</span>
            </a>
            <!-- End Logo -->

            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--primary order-2 ml-3" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                            <span id="hamburgerTrigger" class="u-hamburger__box">
                                <span class="u-hamburger__inner"></span>
                            </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Navigation -->
            <div id="navBar" class="navbar-collapse u-header__navbar-collapse collapse order-2 order-xl-0 pt-4 p-xl-0 position-relative">
                <ul class="navbar-nav u-header__navbar-nav">
                    <!-- Home -->
                    <li class="nav-item  u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                        <a  class="nav-link u-header__nav-link  u-header__nav-link-border" href="{{route("home")}}">Home</a>

                    </li>
                    <!-- End Home -->

                    <!-- Hotel -->
                    <li class="nav-item  u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                        <a id="hotelMenu" class="nav-link u-header__nav-link  u-header__nav-link-border" href="{{route("hotels")}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="hotelSubMenu">Hotel</a>

                    </li>
                    <!-- End Hotel -->

                    <!-- Tour -->
                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="722px" data-position="right">
                        <a id="tourMegaMenu" class="nav-link u-header__nav-link u-" href="{{route("tours")}}" aria-haspopup="true" aria-expanded="false">Tour</a>

                        <!-- Tour - Mega Menu -->
{{--
                        <div class="hs-mega-menu u-header__sub-menu u-header__sub-menu-rounded u-header__mega-menu-position-right-fix-10" aria-labelledby="tourMegaMenu">
                            <div class="row">
                                <div class="col-12 col-xl-3dot64">
                                    <span class="u-header__sub-menu-title">List Style</span>
                                    <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-list.html">Sidebar</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-fullwidth.html">Full Width</a></li>
                                    </ul>
                                    <span class="u-header__sub-menu-title">Tour Booking</span>
                                    <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-booking.html">Tour Booking</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-xl-3dot64">
                                    <span class="u-header__sub-menu-title">Single</span>
                                    <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-single-v1.html">Tour Single v1</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-single-v2.html">Tour Single v2</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-xl">
                                    <!-- Banner Image -->
                                    <div class="u-header__banner u-header__banner-no-overlay rounded-xs" style="background-image: url({{asset("assets/img/240x243/img1.jpg")}});">
                                        <div class="u-header__banner-content u-header__banner-content-not-centered">
                                            <span class="u-header__banner-title">Special Offers</span>
                                            <p class="u-header__banner-text">Find Your Perfect Hotels Get the best prices on 20,000+ properties the best  prices on</p>
                                            <a class="btn btn-white text-blue btn-sm rounded-xs transition-3d-hover" href="hotel-single-v2.html#">See Deals</a>
                                        </div>
                                    </div>
                                    <!-- End Banner Image -->
                                </div>
                            </div>
                        </div>
--}}
                        <!-- End Tour - Mega Menu -->
                    </li>
                    <!-- End Tour -->
{{--

                    <!-- Activity -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                        <a id="ActivityMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="ActivitySubMenu">Activity</a>
                        <!-- Activity Submenu -->
                        <ul id="ActivitySubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="ActivityMenu" style="min-width: 230px;">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-list.html">Sidebar</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-fullwidth.html">Full Width</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-single-v1.html">Activity Single v1</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-single-v2.html">Activity Single v2</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-booking.html">Activity Booking</a></li>
                        </ul>
                        <!-- End Activity Submenu -->
                    </li>
                    <!-- End Activity -->

                    <!-- Rental -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                        <a id="rentalMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="rentalSubMenu">Rental</a>
                        <!-- Rental Submenu -->
                        <ul id="rentalSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="rentalMenu" style="min-width: 230px;">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-list.html">Sidebar</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-list-02.html">List With Map</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-single-v1.html">Rental Single v1</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-single-v2.html">Rental Single v2</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-booking.html">Rental Booking</a></li>
                        </ul>
                        <!-- End Rental Submenu -->
                    </li>
                    <!-- End Rental -->

                    <!-- Car -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                        <a id="carMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="carSubMenu">Car</a>
                        <!-- Car Submenu -->
                        <ul id="carSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="carMenu" style="min-width: 230px;">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-list.html">Sidebar</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-fullwidth.html">Full Width</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-single-v1.html">Car Single v1</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-single-v2.html">Car Single v2</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-booking.html">Car Booking</a></li>
                        </ul>
                        <!-- End Car Submenu -->
                    </li>
                    <!-- End Car -->

                    <!-- Yacht -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                        <a id="yachtMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="yachtSubMenu">Yacht</a>
                        <!-- Yacht Submenu -->
                        <ul id="yachtSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="yachtMenu" style="min-width: 230px;">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-list.html">Sidebar</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-fullwidth.html">Full Width</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-single-v1.html">Yacht Single v1</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-single-v2.html">Yacht Single v2</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-booking.html">Yacht Booking</a></li>
                        </ul>
                        <!-- End Yacht Submenu -->
                    </li>
                    <!-- End Yacht -->

                    <!-- Flights -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                        <a id="flightsMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="flightsSubMenu">Flights</a>
                        <!-- Flights Submenu -->
                        <ul id="flightsSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="flightsMenu" style="min-width: 230px;">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../flights/flights-list.html">Sidebar</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../flights/flights-booking.html">Flights Booking</a></li>
                        </ul>
                        <!-- End Flights Submenu -->
                    </li>
                    <!-- End Flights -->

                    <!-- Pages -->
                    <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="722px" data-position="right">
                        <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <!-- Pages - Mega Menu -->
                        <div class="hs-mega-menu u-header__sub-menu u-header__sub-menu-rounded" aria-labelledby="pagesMegaMenu">
                            <div class="row">
                                <div class="col-12 col-xl-4">
                                    <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/destination.html">Destination</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/about.html">About us</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/contact.html">Contact</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/terms-conditions.html">Terms of Use</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/faq.html">FAQs</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-list.html">Blog</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-single.html">Blog Single</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/become-expert.html">Become Expert</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/404.html">404</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <a href="../../documentation/index.html" class="btn btn-soft-primary mb-3 w-100"><span class="fas fa-laptop-code mr-2"></span>Documentation</a>
                                    <a href="../../starter/index.html" class="btn btn-soft-secondary w-100"><span class="fas fa-th mr-2"></span>Starter</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Pages - Mega Menu -->
                    </li>
                    <!-- End Pages -->
--}}

                </ul>
            </div>
            <!-- End Navigation -->

            <!-- Shopping Cart -->
            <div class="pl-2 pl-md-4 ml-auto shopping-cart">
                <a id="shoppingCartDropdownInvoker" class="btn-text-secondary py-4 position-relative" href="javascript:;" role="button" aria-controls="shoppingCartDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#shoppingCartDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                    <span class="flaticon-shopping-basket font-size-25 text-primary-max-lg"></span>
                </a>

                <div id="shoppingCartDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right dropdown-menu-right-fix-wd-10 p-0 mt-0 w-max-sm-100 u-unfold--css-animation font-size-16" aria-labelledby="shoppingCartDropdownInvoker" style="width: 500px; animation-duration: 300ms; right: 0px;">
                    <div class="card">
                        <!-- Header -->
                        <div class="card-header border-color-8 py-3 px-5">
                            <span class="font-weight-semi-bold">Your Cart</span>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body p-0">
                            <div class="px-2 px-md-3 py-2 py-md-1 border-bottom border-color-8">
                                <div class="media p-2 p-md-3">
                                    <div class="u-avatar u-lg-avatar-md mr-2 mr-md-3">
                                        <img class="img-fluid rounded-pill" src="{{asset("")}}../../assets/img/80x80/img1.jpg" alt="Image Description">
                                    </div>
                                    <div class="media-body position-relative pl-md-1">
                                        <div class="d-flex justify-content-between align-items-start mb-2 mb-md-3">
                                            <span class="d-block text-dark font-weight-bold">Hyatt Centric Times  Square</span>
                                            <button type="button" class="close close-rounded position-md-absolute right-0 ml-2" aria-label="Close">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                        <span class="d-block text-gray-1">Price  £590.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-2 px-md-3 py-2 py-md-1 border-bottom border-color-8">
                                <div class="media p-2 p-md-3">
                                    <div class="u-avatar u-lg-avatar-md mr-2 mr-md-3">
                                        <img class="img-fluid rounded-pill" src="{{asset("")}}../../assets/img/80x80/img2.jpg" alt="Image Description">
                                    </div>
                                    <div class="media-body position-relative pl-md-1">
                                        <div class="d-flex justify-content-between align-items-start mb-2 mb-md-3">
                                            <span class="d-block text-dark font-weight-bold">Hyatt Centric Times  Square</span>
                                            <button type="button" class="close close-rounded position-md-absolute right-0 ml-2" aria-label="Close">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                        <span class="d-block text-gray-1">Price  £590.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Body -->

                        <!-- Footer -->
                        <div class="card-footer border-0 p-3 px-md-5 py-md-4">
                            <div class="mb-4 pb-md-1">
                                <span class="d-block font-weight-semi-bold">Subtotal: £1180.00</span>
                            </div>
                            <div class="d-md-flex button-inline-group-md mb-1">
                                <a class="btn btn-block btn-md btn-gray-1 rounded-xs font-weight-bold transition-3d-hover" href="hotel-single-v2.html#">
                                    View cart
                                </a>
                                <a class="btn btn-block btn-md btn-blue-1 rounded-xs font-weight-bold transition-3d-hover mt-md-0 ml-md-5" href="hotel-single-v2.html#">
                                    Check Out
                                </a>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
            <!-- End Shopping Cart -->

            <!-- Button -->
            <div class="pl-4 ml-1 u-header__last-item-btn u-header__last-item-btn-xl">
                <a class="btn btn-wide rounded-xs btn-primary transition-3d-hover" href="../others/become-expert.html">Become Local Expert</a>
            </div>
            <!-- End Button -->
        </nav>
        <!-- End Nav -->
    </div>
@endif
