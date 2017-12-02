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
				<h2>About {{config('app.name')}}</h2>
				<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;"> </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
			<p>
			<b>{{config('app.name')}}</b> is a national online network of self-organising volunteering groups. We make it easy for you to find and create meaningful volunteering activities. <br/><br/>

On <b>{{config('app.name')}}</b> you can find like-minded people and form a group or ‘tribe’. The platform enables your group to create and manage your own volunteering projects; what, where, how and who is up to you! We know you have a wealth of experience from your decades in the workforce and life knowledge to share. You’re the one with skills and networks, and now you’re the one with the time to use that power. We’ll help you harness that power for the greatest outcome. 
<br/><br/>

<h3><b>Vision</b>.</h3> 
At <b>{{config('app.name')}}</b> our vision is to have every Australian Baby Boomer engaged in volunteering roles that feel meaningful, interesting and flexible. 
<br/><br/>

<h3><b>Mission Statement</b>.</h3>
We hand you the power and control over your volunteer participation. <br/>You are the leader of your own volunteering journey.
<br/><br/>

<h3><b>Values</b>.</h3>
Re-invention (innovation)<br/>
Personalisation<br/>
Leadership <br/>
Connection <br/>
Spirit (vivacity)<br/>

			</p>
			<iframe width="520" height="293" src={{ $videolink }} frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-8 col-md-offset-2 text-center">
			<p>
			</p>
			</div>
		</div>
		<div class="row p-b" style="margin-top: 5%;">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2>Members of {{config('app.name')}}</h2>
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
							<span class="fh5co-company">CEO and Business Director </span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>I’d like to extend a warm welcome onto our platform. You may be searching through the website wondering who’s sitting on the other side of this digital screen; well, it’s me, and a small team of dedicated professionals. I describe myself as an entrepreneur, social innovator and doting granddaughter. The spark for this platform came from my high respect and value for the knowledge that is transferred from an elder to their younger generations. This valuable knowledge resource needs to be nourished and shared in a way that is fitting; that garners the appropriate respect for our older generations.</p>
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
							<span class="fh5co-company">Chief Technical Officer & <br/> Technical Director </span>
						</div>
					</div>
					<div class="fh5co-text">
						<p>You may be searching through the website also wondering who’s creating this digital platform; well, it’s me! I started this {{config('app.name')}} project hoping that my technical skills can help people. Technology is my passion, and I love using it to solve problems. I truly hope that with {{config('app.name')}}, you could continue / find your passion and lead a happier life.</p>
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