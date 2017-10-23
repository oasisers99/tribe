@extends('layouts.app')

@section('title', config('app.name'))

@section('page-resources')
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

@section('body-content')
<div class="fh5co-testimonial-style-2" style="margin-top: 5%;">
	<div class="container">
		<div class="row p-b">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">Members of Voli</h2>
				<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;"> </p>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.1s; animation-name: fadeInUp;">
					<div class="fh5co-name">
						<img src="https://media-exp1.licdn.com/media/AAEAAQAAAAAAAAtsAAAAJGY3NjFlYTkzLWZlNTctNDhlNi1iYmYyLWRhMjlmNzNjYzEyZQ.jpg" alt="">
						<div class="fh5co-meta">
							<h3>Jacqui Storey</h3>
							<span class="fh5co-company">Founder & Director</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>Jacqui is curious by nature and has always her fingers in a myriad of pies! A problem solver, entrepreneur and social innovator.</p>
					</div>
				</div>	
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.4s; animation-name: fadeInUp;">
					<div class="fh5co-name">
						<img src="https://media-exp1.licdn.com/mpr/mpr/shrinknp_400_400/AAIA_wDGAAAAAQAAAAAAAA3mAAAAJDEwMDZmOGE3LTk5OTgtNDJlNS1iNmVjLTRiMmZlZjdjYjI1Mw.jpg" alt="">
						<div class="fh5co-meta">
							<h3>Minseok Song</h3>
							<span class="fh5co-company">Technical Director</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>Minseok is an IT geek who likes learning and building new things.</p>
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm-block"></div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.7s; animation-name: fadeInUp;">
					<div class="fh5co-name">
						<img src="/images/person_3.jpg" alt="">
						<div class="fh5co-meta">
							<h3>New Member</h3>
							<span class="fh5co-company">Voli</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>New Voli member</p>
					</div>
				</div>
			</div>
			
			<div class="clearfix visible-lg-block visible-md-block"></div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s" style="visibility: visible; animation-duration: 1s; animation-delay: 2s; animation-name: fadeInUp;">
					<div class="fh5co-name">
						<img src="/images/person_1.jpg" alt="">
						<div class="fh5co-meta">
							<h3>New Member</h3>
							<span class="fh5co-company">Voli</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>New Voli member</p>
					</div>
				</div>	
			</div>
			
			<div class="clearfix visible-sm-block"></div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 2.3s; animation-name: fadeInUp;">
					<div class="fh5co-name">
						<img src="/images/person_2.jpg" alt="">
						<div class="fh5co-meta">
							<h3>New Member</h3>
							<span class="fh5co-company">Voli</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>New Voli member</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 2.6s; animation-name: fadeInUp;">
					<div class="fh5co-name">
						<img src="/images/person_6.jpg" alt="">
						<div class="fh5co-meta">
							<h3>New Member</h3>
							<span class="fh5co-company">Voli</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>New Voli member</p>
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm-block"></div>

		</div>
	</div>	
</div>

@endsection