@extends('layouts.app')

@section('title','Create Tribe')

@section('page-resources')

    <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

        /** { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }*/

        /*html { width: 100%; height:100%; overflow:hidden; }*/

        /*body {*/
            /*width: 100%;*/
            /*height:100%;*/
            /*font-family: 'Open Sans', sans-serif;*/
            /*background: #092756;*/
            /*background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);*/
            /*background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);*/
            /*background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);*/
            /*background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);*/
            /*background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);*/
            /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );*/
        /*}*/
    </style>
    <!-- Loading Bootstrap -->
    <link href="/css/elements/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/css/elements/flat-ui.css" rel="stylesheet">
    <link href="/css/elements/demo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <style>
        .container{
            color: black;
            position: relative;
        }
        .select.form-control,
        .select.select2-search input[type="text"] {
            border: 2px solid #bdc3c7;;
            padding: 0;
            height: auto;
        }
        .demo-headline {
            padding: 73px 0 10px;
            text-align: center;
        }
    </style>
@endsection

@section('body-content')
    <div class="container">
        <div class="demo-headline">
            <h1 class="demo-logo">
                {{--<div class="logo">New Tribe</div>--}}

                <small style="color: black;">Start your new tribe</small>
            </h1>
        </div> <!-- /demo-headline -->
        {{--<h1 class="demo-section-title">Tribe Details</h1>--}}
        <div class="col-xs-6">
            <div class="form-group">
                <h3 class="demo-panel-title">What is the name of your tribe?</h3>
                <input type="text"  placeholder="Name" class="form-control" />

                <h3 class="demo-panel-title">A little bit about your tribe</h3>
                <input type="text"  placeholder="Summary" class="form-control" />

                <h3 class="demo-panel-title">Where is the location of the tribe?</h3>
                <input type="text"  placeholder="Area ex. Sydney" class="form-control" style="width: 50%;"/>

                <h3 class="demo-panel-title">What is the topic of your tribe?</h3>
                <select class="form-control select select-primary" data-toggle="select">
                    <option value="0">Arts</option>
                    <option value="1">Music</option>
                    <option value="2">Technology</option>
                    <option value="3">Sports</option>
                    <option value="4">Legal</option>
                    <option value="5">Consulting</option>
                    <option value="6">Environment</option>
                </select>
            </div>
            <a href="#fakelink" class="btn btn-block btn-lg btn-primary" style="width: 25%;">Create</a>
        </div>
    </div>
@endsection