<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{!! SEOMeta::generate() !!}
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="icon" href="{{url('/cashicon.png')}}" type="image/png">
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link rel="stylesheet" type="text/css" href="C45/css/plugins-css.css" />
<link rel="stylesheet" type="text/css" href="C45/css/typography.css" />
<link rel="stylesheet" type="text/css" href="C45/css/shortcodes/shortcodes.css" />
<link rel="stylesheet" type="text/css" href="C45/css/style.css" />
<link rel="stylesheet" type="text/css" href="C45/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="C45/css/custom.css" />
<link rel="stylesheet" type="text/css" href="X45/plugins/themify-icons.css">
<link rel="stylesheet" type="text/css" href="X45/x45.css">
<link rel="stylesheet" type="text/css" href="X45/action-box.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/howitsdone-custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/modern-navbar.css') }}">
<link rel="canonical" href="{{ Request::fullUrl() }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script defer src="C45/js/script.js"></script>
<script defer src="{{ asset('js/howitsdone-animations.js') }}"></script>
<script defer src="{{ asset('js/modern-navbar.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
.bluebackground {
    background: -webkit-linear-gradient(top, #192731 39%, #213d52 95%);
    background: linear-gradient(to bottom, #192731 39%, #213d52 95%);
}

.deepshd {
  color: #e0dfdc;
  /* background-color: #333; */
  letter-spacing: .1em;
  text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 1px 0 #242424, 0 1px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 5px 0 #1c1c1c, 0 1px 0 #1a1a1a, 0 1px 0 #181818, 0 1px 0 #161616, 0 1px 0 #141414, 0 0px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
}
.buttonn {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 12px 24px;
    border: 1px solid #0d82b9;
    border-radius: 8px;
    background: #15d4ff;
    background: -webkit-gradient(linear, left top, left bottom, from(#15d4ff), to(#0d82b9));
    background: -moz-linear-gradient(top, #15d4ff, #0d82b9);
    background: linear-gradient(to bottom, #15d4ff, #0d82b9);
    -webkit-box-shadow: #13c4ff 0px 0px 40px 0px;
    -moz-box-shadow: #13c4ff 0px 0px 40px 0px;
    box-shadow: #13c4ff 0px 0px 40px 0px;
    text-shadow: #085274 1px 1px 1px;
    font: normal normal bold 20px arial;
    color: #ffffff;
    text-decoration: none;
}
.buttonn:hover,
.buttonn:focus {
    border: 1px solid ##10a3e7;
    background: #19feff;
    background: -webkit-gradient(linear, left top, left bottom, from(#19feff), to(#109cde));
    background: -moz-linear-gradient(top, #19feff, #109cde);
    background: linear-gradient(to bottom, #19feff, #109cde);
    color: #ffffff;
    text-decoration: none;
}
.buttonn:active {
    background: #0d82b9;
    background: -webkit-gradient(linear, left top, left bottom, from(#0d82b9), to(#0d82b9));
    background: -moz-linear-gradient(top, #0d82b9, #0d82b9);
    background: linear-gradient(to bottom, #0d82b9, #0d82b9);
}


</style>
