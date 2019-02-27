<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Nino</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="{{ asset('css/frontend/css/default.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend/css/layout.css') }}">
   <link rel="stylesheet" href="{{ asset('css/frontend/css/media-queries.css') }}">
   <link rel="stylesheet" href="{{ asset('css/frontend/css/magnific-popup.css') }}">

   <!-- Script
   ================================================== -->
	<script src="{{ asset('js/frontend/js/modernizr.js') }}"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >
   @stack('stylesheet')
</head>
<body>

   @include('frontend.common.header')

   @yield('content')

   @include('frontend.common.footer')
   
   <!-- Java Script
   ================================================== -->
   <script src="{{ asset('js/frontend/js/jquery-1.10.2.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/frontend/js/jquery-migrate-1.2.1.min.js') }}"></script>
   <script src="{{ asset('js/frontend/js/jquery.flexslider.js') }}"></script>
   <script src="{{ asset('js/frontend/js/waypoints.js') }}"></script>
   <script src="{{ asset('js/frontend/js/jquery.fittext.js') }}"></script>
   <script src="{{ asset('js/frontend/js/magnific-popup.js') }}"></script>
   <script src="{{ asset('js/frontend/js/init.js') }}"></script>
   @stack('javascript')
</body>
</html>