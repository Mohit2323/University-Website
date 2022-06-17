<?php 
include('admin/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JNU Webpage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================= Favicon ================== -->
    <link rel="icon" sizes="72x72" href="images/favicon-96x96.png">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900%7COpen+Sans:300,400,600,700,800"
        rel="stylesheet">
    <!-- Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootsrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Magnific Popup-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- REVOLUTION SLIDER STYLES -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/layers.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <!-- Animate css-->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Color Swhicher css-->
    <link data-style="color-style" rel="stylesheet" href="css/color-blue.css">
    <!-- Modernizr-->
    <script src="js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="preloader">
        <div class="loader-inner ball-scale-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--/.preloader-->
    <div class="color-shicher-wraper">
        <div class="swhicher-button">
            <button data-att="color-yellow" type="button" class="yellow-bg"></button>
            <button data-att="color-green" type="button" class="green-bg"></button>
            <button data-att="color-cyan" type="button" class="cyan-bg"></button>
            <button data-att="color-red" type="button" class="red-bg"></button><br />
            <button data-att="color-purple" type="button" class="purple-bg"></button>
            <button data-att="color-pink" type="button" class="pink-bg"></button>
            <button data-att="color-gradient" type="button" class="gradient-bg"></button><br /><br />
            <div class="tobar-fixed-check">
                <input type="checkbox" id="topbar-fixed" /><label for="topbar-fixed"> Menu fixed when scroll </label>
            </div>
            <div class="backtop-top-check">
                <input type="checkbox" id="backtotop-fixed" /><label for="backtotop-fixed"> Back to top
                    hide/show</label>
            </div>
            <div class="removetopbar">
                <input type="checkbox" id="topbar-checked" /><label for="topbar-checked"> Topbar show/hide </label>
            </div><br />
            <a href="http://bunny.ezyro.com/?i=2"
                class="btn">Purchase</a>
        </div>
        <div class="setting-button-wrapper">
            <button type="button" class="setting-button"></button>
        </div>
    </div>
    <!--/.color-shicher-wraper-->
    <header class="fund-header">
        <div class="top-bar base-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-6 text-xs-center">
                        <div class="top-bar__contact">
                            <i class="fa fa-envelope"></i> <span class="pdl5">info@jnujaipur.ac.in</span>
                            <span class="pdl15 pdr15">|</span>
                            <i class="fa fa-phone-square"></i> <span class="pdl5">+91 8210905779</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 text-right text-xs-center">
                        <div class="social-icons ">
                            <span>Social handlers: </span>
                            <ul class="list-inline pdl20">
                                <li><a href="https://www.facebook.com/profile.php?id=100003664607547" target="_blank"><i class="fa fa-facebook"></i> </a>
                                </li>
                                <li><a href="https://www.linkedin.com/in/mohit-kumar-023a08197/"><i class="fa fa-linkedin"></i> </a> </li>
                                <li><a href="https://www.instagram.com/bunnny_23/"><i class="fa fa-instagram"></i> </a> </li>
                                <li> |  </li>
                                <li><a href="admin"><i class="fa fa-user" title='Login'></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="mobile-background-nav">
        <div class="mobile-inner">
            <span class="mobile-menu-close"><i class="icon-icomooon-close"></i></span>
            <ul class="menu-accordion">
                <li><a href="index.php" class="has-submenu">Home <i class="fa fa-angle-down"></i></a>
                </li>
                <li><a href="events.php" class="has-submenu">About<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">About JNU</a></li>
                        <li><a href="professor_msg.php">Professor Message</a></li>
                    </ul>
                </li>
                <li><a href="blog.php" class="has-submenu">Gallery<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="gallery.php">Image Gallery</a></li>
                        <li><a href="video_gallery.php">Video Gallery</a></li>
                    </ul>
                </li>
                <li><a href="causes.php" class="has-submenu">Quick Links<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="notice.php">Notice Board</a></li>
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                </li>
             
                <li><a href="contact-us.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="slider-area">
        <div class="main-menu-area main-menu-area--absolute">
            <div class="container">
                <div class="menu-logo">
                    <div class="logo">
                        <a href="index.php" class="logo-index"><img src="images/new/jnu-logo.jpg" alt="" /></a>
                        <!-- Add logo img here -->
                    </div>
                    <nav id="easy-menu">
                        <ul class="menu-list">
                            <li><a href="index.php">Home</a>

                            </li>
                            <li><a href="about.php">About<i class="fa fa-angle-down"></i></a>   
                                <ul class="dropdown">
                                    <li><a href="about.php">About JNU</a></li>
                                    <li><a href="profesor_msg.php">Professor messages</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.php">Gallery <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="video_gallery.php">Video gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="payment.php">Quick link <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="notice.php">Notice Board </a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </nav>
                    <!--#easy-menu-->
                    <div class="donate-button-wrap">

                        <a href="#" class="hidden-lg hidden-md" id="humbarger-icon"><i class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </div>