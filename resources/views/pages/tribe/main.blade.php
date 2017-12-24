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

      var editorHTML = '<div class="col-md-12 editor" id="new-editor-div">'
      editorHTML += '<div id="editor" contenteditable="true" style="border: .25rem solid; border-color: #5bc0de;" onfocusout="editorFocusOut();">'
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
   * Remove editor if it contains nothing.
   * @return {[type]} [description]
   */
  function removeEditorIfNull(){
    var text = $("#editor").text();
    if(text.trim() == ''){
      $("#new-editor-div").remove();
      editorCNT = 0;
      return;
    } 
  }

  /**
   * When it focuses out of editor.
   * 
   * @return {[type]} [description]
   */
  function editorFocusOut(){
    removeEditorIfNull();
  }

  /**
   * Submit post ajax
   * 
   * @param  {[type]} index [description]
   * @return {[type]}       [description]
   */
  function submitPost(){

      var content = CKEDITOR.instances.editor.getData();

      removeEditorIfNull();

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
        //alert( "error" );
        location.reload();
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
    var date;
    var wordCount = 0;

    postingList.forEach(function(item){
      date = new Date(item.created_at);  
      postHTML += '<div class="tribe-posting-div">';
      postHTML += '<p class="blog-post-meta">'+date.toLocaleDateString("en-AU")+'<a href="#"> '+item.user_name+'</a>';
      if('{{Session::get('email')}}' == item.created_by){
        postHTML += '<a href="#" style="margin-left:70%;" onclick="editPost('+item.id+');">Edit</a>';
      }
      postHTML += '</p>';
      postHTML += '<div id="postbody'+item.id+'" contenteditable="false">';
      postHTML += item.content;
      postHTML += '</div>';

      postHTML += '<div class="col-md-12" id="edit-save-btn-div-'+item.id+'" align="right" style="margin-bottom: 5%;" hidden>';
      postHTML += '<a type="button" id="edit-del-post-btn" class="btn btn-danger" style="margin-right: 1%;" onclick="checkDelete('+item.id+')">Delete</a>';
      postHTML += '<a type="button" id="edit-save-post-btn" class="btn btn-primary" onclick="editPostSave('+item.id+')">Save</a>';
      postHTML += '</div>'

      postHTML += '</div>';
      postHTML += '<hr>';
    });
    $('#blog-post-div').html(postHTML);
  }

  function editPost(postId){
    
    var editpostid = 'postbody' + postId;
    $('#'+editpostid).attr("contenteditable", true);
    CKEDITOR.inline(editpostid);
    $('#edit-save-btn-div-' + postId).show();
    $('#'+editpostid).focus();
  }

  /**
   * Edited post save
   * 
   * @param  {[type]} postId [description]
   * @return {[type]}        [description]
   */
  function editPostSave(postId){
    var editorname = 'postbody'+postId;
    var content = CKEDITOR.instances[editorname].getData();

    var data = {
      'content' : content,
      'postId' : postId,
      'tribeId' : '{{$tribe['tribe']->id}}'
    };
    
    $.ajax({
          method: "POST",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          url: '{{Route("tribe.updatePosting")}}',
          data: data
    })
    .done(function(response){
      editorCNT = 0;
      displayTribePostings(response);
    })
    .fail(function() {
      location.reload();
    });
  }


  function checkDelete(postId){
    $('#messageModalBody').text("Do you want to delete the post?");
    $('#confirmBtn').attr('onclick', 'confirmClicked("'+postId+'");');
    $('#messageModal').modal('show');
  }

  function confirmClicked(postId){
    $('#messageModal').modal('hide');
    var data = {
      'postId' : postId,
      'tribeId' : '{{$tribe['tribe']->id}}'
    };
    
    $.ajax({
          method: "POST",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          url: '{{Route("tribe.deletePosting")}}',
          data: data
    })
    .done(function(response){
      editorCNT = 0;
      displayTribePostings(response);
    })
    .fail(function() {
      location.reload();
    });
  }
</script>

  {{-- Left pane --}}
  <div class="col-md-3 left" style="border-right: 1px solid; align-items: center;">
  <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="/images/person_3.jpg" data-holder-rendered="true">
  {{-- <h2 class="profile-name">{{ $tribe['members'][0]->user_name}}</h2> --}}
  <h5 style="font-size: 15px; text-align: left;">{{ $tribe['tribe']->summary}}</h5>
  @if ($tribe['isTribeMember'])
  <div class="col-md-12">
  <a type="button" id="write-post-btn" class="btn btn-primary">Write Posting</a>
  {{-- <a href="{{ route('tribe.createPostingForm', ['tribeId' => $tribe['tribe']->id] ) }}" type="button" id="write-post-btn" class="btn btn-primary">Write Posting</a> --}}
  </div>
  <div class="col-md-12"> 
  <a href="{{ route('tribe.createProjectForm', ['tribeId' => $tribe['tribe']->id] ) }}" type="button" id="create-project-btn" class="btn btn-success">Create Project</a>
  </div>
  @elseif(Session::get('userCreatedTribesCount') == 0)
  <button type="submit" class="btn btn-success" onclick="requestJoin();">Request Join</button>
  @endif
  </div>
  <div class="col-md-6" style="border-right: 1px solid;">
    <div class="blog-post" id="blog-post-div" style="overflow-y: scroll; height: 100vh;">

    </div>
  </div>
  <div class="col-md-3">
    <div class="list-group">
      <h4 class="list-group-item-heading member-heading">Tribe Members</h4>
      <p class="list-group-item-text"></p>
      @foreach ($tribe['members'] as $member)
      <div class="list-group-item" style="padding-bottom: 70px; padding-top: 10px;">
        <div class="col-md-4">
          <img class="img-thumbnail" alt="60x60" style="width: 60px; height: 60px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLdb4IzWVmXx1l2HcR4q1ACeR3eZvDdOB_7wecoQbpjsWhRezgjQX19B8">
        </div>
        <div class="col-md-8">
          <h4 class="list-group-item-heading"><a href="#" onclick="onMemberClick('{{$member->user_id}}')")>{{$member->user_name}}</a></h4>
          <p class="list-group-item-text">{{$member->member_type_name}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- Modal for message -->
  <div class="modal fade" id="tribeModal" tabindex="-1" role="dialog" aria-labelledby="tribeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tribeModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="tribeModalMessage" class="modal-body">
          .
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @include('pages.sections.member-modal')
  @include('pages.sections.modal')
<script src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.disableAutoInline = true;

  function requestJoin(){

    var tribeId = '{{$tribe['tribe']->id}}';
    var data = {
      "tribe_id" : tribeId
    };

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method: "POST",
      url: '{{ route('tribe.requestJoin') }}',
      data: data
    }).done(function(result) {
      //When not logged in.
      if(result.status == 'unauthed'){
        window.location.href = '{{route('auth.loginForm')}}';
      }else{
        $("#tribeModalLabel").text("Join request");
        $("#tribeModalMessage").text(result.message);
        $("#tribeModal").modal('show');
      }
    });
  }

</script>
@endsection 