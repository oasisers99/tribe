@extends('layouts.app')

@section('title','Login')

@section('head-content')
  <meta charset="UTF-8">
  <title>Login</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="/css/login/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
    <script scr="<?php echo asset('/js/login/index.js'); ?>"></script>
@endsection