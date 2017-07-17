@extends('layouts.app')

@section('title','Registration')

@section('page-resources')
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/auth/style.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script type="text/javascript">
		$(document).ready({
			
		});
	</script>
@endsection



@section('body-content')
  <div class="login">
	<h1>Welcome!</h1>
	    <form method="post" action="{{ route('auth.register') }}">
	        {{ csrf_field() }}
	    	<input type="text" name="name" placeholder="Your name" required="required" />
	    	<input type="email" name="email" placeholder="Email" required="required" />
	        <input type="password" name="password" placeholder="Password" required="required" />
	        <input type="password" name="password2" placeholder="Password Confirmation" required="required" />
	        <button type="submit" class="btn btn-primary btn-block btn-large">Submit</button>
	    </form>
	</div>
@endsection