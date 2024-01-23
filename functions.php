<?php

function hiron_theme_setup(){
    load_theme_textdomain( 'hiron', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );

    add_theme_support('custom-logo', array(
        'width' => 150,
        'height' => 10
    ));

    add_theme_support('custom-background');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');

    register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'hiron' ),
			'menu-footer' => esc_html__( 'Footer menu', 'hiron' ),
		)
	);

}

add_action('after_setup_theme', 'hiron_theme_setup');

function learing_assetes_register(){
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time() );
    wp_enqueue_script('main-script', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
}

add_action('wp_enqueue_scripts', 'learing_assetes_register');