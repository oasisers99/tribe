@extends('layouts.tribe-setting')
@section('title', 'Tribe Setting')
<style type="text/css">
	.setting-body{
		margin: 0px;
		padding: 0px;
	}
    .col-md-10.create-tribe{
        margin-top: 5%;
    }
    
    .form-horizontal.form-group{
        margin-top: 3%;
        margin-right: 0px;
        margin-left: 0px;
    }

    #tribe-name{
        width: 40%;
    }

    #tribe-summary{
        width: 40%;
    }

    #tribe-region{
        width: 20%;
    }

    #tribe-topic{
        width: 30%;
    }
</style>
@section('body-content')
<div class="col-md-9 setting-body">
	<form class="form-horizontal" method="post" action="{{ route('tribe.createTribe') }}">
    {{ csrf_field() }}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: black;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
    	<h3 style="margin-top: 0px;">Edit Tribe Profile</h3>
    </div>
    <div class="form-group">
        <label for="askTribeName">Name of the tribe</label>
        <input type="text" id="tribe-name" name="name" value="{{$tribe['tribe']->name}}"placeholder="Name" class="form-control" maxlength="128" required/>
    </div>
    <div class="form-group">   
        <label for="askLittleAboutTribe">Summary</label>
        <input type="text" id="tribe-summary" name="summary" value="{{$tribe['tribe']->summary}}" placeholder="Summary" class="form-control" maxlength="512" required/>
    </div>
    <div class="form-group">  
        <label for="askLocation">Location</label>
        <input type="text" id="tribe-region" name="region" value="{{$tribe['tribe']->region}}" placeholder="Area ex. Sydney" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="askTopic">Topic</label>
        <select id="tribe-topic" class="form-control select select-primary" name="topic1" data-toggle="select">
            <option value="Arts" <?php if($tribe['tribe']->topic1 === 'Arts') {echo 'selected';} ?> >Arts</option>
            <option value="Music" <?php if($tribe['tribe']->topic1 === 'Music') {echo 'selected';} ?>>Music</option>
            <option value="Technology" <?php if($tribe['tribe']->topic1 === 'Technology') {echo 'selected';} ?>>Technology</option>
            <option value="Sports" <?php if($tribe['tribe']->topic1 === 'Sports') {echo 'selected';} ?>>Sports</option>
            <option value="Legal" <?php if($tribe['tribe']->topic1 === 'Legal') {echo 'selected';} ?>>Legal</option>
            <option value="Consulting" <?php if($tribe['tribe']->topic1 === 'Consulting') {echo 'selected';} ?>>Consulting</option>
            <option value="Environment" <?php if($tribe['tribe']->topic1 === 'Environment') {echo 'selected';} ?>>Environment</option>
            <option value="Education" <?php if($tribe['tribe']->topic1 === 'Education') {echo 'selected';} ?>>Education</option>
            <option value="Social" <?php if($tribe['tribe']->topic1 === 'Social') {echo 'selected';} ?>>Social</option>
        </select>
    </div>
    <div class="form-group">
    	<button type="submit" class="btn btn-lg btn-danger" style="width: 10%; margin-top: 5%;">Submit</button>
    </div>
    </form>
</div>
@endsection