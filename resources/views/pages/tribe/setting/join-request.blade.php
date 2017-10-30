@extends('layouts.tribe-setting')
@section('title', 'Tribe Setting')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
	
</style>
<script type="text/javascript">
	
	function declineRequestConfirm(requestId, userId){
		$("#declineRequestId").val(requestId);
		$("#declineUserId").val(userId);
		$("#decline-modal").modal('show');
	}

	function acceptRequestConfirm(requestId, userId){
		$("#acceptRequestId").val(requestId);
		$("#acceptUserId").val(userId);
		$("#accept-modal").modal('show');
	}

</script>
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
	    <a href="#" class="btn btn-danger" onclick="declineRequestConfirm('{{$request->id}}', '{{$request->user_id}}');">Decline</a>
	    <a href="#" class="btn btn-success" onclick="acceptRequestConfirm('{{$request->id}}', '{{$request->user_id}}');">Accept</a>
	  </div>
	</div>
	<hr/>
	@endforeach
</div>
<!-- Modal -->
<div class="modal fade" id="decline-modal" tabindex="-1" role="dialog" aria-labelledby="tribeModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <h5 class="modal-title" id="tribeModalLabel"></h5>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
	    </div>
	    <div id="tribeModalMessage" class="modal-body">
	      Do you really want to decline the request?
	    </div>
	    <div class="modal-footer">
		<form id="declineForm" method="post" action="{{route('tribe.setting.join-decline') }}">
			{{ csrf_field() }}	
			<input type="input" id="declineRequestId" name="requestId" value="" hidden>
			<input type="input" id="declineUserId" name="userId" value="" hidden>
			<input type="input" id="tribe_id" name="tribe_id" value="{{$tribe['tribe']->id}}" hidden>
			<button type="submit" class="btn btn-danger">Yes</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
	  	</form>
	    </div>
	  </div>
	</div>
</div>

<div class="modal fade" id="accept-modal" tabindex="-1" role="dialog" aria-labelledby="tribeModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <h5 class="modal-title" id="tribeModalLabel"></h5>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
	    </div>
	    <div id="tribeModalMessage" class="modal-body">
	      Do you want to accept the request?
	    </div>
	    <div class="modal-footer">
		<form id="declineForm" method="post" action="{{route('tribe.setting.join-accept') }}">
			{{ csrf_field() }}	
			<input type="input" id="acceptRequestId" name="requestId" value="" hidden>
			<input type="input" id="acceptUserId" name="userId" value="" hidden>
			<input type="input" id="tribe_id" name="tribe_id" value="{{$tribe['tribe']->id}}" hidden>
			<button type="submit" class="btn btn-danger">Yes</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
	  	</form>
	    </div>
	  </div>
	</div>
</div>
@endsection