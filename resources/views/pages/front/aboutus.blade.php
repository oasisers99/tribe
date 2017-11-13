@extends('layouts.app')

@section('title', config('app.name'))

@section('page-resources')
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

@section('body-content')
<div class="fh5co-testimonial-style-2" style="margin-top: 5%;">
	<div class="container">
		<div class="row p-b" style="padding-bottom: 15px;">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2>About Voli</h2>
				<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;"> </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
			<p>
			Voli ultimately aims to keep older adults connected to the community during the process of retirement. Retirement is a time when identity is rocked and people re-visit their thoughts about life purpose. This is a natural next step; through Voli, retirees will have easier access to meaningful connections and fulfilling roles in society. <br/><br/>

			Voli is a web-based platform that allows like-minded people to find each other, form a group and contribute to volunteering projects of special interest to them. The platform enables the group to create and manage their own volunteering projects with assistance from Voli in navigating those tricky parts. Volunteering has been shown to have direct mental and physical health benefits to individuals and the wider community.
			</p>
			<iframe width="520" height="293" src={{ $videolink }} frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row p-b" style="margin-top: 5%;">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2>Members of Voli</h2>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item">
					<div class="fh5co-name">
						<a href="https://www.linkedin.com/in/jacquistorey/" target="_blank">
						<img src="https://media-exp1.licdn.com/media/AAEAAQAAAAAAAAtsAAAAJGY3NjFlYTkzLWZlNTctNDhlNi1iYmYyLWRhMjlmNzNjYzEyZQ.jpg" alt="">
						</a>
						<div class="fh5co-meta">
							<h3>Jacqui Storey</h3>
							<span class="fh5co-company">Founder & Director</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>Curious by nature and has always her fingers in a myriad of pies! A problem solver, entrepreneur and social innovator.</p>
					</div>
				</div>	
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item">
					<div class="fh5co-name">
						<a href="https://www.linkedin.com/in/minseok-song-00aa33b5/" target="_blank">
						<img src="https://media-exp1.licdn.com/mpr/mpr/shrinknp_400_400/AAIA_wDGAAAAAQAAAAAAAA3mAAAAJDEwMDZmOGE3LTk5OTgtNDJlNS1iNmVjLTRiMmZlZjdjYjI1Mw.jpg" alt="">
						</a>
						<div class="fh5co-meta">
							<h3>Minseok Song</h3>
							<span class="fh5co-company">Technical Director</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>Loves solving challenges with technologies. Software Engineer, Architect, Analyst Developer</p>
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm-block"></div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item">
					<div class="fh5co-name">
						<img src="/images/person_3.jpg" alt="">
						<div class="fh5co-meta">
							<h3>Jessie Shin</h3>
							<span class="fh5co-company">Voli</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>Digital Marketing Guru</p>
					</div>
				</div>
			</div>
			
			<div class="clearfix visible-lg-block visible-md-block"></div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item">
					<div class="fh5co-name">
						<img src="/images/person_1.jpg" alt="">
						<div class="fh5co-meta">
							<h3>Seeking UX Designer</h3>
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
				<div class="fh5co-testimonial-item">
					<div class="fh5co-name">
						<img src="/images/person_2.jpg" alt="">
						<div class="fh5co-meta">
							<h3>Seeking New Member</h3>
							<span class="fh5co-company">Voli</span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>New Voli member</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fh5co-testimonial-item">
					<div class="fh5co-name">
						<img src="/images/person_6.jpg" alt="">
						<div class="fh5co-meta">
							<h3>Seeking New Member</h3>
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