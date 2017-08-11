@extends('layouts.tribe')
@section('title', 'Tribe Main')
@section('body-content')
<style type="text/css">
  .col-md-3.left{
    padding: 3%;
    text-align: center;
  }

  .list-group-item-heading.member-heading{
    text-align: center;
    margin-bottom: 10%;
    margin-top: 10%;
  }
  .col-md-12.post-project-div{
    z-index: 3;
    margin-bottom: 1%;
  }
  #post-btn{
    width: 30%;
  }
</style>

<script type="text/javascript">
  
  // $(document).ready(function(){

  //   $("#post-btn").click(function(){

  //     var tribeId = '{{$tribe['tribe']->id}}';


  //   });

  // });

</script>
  {{-- Left pane --}}
  <div class="col-md-3 left" style="border-right: 1px solid; align-items: center;">
  <img data-src="holder.js/200x200" class="img-thumbnail" alt="150x150" style="width: 150px; height: 150px;" src="https://smart-union.org/wp-content/blogs.dir/239/files/2015/12/person-placeholder.jpg" data-holder-rendered="true">
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
    <div class="col-md-12 post-project-div" style="text-align: center;">
      <a href="{{ route('tribe.createPosting', ['tribeId' => $tribe['tribe']->id] ) }}" type="button" id="post-btn" class="btn btn-primary">Write Posting</a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="list-group">
      <h4 class="list-group-item-heading member-heading">Tribe Members</h4>
      <p class="list-group-item-text"></p>
      @foreach ($tribe['members'] as $member)
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">{{$member->user_name}}</h4>
        <p class="list-group-item-text">{{$member->member_type_name}}</p>
      </a>
      @endforeach
    </div>
  </div>
@endsection 