<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from www.devsnews.com/template/gru/gru/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Apr 2021 01:10:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gru - One Page Personal HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="{{ asset('frontend/site.html') }}">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">
		<!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    </head>
    <body>
 
        @yield('frontcontent')
		 <!-- Modal Search -->
         <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>





		<!-- JS here -->
        <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/one-page-nav-min.js') }}"></script>
        <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/js/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body> 
</html>