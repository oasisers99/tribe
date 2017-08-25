@extends('layouts.tribe')
@section('title', 'Create Project')
@section('body-content')
<script src="/ckeditor/ckeditor.js"></script>
<style type="text/css">
	body{
		background: #232526;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #414345, #232526);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #414345, #232526); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}
	.col-md-10 .posting-inputs{
		margin: auto;
	}
	#posting-title{
		width: 40%;
	}
	#project-form-group{
		margin-top: 5%;
	}
	.form-horizontal .form-group{
        margin-top: 2%;
        margin-right: 0px;
        margin-left: 0px;
        margin-bottom: 2%;
        width: 60%;
    }
    #write-post-btn{
    	width: 10%;
    	margin-top: 2%;
    	margin-bottom: 3%;
    }
    label{
    	color: white;
    	font-size: 18px;
    }
</style>
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10 posting-inputs">
		<h1 style="text-align: center; color: white;">Create new project</h1>
	    <form class="form-horizontal" id="project-form-group" method="post" action="{{ route('tribe.createProject') }}">
    	{{ csrf_field() }}
		    <div class="form-group">
		        <input type="text" id="title" name="title" placeholder="Project Title" class="form-control" maxlength="256" required/>
		    </div>
			<div class="form-group">
		        <textarea type="text" id="description" name="description" placeholder="Project Description" class="form-control" style="height: 200px;" required/></textarea> 
		    </div>
		    <div class="form-group">
		        <label for="askTopic">How many members do you need?</label>
		        <select id="member_no" name="member_no" class="form-control select select-primary" data-toggle="select">
		            <option value="2">2</option>
		            <option value="3">3</option>
		            <option value="4">4</option>
		            <option value="5">5</option>
		            <option value="6">6</option>
		            <option value="7">7</option>
		            <option value="8">8</option>
		            <option value="9">9</option>
		            <option value="10">10</option>
		        </select>
		    </div>
		    <div class="form-group">
		        <label for="askTopic">What is the topic of the project?</label>
		        <select id="topic" name="topic" class="form-control select select-primary" data-toggle="select">
		            <option value="arts">Arts</option>
		            <option value="music">Music</option>
		            <option value="technology">Technology</option>
		            <option value="sports">Sports</option>
		            <option value="legal">Legal</option>
		            <option value="consulting">Consulting</option>
		            <option value="environment">Environment</option>
		            <option value="education">Education</option>
		            <option value="social">Social</option>
		        </select>
		    </div>
		    <div class="form-group">
		        <input type="text" id="location" name="location" placeholder="In which location do you plan to run this project? Ex. Sydney" class="form-control" maxlength="64" required/>
		    </div>
		    <input type="text" id="tribe_id" name="tribe_id" value="{{$tribe['tribe']->id}}" hidden>
			<button type="submit" id="write-post-btn" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-md-1"></div>
</div>
<script type="text/javascript">

</script>
@endsection