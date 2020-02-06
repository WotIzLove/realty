<?php 

add_action('wp_enqueue_scripts', 'realty_styles');

function realty_styles() {
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('slicknav-style', get_template_directory_uri() . '/assets/css/slicknav.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

function wpschool_create_movies_posttype() {
    register_post_type( 'movies',
        array(
            'labels' => array(
            'name' => __( 'Недвжимость' ),
            'singular_name' => __( 'Фильм' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'movies'),
        )
    );
}
add_action( 'init', 'wpschool_create_movies_posttype' );