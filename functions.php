<?php

add_theme_support( 'post-thumbnails' );

function b2w_theme_styles() {

  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

  wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css' );

  wp_enqueue_style( 'font-awesome_css', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );

  wp_enqueue_style( 'font-awesome_css', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' );

  wp_enqueue_style( 'magnific-popup_css', get_template_directory_uri() . '/css/magnific-popup.css' );

  wp_enqueue_style( 'freelancer_css', get_template_directory_uri() . '/css/freelancer.min.css' );

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/freelancer.css' );



}
add_action ('wp_enqueue_scripts', 'b2w_theme_styles');

function b2w_theme_js() {

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'jquery_easing_js', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'magnific_popup_js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery', 'jquery_easing_js'), '', true );

  wp_enqueue_script( 'BootstrapValidation_js', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'), '', true );

  wp_enqueue_script( 'contact_me_js', get_template_directory_uri() . '/js/contact_me.js', array('jquery', 'BootstrapValidation_js'), '', true );

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/freelancer.min.js', array('jquery'), '', true );


}

add_action( 'wp_enqueue_scripts', 'b2w_theme_js' );

?>
