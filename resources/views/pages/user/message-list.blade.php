@extends('layouts.user-setting')
@section('title', 'Messages')
<style type="text/css">
.card{
    margin-bottom: 3%;
}
</style>
<script type="text/javascript">
    
    function markasread(messageId){
        var data = {
          "messageId" : messageId
        };

        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          method: "POST",
          url: '{{ route('user.message-mark-as-read') }}',
          data: data
        }).done(function(result) {
            $("#message-card-"+messageId).fadeOut("fast");
            location.reload();
        });

    }

</script>
@section('body-content')
<div class="col-md-9 setting-body" style="margin-top: 7%;">
    <h3 style="margin-top: 0px;">Messages</h3>
    <hr/>
	@foreach($messages as $message)
    <div class="card" id="message-card-{{$message->id}}">
      <div class="card-body">
        <p class="card-text">From: <a>{{ $message->sent_from}}</a></p>
        <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($message->created_at)->format('d  M,  Y')}}</small></p>
        <h4 class="card-title">{{$message->message}}</h4>
        <a href="#" class="btn btn-primary" onclick="markasread({{$message->id}})">Mark as read</a>
        <a href="#" class="btn btn-danger" onclick="#">Delete</a>
      </div>
      <hr/>
    </div>
    
    @endforeach
</div>
@include('pages.sections.modal')
@endsection