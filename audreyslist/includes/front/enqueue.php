<?php
function al_enqueue(){
    $uri             =       get_theme_file_uri();
    $ver             =       AL_DEV_MODE ? time() : false;
    wp_register_style( 'al_google_fonts_poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap', [], $ver );
    wp_register_style( 'al_google_fonts_abril', 'https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap', [], $ver );
    wp_register_style( 'al_google_fonts_roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', [], $ver );
    wp_register_style( 'al_style', $uri . '/style.css', [], $ver  );
    wp_register_style( 'al_style_normalize', $uri . '/assets/css/normalize.css', [], $ver  );
    
    wp_enqueue_style( 'al_google_fonts_poppins' );
    wp_enqueue_style( 'al_google_fonts_abril' );
    wp_enqueue_style( 'al_google_fonts_roboto' );
    wp_enqueue_style( 'al_style' );
    wp_enqueue_style( 'al_style_normalize' );

    wp_register_script( 'al_slidepanel', $uri . '/assets/js/slidepanel.js', array('jquery'), [], $ver , true );
    wp_enqueue_script( 'al_slidepanel' );
}
al_enqueue();
?>