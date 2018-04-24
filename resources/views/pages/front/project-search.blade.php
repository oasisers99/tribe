@extends('layouts.common')

@section('title', config('app.name'))

@section('page-resources')

<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    function validateAndSubmit(){
        
        projectSearchForm.submit();
        
    }

    // $.get("https://ipinfo.io", function (response) {
    //     $("#ip").html("IP: " + response.ip);
    //     $("#address").html("Location: " + response.city + ", " + response.region);
    //     $("#details").html(JSON.stringify(response, null, 4));
    //     $("#city").html(response.city);
    //     // document.getElementById('city').value = response.city;
    //     alert(response.city);
    // }, "jsonp");
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
    #interest-select{
        height: 40px;
        width: 260px;
    }
</style>
@endsection

@section('body-content')

<div class="fh5co-content-style-6">
    <div class="container">
        <div class="row project-search">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Find project!</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Our community of tribes create and run their <b>own</b> volunteering projects and activities. If you can’t see a project that you’d like to join; <a href="{{ route('front.gettingStarted') }}">create a new one!</a></p>
                {{-- <p>Search more tribes out there!</p> --}}
            </div>
            <form class="project-search-form" method="GET" id="project-search" name='projectSearchForm' action="{{ route('front.searchProject') }}">
                {{ csrf_field() }}
                <div class="col-md-3 col-md-offset-3">
                    {{-- <input type="text" class="project-search-text" id="search-interest" name="topic" placeholder="Interest"> --}}
                    <select id="interest-select" name="topic">
                    @foreach($interests as $idx=>$interest)
                        @if($interest == $topic)
                            <option value="{{$interest}}" selected>{{$interest}}</option>
                        @else
                            <option value="{{$interest}}">{{$interest}}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="text" class="project-search-text" id="search-area" name="area" autocomplete="city" placeholder="Area">
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
                    <h3>{{ str_limit($project->title, 100) }}</h3>
                    <p>{{ str_limit(strip_tags($project->description), 200) }}</p>
                    <p><a href="{{route('front.viewProject', ['projectId' => $project->id]) }}" class="btn btn-primary btn-sm">Learn More</a></p>
                </a>
            </div>
            @if(($idx + 1)%4 === 0)
        </div> 
        @endif
        @endforeach
    </div>
</div>

@endsection