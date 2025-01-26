<?php 
function edification_register_user() {
    // Check if the request is a POST request and the action is 'edification_register'
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edification_register') {
        // Sanitize and validate user inputs
        $info = array(
            'user_login'    => sanitize_user($_POST['email']),
            'user_email'    => sanitize_email($_POST['email']),
            'user_pass'     => sanitize_text_field($_POST['password']),
            'first_name'    => sanitize_text_field($_POST['first_name']),
            'last_name'     => sanitize_text_field($_POST['last_name']),
            'user_registered' => date('Y-m-d H:i:s'),
            'role'          => 'subscriber'
        );

        // Insert user into the database
        $user_id = wp_insert_user($info);

        // Check if user insertion was successful
        if (is_wp_error($user_id)) {
            // User insertion failed
            echo json_encode(array(
                'type'    => 'error',
                'message' => $user_id->get_error_message()
            ));
        } else {
            // User inserted successfully
            echo json_encode(array(
                'type'     => 'success',
                'message'  => __('User created successfully.', 'edification'),
                'redirect' => admin_url('profile.php') // Redirect to profile page after successful registration
            ));
        }
    }

    // Always die after AJAX call
    die();
}

add_action('wp_ajax_edification_register', 'edification_register_user');
add_action('wp_ajax_nopriv_edification_register', 'edification_register_user'); // Allow for non-logged-in users to register

function edification_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('edification-ajax', get_template_directory_uri() . '/myassets/js/edification-ajax.js', array('jquery'), '1.0', true);

    // Set the AJAX URL for the JavaScript code
    $edification_params = array(
        'ajax_url' => admin_url('admin-ajax.php')
    );
    wp_localize_script('edification-ajax', 'edification_params', $edification_params);
}
add_action('wp_enqueue_scripts', 'edification_enqueue_scripts');

?>