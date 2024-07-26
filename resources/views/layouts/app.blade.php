<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'ByteFusion')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">
    <style>
        hr {
            width: 100px;
            margin-right: 500px;
            line-height: 500px;
            background: blue; /* Changed from orange to blue */
            padding: 1px;
        }
        .mt-3 .p__list {
            margin-bottom: 0;
        }
        .p__list {
            column-count: 2;
            margin-top: 20px;
            padding-left: 10px;
        }
        .p__list li {
            list-style: none;
            margin-bottom: 20px;
            margin-left: 18px;
        }
        .p__list:not([class]) li {
            padding-left: 8px;
        }
        li {
            display: list-item;
        }
        .p__list li:before {
            background-color: blue; /* Changed from orange to blue */
            content: "";
            display: flex;
            height: 8px;
            left: -29px;
            margin: 0;
            position: relative;
            top: 15px;
            vertical-align: middle;
            width: 8px;
        }
        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px; /* Fix for Safari gap */
            min-height: 100px;
            max-height: 150px;
        }
        .parallax > use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }
        .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }
        .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }
        .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }
        .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }
        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }
            100% {
                transform: translate3d(85px, 0, 0);
            }
        }
        /* Shrinking for mobile */
        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <!-- Content before waves -->
    <div class="inner-header flex">
        <!-- Just the logo.. Don't mind this -->
        <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
            <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
        </svg>
    </div>

    <!-- Waves Container -->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="skyblue" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="lightblue" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="deepskyblue" />
                <use xlink:href="#gentle-wave" id="top" x="48" y="0" fill="skyblue"/>
            </g>
        </svg>
    </div>
    <!-- Waves end -->
</div>
<!-- header -->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <a class="navbar-brand" href="{{ url('/') }}" style="height: 70px;">
                <img src="{{ asset('assets/images/log1.png') }}" alt="Your logo" title="Your logo" style="height:35px;" />
                Byte<span>Fusion</span>
            </a>
            <button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ Request::is('service') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/service') }}">Services</a>
                    </li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                    <!-- search button -->
                    <div class="search-right ml-lg-3">
                        <form action="#search" method="GET" class="search-box position-relative">
                            <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                   autofocus="" class="search-popup">
                            <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                                                            aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!-- //search button -->
                </ul>
            </div>
            <!-- //search button -->
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!-- //header -->

<div class="container">
    @yield('content')
</div>
<!-- footer -->
<footer class="w3l-footer-16">
    <div class="w3l-footer-16-main">
        <div class="container">
            <div class="row footer-p">
                <div class="col-lg-8 mt-lg-0 mt-4 pr-lg-5">
                    <div class="d-sm-flex align-items-center top-footer-content mb-5">
                        <a class="logo d-flex align-items-center" href="{{ url('/') }}" style="height: 70px;">
                            <img src="{{ asset('assets/images/log1.png') }}" alt="Your logo" title="Your logo" style="height:35px;" />
                            Byte<span>Fusion</span>
                        </a>
                        <p class="top-p ml-sm-4 pl-sm-4 mt-sm-0 mt-2">Empowering Tomorrow , Byte by Byte.</p>
                    </div>
                    <div class="row footer-grids pt-4">
                        <div class="col-sm-4 col-6 column">
                            <ul class="footer-gd-16">
                                <li><a href="{{ url('/') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                                <li><a href="{{ url('/about') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>About Us</a></li>
                                <li><a href="{{ url('/service') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Services</a></li>
                                <li><a href="{{ url('/contact') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-6 column pl-sm-0">
                            <ul class="footer-gd-16">
                                <li><a href="#marketplace"><i class="fa fa-angle-right" aria-hidden="true"></i>Marketplace</a></li>
                                <li><a href="#experts"><i class="fa fa-angle-right" aria-hidden="true"></i>Our Experts</a></li>
                                <li><a href="#customers"><i class="fa fa-angle-right" aria-hidden="true"></i>Customers</a></li>
                                <li><a href="#platform"><i class="fa fa-angle-right" aria-hidden="true"></i>Platform</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-6 column pl-sm-0">
                            <ul class="footer-gd-16">
                                <li><a href="#support"><i class="fa fa-angle-right" aria-hidden="true"></i>Support</a></li>
                                <li><a href="#privacy"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                                <li><a href="#terms"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms & conditions</a></li>
                                <li><a href="#faq"><i class="fa fa-angle-right" aria-hidden="true"></i>FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 column mt-lg-0 mt-4">
                    <h3>Newsletter</h3>
                    <div class="end-column">
                        <form action="#" class="subscribe" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button class="button-style"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                    <div class="columns-2 mt-4">
                        <ul class="social">
                            <li><a href="#facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a></li>
                            <li><a href="#twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a></li>
                            <li><a href="#google-plus"><span class="fab fa-google-plus-g" aria-hidden="true"></span></a></li>
                            <li><a href="#instagram"><span class="fab fa-instagram" aria-hidden="true"></span></a></li>
                            <li><a href="#linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="below-section mt-5 text-center">
                <p class="copy-text">2023 All rights reserved. Powered by <a href="https://ByteFusion.com/" target="_blank">ByteFusion</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->

</body>
</html>
