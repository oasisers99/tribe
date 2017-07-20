<link rel="stylesheet" href="{{ mix('/css/menu/style.css') }}">
<nav id="NAV_1">
	<div id="DIV_2">
		<div id="DIV_3">
			 <a href="#" id="A_4"><i id="I_5"></i></a> <a href="/" id="A_6">{{ config('app.name') }}</a>
		</div>
		<div id="DIV_7">
			<ul id="UL_8">
				<li id="LI_9">
					<a href="/" id="A_10">Home</a>
				</li>
				<li id="LI_11">
					<a href="#" id="A_12">Create Tribe</a>
				</li>
				<li id="LI_13">
					<a href="#" id="A_14">Explore Project</a>
				</li>
				<li id="LI_15">
					<a href="#" id="A_16">About</a>
				</li>
				<!-- <li><a href="#">Blog</a></li> -->

				<!-- <li><a href="#">Pricing</a></li> -->

			</ul>
		</div>
		<div id="DIV_17">
			<ul id="UL_18">
				<li id="LI_19">
					@unless (Auth::check())
					<a href="{{ route('auth.loginForm') }}" id="A_20">Login</a>
					@endunless
				</li>
				@if (Auth::check())
				<li id="LI_21" style="position: relative; top: 8%;">
						<a href="" id="A_22">
							@php
								$name = Auth::user()->name;
								$namelist = explode(' ', $name);
								$initial = '';
								foreach($namelist as $name){
									$initial .= substr($name, 0, 1) . '.';
								}
								echo 'Profile';
								//strtoupper($initial);
							@endphp
						</a>
				@elseif (!Auth::check())
				<li id="LI_21">
					<a href="{{ route('auth.registrationForm') }}" id="A_22">Register</a>
				@endif
				</li>
			</ul>
		</div>
	</div>
</nav>