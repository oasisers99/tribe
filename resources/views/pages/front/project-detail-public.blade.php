@extends('layouts.common')

@section('title', config('app.name'))

@section('page-resources')
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="/ckeditor/ckeditor.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">
		main{
			margin-top: 10%;
		}
	</style>
  <script type="text/javascript">

    /**
     * Show message modal
     * @return {[type]} [description]
     */
    function showMessageModal(){

      if(!('{{Auth::check()}}')){
        redirectIfNotLoggedIn();
      }else{
        $('#messageModalBody').text("Do you want to send a join request?");
        $('#messageModal').modal('show');
      }
    }

    /**
     * Send join request
     * @return {[type]} [description]
     */
    function confirmClicked(){
      var data = {
        'project_id' : '{{$project->id}}'
      };

     $.ajax({
        method: "POST",
        data: data,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: '{{ route('tribe.projectJoinRequest') }}'
      })
      .done(function(result){

        $('#messageModal').modal('hide');

        if(result.status == 'success'){
          $('#resultMessageModalBody').text("You've successfully sent the request.");
          location.reload();
        }else{
          $('#resultMessageModalBody').text("Sorry, there was some problem while sending the request. Please contact us.");
        }

         $('#resultMessageModal').modal('show');
      });
    }

    /**
     * Redirect if not logged in.
     * 
     * @param  {[type]} message [description]
     * @return {[type]}         [description]
     */
    function redirectIfNotLoggedIn(message){
      $('#infoMessageModalBody').text("Please login to send the request.");
      $('#infoMessageModal').modal('show');
      $('#infoMessageModal').on('hidden.bs.modal', function (e) {
        window.location.href = '{{route('common.redirectToLoginPageWithMessage')}}';
      });
    }
  </script>
@endsection

@section('body-content')
@include('pages.sections.modal')
<main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">{{$project->title}} </h2>
            <p class="blog-post-meta">{{ \Carbon\Carbon::parse($project->created_at)->format('d  M,  Y')}} by <a href="#">{{$project->name}}</a></p>
            <p>{!! $project->description !!} </p>
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
              <li>Maximum project members: {{$project->member_no}}</a></li>
            </ol>
          </div>
          <div class="sidebar-module" style="margin-top: 20%;">
            <h4>Joined Members</h4>
            <ol class="list-unstyled">
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
      @isset($userProjectStatus)
        @if($userProjectStatus->status == 1)
          {{-- Created by this user. --}}
        @elseif($userProjectStatus->status == 2)
          <button class="btn btn-primary" disabled="true" title="test">Request already sent</button>
        @elseif($userProjectStatus->status == 3)
          <button class="btn btn-primary" disabled="true" title="test">Already accepted</button>
        @else
          <button class="btn btn-primary" onclick="showMessageModal();">I want to join!</button>
        @endif
      @endisset
      @empty($userProjectStatus)
        <button class="btn btn-primary" onclick="showMessageModal();">I want to join!</button>
      @endempty
      <!-- Modal for message -->
    </main>
    
@endsection