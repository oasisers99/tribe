@extends('layouts.common')

@section('title','Create Tribe')

@section('page-resources')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    {{-- <link rel="stylesheet" type="text/css" href="{{ mix('/css/tribe/style.css') }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style type="text/css">
        .col-md-10.create-tribe{
            margin-top: 5%;
        }
        
        .form-horizontal .form-group{
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
@endsection

@section('body-content')
<div class="col-md-1">
</div>
<div class="col-md-10 create-tribe">
    <h1 style="text-align: center;">New Tribe</h1>
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
        <label for="askTribeName">What is the name of your tribe?</label>
        <input type="text" id="tribe-name" name="name" placeholder="Name" class="form-control" maxlength="128" required/>
    </div>
    <div class="form-group">   
        <label for="askLittleAboutTribe">A little bit about your tribe</label>
        <input type="text" id="tribe-summary" name="summary" placeholder="Summary" class="form-control" maxlength="512" required/>
    </div>
    <div class="form-group">  
        <label for="askLocation">Where is the location of the tribe?</label>
        <input type="text" id="tribe-region" name="region" placeholder="Area ex. Sydney" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="askTopic">What is the topic of your tribe?</label>
        <select id="tribe-topic" class="form-control select select-primary" name="topic1" data-toggle="select">
            <option value="Arts">Arts</option>
            <option value="Music">Music</option>
            <option value="Technology">Technology</option>
            <option value="Sports">Sports</option>
            <option value="Legal">Legal</option>
            <option value="Consulting">Consulting</option>
            <option value="Environment">Environment</option>
            <option value="Education">Education</option>
            <option value="Social">Social</option>
        </select>
    </div>
    <button type="submit" class="btn btn-lg btn-primary" style="width: 10%; margin-top: 5%;">Create</button>
    </form>
    
</div>
<div class="col-md-1">
</div>
@endsection