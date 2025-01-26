<?php
/*
Template Name: About Page Template
*/
get_header();
?>
                                       


    <div style="margin-top: 10rem;"></div>
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
                <h4 class="crumb-title"><span>About </span>Us</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end --> 
    <!-- about area start -->
    <div class="about-area ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <div class="section-title">
                             <span class="text-uppercase">about us</span>
                            <h2>Welcome to</h2><h2><span>Our </span> <span class="primary-color">Institution</span></h2> 
                        </div>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <a href="#" class="btn btn-primary btn-round">Read more</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abt-right-thumb">
                        <div class="abt-rt-inner">
                            <a class="expand-video" href="https://www.youtube.com/watch?v=cdfMgotGKIM"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!-- take toure area start -->
    <div class="take-toure-area ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-title sec-style-two">
                        <img class="title-top-shape" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/title-top-shape.png" alt="image">
                        <span class="text-uppercase">Take A Tour</span>
                        <h2>Video Tour on RightsEdu</h2>
                    </div>
                </div>
            </div>
            <div class="video-area">
                <a class="expand-video" href="https://www.youtube.com/watch?v=cdfMgotGKIM"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
    <!-- take toure area end -->
 
    
    <?php
    get_footer();
    ?>