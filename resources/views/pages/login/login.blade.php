@extends('layouts.app')

@section('title','Login')

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
	<h1>Welcome back!</h1>
	    <form method="post">
	    	<input type="text" name="u" placeholder="Username" required="required" />
	        <input type="password" name="p" placeholder="Password" required="required" />
	        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
	    </form>
	</div>
@endsection