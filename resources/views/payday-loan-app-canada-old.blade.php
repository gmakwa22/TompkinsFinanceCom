
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/roundslider.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    @yield('styles')
</head>
<body class="christmas">

        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 100%; position: relative; opacity: 1; top: 0; left: 0;">
            <tr>
            <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9" style="background-color: rgb(249, 249, 249);">

            <table border="0" width="600" align="center" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
            <tr>
            <td align="center" valign="top" bgcolor="#F9F9F9">

            <table width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
            <tr>
            <td align="center" valign="top">

            <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
            <tr>
            <td align="center" valign="middle" height="10" style="line-height:10px;color: #F9F9F9;font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 10px; font-weight: 400; letter-spacing: 0;"> </td>
            </tr>
            </table>
            </td>
            </tr>
            <tr>
            <td align="center" valign="top">

            <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
            <tr>
            <td align="right" valign="top" height="25" style="color: #e6e6e6;font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 12px;; font-weight: 400; letter-spacing: 0;"></td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            <tr>
            <td class="bgresponse" valign="bottom" height="100%" style="border-radius: 10px 10px 0 0;overflow:hidden;height: 90px;border-radius: 10px 10px 0 0;text-align: center; background-image: url('https://icash.ca/images/email/bg-simple.jpg?003'); background-color: #ffffff; background-position: top center; background-size: cover; background-repeat: no-repeat;">
            <table class="tableRes" role="presentation" border="0" cellpadding="0" cellspacing="0" width="560" style="margin: auto; height: 90px; overflow:hidden;">
            <tr>
            <td align="left" valign="top" style="padding-left: 5px; height: 32px;">
            <a href="https://icash.ca/" target="_blank" rel="noopener" style="color:#ffffff;text-decoration:none;" title="iCASH.ca">
            <img alt="iCash" src="{{url('/images/FL2.jpg')}}" width="90" border="0" style="padding-top: 16px;border: 0px; outline: none; text-decoration: none; display: block;">
            </a>
            </td>
            <td class="menuLink centerText vide" valign="middle" style="width: 160px;"> </td>
            <td class="menuLink centerText" align="right" valign="middle" style="vertical-align: middle;font-family:'Open Sans Condensed',Arial,Helvetica,sans-serif;color:#ffffff;font-size: 14px;line-height:22px;font-weight:700;letter-spacing:0;text-transform: uppercase;">
            <a href="{{url('/why_use_us')}}" target="_blank" rel="noopener" style="color:#ffffff;text-decoration:none;" title="Why use us">
            <span>What We Offer&nbsp;&nbsp;&nbsp; </span></a>
            </td>
            <!-- <td class="menuLink centerText" align="right" valign="middle" style="vertical-align: middle;font-family:'Open Sans Condensed',Arial,Helvetica,sans-serif;color:#ffffff;font-size: 14px;line-height:22px;font-weight: 700;letter-spacing:0;text-transform: uppercase;">
            <a href="{{url('/agent-list')}}" target="_blank" rel="noopener" style="color:#ffffff;text-decoration:none;" title="How it works">
            <span>How It’s Done&nbsp;&nbsp;&nbsp;&nbsp; </span></a>
            </td> -->
            <td class="menuLink centerText" align="right" valign="middle" style="vertical-align: middle;font-family:'Open Sans Condensed',Arial,Helvetica,sans-serif;color:#ffffff;font-size: 14px;line-height:22px;font-weight:700;letter-spacing:0;text-transform: uppercase;">
            <a href="{{url('/faq')}}" target="_blank" rel="noopener" style="color:#ffffff;text-decoration:none;" title="FAQ">
            <span>FAQ&nbsp;&nbsp;&nbsp; </span></a>
            </td>
            <td class="menuLink centerText" align="right" valign="middle" style="vertical-align: middle;font-family:'Open Sans Condensed',Arial,Helvetica,sans-serif;color:#ffffff;font-size: 14px;line-height:22px;font-weight:700;letter-spacing:0;text-transform: uppercase;">
            <a href="{{url('/contact')}}" target="_blank" rel="noopener" style="color:#ffffff;text-decoration:none;" title="Contact us">
            <span>CONTACT&nbsp;US </span></a>
            </td>
            </tr>
            </table>

            </td>
            </tr>
            </table>

            </td>
            </tr>
        </table>
        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 100%; position: relative; opacity: 1; top: 0; left: 0;">
            <tr>
            <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9" style="background-color: rgb(249, 249, 249);">

            <table border="0" width="600" align="center" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;" bgcolor="#FFFFFF">
            <tr>
            <td class="whiteBgColor" align="center" valign="top">
            <iframe type="text/html" width="600" height="337" src="https://www.youtube.com/embed/phUZreG-meY?autoplay=1&controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
            </td>
            </tr>
            </table>

            </td>
            </tr>
        </table>
        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9" spellcheck="true" style="background-color: rgb(249, 249, 249);font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif;">

                <table border="0" width="600" align="center" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
                <tr>
                <td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF" spellcheck="true">

                <table width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
                <tr>
                <td class="containerPadding" align="center" valign="top">

                <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                <td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">
                &nbsp;</td>
                </tr>
                </table>


                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
                <tr>
                <td align="center" valign="middle" style="font-size:0;padding:0">

                <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                <td class="sectionTitle centerText" align="center" valign="middle" style="padding: 0 0 10px; text-align: center;" spellcheck="true">
                <h2 style="font-family: 'Open Sans Condensed', Arial, Helvetica, sans-serif;color: rgb(172, 20, 55);font-size: 22px;line-height: 30px;font-weight: 700;letter-spacing: 0;text-transform: uppercase;">USA’s Top App for Short-Term Loans</h2>
                <h1 style="color: #3e3e3e;font-size: 22px;font-weight: 500;padding: 10px 0 0;">PayDay Loan App</h1>
                </td>
                </tr>
                <tr>
                <td class="sectionDescription centerText" align="center" valign="middle" style="font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; color: rgb(0, 0, 0); font-size: 14px; line-height: 20px; font-weight: 400; letter-spacing: 0; padding: 0 25px;" spellcheck="true">
                <div style="line-height:20px; margin:10px 0; text-align:center">
                We’re up to our old tricks at PayDay, always innovating create new ways for you to get the funds you need, fast and easy. </div>
                <div style="line-height:20px; margin:10px 0; text-align:center; font-weight: 600;">What could be more convenient? Download the app, complete the application, and your money is only 5 minutes away, with our quick e-transfer system.</div>
                <div style="line-height:20px; margin:10px 0; text-align:center">No messy paperwork needed.<br>
                A licensed, direct lender, we’re always aiming for the highest possible standards.</div>
                </td>
                </tr>
                <tr>
                <td style="height: 10px;"></td>
                </tr>
                <tr>
                <td align="center" valign="middle">
                <table class="centerFloat" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 235px !important;">
                <tr>
                <td class="heroBtn" align="center" valign="middle">
                <a href="#" style="color: rgb(255, 255, 255);text-decoration:none;width:115px; float: left;margin-top: -1px;" target="_blank" rel="noopener"><img src="{{url('/images/socialMedia/appstore.png')}}" alt="Download Now" width="115" style="max-width: 105px;"></a>
                <a href="#" style="color: rgb(255, 255, 255);text-decoration:none;width:115px; float: left;" target="_blank" rel="noopener"><img src="{{url('/images/google-play-badge.png')}}" alt="Download Now" width="115"></a>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                <tr>
                <td style="height: 10px;"></td>
                </tr>
                </table>
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
                <tr>
                <td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">
                <div draggable="true" style="font-size: 0px; width: 100%; word-break: break-word;"><p class="mj-divider" style="font-size: 1px; margin: 0px auto; border-bottom: 1px solid rgb(219, 219, 219); width: 100%;"></p></div>
                </td>
                </tr>
                <tr>
                <td style="height: 10px;"></td>
                </tr>
                </table>

                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
                <tr>
                <td align="center" valign="middle" style="font-size:0;padding:0">
                <div style="display:inline-block;max-width:190px !important;vertical-align:top;width:100%">

                <table border="0" width="190" align="left" cellpadding="0" cellspacing="0" style="width:190px !important;max-width:190px !important;">
                <tr>
                <td align="center" valign="middle">
                <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                <td valign="middle" align="center" style="padding:0;padding-bottom:20px">
                <img data-crop="false" editable="true" src="{{url('/images/icon.png')}}" alt="Fast" border="0" width="40" style="display:block;border:0;width:40px;">
                </td>
                </tr>
                <tr>
                <td data-size="Service Title" data-color="Service Title" class="contTitle centerText" align="center" valign="middle" style="font-family: 'Open Sans Condensed', Arial, Helvetica, sans-serif; color: #2d353a; font-size: 17px; line-height: 24.65px; font-weight: 700; letter-spacing: 0px; padding: 0px 0px 20px;">
                <singleline>
                E-transfer your funds <br>in just 5 minutes</singleline>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                </table>
                </div>
                <div style="display:inline-block;max-width:15px !important;vertical-align:top;width:100%">

                <table width="15" border="0" cellpadding="0" cellspacing="0" align="left" style="width:15px;max-width:15px;">
                <tr>
                <td align="center" valign="middle" height="10" style="font-size:30px;line-height:10px;">
                &nbsp;</td>
                </tr>
                </table>
                </div>
                <div style="display:inline-block;max-width:190px !important;vertical-align:top;width:100%">

                 <table border="0" width="190" align="left" cellpadding="0" cellspacing="0" style="width:190px !important;max-width:190px !important;">
                <tr>
                <td align="center" valign="middle">
                <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                <td valign="middle" align="center" style="padding:0;padding-bottom:20px">
                <img data-crop="false" editable="true" src="{{url('/images/thumb.png')}}" alt="No Documents" border="0" width="40" style="display:block;border:0;width:40px;">
                </td>
                </tr>
                <tr>
                <td data-size="Service Title" data-color="Service Title" class="contTitle centerText" align="center" valign="middle" style="font-family: 'Open Sans Condensed', Arial, Helvetica, sans-serif; color: #2d353a; font-size: 17px; line-height: 24.65px; font-weight: 700; letter-spacing: 0px; padding: 0px 0px 20px;">
                <singleline>No documentation<br> headaches</singleline>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                </table>
                </div>
                <div style="display:inline-block;max-width:15px !important;vertical-align:top;width:100%">

                <table width="15" border="0" cellpadding="0" cellspacing="0" align="left" style="width:15px;max-width:15px;">
                <tr>
                <td align="center" valign="middle" height="10" style="font-size:30px;line-height:10px;">
                &nbsp;</td>
                </tr>
                </table>
                </div>
                <div style="display:inline-block;max-width:190px !important;vertical-align:top;width:100%">

                <table border="0" width="190" align="left" cellpadding="0" cellspacing="0" style="width:190px !important;max-width:190px !important;">
                <tr>
                <td align="center" valign="middle">
                <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                <td valign="middle" align="center" style="padding:0;padding-bottom:20px">
                <img data-crop="false" editable="true" src="{{url('/images/security.png')}}" alt="security" border="0" width="32" style="display:block;border:0;width:32px;">
                </td>
                </tr>
                <tr>
                <td data-size="Service Title" data-color="Service Title" class="contTitle centerText" align="center" valign="middle" style="font-family: 'Open Sans Condensed', Arial, Helvetica, sans-serif; color: #2d353a; font-size: 17px; line-height: 24.65px; font-weight: 700; letter-spacing: 0px; padding: 0px 0px 20px;">
                <singleline>
                We’re a direct <br>licensed Lender</singleline>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                </table>
                </div>
                </td>
                </tr>
                </table>
                </td>
                </tr>
                </table>

                </td>
                </tr>
                </table>

                </td>
                </tr>
                </table>

                </td>
                </tr>
        </table>
        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
            <tr>
            <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9" spellcheck="true" style="background-color: rgb(249, 249, 249);font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif;">

            <table border="0" width="600" align="center" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
            <tr>
            <td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF" spellcheck="true">

            <table width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
            <tr>
            <td class="containerPadding" align="center" valign="top">

            <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
            <tr>
            <td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">
            &nbsp;</td>
            </tr>
            </table>


            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;background-position: center; background-repeat: no-repeat;" background="{{url('/images/socialMedia/paysage.jpeg')}}">
            <tr>
            <td class="sectionDescription centerText" height="50px" align="middle" valign="middle" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif; color: #fff; font-size: 24px; line-height: 34px; font-weight: 300; letter-spacing: 0; padding: 50px" spellcheck="true">
            Any assistant you need or questions you want to ask, our team is always ready to help.
            </td>
            </tr>
            </table>

            </td>
            </tr>
            </table>

            </td>
            </tr>
            </table>

            </td>
            </tr>
        </table>
        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
            <tr>
            <td class="bodyBgColor" align="center" valign="middle" bgcolor="#F9F9F9">

            <table border="0" width="600" align="center" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;background: #f9f9f9;">
            <tr>
            <td class="whiteBgColor" align="center" valign="middle" bgcolor="#FFFFFF">

            <table width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
            <tr>
            <td class="containerPadding" align="center" valign="middle">

            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;" valign="middle">
            <tr>
            <td height="100%" valign="middle" width="600" style="background-color: #2d353a;">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" style="max-width:600;">
            <tr>
            <td align="center" valign="middle" style="font-size:0; padding: 10px 0 0;">
            <div style="display:inline-block; margin: 0 -2px; width:600px; vertical-align:middle;" class="stack-column">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="600">
            <tr>
            <td class="mcntforce-col-center" valign="top" id="mcntmobile-footer-text" align="left" style="font-weight: 600;padding: 10px 0 0;width:100%; display: inline-block;font-family: 'Open Sans', sans-serif; font-size: 12px; line-height: 14px; color: #fff; text-align: center;">
            <a href="{{url('/faq')}}" style="color: #fff;text-decoration:underline;" target="_blank">Frequently Asked Questions</a> | <a href="{{url('/')}}" style="color: #fff;text-decoration:underline;" target="_blank">Payday.ca</a>
            </td>
            </tr>
            </table>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            <tr>
            <td height="100%" valign="middle" width="600" style="background-color: #2d353a;border-radius: 0 0 10px 10px;">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600;">
            <tr>
            <td align="center" valign="middle" style="font-size:0; padding: 0 0 10px 0;">
            <div style="display:inline-block; margin: 0 -2px; width:300px; min-width:200px; max-width:300px !important; vertical-align:middle;text-align:left;" class="stack-column">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="300">
            <tr>
            <td valign="middle" align="left" class="footer-bot" style="color: #FFFFFF;padding:10px 0;text-align:left;padding-right:5px; display: inline-block;">
            <p style="font-size: 12px;line-height: 1.3;margin-bottom: 7px; font-weight: 400;font-family: 'Open Sans', sans-serif;text-align:left; color: #fff;margin-bottom: 10px!important;"><b style="font-size: 14px; font-family: 'Open Sans Condensed', sans-serif; font-weight: 700;text-align:left;">Download the app NOW!</b><br>
            Available on the App Store or Google Play</p>
            <a href="#" width="138.5" title="For iPhone available on the App Store" style="display: inline-block;text-decoration: none;">
            <img src="{{url('/images/socialMedia/appstore.png')}}" align="left" data-crop="false" style="margin-right: 5px;max-height: 35px;border: 1px solid #e8e8e8;border-radius: 5px; display:inline;" width="100" alt="Download iCASH.ca application for ios">
            </a> &nbsp;
            <a href="#" title="For Android available on the Google Play" style="display: inline-block;padding-left:5px;text-decoration: none;">
            <img src="{{url('images/google-play-badge.png')}}" align="left" data-crop="false" width="110" style="min-height: 35px;border-radius: 5px;display:inline;" alt="Download iCASH.ca application for ios">
            </a>
            <p></p>
            </td>
            </tr>
            </table>
            </div>
            <div style="display:inline-block; margin: 0 -2px; width:260px; min-width:100px; max-width:260px !important; vertical-align:top;" class="stack-column">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="260px">
            <tr>
            <td class="mcntforce-col-center" valign="top" id="mcntmobile-footer-text" align="right" style="width: 100%;display: inline-block;font-family: 'Open Sans', sans-serif; font-size: 12px; text-align: right;">
            <br><br><font style="color: #fff;font-size: 14px;font-family: 'Open Sans Condensed', sans-serif;font-weight: 700;">Follow us on:</font><br>
            </td>
            </tr>
            <tr>
            <td class="mcntforce-col-center" valign="top" id="mcntmobile-footer-text" align="right" style="height:5px;width: 100%;display: inline-block;font-family: 'Open Sans', sans-serif; font-size: 12px; line-height: 14px;  text-align: right;"></td>
            </tr>
            <tr>
            <td class="mcntforce-col-center" valign="top" id="mcntmobile-footer-text" align="right" style="width: 100%;display: inline-block;font-family: 'Open Sans', sans-serif; font-size: 12px; text-align: right;">
            <a href="#" target="_blank" style="display: inline-block; height:38px;">
            <img src="{{url('images/email/facebook.png')}}" width="28" data-crop="false" border="0" style="border: 0px; outline: none; text-decoration: none;width: 28px;">
            </a>&nbsp;
            <a href="#" target="_blank" style="display: inline-block; height:38px;">
            <img src="{{url('/images/email/twitter.png')}}" width="28" data-crop="false" border="0" style="border: 0px; outline: none; text-decoration: none;width: 28px;">
            </a>&nbsp;
            <a href="#" target="_blank" style="display: inline-block; height:38px;">
            <img src="{{url('/images/email/instagram.png')}}" width="28" data-crop="false" border="0" style="border: 0px; outline: none; text-decoration: none;width: 28px;" id="ext-gen1450">
            </a>
            </td>
            </tr>
            <tr>
            <td class="mcntforce-col-center" valign="top" id="mcntmobile-footer-text" align="right" style="height:10px;width: 100%;display: inline-block;font-family: 'Open Sans', sans-serif; font-size: 12px; line-height: 14px;  text-align: right;"></td>
            </tr>
            </table>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </table>

            </td>
            </tr>
            </table>

            </td>
            </tr>
            </table>

            </td>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="scale" style="position: relative;opacity: 1;top: 0;left: 0;background-color: #f9f9f9;height: 50px;">
            <tr>
            <td height="10">
            </td>
            </tr>
        </table>

</body>
</html>
