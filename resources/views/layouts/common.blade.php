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
		@yield('body-content')
	</body>
</html>
