<?php
function capitaine_register_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    // Déclarer jQuery
    wp_enqueue_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        false,
        '3.3.1',
        true
    );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style(
        'capitaine',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    wp_enqueue_script(
        'bpc_togglemenu',
        get_template_directory_uri() . '/js/navigation.js',
        array('jquery'), '20160909', true );
}

function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

add_action( 'wp_enqueue_scripts', 'capitaine_register_assets' );