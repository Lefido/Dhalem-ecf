<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );

function wpecf_register_assets () {
    wp_register_style('style-ecf', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-ecf');

    wp_register_script('scripts-ecf', get_template_directory_uri() . '/assets/js/scripts.js', [], false, true);
    wp_enqueue_script('scripts-ecf');

    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'wp-block-library' ); // Wordpress Core
    wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress Core
    wp_dequeue_style( 'wc-block-style' ); // WooCommerce
    wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme


}

add_action('wp_enqueue_scripts', 'wpecf_register_assets');