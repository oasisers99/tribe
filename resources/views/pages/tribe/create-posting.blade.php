@extends('layouts.tribe')
@section('title', 'Write Posting')
@section('body-content')
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<style type="text/css">
	.col-md-12.posting-inputs{
		margin-bottom: 20px;
	}

</style>
<div class="col-md-12 posting-inputs">
<h1 style="text-align: center;">New Posting</h1>
    <form class="form-horizontal">
		<textarea name="editor1"></textarea>
		<script>
		    CKEDITOR.replace( 'editor1' );
		</script>
	</form>
</div>


@endsection