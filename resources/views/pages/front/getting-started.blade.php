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
				<h2>Getting Started</h2>
				<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;"> </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
			<p>
				<h3>Considering joining a tribe or project?</h3>
				<div class="text-left">
				<li>Request to join the tribe using the ‘request join’ button. This doesn’t mean that you’re locked into that group. You can opt out at any time using the ‘leave group’ button.</li>
				<li>Feel free to try out a number of tribes before committing, however, you can only be a member of 2 tribes at any one time.</li>
				<li>Tip; filling out your personal profile before requesting to join a tribe will increase your chances of being accepted into it.</li>
				<li>Once accepted into the tribe, message the group organiser and suggest to meet at a neutral location such as a café or to join their next planned meeting/activity.</li>
				<li>In your first meeting and beyond - feel free to bring a friend or family member with you, this is a social platform.
o	Didn’t find your tribe? Create a new one!</li>
				</div>
			</p>

			<p>
				<h3>Considering starting a tribe?</h3>
				<div class="text-left">
				<li>Check the existing tribes to see if there are any already covering your topic</li>
				<li>Go to the ‘Create Tribe’ button on the home page *link</li>
				<li>Fill out the form and subscription details</li>
				<li>Once your tribe is live</li>
				<li>Invite your friends and family to join</li>
				<li>Others from the community will also be able to see and join your tribe</li>
				<li>You have the control over who you accept into your group</li>
				<li>Once the tribe is live you can create projects together</li>
				</div>
			</p>

			<p>
				<h3>Considering starting a volunteer project?</h3>
				<div class="text-left">
				<li>You must be in a tribe to start a project</li>
				<li>We suggest speaking to your fellow tribe members in the discussion board or in person before proposing the project using the ‘create project’ button. This will ensure they’re on board and ready to join your force.</li>
				<li>You might want to use these effective project management principles to increase your chances of a smooth project *link</li>
				<li>Do you want to involve external organisations?</li>
				<li>Consider if any legal and insurance needs apply to your project.</li>
					<ul>
					<ul>
						<li>Need a project idea?</li>
						<ul>
							<li>Involve your tribe – meetup to discuss ideas.</li>
							<li>Brainstorm your community needs *template </li>
							<li>Understand what is achievable within your limitations.</li>
							<li><a href="{{ route('tribe.searchTribeFull')}}">Use other tribe projects as inspiration</a></li>
						</ul>
					</ul>
					</ul>
				</div>
			</p>

			<p>
				<h3>Considering volunteering?</h3>
				<div class="text-left">
				<li>Deciding where to direct your efforts? –</li>
					<ul>
					<ul>
						<li>Need a project idea?</li>
						<ul>
							<li>What did you love in your childhood?</li>
							<li>Identify your top strengths and interests. *links to external sites.</li>
							<li>Know what causes you stress – e.g. you don’t need to volunteer in the same area that you worked in. 
o	Consider your availability and time restraints.</li>
							<li>Consider your availability and time restraints.</li>
						</ul>
					</ul>
					</ul>
				</div>
			</p>

			<p>
				<h3>Recently retired?</h3>
				<div class="text-left">
				Now you’ve had your gap year or ‘honeymoon’ after retiring from work, I’m sure you’ve started to think ‘what else is there?’ Retirement is a time when people re-visit their thoughts about life purpose and meaningful living; you might be one of those people. This is a natural next step; through {{config('app.name')}}, you have easier access to meaningful connections and fulfilling roles in society. </br></br>

Retirees have a lifetime of applied knowledge and skills that are hugely valuable to society. We know many of you are willing and actively sharing these skills for causes with a greater social purpose. {{config('app.name')}} aims to harness this immense power to increase the positive social impact of our retiring population.
				</div>
			</p>

			<p>
				<h3>Effective Project Management</h3>
				<div class="text-left">
					<li>Involve the tribe </li>
					<li>Define roles for people as a group – agree on who will be the key organiser for this project </li>
					<li>Do you need to invite others? Other tribes on the platform?</li>
					<li>Start with an initial project kick off meeting, this can be as simple as meeting for a coffee</li>
					<li>Strong communication, the {{config('app.name')}} platform is designed for effective communication between tribes. </li>
					<li>Boundary of the project scope; where, what, how who?</li>
					<li>Timeline – start from the end date and work backwards for any preparations that need to be done. Or is it an ongoing activity? </li>
					<li>‘Create Project’ on the platform, write in these details so all members are aware. </li>
					<li>Costs involved; if any, agree on how the costs will be shared amongst the tribe. </li>
					<li>Schedule discussion time to analyse how it went to improve for next time</li>
					<li>Risks involved; check out these waivers and other templates. *terms of conditions of {{config('app.name')}}  </li>
				</div>
			</p>
			</div>
		</div>
	</div>	
</div>

@endsection