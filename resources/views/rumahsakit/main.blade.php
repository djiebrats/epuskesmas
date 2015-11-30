<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-32x32.png')}}" sizes="32x32">

    <title>e-Puskesmas | Puskesmas</title>
    
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- uikit -->
    <link rel="stylesheet" href="{{asset('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">
    <!-- flag icons -->
    <link rel="stylesheet" href="{{asset('assets/icons/flags/flags.min.css')}}" media="all">
    <!-- altair admin -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" media="all">
    <script src="{{asset('app/app.oc_lazy_load.js')}}"></script>
    
   
    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="{{asset('bower_components/matchMedia/matchMedia.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components/matchMedia/matchMedia.addListener.js')}}"></script>
    <![endif]-->
    <script src="{{asset('action.js')}}"></script>
    
</head>