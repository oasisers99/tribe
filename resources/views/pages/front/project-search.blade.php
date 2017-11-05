@extends('layouts.common')

@section('title', config('app.name'))

@section('page-resources')

<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    function validateAndSubmit(){
        
        
        
    }
</script>
<style type="text/css">
    .project-search-text{
        position: absolute;
        border-radius:5px; 
        border-width: 2px;
        padding: 5px;
        font-size: 14px;
        color: #a6a6a6;
    }
    #search-interest{
        width:80%;
        right: 5%;
    }
    #search-area{
        width:40%;
    }
    #search-project-btn{
        margin-left: 45%;
    }
    #search-message{
        margin-top: 10px;
        text-align: center;
    }
    div.row.project-search{
        margin-top: 5%;
    }

    div.fh5co-blog-style-1.project-search{
        padding: 4em 0;
    }

    div.col-md-3.more-search{
        width: 20%;
    }
    .row.p-b.more-search{
        padding-bottom: 10px;
    }

    #search-result-hr{
        margin-top: 10px;
        margin-bottom: 20px;
    }
</style>
@endsection

@section('body-content')

<div class="fh5co-content-style-6">
    <div class="container">
        <div class="row project-search">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Search project</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Explore projects by tribes in different domains. 
                You can jump in the project you like. Have a look and ask for join now!</p>
                {{-- <p>Search more tribes out there!</p> --}}
            </div>
            <form class="project-search-form" method="GET" id="project-search" name='tribesearchform' action="{{ route('front.searchProject') }}">
                {{ csrf_field() }}
                <div class="col-md-3 col-md-offset-3">
                    <input type="text" class="project-search-text" id="search-interest" name="interest" placeholder="Interest">
                </div>
                <div class="col-md-6">
                    <input type="text" class="project-search-text" id="search-area" name="area" placeholder="Area">
                    <input type="button" value="Search" class="btn btn-default" id="search-project-btn" onclick="validateAndSubmit();">
                </div>
            </form>
        </div>
        <div class="col-md-12 search-message" style="text-align: center;">
            <p id="search-message" style="font-size: 25px;"></p>
            <hr id="search-result-hr">
        </div>
        @if(count($projects) === 0)
        <div class="col-md-12 result-message" style="text-align: center;">
            <p id="result-message" style="font-size: 25px;">No project found. Please search again.</p>
        </div>
        @endif
        
        @foreach ($projects as $idx=>$project)
        @if(($idx + 1)%4 === 1)
        <div class="row">
        @endif
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <a href="#" class="link-block">
                    <figure><img src="/images/img_same_dimension_1.jpg" alt="Image" class="img-responsive img-rounded"></figure>
                    <h3>{{$project->title}}</h3>
                    <p>{{ str_limit($project->description, 200) }}</p>
                    <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                </a>
            </div>
            @if(($idx + 1)%4 === 0)
        </div> 
        @endif
        @endforeach
    </div>
</div>

@endsection