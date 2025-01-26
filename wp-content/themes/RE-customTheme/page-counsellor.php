<?php
/*
Template Name: Counselor Page Template
*/
get_header();
?>
<div style="margin-top: 10rem;"></div>

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
      <h4 class="crumb-title"><span>Our</span> Counsellor's</h4>
    </div>
  </div>
</div>
<div class="container px-6" style="margin-top:15vh ; margin-bottom: 2rem;">
  <div class="row ">
    <?php
    $contributors = get_users(
      array(
        'role' => 'contributor',
        'number' => -1,
      )
    );

    if (!empty($contributors)) {
      foreach ($contributors as $contributor) {
        echo '<div class="col-lg-3 col-md-6 px-4 my-4">';
        echo '<div class="card rounded border border-dark px-3" style="width: 25rem;">';

        // Fetch and display user avatar
        echo '<img src="' . get_avatar_url($contributor->ID, array('size' => 200)) . '" alt="' . $contributor->display_name . '" class="card-img-top rounded-circle">';

        echo '<div class="card-body teacher-content p-25">';

        // Fetch and display user name and role
        echo '<h5 class="card-title mb-1"><a href="' . get_edit_user_link($contributor->ID) . '">' . $contributor->display_name . '</a></h5>';
        echo '<span class="primary-color d-block mb-4">' . get_user_meta($contributor->ID, 'role', true) . '</span>';

        // Display user biography
        echo '<p class="card-text">' . $contributor->description . '</p>';

        // Display user social icons
        echo '<ul class="list-inline">';
        echo '<li><a href="#"><i class="fa fa-facebook"></i></a></li>';
        echo '<li><a href="#"><i class="fa fa-twitter"></i></a></li>';
        echo '</ul>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
    }
    ?>
  </div>
</div>

<?php
get_footer();
?>