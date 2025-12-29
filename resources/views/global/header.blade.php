<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Google Tag Manager
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-ML747CJ');</script>-->
  <!-- End Google Tag Manager -->
  <!-- Global site tag (gtag.js) - Google Ads: 692149793
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-692149793"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-692149793');
  </script>-->

    {!! SEOMeta::generate() !!}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/header1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/public2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mainRe.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/roundslider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mediaquery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header-mobile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/datepicker.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="X45/plugins/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="X45/x45.css">
    <link rel="stylesheet" type="text/css" href="X45/action-box.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{url('/images/fav.png')}}" type="image/gif">

    @yield('styles')

    <style type="text/css">
    #overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    filter:alpha(opacity=70);
    -moz-opacity:0.7;
    -khtml-opacity: 0.7;
    opacity: 0.7;
    z-index: 100;
    display: none;
    }
    .cnt223 a{
    text-decoration: none;
    }
    .popup{
    width: 100%;
    margin: 0 auto;
    display: none;
    position: fixed;
    z-index: 101;
    }

    .cnt223{
    min-width: 45%;
    width:  40%;
    min-height: 150px;
    margin: 100px auto;
    background: #f3f3f3;
    position: relative;
    z-index: 103;
    padding: 15px 35px;
    border-radius: 5px;
    border-color: #92278f !important;
    border: solid;
    border-width: 10px;
    height:580px;
    overflow:auto;
    }
    @media only screen and (max-width: 800px) {
      .cnt223{
      min-width: 98%;
      width:  98%;
      height:430px;
      }
    }

    .cnt223 p{
    clear: both;
        color: #555555;
        /* text-align: justify; */
        font-size: 20px;
        font-family: sans-serif;
    }
    .cnt223 p a{
    color: #d91900;
    font-weight: bold;
    }
    .cnt223 .x{
    float: right;
    height: 35px;
    left: 22px;
    position: relative;
    top: -25px;
    width: 34px;
    }
    .cnt223 .x:hover{
    cursor: pointer;
    }
    </style>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<!-- Global site tag (gtag.js) - Google Ads: 692149793 -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-692149793"></script> -->

<!-- Event snippet for Top Bar Signup conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->

<!-- <script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-692149793/lR8QCNeS5MwBEKG8hcoC',
      'event_callback': callback
  });
  return false;
}
</script> -->


<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-692149793');
</script>



</head>

<script>
$( document ).ready(function() {
function gtag_report_conversion(url) { var callback = function () { if (typeof(url) ≠ 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-823066871/povGCPuL7noQ94G8iAM', 'event_callback': callback }); return false;
}
$(".tracking-tsign").click(function() {gtag_report_conversion()});
$(".tracking-sform").click(function() {gtag_report_conversion()});

});

</script> -->



<body class="christmas">
  <!-- Google Tag Manager (noscript) -->
  <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML747CJ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
  <!-- End Google Tag Manager (noscript) -->

  @yield('pagespecificstyles')
