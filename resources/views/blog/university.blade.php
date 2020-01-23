<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html lang="{{ app()->getLocale() }}">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DB Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('assets/css/styleBot.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		a.fh5co-card-item.image-popup {
    height: 260px;
    display: flex;
    align-items: center;
}
.fh5co-card-item .fh5co-text {
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
	</style>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="{{ route('blog.index') }}">EduVision <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="{{route('blog.changeLang',['en'])}}" ><i class="fa fa-language"></i> EN</a></li>
						<li><a href="{{route('blog.changeLang',['ru'])}}" ><i class="fa fa-language"></i> RU</a></li>
						<li><a href="{{route('blog.changeLang',['kz'])}}" ><i class="fa fa-language"></i> KZ</a></li>
						
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_6.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>{{ __('msg.uniuni')}}</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>{{ __('msg.uni_h1')}}</h2>
					<p>{{ __('msg.uni_p')}}</p>
				</div>
			</div>
			<div class="row">
				@foreach($unis as $uni)
				@if(app()->getLocale() == 'ru')
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{route('blog.solo_uni',[$uni->id,$spe_id,$pro_id,$first_sub,$second_sub])}}" class="fh5co-card-item">
						<div class="fh5co-text">
							<h2>{{$uni->uni_name}}</h2>
							<h5>{{$uni->uni_city}}</h5><!-- 
							<p><span class="btn btn-primary">Check universities</span></p> -->
						</div>
					</a>
				</div>
				@endif
				@if(app()->getLocale() == 'en')
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{route('blog.solo_uni',[$uni->id,$spe_id,$pro_id,$first_sub,$second_sub])}}" class="fh5co-card-item">
						<div class="fh5co-text">
							<h2>{{$uni->uni_name_eng}}</h2>
							<h5>{{$uni->uni_city_eng}}</h5><!-- 
							<p><span class="btn btn-primary">Check universities</span></p> -->
						</div>
					</a>
				</div>
				@endif
				@if(app()->getLocale() == 'kz')
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{route('blog.solo_uni',[$uni->id,$spe_id,$pro_id,$first_sub,$second_sub])}}	" class="fh5co-card-item">
						<div class="fh5co-text">
							<h2>{{$uni->uni_name_kaz}}</h2>
							<h5>{{$uni->uni_city_kaz}}</h5><!-- 
							<p><span class="btn btn-primary">Check universities</span></p> -->
						</div>
					</a>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
	<span class="pagination">{{$unis->links()}}</span>

		<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>{{ __('msg.about_us')}}</h3>
						<p>{{ __('msg.about_des')}}</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>{{ __('msg.members')}}</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Aitkulov Aslan</a></li>
							<li><a href="#">Khamit Askar</a></li>
							<li><a href="#">Aytkazin Askar</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>{{ __('msg.get_in')}}</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +7 708 942 95 92</a></li>
							<li><a href="#"><i class="icon-mail2"></i> aslan.00_00@mail.ru</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2019 All Rights Reserved.</small> 
					
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>

	<!-- Stellar Parallax -->
	<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>

	<!-- Magnific Popup -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/magnific-popup-options.js')}}"></script>
	
	<!-- Datepicker -->
	<script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
	

	<!-- Main -->
	<script src="{{asset('assets/js/main.js')}}"></script>

	</body>
</html>

