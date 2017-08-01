@extends('layouts.auth')

@section('title','Login')

@section('page-resources')
<link rel="stylesheet" type="text/css" href="{{ mix('/css/auth/style.css') }}">
@endsection


@section('body-content')
<div class="login-page">
	<div class="form">
	  	<h1 class="loginMainMessage">Welcome!</h1>
		<form class="login-form" method="post" id="login" action="{{ route('auth.login') }}">
			{{ csrf_field() }}
			<input type="text" name="email" placeholder="Email" required="required" />
			<input type="password" name="password" placeholder="Password" required="required" />
			<button>LOGIN</button>
			<p class="message">Not registered? <a href="#">Create an account</a></p>
		</form>
		{{-- When redirected from Create Tribe --}}
		@if(session()->has('warning'))
		<div class="alert alert-danger">
		 	<ul>
			 	<li style="color: white;">{!! session()->get('warning') !!}</li>
		  	</ul>
	  	</div>
	  	@endif
	  	{{-- Login error messages --}}
	  	@if ($errors->any())
		  <div class="alert alert-danger">
			  <ul>
				  @foreach ($errors->all() as $error)
					  <li>{{ $error }}</li>
				  @endforeach
			  </ul>
		  </div>
	  	@endif
	</div>
</div>
@endsection