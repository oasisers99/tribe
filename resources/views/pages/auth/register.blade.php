@extends('layouts.common')

@section('title','Register')

@section('page-resources')
<link rel="stylesheet" type="text/css" href="{{ mix('/css/auth/style.css') }}">
@endsection


@section('body-content')
<div class="register-page">
	<div class="form">
		<h1 class="loginMainMessage">Welcome!</h1>
		<form class="register-form" method="post" id="registerForm" action="{{ route('auth.register') }}">
			{{ csrf_field() }}
			<input type="text" name="name" placeholder="Name"/>
			<input type="email" name="email" placeholder="Email" required="required" />
			<input type="password" id="password1" name="password1" placeholder="Password" required="required" />
		        <input type="password" id="password2" name="password2" equalto="#password1" placeholder="Password Confirmation" required="required" />
			<button type="submit">create</button>
			<p class="message">Already registered? <a href="{{ route('auth.loginForm') }}">Sign In</a></p>
		</form>
		{{-- Register error messages --}}
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