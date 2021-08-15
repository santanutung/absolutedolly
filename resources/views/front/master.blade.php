<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Poppins:300,400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/elegant-icons.css" media="screen">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/settings.css">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/layers.css">
	<!-- REVOLUTION NAVIGATION STYLES -->


	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/navigation.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/font-icons.css" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/sliders.css" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/style2.css" media="screen">
	  @toastr_css
	@stack('css')
	<style>
		a.size-s {
    width: 88px;
}

a.size-s.selected {
    color: white;
    background: black;
}
a.size-s:hover {
	color: white;
    background:#383838;
}
	</style>

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix trans">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{ route('/') }}">orion<span>.</span></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right navigate-section">
							<li class="drop"><a class="active" href="{{ route('/') }}">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="{{route('works')}}">Portfolio</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
							{{-- <li><a href="product.html">Product</a></li> --}}
							<li><a href="{{ route('cart') }}">Cart</a></li>
							{{-- <li><a href="{{ route('checkout') }}">Checkout</a></li> --}}
							@if (Auth::check())
							 <li><a href="{{ route('login') }}">dashboard</a></li>

							 @else
							 <li><a href="{{ route('login') }}">login</a></li>

							 @endif

							<li><a class="open-menu" href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!-- End Header -->

        @yield('content')

		<!-- footer
			================================================== -->

			@php
				  $footer_settings= App\Models\Footersetting::find(1);

			@endphp
		<footer>
			<div class="up-footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3 col-sm-6">
							<div class="footer-widget text-widget">
								<h1>{{$footer_settings->footer_one_tittle}}<span>.</span></h1>
								<span>{{$footer_settings->footer_one_email}}</span>
								<span>{{$footer_settings->footer_one_phone}}</span>
							</div>
							<div class="footer-widget social-widget">
								<h2>{{$footer_settings->footer_one_tittle_2}}</h2>
								<ul class="social-icons">
									@if($footer_settings->social_icon_1 && $footer_settings->social_icon_link_1 )
									<li><a class="" href="{{$footer_settings->social_icon_link_1}}"><i class="{{ $footer_settings->social_icon_1}}"></i></a></li>
                                    @endif

									@if($footer_settings->social_icon_2 && $footer_settings->social_icon_link_2 )
									<li><a class="" href="{{$footer_settings->social_icon_link_2}}"><i class="{{ $footer_settings->social_icon_2}}"></i></a></li>
                                    @endif

									@if($footer_settings->social_icon_3 && $footer_settings->social_icon_link_3 )
									<li><a class="" href="{{$footer_settings->social_icon_link_3}}"><i class="{{ $footer_settings->social_icon_3}}"></i></a></li>
                                    @endif

									@if($footer_settings->social_icon_4 && $footer_settings->social_icon_link_4 )
									<li><a class="" href="{{$footer_settings->social_icon_link_4}}"><i class="{{ $footer_settings->social_icon_4}}"></i></a></li>
                                    @endif

{{--
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li> --}}
								</ul>
							</div>
						</div>



						<div class="col-md-6 col-sm-6">
							<div class="footer-widget instagram-widget">
								<h2>{{$footer_settings->footer_two_tittle}}</h2>
								<ul class="instagram-list">
									<li><a href="#"><img src="{{ asset('/') }}frontend/upload/instagram/1.jpg" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('/') }}frontend/upload/instagram/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('/') }}frontend/upload/instagram/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('/') }}frontend/upload/instagram/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('/') }}frontend/upload/instagram/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('/') }}frontend/upload/instagram/6.jpg" alt=""></a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-widget newsletter-widget">
								<h2>{{$footer_settings->footer_three_tittle}}</h2>
								<p>{{$footer_settings->footer_three_text}} </p>
								<form class="newletter-form">
									<input type="text" name="your-email" id="your-email" placeholder="email"/>
									<input type="submit" id="submit_it" value="go"/>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<p class="copyright">
				{{$footer_settings->footer_copyright}}
				{{-- &copy; Copyright 2017. "Orion" by Nunforest. All rights reserved. --}}

			</p>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	




	<script type="text/javascript" src="{{ asset('/') }}frontend/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/jquery.migrate.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="{{ asset('/') }}frontend/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/retina-1.1.0.min.js"></script>



	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="{{ asset('/') }}frontend/js/plugins.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
		(Load Extensions only on Local File Systems !
		The following part can be removed on Server for On Demand Loading) -->
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend/js/extensions/revolution.extension.video.min.js"></script>


	<script type="text/javascript" src="{{ asset('/') }}frontend/js/script.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}frontend/js/scripts.js"></script>
     @toastr_js
    @toastr_render
@stack('js')
</body>
</html>