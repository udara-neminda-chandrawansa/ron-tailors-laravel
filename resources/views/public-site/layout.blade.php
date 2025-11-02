<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Ron Tailors</title>
<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<!-- Responsive File -->
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<!-- Color File -->
<link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">

<meta property="og:image" content="{{ asset('assets/images/rt-logo.jpg') }}">
<meta name="description" content="Wedding Suits, Sharvanis, Safari Suits, Trousers, Shirts from Ron Tailors">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600;700&amp;family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/images/rt-logo.jpg') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/rt-logo.jpg') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    @include('public-site.partials.header')

    @yield('content')

    @include('public-site.partials.footer')
</div>

<!--Scroll to top-->
<div class="scroll-to-top"><a href="# " class="back-to-top " data-wow-duration="1.0s " data-wow-delay="1.0s "><i class="fa fa-angle-up "></i></a></div>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>