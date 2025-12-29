<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <link href="{{ asset('css/header1.css') }}" rel="stylesheet">
   <link href="{{ asset('css/mainRe.css') }}" rel="stylesheet">
    <link href="{{ asset('css/public2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/roundslider.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link href="{{ asset('css/secured_main.css') }}" rel="stylesheet">
      <link href="{{ asset('css/mediaquery.css') }}" rel="stylesheet">
    
    @yield('styles')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/roundslider.min.js') }}"></script>

    <script>
        $(document).ready(function(){
          $(".menu-toggle").click(function(){
            $(".fusion-main-menu").toggleClass("active");
          });
        });
    </script>

    @yield('scripts')

    
</head>
<body class="steps secured christmas">