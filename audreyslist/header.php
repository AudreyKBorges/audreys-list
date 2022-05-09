<?php 
/**
 * Theme audreysList
 * 
 * @since Twenty Twentytwo 1.0
 */
?>
<body>
    <header>
            <a href="<?php echo home_url( '/' ); ?>" />
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" id="logo" class="logo" alt="Audrey's List" />
            </a>
            <a href="javascript:void(0);" class="icon" onclick="burgerMenu()">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menu.png'; ?>" class="icon" id="menu" alt="hamburger menu" />
            </a>  
        <div class="topnav">
        <div id="nav" class="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu' ) ); ?>
        </div>
    </header>