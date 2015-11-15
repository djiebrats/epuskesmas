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
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">
    <title>E-Puskesmas | Login Area</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
    <script src="assets/js/jquery.js"></script>
    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css"/>
    <!-- altair admin login page -->
    <link rel="stylesheet" href="assets/css/login_page.min.css" />
	

</head>
<body class="login_page" background="assets/img/tiled.jpg"   >

    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
					<div ><img src='assets/img/logo_main.png' ></div>
                    <div class="user_avatar"></div>
                </div>
                
				<formoo action='login' method='POST' id='myform'>
                    <div class="uk-form-row">
                        <label for="login_username">Username</label>
                        <input class="md-input" type="text" id="u"  />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Password</label>
                        <input class="md-input" type="password" id="p"  />
                    </div>
                    <div class="uk-margin-medium-top">
                        <button   class="md-btn md-btn-primary md-btn-block md-btn-large" id="btn_login">Login</button>
                    </div>
                
				<br>
				<div id="pesan_login" style="color: red"></div>
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				</formoo>
            </div>
            
        </div>
    </div>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- altair core functions -->
    <script src="assets/js/altair_admin_common.min.js"></script>

    <!-- altair login page functions -->
    <script src="assets/js/pages/login.min.js"></script>
	
    <script src="action.js"></script>
    
</body>
</html>
<script type="text/javascript">

    </script>

