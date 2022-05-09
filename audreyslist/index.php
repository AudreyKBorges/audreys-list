<?php 
/**
 * Theme audreysList
 * 
 * @since Twenty Twentytwo 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Audrey's List</title>
    <?php wp_head(); ?>
  </head>

<div class="flex-container">
<div id="content">
<?php get_header(); ?>
<div class="container">
<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'ul',
    'menu_class'     => 'menu',
    'theme_location' => 'primary') ); 
?>
</div>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title(); 
        the_content();
    endwhile; 
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 
?>

</div>
</div>

<?php wp_footer(); ?>
<?php get_footer(); ?>
