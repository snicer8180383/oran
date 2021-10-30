<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--- basic page needs
            ================================================== -->
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- mobile specific metas
            ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS
            ================================================== -->
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/base.css')}}">
        <link rel="stylesheet" href="{{asset('/css/vendor.css')}}">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <!-- script
            ================================================== -->
        <script src="{{asset('/js/modernizr.js')}}"></script>
        <script src="{{asset('/js/pace.min.js')}}"></script>
        <!-- favicons
            ================================================== -->
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

        @yield('styles')
    </head>
    <body id="top">
        
        @include('layout.header')
        @yield('content')
        @include('layout.footer')

        <!-- preloader
            ================================================== -->
        <div id="preloader">
            <div id="loader">
                <div class="line-scale-pulse-out">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Java Script
            ================================================== -->
        <script src="https://kit.fontawesome.com/b3043a0e00.js" crossorigin="anonymous"></script>
        <script src="{{asset('/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('/js/bootstrap.js')}}"></script>
        <script src="{{asset('/js/plugins.js')}}"></script>
        <script src="{{asset('/js/main.js')}}"></script>
        @yield('javascript')
    </body>
</html>
