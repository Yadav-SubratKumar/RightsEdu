<?php
/*
Template Name: Single Contributor
*/
get_header();

// Get the user ID from the Contributor post object
$user_id = get_the_ID();

?>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
      <div class="card contributor-card">
        <div class="card-header">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="card-body">
          <?php
          // Display user biography
          the_content();

          // Display user social icons
          echo '<ul class="list-inline">';
          echo '<li><a href="#"><i class="fa fa-facebook"></i></a></li>';
          echo '<li><a href="#"><i class="fa fa-twitter"></i></a></li>';
          echo '<li><a href="#"><i class="fa fa-dribbble"></i></a></li>';
          echo '<li><a href="#"><i class="fa fa-deviantart"></i></a></li>';
          echo '<li><a href="#"><i class="fa fa-github"></i></a></li>';
          echo '</ul>';

          // Add chat code here
          echo do_shortcode('[chatwee]');
          ?>
        </div>
      </div>
    </div>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php
get_footer();
?>