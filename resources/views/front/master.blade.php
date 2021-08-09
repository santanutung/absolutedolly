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
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="product.html">Product</a></li>
							<li><a href="{{ route('art') }}">Single Product</a></li>
							<li><a href="{{ route('cart') }}">Cart</a></li>
							<li><a href="{{ route('checkout') }}">Checkout</a></li>
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
		<footer>
			<div class="up-footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3 col-sm-6">
							<div class="footer-widget text-widget">
								<h1>we are orion<span>.</span></h1>
								<span>hello@orion.com</span>
								<span>+(123) 456 7890</span>
							</div>
							<div class="footer-widget social-widget">
								<h2>We are social</h2>
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-widget posts-widget">
								<h2>Recent Posts</h2>
								<ul class="latest-posts">
									<li>
										<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. Nullam malesuada </a></h2>
										<a href="#">5 comment</a>
									</li>
									<li>
										<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.  </a></h2>
										<a href="#">2 comment</a>
									</li>
									<li>
										<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
										<a href="#">13 comment</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="footer-widget instagram-widget">
								<h2>Instagram Feed</h2>
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
								<h2>Newsletter</h2>
								<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>
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
				&copy; Copyright 2017. "Orion" by Nunforest. All rights reserved.
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

@stack('js')
</body>
</html>