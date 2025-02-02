<?php
/*
Template Name: About Page Template
*/
get_header();
?>
    <div style="margin-top: 10rem;"></div>

    <header id="header">
        <!-- header top area start -->
        <div class="header-top">
            <div class="container">
                <div class="row d-flex flex-center">
                    <div class="col-sm-8">
                        <div class="ht-address">
                            <ul>
                                <li><i class="fa fa-phone"></i>+ 88 01916 444137</li>
                                <li><i class="fa fa-envelope"></i>info@example.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="ht-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top area end -->
        <!-- header bottom area start -->
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-9">
                            <div class="logo">
                                <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu">
                                <nav>
                                    <ul id="m_menu_active">
                                        <li><a href="javascript:void(0);">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index2.html">Home Two</a></li>
                                                <li><a href="index3.html">Home Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="active"><a href="javascript:void(0);">Courses</a>
                                            <ul class="submenu">
                                                <li class="active"><a href="courses.html">courses</a></li>
                                                <li><a href="course-details.html">course details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">teacher</a>
                                            <ul class="submenu">
                                                <li><a href="teachers.html">teachers</a></li>
                                                <li><a href="teacher-details.html">teacher details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-sm-3">
                            <div class="hb-right">
                                <ul> 
                                    <li class="search_btn"><i class="fa fa-search"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div id="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom area end -->
    </header>
    <!-- header area end -->
    <!-- offset search area start -->
    <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Sarch here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Our</span> Courses</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- course area start -->
    <div class="course-area  pt--120 pb--70">
        <div class="container">
            <div class="row">  
                <!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/cs-img1.jpg" alt="image">
                            <span class="cs-price primary-bg">$150</span>
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course-details.html">Application Design Course</a></h4>
                                    <ul class="course-meta-stats">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li>36 <i class="fa fa-comment"></i></li>
                                        <li>85 <i class="fa fa-heart"></i></li>
                                    </ul>
                                </div> 
                                <a href="course-details.html"><img class="course-meta-thumbnail rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/author/auth1.jpg" alt="image"> </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>3 Year</span>
                                </li>
                                <li>
                                 <p>Class Size</p>
                                  <span>18</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>1 hour</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>

                <div class="col-lg-4 col-md-6"> 
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/cs-img2.jpg" alt="image">
                            <span class="cs-price primary-bg">$150</span>
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course-details.html">Data Structure & Algorithm</a></h4>
                                    <ul class="course-meta-stats">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li>36 <i class="fa fa-comment"></i></li>
                                        <li>85 <i class="fa fa-heart"></i></li>
                                    </ul>
                                </div> 
                                <a href="course-details.html"><img class="course-meta-thumbnail rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/author/auth1.jpg" alt="image"> </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>3 Year</span>
                                </li>
                                <li>
                                 <p>Class Size</p>
                                  <span>18</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>1 hour</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col-lg-4 -->

                <div class="col-lg-4 col-md-6">  
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/cs-img3.jpg" alt="image">
                            <span class="cs-price primary-bg">$150</span>
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course-details.html">Android App Development</a></h4>
                                    <ul class="course-meta-stats">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li>36 <i class="fa fa-comment"></i></li>
                                        <li>85 <i class="fa fa-heart"></i></li>
                                    </ul>
                                </div> 
                                <a href="course-details.html"><img class="course-meta-thumbnail rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/author/auth1.jpg" alt="image"> </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>3 Year</span>
                                </li>
                                <li>
                                 <p>Class Size</p>
                                  <span>18</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>1 hour</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card --> 
                </div>

                <div class="col-lg-4 col-md-6">  
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/cs-img4.jpg" alt="image">
                            <span class="cs-price primary-bg">$150</span>
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course-details.html">Application Design Course</a></h4>
                                    <ul class="course-meta-stats">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li>36 <i class="fa fa-comment"></i></li>
                                        <li>85 <i class="fa fa-heart"></i></li>
                                    </ul>
                                </div> 
                                <a href="course-details.html"><img class="course-meta-thumbnail rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/author/auth1.jpg" alt="image"> </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>3 Year</span>
                                </li>
                                <li>
                                 <p>Class Size</p>
                                  <span>18</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>1 hour</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div> 

                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/cs-img5.jpg" alt="image">
                            <span class="cs-price primary-bg">$150</span>
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course-details.html">Application Design Course</a></h4>
                                    <ul class="course-meta-stats">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li>36 <i class="fa fa-comment"></i></li>
                                        <li>85 <i class="fa fa-heart"></i></li>
                                    </ul>
                                </div> 
                                <a href="course-details.html"><img class="course-meta-thumbnail rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/author/auth1.jpg" alt="image"> </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>3 Year</span>
                                </li>
                                <li>
                                 <p>Class Size</p>
                                  <span>18</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>1 hour</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                <!-- course single end -->
                <!-- course single start -->
                <div class="col-lg-4 col-md-6">   
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course/cs-img6.jpg" alt="image">
                            <span class="cs-price primary-bg">$150</span>
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course-details.html">Application Design Course</a></h4>
                                    <ul class="course-meta-stats">
                                        <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li>36 <i class="fa fa-comment"></i></li>
                                        <li>85 <i class="fa fa-heart"></i></li>
                                    </ul>
                                </div> 
                                <a href="course-details.html"><img class="course-meta-thumbnail rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/author/auth1.jpg" alt="image"> </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>3 Year</span>
                                </li>
                                <li>
                                 <p>Class Size</p>
                                  <span>18</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>1 hour</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                <!-- course single end --> 
            </div>
        </div>
    </div>
    <!-- course area end --> 

    <!-- cta area start -->
    <div class="cta-area  secondary-bg has-color ptb--50"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="cta-content">
                        <p class="mb-2">Click to Join the Advance Workshop</p>
                        <h2>Training in advance networking</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cta-btn">
                        <a class="btn btn-light btn-round" href="#">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end --> 

    <!-- teacher area end -->
    <?php
    get_footer();
    ?>