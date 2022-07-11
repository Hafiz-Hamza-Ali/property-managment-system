<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Google Tag Manager -->
    <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PDTWJ3Z');</script> -->
    <!-- End Google Tag Manager -->
    <title> Valore Properties</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/jquery.selectBox.css') }}">
    <!-- <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/jquery.dropzone.css') }}"> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/rangeslider.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/leaflet.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/slick-theme.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/map.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/logos/logo.png') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('frontend/css/skins/default.css') }}">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) 
<div class="page_loader"></div>
-->
<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class=""  href="/">
                        <img id="myelement" src="{{ asset('frontend/img/logos/black-logo.png') }}" style="height: 10%;width: 75%;" alt="logo">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="{{route('frontend.index')}}">Home</a>
                            </li>
							
							<li class="nav-item dropdown megamenu-li">
                                <a class="nav-link dropdown-toggle" href="{{route('frontend.about')}}">About</a>
                            </li>
							
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('frontend.properties')}}">Properties</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('frontend.team')}}">Team</a>
                            </li>							                                                        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('frontend.contact')}}">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('frontend.sale')}}">Sale</a>
                            </li>                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('frontend.rent')}}">Rent</a>
                            </li>
							<li class="nav-item dropdown">
                                <a href="#full-page-search" class="nav-link">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            
													
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- main header end -->
