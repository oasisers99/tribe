<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>

		<title>@yield('title')</title>
		@include('layouts.meta')

		{{-- load scripts and css --}}
		@yield('page-resources')

	</head>
	<body>
		@include('pages.sections.menu')
		<div id="fh5co-page">
			@yield('body-content')
		</div>	
	</body>
</html>
