<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function register_assets() {
    // Déclarer jQuery
	wp_enqueue_script( 
        'jquery', 
        get_template_directory_uri().'/assets/js/jquery.min.js', 
        array('jquery'), 
        '1.0', 
        true
    );

    // Déclarer le JS
    wp_enqueue_script( 
        'browser', 
        get_template_directory_uri().'/assets/js/browser.min.js', 
        array('jquery'), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'breakpoints', 
        get_template_directory_uri().'/assets/js/breakpoints.min.js', 
        array('jquery'), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'util', 
        get_template_directory_uri().'/assets/js/util.js', 
        array('jquery'), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'main', 
        get_template_directory_uri().'/assets/js/main.js', 
        array('jquery'), 
        '1.0', 
        true
    );
    
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'main', 
        get_template_directory_uri().'/assets/css/main.css',
        array(),
        '1.0'
    );

    wp_enqueue_style( 
        'fontawesome', 
        get_template_directory_uri().'/assets/css/fontawesome-all.min.css',
        array(),
        '1.0'
    );

    // Déclarer les images
    wp_load_image('images/pic01.jpg');
}

add_action('wp_enqueue_scripts', 'register_assets');
add_action('wp_enqueue_styles', 'register_assets');