@extends('layouts.tribe')
@section('title', 'Tribe Main')
@section('body-content')
<style type="text/css">
  .navbar-nav {
    float: right;
    margin: 0;
  }
  .col-md-3.left{
    padding: 3%;
    text-align: center;
  }
</style>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{ $tribe['tribe']->name}}</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        {{-- <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li> --}}
        <li><a href="/">Home</a></li>
        <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Tribe Profile</a></li>
            <li><a href="#">More Features</a></li>
            <li><a href="#">Members</a></li>
            {{-- <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li> --}}
          </ul>
        </li>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  {{-- Left pane --}}
  <div class="col-md-3 left" style="border-right: 1px solid; align-items: center;">
  <img data-src="holder.js/200x200" class="img-thumbnail" alt="150x150" style="width: 150px; height: 150px;" src="http://www.askounis-security.gr/wp-content/uploads/2013/03/slider-businessman-dark-suit-270x300.png" data-holder-rendered="true">
  <h2 class="profile-name">{{ $tribe['members'][0]->user_name}}</h2>
  <h5>{{ $tribe['members'][0]->member_type_name}}</h5>
  </div>
  <div class="col-md-6" style="border-right: 1px solid;">
  <div class="blog-post" style="overflow-y: scroll; height: 650px;">
            <h2 class="blog-post-title">Our experience at Voli</h2>
            <p class="blog-post-meta">January 1, 2017 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported</p>
            
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum...<a href="#">more</a></p>
            <hr>
            <h2 class="blog-post-title">Our experience at Voli</h2>
            <p class="blog-post-meta">January 1, 2017 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported</p>
            
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum...<a href="#">more</a></p>
            <hr>
            <h2 class="blog-post-title">Our experience at Voli</h2>
            <p class="blog-post-meta">January 1, 2017 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported</p>
            
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum...<a href="#">more</a></p>
            <hr>
            <h2 class="blog-post-title">Our experience at Voli</h2>
            <p class="blog-post-meta">January 1, 2017 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported</p>
            
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum...<a href="#">more</a></p>
            <hr>
            <h2 class="blog-post-title">Our experience at Voli</h2>
            <p class="blog-post-meta">January 1, 2017 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported</p>
            
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum...<a href="#">more</a></p>
            <hr>
          </div>
  </div>
  <div class="col-md-3">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        <h4 class="list-group-item-heading">Tribe Members</h4>
        <p class="list-group-item-text"></p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">David Jones</h4>
        <p class="list-group-item-text">Arts experts with 20yr experience</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">David Jones</h4>
        <p class="list-group-item-text">Arts fan</p>
      </a>
    </div>
  </div>
@endsection 