@extends('layouts.tribe-setting')
@section('title', 'Tribe Setting')
<style type="text/css">
	
</style>
@section('body-content')
<div class="col-md-8">
	@foreach ($requests as $idx=>$request)
	<div class="card">
	  <div class="card-header">
	    {{Carbon\Carbon::parse($request->created_at)->format('d/m/Y')}}
	  </div>
	  <div class="card-body">
	    <h4 class="card-title">{{$request->name}}</h4>
	    <p class="card-text">Hi there. My name is {{$request->name}}. I want to join your tribe!</p>
	    <a href="#" class="btn btn-danger">Decline</a>
	    <a href="#" class="btn btn-success">Accept</a>
	  </div>
	</div>
	<hr/>
	@endforeach
</div>
@endsection