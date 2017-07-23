@extends('layouts.app')

@section('title', config('app.name'))

@section('page-resources')

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Monsterrat:400,700|Merriweather:400,300italic,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">

	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>



	<script type="text/javascript">
		$(document).ready(function(){



		});
	</script>
	
	
	
	<!-- Modernizr JS -->
	<!-- <script src="js/modernizr-2.6.2.min.js"></script> -->
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<!--<script src="/js/respond.min.js"></script>-->
	<![endif]-->
@endsection

@section('body-content')
	{{-- <div id="fh5co-page"> --}}
		{{-- <nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
			<div class="container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 fh5co-logo">
					<a href="#" class="js-fh5co-mobile-toggle fh5co-nav-toggle"><i></i></a>
					<a href="#">Tribe</a>
				</div>
				<div class="col-lg-6 col-md-5 col-sm-5 text-center fh5co-link-wrap">
					<ul data-offcanvass="yes">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Create Tribe</a></li>
						<li><a href="#">Explore Project</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Pricing</a></li>
					</ul>
				</div> 
				<div class="col-lg-3 col-md-4 col-sm-4 text-right fh5co-link-wrap">
					<ul class="fh5co-special" data-offcanvass="yes">
						<li><a href="/login">Login</a></li>
						<li><a href="/signup" class="call-to-action">Signup</a></li>
					</ul>
				</div>
			</div>
		</nav> --}}


		<div class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes"  style="background-image: url(images/full_1.jpg);">
		  	<span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#">
					<span class="mouse"><span></span></span>
				</a>
			</span>
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover-text">
				<div class="container">
					<div class="row">
						<div class="col-md-push-6 col-md-6 full-height js-full-height">
							<div class="fh5co-cover-intro">
								<h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Empower You</h1>
								<h2 class="cover-text-sublead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Create your tribe and run fun projects. Meet great people and win interesting pro-bono opportunities. Show off your tribe's skills and projects to attact sponsors and more tribe members!</h2>
								<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="#searchTribe" class="btn btn-primary btn-outline btn-lg">Search Tribe</a></p>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		@include('pages.front.tribe')
		
	

		<!--div class="fh5co-project-style-2">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Our Best Projects</h2>
						<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
						<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="#" class="btn btn-success btn-lg">Start your project</a></p>
					</div>
				</div>
			</div>
			<div class="fh5co-projects">
				<ul>
					<li class="wow fadeInUp" style="background-image: url(images/full_4.jpg);" data-wow-duration="1s" data-wow-delay="1.4s" data-stellar-background-ratio="0.5">
						<a href="#">
							<div class="fh5co-overlay"></div>
							<div class="container">
								<div class="fh5co-text">
									<div class="fh5co-text-inner">
										<div class="row">
											<div class="col-md-6"><h3>Project Name #1</h3></div>
											<div class="col-md-6"><p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p></div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</li>
					<li class="wow fadeInUp" style="background-image: url(images/full_2.jpg);" data-wow-duration="1s" data-wow-delay="1.7s" data-stellar-background-ratio="0.5">
						<a href="#">
							<div class="fh5co-overlay"></div>
							<div class="container">
								<div class="fh5co-text">
									<div class="fh5co-text-inner">
										<div class="row">
											<div class="col-md-6"><h3>Project Name #2</h3></div>
											<div class="col-md-6"><p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p></div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</li>
					<li class="wow fadeInUp" style="background-image: url(images/full_1.jpg);" data-wow-duration="1s" data-wow-delay="2s" data-stellar-background-ratio="0.5">
						<a href="#">
							<div class="fh5co-overlay"></div>
							<div class="container">
								<div class="fh5co-text">
									<div class="fh5co-text-inner">
										<div class="row">
											<div class="col-md-6"><h3>Project Name #3</h3></div>
											<div class="col-md-6"><p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p></div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div-->



		{{--<div class="fh5co-features-style-1" style="background-image: url(images/full_4.jpg);" data-stellar-background-ratio="0.5">--}}
			{{--<div class="fh5co-overlay"></div>--}}
			{{--<div class="container" style="z-index: 3; position: relative;">--}}
				{{--<div class="row p-b">--}}
					{{--<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">--}}
						{{--<h2 class="fh5co-heading">We Help Brands Grow</h2>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row">--}}
					{{--<div class="fh5co-features">--}}
						{{--<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">--}}
							{{--<div class="icon"><i class="icon-ribbon"></i></div>--}}
							{{--<h3>Brand Strategy</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
						{{--</div>--}}
						{{--<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">--}}
							{{--<div class="icon"><i class="icon-image22"></i></div>--}}
							{{--<h3>Design + Idenity</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
						{{--</div>--}}
						{{--<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">--}}
							{{--<div class="icon"><i class=" icon-monitor"></i></div>--}}
							{{--<h3>Web Development</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
						{{--</div>--}}

						{{--<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">--}}
							{{--<div class="icon"><i class="icon-video2"></i></div>--}}
							{{--<h3>Video Direction</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
						{{--</div>--}}
						{{--<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">--}}
							{{--<div class="icon"><i class="icon-bag"></i></div>--}}
							{{--<h3>E-Commerce Integration</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
						{{--</div>--}}
						{{--<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">--}}
							{{--<div class="icon"><i class="icon-mail2"></i></div>--}}
							{{--<h3>Email Strategy</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
						{{--</div>--}}

					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}

		{{--<div class="fh5co-features-style-2">--}}
			{{--<div class="container">--}}
				{{--<div class="row p-b">--}}
					{{--<div class="col-md-6 col-md-offset-3 text-center">--}}
						{{--<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Why Choose Us</h2>--}}
						{{--<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row">--}}
					{{--<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">--}}
					{{--<div class="fh5co-icon"><i class="icon-command"></i></div>--}}
					{{--<div class="fh5co-desc">--}}
						{{--<h3>100% Free</h3>--}}
						{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
					{{--</div>	--}}
				{{--</div>--}}
				{{--<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">--}}
					{{--<div class="fh5co-icon"><i class="icon-eye22"></i></div>--}}
					{{--<div class="fh5co-desc">--}}
						{{--<h3>Retina Ready</h3>--}}
						{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="clearfix visible-sm-block visible-xs-block"></div>--}}
				{{--<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">--}}
					{{--<div class="fh5co-icon"><i class="icon-toggle"></i></div>--}}
					{{--<div class="fh5co-desc">--}}
						{{--<h3>Fully Responsive</h3>--}}
						{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">--}}
					{{--<div class="fh5co-icon"><i class="icon-archive22"></i></div>--}}
					{{--<div class="fh5co-desc">--}}
						{{--<h3>Lightweight</h3>--}}
						{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
					{{--</div>	--}}
				{{--</div>--}}
				{{--<div class="clearfix visible-sm-block visible-xs-block"></div>--}}
				{{--<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">--}}
					{{--<div class="fh5co-icon"><i class="icon-heart22"></i></div>--}}
					{{--<div class="fh5co-desc">--}}
						{{--<h3>Made with Love</h3>--}}
						{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.6s">--}}
					{{--<div class="fh5co-icon"><i class="icon-umbrella"></i></div>--}}
					{{--<div class="fh5co-desc">--}}
						{{--<h3>Eco Friendly</h3>--}}
						{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="clearfix visible-sm-block visible-xs-block"></div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}

		{{--<div class="fh5co-pricing-style-2">--}}
			{{--<div class="container">--}}
				{{--<div class="row">--}}
					{{--<div class="row p-b">--}}
						{{--<div class="col-md-6 col-md-offset-3 text-center">--}}
							{{--<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Pricing Plans</h2>--}}
							{{--<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row">--}}
					{{--<div class="pricing">--}}
		            {{--<div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">--}}
		                 {{--<h3 class="pricing-title">Basic</h3>--}}
		                 {{--<p class="pricing-sentence">Little description here</p>--}}
		                 {{--<div class="pricing-price"><span class="pricing-currency">$</span>19<span class="pricing-period">/ month</span></div>--}}
		                 {{--<ul class="pricing-feature-list">--}}
		                     {{--<li class="pricing-feature">10 presentations/month</li>--}}
		                     {{--<li class="pricing-feature">Support at $25/hour</li>--}}
		                     {{--<li class="pricing-feature">1 campaign/month</li>--}}
		                 {{--</ul>--}}
		                 {{--<button class="btn btn-success btn-outline">Choose plan</button>--}}
		             {{--</div>--}}
		             {{--<div class="pricing-item pricing-item--featured wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">--}}
		                 {{--<h3 class="pricing-title">Standard</h3>--}}
		                 {{--<p class="pricing-sentence">Little description here</p>--}}
		                 {{--<div class="pricing-price"><span class="pricing-currency">$</span>29<span class="pricing-period">/ month</span></div>--}}
		                 {{--<ul class="pricing-feature-list">--}}
		                     {{--<li class="pricing-feature">50 presentations/month</li>--}}
		                     {{--<li class="pricing-feature">5 hours of free support</li>--}}
		                     {{--<li class="pricing-feature">10 campaigns/month</li>--}}
		                 {{--</ul>--}}
		                 {{--<button class="btn btn-success btn-lg">Choose plan</button>--}}
		             {{--</div>--}}
		             {{--<div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">--}}
		                 {{--<h3 class="pricing-title">Enterprise</h3>--}}
		                 {{--<p class="pricing-sentence">Little description here</p>--}}
		                 {{--<div class="pricing-price"><span class="pricing-currency">$</span>79<span class="pricing-period">/ month</span></div>--}}
		                 {{--<ul class="pricing-feature-list">--}}
		                     {{--<li class="pricing-feature">Unlimited presentations</li>--}}
		                     {{--<li class="pricing-feature">Unlimited support</li>--}}
		                     {{--<li class="pricing-feature">Unlimited campaigns</li>--}}
		                 {{--</ul>--}}
		                 {{--<button class="btn btn-success btn-outline">Choose plan</button>--}}
		             {{--</div>--}}
		         {{--</div>--}}
		      {{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		
		{{--<div class="fh5co-content-style-6">--}}
			{{--<div class="container">--}}
				{{--<div class="row p-b text-center">--}}
					{{--<div class="col-md-6 col-md-offset-3">--}}
						{{--<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Search Tribe.</h2>--}}
						{{--<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Explore tribes that fit your interest and area. Look at their projects and join</p>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row">--}}
					{{--<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">--}}
						{{--<a href="#" class="link-block">--}}
							{{--<figure><img src="images/img_same_dimension_1.jpg" alt="Image" class="img-responsive img-rounded"></figure>--}}
							{{--<h3>Responsive Layout</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
							{{--<p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>--}}
						{{--</a>--}}
					{{--</div>--}}
					{{--<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">--}}
						{{--<a href="#" class="link-block">--}}
							{{--<figure><img src="images/img_same_dimension_2.jpg" alt="Image" class="img-responsive img-rounded"></figure>--}}
							{{--<h3>Retina Ready</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
							{{--<p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>--}}
						{{--</a>--}}
					{{--</div>--}}
					{{--<div class="clearfix visible-sm-block"></div>--}}
					{{--<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">--}}
						{{--<a href="#" class="link-block">--}}
							{{--<figure><img src="images/img_same_dimension_3.jpg" alt="Image" class="img-responsive img-rounded"></figure>--}}
							{{--<h3>Creative UI Design</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
							{{--<p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>--}}
						{{--</a>--}}
					{{--</div>--}}
					{{--<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">--}}
						{{--<a href="#" class="link-block">--}}
							{{--<figure><img src="images/img_same_dimension_4.jpg" alt="Image" class="img-responsive img-rounded"></figure>--}}
							{{--<h3>Responsive Layout</h3>--}}
							{{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
							{{--<p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>--}}
						{{--</a>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}

		<div class="fh5co-counter-style-2" style="background-image: url(images/full_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-section-content-wrap">
					<div class="fh5co-section-content">
						<div class="row">
							<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
								<div class="icon">
									<i class="icon-command"></i>
								</div>
								<span class="fh5co-counter js-counter" data-from="0" data-to="28" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Clients Worked With</span>
								
							</div>
							<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
								<div class="icon">
									<i class="icon-power"></i>
								</div>
								<span class="fh5co-counter js-counter" data-from="0" data-to="57" data-speed="500" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Completed Projects</span>
							</div>
							<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
								<div class="icon">
									<i class="icon-code2"></i>
								</div>
								<span class="fh5co-counter js-counter" data-from="0" data-to="34023" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Line of Codes</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		{{--<div class="fh5co-testimonial-style-2">--}}
			{{--<div class="container">--}}
				{{--<div class="row p-b">--}}
					{{--<div class="col-md-6 col-md-offset-3 text-center">--}}
						{{--<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Happy Customer</h2>--}}
						{{--<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row">--}}
					{{----}}
					{{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
						{{--<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">--}}
							{{--<div class="fh5co-name">--}}
								{{--<img src="images/person_5.jpg" alt="">--}}
								{{--<div class="fh5co-meta">--}}
									{{--<h3>Chris Clark</h3>--}}
									{{--<span class="fh5co-company">XYZ Inc.</span>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="fh5co-text">--}}
								{{--<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>--}}
							{{--</div>--}}
						{{--</div>	--}}
					{{--</div>--}}
					{{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
						{{--<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">--}}
							{{--<div class="fh5co-name">--}}
								{{--<img src="images/person_4.jpg" alt="">--}}
								{{--<div class="fh5co-meta">--}}
									{{--<h3>Ian Stewart</h3>--}}
									{{--<span class="fh5co-company">XYZ Inc.</span>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="fh5co-text">--}}
								{{--<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. &rdquo;</p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}

					{{--<div class="clearfix visible-sm-block"></div>--}}

					{{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
						{{--<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">--}}
							{{--<div class="fh5co-name">--}}
								{{--<img src="images/person_3.jpg" alt="">--}}
								{{--<div class="fh5co-meta">--}}
									{{--<h3>Mitch Silk</h3>--}}
									{{--<span class="fh5co-company">XYZ Inc.</span>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="fh5co-text">--}}
								{{--<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{----}}
					{{--<div class="clearfix visible-lg-block visible-md-block"></div>--}}

					{{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
						{{--<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">--}}
							{{--<div class="fh5co-name">--}}
								{{--<img src="images/person_1.jpg" alt="">--}}
								{{--<div class="fh5co-meta">--}}
									{{--<h3>Beth Glasgow</h3>--}}
									{{--<span class="fh5co-company">XYZ Inc.</span>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="fh5co-text">--}}
								{{--<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. &rdquo;</p>--}}
							{{--</div>--}}
						{{--</div>	--}}
					{{--</div>--}}
					{{----}}
					{{--<div class="clearfix visible-sm-block"></div>--}}

					{{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
						{{--<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">--}}
							{{--<div class="fh5co-name">--}}
								{{--<img src="images/person_2.jpg" alt="">--}}
								{{--<div class="fh5co-meta">--}}
									{{--<h3>Rob Smith</h3>--}}
									{{--<span class="fh5co-company">XYZ Inc.</span>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="fh5co-text">--}}
								{{----}}
								{{--<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
						{{--<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.6s">--}}
							{{--<div class="fh5co-name">--}}
								{{--<img src="images/person_6.jpg" alt="">--}}
								{{--<div class="fh5co-meta">--}}
									{{--<h3>Colleen Bass</h3>--}}
									{{--<span class="fh5co-company">XYZ Inc.</span>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="fh5co-text">--}}
								{{--<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}

					{{--<div class="clearfix visible-sm-block"></div>--}}

				{{--</div>--}}
			{{--</div>	--}}
		{{--</div>--}}
			
		<div class="fh5co-footer-style-3">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<div class="fh5co-logo"><span class="logo">T</span> Tribe</div>
						<p class="fh5co-copyright">&copy; 2017 Tribe <br>All Rights Reserved. <br>Created by <a target="_blank" href="">Tribe</a> <br> 
						</p>
					</div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
						<h3>Company</h3>
						<ul class="fh5co-links">
							<li><a href="#">How it Works</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
						<h3>Connect</h3>
						<ul class="fh5co-links fh5co-social">
							<li><a href="#"><i class="icon icon-facebook2"></i> Facebook</a></li>
							<li><a href="#"><i class="icon icon-twitter"></i> Twitter</a></li>
							<!-- <li><a href="#"><i class="icon icon-dribbble"></i> Dribbble</a></li> -->
							<li><a href="#"><i class="icon icon-instagram"></i> Instagram</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
						<h3>About</h3>
						<p>To strengthen social good, help people and... have fun :)</p>
						<!-- <p><a href="#" class="btn btn-success btn-sm btn-outline">I'm a button</a></p> -->
					</div>
					<div class="clearfix visible-sm-block"></div>
				</div>
		{{-- 		<div class="row fh5co-made">
					<div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<p>Made with <i class="heart icon-heart"></i> in Philippines</p>
					</div>
				</div> --}}
			</div>
		</div>
		<!-- END footer -->
		
	{{-- </div> --}}
	<!-- END page-->
@endsection