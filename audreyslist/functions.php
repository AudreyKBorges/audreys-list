<?php 
/**
 * Functions
 * 
 * @package Theme_AudreysList
 * @author Audrey Borges audreyborges7@gmail.com
 * @since 1.0 — --PHP 7.4.27
 */

// Setup
define( 'AL_DEV_MODE', 'true' );

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );

// Hooks
add_action ( 'wp_enqueue_scripts', 'al_enqueue' );
add_action( 'init', 'al_custom_new_menu' );
add_action( 'after_setup_theme', 'al_setup_theme' );
?>