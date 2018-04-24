@extends('layouts.tribe-setting')
@section('title', 'Tribe Setting')
<style type="text/css">
.card{
    margin-bottom: 3%;
}
</style>
@section('body-content')
<div class="col-md-9 setting-body">
    <hr/>
	@foreach($projects as $project)
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$project->title}}</h4>
        <p class="card-text">{{ str_limit(strip_tags($project->description), 400) }}</p>
        <p class="card-text"><small class="text-muted">Created at {{ \Carbon\Carbon::parse($project->created_at)->format('d  M,  Y')}}</small></p>
        <a href="{{route('tribe.setting.project-detail', ['projectId' => $project->id]) }}" class="btn btn-primary">Details</a>
      </div>
    </div>
    <hr/>
    @endforeach

</div>
@endsection