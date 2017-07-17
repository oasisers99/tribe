<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>

		<title>@yield('title')</title>

		{{-- meta details --}}
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="description" content="Tribe" />
		<meta name="keywords" content="" />
		<meta name="author" content="mssong" />

		<!-- Facebook and Twitter integration -->	
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		{{-- meta details --}}

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">

		{{-- load scripts and css --}}
		@yield('page-resources')

	</head>
	<body>
		<div id="fh5co-page">
			@include('pages.sections.menu')
			@yield('body-content')
		</div>	
	</body>
</html>
