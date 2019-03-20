<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('head')
        @include('layouts.partials.gtm-head')
        @include('layouts.partials.meta')
        <title>@yield('title','How long it takes')</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/howlongittakes-favicon.png') }}">
        @include('layouts.partials.fonts')
        @include('layouts.partials.style')
        @include('layouts.partials.scripts')
    @show
</head>
<body class="@yield('superclass')">
@include('layouts.partials.gtm-body')


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




