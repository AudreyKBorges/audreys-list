<?php

function al_custom_new_menu() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}

function al_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png); 
		height: 100px;
		width: 185px;
		background-size: 185px 100px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
function my_login_logo_url() {
    return home_url();
}

function my_login_logo_url_title() {
    return "Audrey's List";
}

?>