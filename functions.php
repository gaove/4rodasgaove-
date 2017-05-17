<?php 

/**
 * LOAD STYLES
 */
function load_theme_styles(){
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome-icons', get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style( 'main-theme-css', get_template_directory_uri().'/style.css');
}
add_action( 'wp_enqueue_scripts', 'load_theme_styles');

/**
 * LOAD SCRIPTS
 */
function load_theme_scripts(){
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'main-theme-js', get_stylesheet_directory_uri().'/js/main.js', '', '', true );   
}
add_action( 'wp_enqueue_scripts', 'load_theme_scripts');

/**
 * REGISTER MENU
 */
add_theme_support("menus");
add_theme_support("post-thumbnails");

function register_theme_menu() {
    register_nav_menus(
        array(
            'primary' => _('Primary Menu')
        )
    );
}
add_action( 'init', 'register_theme_menu' );

/**
 * REGISTER WIDGET AREA
 */
function create_widget($name, $id, $description) {
    register_sidebar(
         array(
            'name' => _($description),
            'id' => $id,
            'description' => _($description),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ) 
    );
}

create_widget('Front Page Left', 'front-left', 'Left on the Home');
create_widget('Front Page Center', 'front-center', 'Center on the Home');
create_widget('Front Page Right', 'front-right', 'Right on the Home');
create_widget('Page Sidebar', 'page', 'Page Sidebar');
create_widget('Blog Sidebar', 'blog', 'Blog Sidebar');















































