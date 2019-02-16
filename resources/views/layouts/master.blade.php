<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('head')
        @include('layouts.partials.meta')
        <title>@yield('title','How long it takes')</title>
        @include('layouts.partials.fonts')
        @include('layouts.partials.style')
        @include('layouts.partials.scripts')
    @show
</head>
<body class="@yield('superclass')">

@section('header')
@show

<main class="@yield('main.class')">
    @section('content')

    @show
</main>

@section('footer')
    @include('partials.footer')
@show

</body>
</html>




