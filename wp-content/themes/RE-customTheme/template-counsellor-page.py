<?php
/*
Template Name: Counselor Page Template
*/
get_header();
?>

<div class="container pt-6">
  <div class="row">
    <?php
    $contributors = get_users(
        array(
            'role' => 'contributor',
            'number' => -1,
        )
    );

    if (!empty($contributors)) {
        foreach ($contributors as $contributor) {
            echo '<div class="col-lg-3 col-md-6 px-4 my-4 ">';
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