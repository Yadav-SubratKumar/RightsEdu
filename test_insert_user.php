<?php
// Include WordPress configuration file
require_once('wp-config.php');

// Get WordPress database connection
global $wpdb;

// User data
$user_login = 'testuser';
$user_email = 'test@example.com';
$user_password = wp_generate_password(); // Generate a random password
$user_display_name = 'Test User';

// Prepare user data for insertion
$user_data = array(
    'user_login'    => $user_login,
    'user_pass'     => $user_password,
    'user_email'    => $user_email,
    'user_nicename' => $user_display_name,
    'display_name'  => $user_display_name
);

// Insert user directly into the wp_users table
$wpdb->insert(
    $wpdb->users,
    $user_data,
    array('%s', '%s', '%s', '%s', '%s')
);

// Check if the user was inserted successfully
if ($wpdb->insert_id) {
    echo "User inserted successfully with ID: " . $wpdb->insert_id;
} else {
    echo "Failed to insert user.";
}
?>
