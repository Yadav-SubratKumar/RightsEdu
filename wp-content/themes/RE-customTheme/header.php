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
    <script>
        jQuery(document).ready(function ($) {
            // Function to update login/signup buttons
            function updateLoginSignupButtons() {
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'POST',
                    data: {
                        action: 'update_login_signup_buttons'
                    },
                    success: function (response) {
                        $('#login-signup-buttons').html(response);
                    }
                });
            }

            // Event listener for successful login
            $(document).on('wp_login_success', function () {
                updateLoginSignupButtons();
            });
        });
        jQuery(document).ready(function ($) {
            // Function to replace text in select options
            function replaceTextInSelect() {
                // Get the select element
                var selectElement = $('.custom_field_user_role');

                // Iterate through each option and replace text
                selectElement.find('option').each(function () {
                    var option = $(this);
                    if (option.text() === 'Contributor') {
                        option.text('Counsellor');
                    } else if (option.text() === 'Subscriber') {
                        option.text('User');
                    }
                });
            }

            // Call the function when the document is ready
            replaceTextInSelect();
        });
    </script>
    <script
        type="text/javascript">window.$crisp = []; window.CRISP_WEBSITE_ID = "a5ffc53a-23a8-4bf4-b277-e8a3d3980fc4"; (function () { d = document; s = d.createElement("script"); s.src = "https://client.crisp.chat/l.js"; s.async = 1; d.getElementsByTagName("head")[0].appendChild(s); })();</script>
    <style>
        .signup-form .ur-form-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .ur-form-row>* {
            flex: 0 0 calc(48% - 10px);
            /* Adjust the width as needed */
            margin: 5px;
            /* Adjust the margin between elements */
        }

        .signup-form>:last-child {
            width: 100%;
        }

        .modal-title {
            color: #fc9928;
        }

        form button,
        input[type=submit] {
            background-color: #fc9928;
        }

        .ur-button-container button,
        input[type=submit] {
            width: 100%;
            color: white;
            margin: 15px auto 0;
        }

        .login-remember input , #send_credentials_via_email{
            display: inline-block;
            width: 10%;
            margin: 0 0.5rem;
        }
        .wppb-send-credentials-checkbox{
            display: none;
        }
        label {
            color: black;
        }

        .sign-up .modal-body input {
            margin: 10px;
        }
    </style>
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

                                    <li><a href="counsellor">counsellor </a>
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
                            <ul id="login-signup-buttons">
                                <?php if (is_user_logged_in()): ?>
                                    <?php $current_user = wp_get_current_user(); ?>
                                    <li><span>Welcome,
                                            <?php echo esc_html($current_user->user_login); ?>
                                        </span> </li>
                                    <li><a href="<?php echo esc_url(wp_logout_url()); ?>"
                                            class="btn btn-primary btn-round">Logout</a></li>
                                <?php else: ?>
                                    <li><a data-toggle="modal" data-target="#exampleModal" class="btn btn-light btn-round"
                                            href="#">Log in</a></li>
                                    <li><a data-toggle="modal" data-target="#exampleModal2"
                                            class="btn btn-primary btn-round" href="#">Sign Up</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <!-- Button trigger modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content p-5" style="border-radius:25px;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Login Here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body login-form">
                                        <?php echo do_shortcode('[wppb-login]') ?>;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content p-5" style="border-radius:25px;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Please Sign Up Here</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body signup-form ">
                                    <!-- registration form starts here -->

                                    <?php echo do_shortcode('[wppb-register]') ?>;


                                    <!-- registration form ends here -->
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