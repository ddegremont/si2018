<?php


add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support('category-thumbnails');




add_action('wp_enqueue_scripts', 'uadv_wp_enqueue_scripts');

function uadv_wp_enqueue_scripts() {
    $path = get_stylesheet_directory_uri();

    $css = array(
        'main'  => $path . '/assets/css/style.css'
    );


    foreach ($css as $id => $path_file) {
        wp_register_style($id, $path_file, array(), false, 'all');
        wp_enqueue_style($id);
    }


    $js = array(
        'tweenmax'   => 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js',
        'parallax'   => $path . '/assets/js/parallax.js',
    );


    wp_deregister_script('jquery');

    foreach ($js as $id => $path_file) {
        wp_register_script($id, $path_file, array(), false, true);
        wp_enqueue_script($id);
    }

}

// NAV
// enregistre les éléments de la nav pour les afficher coté admin
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Main Menu' ),
            'extra-menu' => __( 'Cate Menu' )
        )
    );
};
add_action( 'init', 'register_my_menus' );