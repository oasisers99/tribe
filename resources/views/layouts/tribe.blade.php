<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>@yield('title')</title>
    
    @include('layouts.meta')
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/tribe/style.css') }}">

</head>
<body>
    @yield('body-content')
    {{--@include('pages.tribe.left')--}}
    {{--@include('pages.tribe.center')--}}
    {{--@include('pages.tribe.right')--}}
</body>
</html>
