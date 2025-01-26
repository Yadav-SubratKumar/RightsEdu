<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edification - Responsive Education HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png"
        href="<?php echo get_template_directory_uri(); ?>/assets/images/icon/favicon.ico">
    <!-- all css here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slicknav.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <!--color css-->

    <link rel="stylesheet" id="triggerColor"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- prealoader area end -->

    <!-- header area start -->
    <header id="header">
        <!-- header two area start -->
        <div class="header-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-6 d-block d-lg-none">
                        <div class="logo">
                            <a href="index.html"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/logo.png"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 offset-lg-1 d-none d-lg-block">
                        <div class="main-menu menu-style2">
                            <nav>
                                <ul id="m_menu_active">
                                    <li class="active"><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="about">About</a></li>

                                    <li><a href="javascript:void(0);">counsellor </a>
                                        <ul class="submenu">
                                            <li><a href="counsellor">counsellor </a></li>
                                            <li><a href="counsellorDetails">counsellor details</a></li>
                                        </ul>
                                    </li>
                                    <li class="middle-logo">
                                        <a href="index.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/logo-middle.png"
                                                alt="logo">
                                            <img class="hb-bottom-shape"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/hb-bottom-shape.png"
                                                alt="logo">
                                        </a>
                                    </li>
                                    <li><a href="javascript:void(0);">Rights</a>
                                        <ul class="submenu">
                                            <li><a href="PPT">ppt</a></li>
                                            <li><a href="story">Story</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Case Study</a>
                                        <ul class="submenu">
                                            <li><a href="read">Read</a></li>
                                            <li><a href="write">Write</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5">
                        <div class="header-bottom-right-style-2">
                            <ul>
                                <li><a data-toggle="modal" data-target="#exampleModal" class="btn btn-light btn-round"
                                        href="#">Log in</a></li>
                                <li><a data-toggle="modal" data-target="#exampleModal2"
                                        class="btn btn-primary btn-round" class="active" href="#">Sign Up</a></li>
                            </ul>
                        </div>
                        <!-- Button trigger modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Login Here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="login-form">
                                            <input type="text" name="username" placeholder="Enter Your Email.."
                                                required="">
                                            <input type="password" name="password" placeholder="Enter Your Paddword">
                                            <label class="checkbox-inline mr-5"><input type="checkbox" name="remember"
                                                    value="1">Remember Me</label>
                                            <a class="primary-color" href="#"><u>Forgot password</u></a>
                                            <input class="btn btn-primary btn-sm" type="submit" value="Login">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Please Sign Up Here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="signup-form text-center">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" name="first_name" placeholder="First Name"
                                                        required>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="last_name" placeholder="Last Name"
                                                        required>
                                                </div>
                                            </div>
                                            <input type="email" name="email" placeholder="Enter Your Email.." required>
                                            <input type="text" name="phone" placeholder="Enter Your Phone Number.."
                                                required>
                                            <input type="password" name="password" placeholder="Enter Your Password"
                                                required>
                                            <label class="checkbox-inline"><input type="checkbox" name="agree" value="1"
                                                    required>I Agree</label>
                                            <input class="btn btn-primary btn-sm" type="submit" value="Register Now">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-lg-2 -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header two area end -->
    </header>