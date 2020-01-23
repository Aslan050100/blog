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
	
	.fh5co-card-item {
    height: 500px;
}
.fh5co-card-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.row-mt-15em {
    margin-top: 7em;
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
	
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>{{ __('msg.chose')}}. </h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>{{ __('msg.fill')}}</h3>
											<form action="{{route('blog.getData')}}" method="get">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">{{ __('msg.sub1')}}</label>
														

														<select name="first_subject" id="activities" class="form-control">
															@foreach($first_subjects as $first_subject)
															<option value="{{$first_subject}}">{{$first_subject}}</option>
															@endforeach
														</select>
														
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">{{ __('msg.sub2')}}</label>
														<select name="second_subject" id="activities" class="form-control">
															@foreach($second_subjects as $second_subject)
															<option value="{{$second_subject}}">{{$second_subject}}</option>
															 @endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">{{ __('msg.city')}}</label>
														<select name="city" id="destination" class="form-control">
															
															 @foreach($cities as $city)
															<option value="{{$city}}">{{$city}}</option>
															@endforeach
														</select>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">{{ __('msg.english')}}</label>
														<select name="level" id="activities" class="form-control">
															<option value="5">{{__('msg.level5')}}</option>
															<option value="1">Beginner</option>
															<option value="2">Pre-Intermediate</option>
															<option value="3">Intermediate</option>
															<option value="4">Upper-Intermediate and above</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">{{ __('msg.sphere')}}</label>
														<select name="category" id="activities" class="form-control">
															<option value="all">All</option>
															@foreach($categories as $category)
															<option value="{{$category}}">{{$category}}</option>
															@endforeach
														</select>
													</div>
												</div>


												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="{{ __('msg.submit')}}">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
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
					<h2>{{ __('msg.profs')}}</h2>
					<p>{{ __('msg.desc_prof')}}.</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"></div>
							<img src="{{asset('assets/images/soft_dev.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>{{ __('msg.pro1')}}</h2>
							<p>{{ __('msg.pro1_d')}}</p>
							<p><span class="btn btn-primary">{{ __('msg.learn_more')}}</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"></div>
							<img src="{{asset('assets/images/doctor.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>{{ __('msg.pro2')}}</h2>
							<p>{{ __('msg.pro_d2')}}</p>
							<p><span class="btn btn-primary">{{ __('msg.learn_more')}}</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"></div>
							<img src="{{asset('assets/images/scients.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>{{ __('msg.pro3')}}</h2>
							<p>{{ __('msg.pro_d3')}}</p>
							<p><span class="btn btn-primary">{{ __('msg.learn_more')}}</span></p>
						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"></div>
							<img src="{{asset('assets/images/teacher.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>{{ __('msg.pro4')}}</h2>
							<p>{{ __('msg.pro_d4')}}</p>
							<p><span class="btn btn-primary">{{ __('msg.learn_more')}}</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"></div>
							<img src="{{asset('assets/images/engineer.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>{{ __('msg.pro5')}}</h2>
							<p>{{ __('msg.pro_d5')}}</p>
							<p><span class="btn btn-primary">{{ __('msg.learn_more')}}</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"></div>
							<img src="{{asset('assets/images/music.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>{{ __('msg.pro6')}}</h2>
							<p>{{ __('msg.pro_d6')}}</p>
							<p><span class="btn btn-primary">{{ __('msg.learn_more')}}</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>{{ __('msg.hiw')}}</h2>
					<p>{{ __('msg.find')}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>{{ __('msg.fill_out')}}</h3>
						<p>{{ __('msg.we_col')}}</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>{{ __('msg.ch_prof')}}</h3>
						<p>{{ __('msg.we_pre_pro')}}</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>{{ __('msg.ch_spec')}}</h3>
						<p>{{ __('msg.we_pre_spe')}}</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>{{ __('msg.we_have_high')}}</h1>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>{{ __('msg.all_inf')}}</h2>
					<p>{{ __('msg.inf_des')}}</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="1429" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">{{ __('msg.pro')}}</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="171" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">{{ __('msg.spe')}}</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="92" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">{{ __('msg.uni')}}</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">{{ __('msg.sph')}}</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>

	

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>{{ __('msg.subs')}}</h2>
					<p>{{ __('msg.subs_des')}}</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="{{ __('msg.email')}}">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">{{ __('msg.sub_bl')}}</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

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

