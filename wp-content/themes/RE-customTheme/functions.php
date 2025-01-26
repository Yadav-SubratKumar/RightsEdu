<?php 
register_nav_menus( 
    array('primary-menu'=>'Top Menu')
);

function set_contributor_template() {
    $post_types = array('contributor');
  
    foreach ($post_types as $post_type) {
      $templates = array();
  
      $templates[] = 'single-' . $post_type . '.php';
  
      $templates[] = 'single.php';
  
      $templates[] = 'page.php';
  
      $templates[] = 'index.php';
  
      locate_template($templates, true, false);
    }
  }
  add_action('single_template', 'set_contributor_template');

function create_contributor_post_type() {
    $args = array(
      'labels' => array(
        'name' => __( 'Contributors' ),
        'singular_name' => __( 'Contributor' )
      ),
      'public' => true,
      'has_archive' => true,
    );
    register_post_type( 'contributor', $args );
  }
  
  add_action( 'init', 'create_contributor_post_type' );

function create_acf_field_for_user_selection() {
    // Check if ACF is installed and active
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_user_selection_in_contributor_post',
            'title' => 'User Selection for Contributor',
            'fields' => array(
                array(
                    'key' => 'field_user_selection_in_contributor_post',
                    'label' => 'Select a User',
                    'name' => 'user_selection_in_contributor_post',
                    'type' => 'relationship',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'user',
                    ),
                    'taxonomy' => '',
                    'filters' => array(
                        0 => 'search',
                        1 => 'post_type',
                    ),
                    'elements' => '',
                    'min' => '',
                    'max' => '',
                    'return_format' => 'object',
                    'preview_size' => 'thumbnail',
                    'allow_null' => 0,
                    'multiple' => 1,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'contributor',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
    }
}
add_action('acf/init', 'create_acf_field_for_user_selection');
?>

