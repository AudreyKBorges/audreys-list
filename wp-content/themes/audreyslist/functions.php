<?php 
/**
 * Functions
 * 
 * @package Theme_AudreysList
 * @author Audrey Borges audreyborges7@gmail.com
 * @since 1.0 — --PHP 7.4.27
 */

// Setup
define( 'AL_DEV_MODE', 'false' );

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );

// Hooks
add_action ( 'wp_enqueue_scripts', 'al_enqueue' );
add_action( 'init', 'al_custom_new_menu' );
add_action( 'after_setup_theme', 'al_setup_theme' );
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Filters
add_filter( 'login_headertext', 'my_login_logo_url_title' );
add_filter( 'login_headerurl', 'my_login_logo_url' );

?>