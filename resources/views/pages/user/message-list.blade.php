@extends('layouts.user-setting')
@section('title', 'Messages')
<style type="text/css">
.card{
    margin-bottom: 3%;
}
</style>
@section('body-content')
<div class="col-md-9 setting-body" style="margin-top: 7%;">
    <h3 style="margin-top: 0px;">Messages</h3>
    <hr/>
	@foreach($messages as $message)
    <div class="card">
      <div class="card-body">
        <p class="card-text">Sent from: {{ $message->sent_from}}</p>
        <p class="card-text"><small class="text-muted">Created at {{ \Carbon\Carbon::parse($message->created_at)->format('d  M,  Y')}}</small></p>
        <h4 class="card-title">{{$message->message}}</h4>
        <a href="#" class="btn btn-primary">Mark Read</a>
      </div>
    </div>
    <hr/>
    @endforeach
</div>
@endsection