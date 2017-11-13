@extends('layouts.common')

@section('title', config('app.name'))

@section('page-resources')

<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    function validateAndSubmit(){
        //var topic = $("#search-interest").val();
        //var region = $("#search-area").val();
 
        // if(topic.trim() == '' && region.trim() == ''){
        //     $("#search-message").text("Please fill out interest or area.");
        //     return false;
        // }else{
        tribesearchform.submit();
        // }
        
    }
</script>
<style type="text/css">
    .tribe-search-text{
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
    #search-tribe-btn{
        margin-left: 45%;
    }
    #search-message{
        margin-top: 10px;
        text-align: center;
    }
    div.row.tribe-search{
        margin-top: 5%;
    }

    div.fh5co-blog-style-1.tribe-search{
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
<div class="fh5co-blog-style-1 tribe-search" id="searchTribe">
    <div class="container">
        <div class="row tribe-search">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Search more tribes!</h2>
                {{-- <p>Search more tribes out there!</p> --}}
            </div>
            <form class="tribe-search-form" method="GET" id="tribe-search" name='tribesearchform' action="{{ route('tribe.searchTribeFull') }}">
                {{ csrf_field() }}
                <div class="col-md-3 col-md-offset-3">
                    <select class="form-control select select-primary" data-toggle="select" id="search-interest" name="interest" style="    height: 40px; width: 260px;">
                    @foreach($interests as $idx=>$interest)
                    <option value="{{$interest}}" selected>{{$interest}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="text" class="tribe-search-text" id="search-area" name="area" placeholder="Area">
                    <input type="button" value="Search" class="btn btn-default" id="search-tribe-btn" onclick="validateAndSubmit();">
                </div>
            </form>
        </div>
        <div class="col-md-12 search-message" style="text-align: center;">
            <p id="search-message" style="font-size: 25px;"></p>
            <hr id="search-result-hr">
        </div>
        @if(count($tribes) === 0)
        <div class="col-md-12 result-message" style="text-align: center;">
            <p id="result-message" style="font-size: 25px;">No tribe found. Please search again.</p>
        </div>
        @endif
        @foreach ($tribes as $idx=>$tribe)
        @if(($idx + 1)%5 === 1)
        <div class="row p-b more-search">
        @endif
            {{-- @if(($idx + 1)%5 === 2 || ($idx + 1)%5 === 3 || ($idx + 1)%5 === 4) --}}
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">{{$tribe->topic1}}</a></div>
                        <img src="/images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="{{ route('tribe.main', ["tribe_id" => $tribe->id]) }}">{{$tribe->name}}</a></h3>
                        <p>{{ str_limit($tribe->summary, 150) }}</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> {{$tribe->member_no}}</a>
                        <a href="#"><i class="icon-map2"></i>{{$tribe->region}}</a>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
        @if(($idx + 1)%5 === 0)
        </div> 
        @endif
        @endforeach

    </div>
</div>
@endsection