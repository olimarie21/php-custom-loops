<?php

// Change all instances of a8oliviaunderdah to your theme name.
if ( ! function_exists( 'a8oliviaunderdah_setup' ) ) :
 
   function a8oliviaunderdah_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
   }
 
endif;
 
add_action('after_setup_theme', 'a8oliviaunderdah_setup');
 
function a8oliviaunderdah_scripts_styles(){
   wp_enqueue_style('a8oliviaunderdah_style', get_stylesheet_uri(), array(), time());
   wp_enqueue_style('a8oliviaunderdah_style_googlefonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet', array(), null);
   wp_enqueue_style('a8oliviaunderdah_style_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

   if (!is_admin( )) :
      wp_enqueue_script( 'a8oliviaunderdah_script_navigation_js', get_template_directory_uri() . '/js/navigation.js', array(), null, true );
   endif;
}
 
add_action('wp_enqueue_scripts', 'a8oliviaunderdah_scripts_styles');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );