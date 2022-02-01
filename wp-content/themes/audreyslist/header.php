<?php 
/**
 * Header
 * 
 * @package Theme_AudreysList
 * @author Audrey Borges audreyborges7@gmail.com
 * @since 1.0
 * 
 * PHP 7.4.27
 */
?>

<!DOCTYPE html>
<html lang="en">
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="designer" content="https://www.audreyslist.org" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Audrey's List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <header id="js-site-header" class="site-header sticky" role="banner">
			<div class="site-header__inner alignwide">
    <a href="index.php">
    <img id="logo" src="logo.png" class="logo" alt="Audrey's List">
    </a>
    <p class="header-text">Keep in touch.</p>
    <p class="header-text2">info@audreyslist.org.</p>
    <img class="fb-icon" src="facebook.png" alt="facebook icon">
    <img class="instagram-icon" src="instagram.png" alt="Instagram icon">
    <img class="twitter-icon" src="twitter.png" alt="twitter icon">
  </header>
