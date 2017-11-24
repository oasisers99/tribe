@extends('layouts.user-setting')
@section('title', 'User Profile')
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
<div class="col-md-8 setting-body" style="margin-top: 7%;">
	<form class="form-horizontal" method="post" action=" ">
	<input id="tribe_id" name="tribe_id" value="" hidden="" />
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
    	<h3 style="margin-top: 0px;">User Profile</h3>
    </div>
    <div class="form-group">
        <label for="askTribeName">Name of the tribe</label>
        <input type="text" id="tribe-name" name="name" value="" placeholder="Name" class="form-control" maxlength="128" required/>
    </div>
    <div class="form-group">   
        <label for="askLittleAboutTribe">Summary</label>
        <input type="text" id="tribe-summary" name="summary" value="" placeholder="Summary" class="form-control" maxlength="512" required/>
    </div>
    <div class="form-group">  
        <label for="askLocation">Location</label>
        <input type="text" id="tribe-region" name="region" value="" placeholder="Area ex. Sydney" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="askTopic">Topic</label>
        <select id="tribe-topic" class="form-control select select-primary" name="topic1" data-toggle="select">
           {{--  @foreach($interests as $idx=>$interest)
                @if($interest == $tribe['tribe']->topic1)
                    <option value="{{$interest}}" selected>{{$interest}}</option>
                @else
                    <option value="{{$interest}}">{{$interest}}</option>
                @endif
            @endforeach --}}
        </select>
    </div>
    <div class="form-group">
    	<button type="submit" class="btn btn-lg btn-danger" style="width: 10%; margin-top: 5%;">Submit</button>
    </div>
    </form>
</div>
@endsection