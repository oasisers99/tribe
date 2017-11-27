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

    #user-name{
        width: 40%;
    }

    #user-suburb, #user-state{
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
	<form class="form-horizontal" method="post" action="{{ route('user.profile-update') }}">
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
        <label for="askTribeName">Name</label>
        <input type="text" id="user-name" name="user-name" value="{{$user->name}}" placeholder="Name" class="form-control" maxlength="128" required/>
    </div>
    <div class="form-group">
        <label for="askForSuburb">Suburb</label>
        <input type="text" id="user-suburb" name="user-suburb" value="{{$user->suburb}}" placeholder="Suburb" class="form-control" maxlength="128" required/>
    </div>
    <div class="form-group">
        <label for="askForSuburb">State</label>
        <input type="text" id="user-state" name="user-state" value="{{$user->state}}" placeholder="State" class="form-control" maxlength="3" required/>
    </div>
    <div class="form-group">
        <label for="askTopic">Interest</label><br/>
    	@foreach($interests as $idx=>$interest)
    		@if($interest['selected'] == 1)
    			<input type="checkbox" id="user-interest-{{$interest['interest']}}" name="user-interest[]" value="{{$interest['interest']}}" class="custom-control-input" checked>
    		@else
    			<input type="checkbox" id="user-interest-{{$interest['interest']}}" name="user-interest[]" value="{{$interest['interest']}}" class="custom-control-input">
    		@endif
			<span class="custom-control-indicator"></span>
			<span class="custom-control-description" style="margin-right: 1%;">{{$interest['interest']}}</span>
		@endforeach
    </div>
    <div class="form-group">   
        <label for="askLittleAboutTribe">Brief introduction about yoursefl</label>
        <input type="text" id="user-description" name="user-description" value="{{$user->description}}" placeholder="Summary" class="form-control" maxlength="512"/>
    </div>
    
    <div class="form-group">
    	<button type="submit" class="btn btn-lg btn-danger" style="width: 10%; margin-top: 5%;">Submit</button>
    </div>
    </form>
</div>
@endsection