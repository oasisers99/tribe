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
	.form-horizontal .form-group{
        margin-top: 3%;
        margin-right: 0px;
        margin-left: 0px;
        margin-bottom: 2%;
    }
    #write-post-btn{
    	width: 10%;
    	margin-top: 2%;
    }
</style>
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10 posting-inputs">
		<h1 style="text-align: center; color: white;">Create new project</h1>
	    <form class="form-horizontal">
		    <div class="form-group">
		        <input type="text" id="posting-title" name="posting-title" placeholder="Project Title" class="form-control" maxlength="256" required/>
		    </div>
			<div class="form-group editor" id="editor">
				<h1>Hello world!</h1>
			</div>
			<a href="" type="button" id="write-post-btn" class="btn btn-primary">Submit</a>
		</form>
	</div>
	<div class="col-md-1"></div>
</div>
<script type="text/javascript">
CKEDITOR.replace( 'editor', {
    language: 'en',
    // uiColor: '#76706F',
    width: '100%',
    height: '300px'
});
</script>
@endsection