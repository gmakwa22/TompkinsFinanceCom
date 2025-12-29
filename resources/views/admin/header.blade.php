<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
    <link href="{{ asset('admin_asset/css/theme-default.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/backend_css/subscription_form.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/jquery.dataTables.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/summernote.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/edit-profile.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/datepicker.css') }}" />
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "name": "Get Cash Fast",
  "image":"/images/getcashfast.png",
   "description": "Do You Have A Question about Your Payday Loan, Short Term Loans Or Cash Advance Loan Interest Rates ; How They Work? Contact Get Cash Fast. The Only Trusted Lender In Canada.",
    "address":
        {
            "@type": "PostalAddress",
            "addressLocality": "Suite 300 Winnipeg",
            "addressRegion": "MB, Canada",
             "postalCode": "R3C 3Z5",
           	"streetAddress": "330 St. Mary Avenue",
            "telephone": "+1 (855) 966-4049"
        },
        "email":"privacy@sageendeavours.com"
},

  "brand":{
  "@type":"Brand",
  "name":"Get Cash Fast"
  },
 "priceRange": "$$",
  "url": "/"
}
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization ",
  "name": "Get Cash Fast",
  "image":"/images/getcashfast.png",
  "url": "/",
    "address":
        {
            "@type": "PostalAddress",
            "addressLocality": "Suite 300 Winnipeg",
            "addressRegion": "MB, Canada",
             "postalCode": "R3C 3Z5",
           	"streetAddress": "330 St. Mary Avenue",
            "telephone": "+1 (855) 966-4049"
        },
        "email":"privacy@sageendeavours.com",
  "contactPoint" : [
    { "@type" : "ContactPoint",
    "url":"/",
      "contactType" : "customer service",
      "areaServed" : "Canada"
    }
    ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Get Cash Fast",
  "url": "/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "/?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
</head>

<?php

/*https://hackernoon.com/laravel-multiple-authentication-80daa855322b
https://medium.com/employbl/easily-build-administrator-login-into-a-laravel-5-app-8a942e4fef37
https://laracasts.com/discuss/channels/general-discussion/create-middleware-to-auth-admin-users?page=0
https://laracasts.com/discuss/channels/laravel/user-admin-authentication
https://ysk-override.com/Multi-Auth-in-Laravel-54-Login-20170203/
https://laravel.com/docs/5.6/middleware

https://scotch.io/tutorials/password-verification-using-laravel-form-request
*/

?>
<body>
