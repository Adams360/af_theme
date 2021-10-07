<?php
// Setup
define('AF_DEV_MODE', true);

// Includes
include( get_theme_file_path( '/includes/setup.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'af_enqueue' );

// Shortcodes
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');