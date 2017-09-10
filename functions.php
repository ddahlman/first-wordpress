<?php
require_once('wp-bootstrap-navwalker.php');

// Bootstrap navigation
function bootstrap_nav()
{
    wp_nav_menu( array(
    'theme_location'    => 'header-menu',
    'depth'             => 2,
    'container'         => 'false',
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker())
    );
}

function register_my_menus() {
    register_nav_menus(
    array(
    'header-menu' => __( 'Header Menu' ),
    'social menu' => __( 'Social Menu' )
    )
    );
}
add_action( 'init', 'register_my_menus' );

// The CSS files for your theme
function theme_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/font/css/font-awesome.min.css', array(), '', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

// The JavaScript files for your theme
function theme_js() {
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'daniel-js', get_template_directory_uri() . '/js/daniel.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_enqueue_scripts', 'theme_js' );

/*show regular posts on front-page*/
function posts_for_home($query) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '4');
    }
}
add_action( 'pre_get_posts', 'posts_for_home' );

/*comments*/
function comment_reform ($arg) {
    $arg = array(
    'title_reply' => __('Lämna en kommentar'),
    'label_submit' => __('Posta')
    );
    return $arg;
}
add_filter('comment_form_defaults','comment_reform');

function remove_admin_bar() {
    show_admin_bar(false);
}

add_action('after_setup_theme', 'remove_admin_bar');

/*-------------------header image-----------------------------------------*/
function daniel_custom_header_setup() {
    register_default_headers( array(
    $args => array(
    'url'           => get_template_directory_uri() . '/img/trappa.jpg',
    'thumbnail_url' => get_template_directory_uri() . '/img/trappa.jpg',
    'description'   => 'Stairs'
    )
    )
    );
    $daniel = array(
    'default-image'      => get_template_directory_uri() . '/img/större_dator.jpg',
    'default-text-color' => '000',
    'width'              => 1520,
    'height'             => 1013,
    'flex-width'         => true,
    'flex-height'        => true,
    );
    add_theme_support('custom-header', $daniel);
}

add_action( 'after_setup_theme', 'daniel_custom_header_setup' );

?>