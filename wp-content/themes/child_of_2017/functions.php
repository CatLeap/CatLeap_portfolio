<?php
function my_theme_enqueue_styles() {
    $parent_style = 'twentyseventeen-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/
style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
); }
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


// 4 google fonts are added: Arimo,Niconne,Teko, Montserrat
function wpb_add_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Arimo|Montserrat|Niconne|Teko&display=swap', false );
}
add_action( 'wp_enqueue_scripts',
'wpb_add_google_fonts' );

//the following snippet of code was taken from Kinsta.com to replace default Header image
function my_custom_header_args( $args ) {
  $args['default-image'] = get_theme_file_uri( '/assets/images/header.jpg' );
  return $args;
}
add_filter( 'twentyseventeen_custom_header_args', 'my_custom_header_args' );
