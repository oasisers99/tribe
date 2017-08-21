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
  #write-post-btn{
    width: 60%;
    margin-top: 10%;
  }
  #create-project-btn{
    width: 60%;
    margin-top: 2%;
  }
  .col-md-12.editor{
    padding-left: 5px;
    padding-right: 5px;
  }
</style>

<script type="text/javascript">
  
  var editorCNT = 0;

  $(document).ready(function(){

    getTribePostings();

    $("#write-post-btn").click(function(){

      if(editorCNT > 0 ){
        return;
      }

      var editorHTML = '<div class="col-md-12 editor">'
      editorHTML += '<div id="editor" contenteditable="true" style="border: .25rem solid; border-color: #5bc0de;">'
      editorHTML += '<h2>Put your title</h2>';
      editorHTML += '<p>Write your content</p>'
      editorHTML += '</div>';
      var saveBTN = '<div class="col-md-12" align="right">';
      saveBTN += '<a type="button" id="save-post-btn" class="btn btn-danger" onclick="submitPost()">Save</a>';
      saveBTN += '<hr>';
      saveBTN += '</div>';
      editorHTML += saveBTN;
      editorHTML += '</div>';
      $("#blog-post-div").prepend(editorHTML);

      CKEDITOR.inline('editor');
      $('#edit').focus();

      editorCNT++;
    });
  });

  /**
   * Submit post ajax
   * 
   * @param  {[type]} index [description]
   * @return {[type]}       [description]
   */
  function submitPost(){

      var content = CKEDITOR.instances.editor.getData();

      if(content == ''){
        return;
      }

      var data = {
        'content' : content,
        'tribeId' : '{{$tribe['tribe']->id}}'
      };
      $.ajax({
            method: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '{{Route("tribe.createPosting")}}',
            data: data
      })
      .done(function(response){
        editorCNT = 0;
        displayTribePostings(response);
      })
      .fail(function() {
        alert( "error" );
      });
  }

  /**
   * Get tribe postings
   * 
   * @return {[type]} [description]
   */
  function getTribePostings(){

    var data = {
      'tribeId' : '{{$tribe['tribe']->id}}'
    };

    $.ajax({
            method: "GET",
            url: '{{Route("tribe.getTribePostings")}}',
            data: data
      })
      .done(function(response){
        displayTribePostings(response);
      })
  }

  function displayTribePostings(postingList){
    var postHTML = '';
    postingList.forEach(function(item){
      postHTML += item.content + '<hr>';
    });
    $('#blog-post-div').html(postHTML);
  }


</script>

  {{-- Left pane --}}
  <div class="col-md-3 left" style="border-right: 1px solid; align-items: center;">
  <img data-src="holder.js/200x200" class="img-thumbnail" alt="150x150" style="width: 150px; height: 150px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiTJhaOs5Ab2_G8DmrmHo_9GL8GW7mel7g8dk-9AN9lYRrO5H1" data-holder-rendered="true">
  <h2 class="profile-name">{{ $tribe['members'][0]->user_name}}</h2>
  <h5>{{ $tribe['members'][0]->member_type_name}}</h5>
  @if ($tribe['isTribeMember'])
  <div class="col-md-12">
  <a type="button" id="write-post-btn" class="btn btn-primary">Write Posting</a>
  {{-- <a href="{{ route('tribe.createPostingForm', ['tribeId' => $tribe['tribe']->id] ) }}" type="button" id="write-post-btn" class="btn btn-primary">Write Posting</a> --}}
  </div>
  <div class="col-md-12"> 
  <a href="{{ route('tribe.createProjectForm', ['tribeId' => $tribe['tribe']->id] ) }}" type="button" id="create-project-btn" class="btn btn-success">Create Project</a>
  </div>
  @endif
  </div>
  <div class="col-md-6" style="border-right: 1px solid;">
    <div class="blog-post" id="blog-post-div" style="overflow-y: scroll; height: 100vh;">
          
            {{-- <h2 class="blog-post-title">Our experience at Voli</h2>
            <p class="blog-post-meta">January 1, 2017 by <a href="#">Mark</a></p>
       
            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported</p>
          
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum...<a href="#">more</a></p>

            <hr> --}}
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
<script src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.disableAutoInline = true;

</script>
@endsection 