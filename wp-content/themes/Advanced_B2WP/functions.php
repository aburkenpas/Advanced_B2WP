<?php

add_theme_support( 'menus' );

function ab2w_register_theme_menus() {

  register_nav_menus(

    array(
      'primary-menu' => __( 'Primary Menu' ),
    )

  );

}

add_action( 'init', 'ab2w_register_theme_menus');

function ab2w_theme_styles() {

  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );

  wp_enqueue_style( 'clean_blog_css', get_template_directory_uri() . '/css/clean-blog.min.css' );

  wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );

  wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'ab2w_theme_styles');

function ab2w_theme_js() {

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js' );

  wp_enqueue_script( 'bootstrap_validations_js', get_template_directory_uri() . '/js/jqBootstrapValidation.js' );

  wp_enqueue_script( 'contact_me_js', get_template_directory_uri() . '/js/contact_me.js' );

  wp_enqueue_script( 'clean_blog_js', get_template_directory_uri() . '/js/clean-blog.min.js' );

}

add_action( 'wp_enqueue_scripts', 'ab2w_theme_js');












 ?>
