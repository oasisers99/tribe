@extends('layouts.user-setting')
@section('title', 'User Profile')
<style type="text/css">
.card{
    margin-bottom: 3%;
}
</style>
@section('body-content')
<div class="col-md-9 setting-body" style="margin-top: 7%;">
    <h3 style="margin-top: 0px;">User Projects</h3>
    <hr/>
	@foreach($projects as $project)
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$project->title}}</h4>
        <p class="card-text">{{ str_limit($project->description, 200) }}</p>
        <p class="card-text"><small class="text-muted">Created at {{ \Carbon\Carbon::parse($project->created_at)->format('d  M,  Y')}}</small></p>
        <a href="{{route('front.viewProject', ['projectId' => $project->id]) }}" class="btn btn-primary">Details</a>
      </div>
    </div>
    <hr/>
    @endforeach
</div>
@endsection