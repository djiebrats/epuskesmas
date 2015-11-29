<?php
namespace App\Http\Controllers;
?>
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-32x32.png')}}" sizes="32x32">
    <title>E-Puskesmas | Login Area</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- uikit -->
    <link rel="stylesheet" href="{{asset('bower_components/uikit/css/uikit.almost-flat.min.css')}}"/>
    <!-- altair admin login page -->
    <link rel="stylesheet" href="{{asset('assets/css/login_page.min.css')}}" />
	

</head>
<body class="login_page" background="{{asset('assets/img/tiled.jpg')}}"   >
    <div class="login_page_wrapper">
        <div class="md-card md-card-hover md-card-overlay md-card-overlay-active">
                        <div class="md-card-content" id="canvas_1">
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header"><center>
                                <h3>
                                    Terima Kasih, {{$nama_register}},<br>
                                    Pendaftaran berhasil.
                                </h3>
                            </div>
                            <p>Silahkan kebagian loket untuk melanjutkan proses pendaftaran </p>
                            </center>
                            
                        </div>
        </div>
    </div>

    <!-- common functions -->
    <script src="{{asset('assets/js/common.min.js')}}"></script>
    <!-- altair core functions -->
    <script src="{{asset('assets/js/altair_admin_common.min.js')}}"></script>

    <!-- altair login page functions -->
    <script src="{{asset('assets/js/pages/login.min.js')}}"></script>
	
    <script src="{{asset('action.js')}}"></script>
    
</body>
</html>
<script type="text/javascript">

    </script>

