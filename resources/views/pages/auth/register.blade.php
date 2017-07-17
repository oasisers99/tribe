@extends('layouts.app')

@section('title','Registration')

@section('page-resources')
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/auth/style.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
	<script type="text/javascript"></script>


	<script type="text/javascript">
		$(document).ready({
			
		});
	</script>
@endsection



@section('body-content')
  <div class="login">
	<h1>Welcome!</h1>
	    <form method="post" id="registerForm" action="{{ route('auth.register') }}">
	    	<fieldset>
		        {{ csrf_field() }}
		    	<input type="text" name="name" placeholder="Your name" minlength="3" required="required" />
		    	<input type="email" name="email" placeholder="Email" required="required" />
		        <input type="password" id="password1" name="password1" placeholder="Password" minlength="3" required="required" />
		        <input type="password" id="password2" name="password2" equalto="#password1" placeholder="Password Confirmation" minlength="3" required="required" />
		        <button type="submit" class="btn btn-primary btn-block btn-large">Submit</button>
	        </fieldset>
	    </form>
	</div>
	<script type="text/javascript">
		$("#registerForm").validate();
	</script>
	<style type="text/css">
		.error{
			color: white;
		}
	</style>
@endsection