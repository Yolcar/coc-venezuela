<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- Bootstrap 3.0.3 added, change to bootstrap.min.css and bootstrap-theme.min.css if you need the minified version -->
    <link rel="shortcut icon" type="image/x-icon" href="{{  URL::to('img/lzfavicon.ico') }}" />
    <link rel="icon" type="image/x-icon" href="{{  URL::to('img/lzfavicon.ico') }}" />

    <style>
        @font-face {
            font-family: Supercell-Magic;
            src: url('{{ URL::to('src/Supercell.ttf') }}');
        }
    </style>
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ URL::to('src/app.css') }}" media="all"  />

    <link rel="stylesheet" href="{{ URL::to('css/animate.css') }}" media="all"  />
    <link rel="stylesheet" href="{{ URL::to('css/grid.css') }}" media="all"  />
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-theme.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ URL::to('css/hover.css') }}" media="all" />
    <link rel="stylesheet" href="{{ URL::to('css/cbxnewgridhover.css') }}" media="all" />
    <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}" media="all" />
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300, 400,600,700|Raleway:400,300,500,700,600,900' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{  URL::to('css/style.css') }}" media="all" />

    <link rel="stylesheet" id="lz-switcher-style" href="{{  URL::to('css/switcher-default.css') }}" media="all" />


    <script src="{{  URL::to('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <!-- DNS Prefetch for Google Hosted libraries, Remove if you don't need that. -->
    <link rel="dns-prefetch" href="//ajax.googleapis.com">

</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')

<!--  ####### site script content here ######## -->

<script type="text/javascript" src="js/vendor/jquery-1.11.1.min.js"></script>
<!-- load if our contact form or email subscribe options is used -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<!-- if load google maps then load this api -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- if load portfolio then load this plugin -->
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

<script type="text/javascript" src="js/grid.js"></script>

<!-- wow effect plugin -->
<script type="text/javascript" src="js/wow.min.js"></script>

<script type="text/javascript" src="js/jquery.stellar.js"></script>

<!-- load bootstrap js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- if use kk countdown plugin then use this plugin -->
<script type="text/javascript" src="js/kkcountdown.min.js"></script>

<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>

<!-- Shuffle.min js -->
<script src="js/jquery.shuffle.min.js"></script>

<!-- LZ Custom JS  -->
<script type="text/javascript" src="js/lz-custom.js"></script>

</body>
</html>
