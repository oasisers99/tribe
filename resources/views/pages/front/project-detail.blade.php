@extends('layouts.app')

@section('title', config('app.name'))

@section('page-resources')
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		main{
			margin-top: 10%;
		}
	</style>
@endsection

@section('body-content')
<main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">{{$project->title}} </h2>
            <p class="blog-post-meta">{{ \Carbon\Carbon::parse($project->created_at)->format('d  M,  Y')}} by <a href="#">{{$project->name}}</a></p>

            <p>{{$project->description}} </p>
          </div><!-- /.blog-post -->

        

         {{--  <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav> --}}

        </div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            {{-- <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p> --}}
          </div>
          <div class="sidebar-module">
            <h4>Details</h4>
            <ol class="list-unstyled">
              <li>Topic: {{$project->topic}}</a></li>
              <li>Location: {{$project->location}}</a></li>
              <li>Maximum number: {{$project->member_no}}</a></li>
            </ol>
          </div>
          <div class="sidebar-module" style="margin-top: 20%;">
            <h4>Share</h4>
            <ol class="list-unstyled">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main>
@endsection