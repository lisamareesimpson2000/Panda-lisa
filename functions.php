<?php


//wp function for local path
require get_template_directory() . '/inc/function-admin.php';

function add_custom_files(){
    wp_enqueue_style('my_bootstrap_file', get_template_directory_uri() . '/assets/css/bootstrap-4.3.1-dist/css/bootstrap.min.css' , array(), '4.3.1');

    wp_enqueue_style('my_custom_stylesheet', get_template_directory_uri() . '/assets/css/custom_theme_style.css' , array(), '0.1');

    wp_enqueue_script('jquery') ;

    wp_enqueue_script( 'my_bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.3.1', true);

    // wp_enqueue_script('') ;
};
add_action('wp_enqueue_scripts', 'add_custom_files');
//not closing php 

function register_my_menu() {
    register_nav_menu('header_menu', 'The menu which appears at the top of the page');
    register_nav_menu('footer_menu', 'The menu which appears at the bottom of the page');
  }
  add_action( 'init', 'register_my_menu' );

  // Register Custom Navigation Walker
require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';

//this will add in all the default styles that gutenberg use in WP
add_theme_support ('wp-block-styles');
//featured image dropdown on post right hand side
add_theme_support('post-thumbnails');
//upload image after writing this code. Otherwise it won't show up in th
add_image_size('icon', 50, 50, true);

//Monday - this adds post format in all posts, document, dropdown
add_theme_support( 'post-formats', array( 'audio', 'video', 'image' ) );

//register side bar to use widgets
add_action( 'widgets_init', 'add_sidebar' );

function add_sidebar() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', '18wdwu07PandaLS' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', '18wdwu07PandaLS' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

// function remove_calendar_widget() {
// 	unregister_widget('WP_Widget_Calendar');
// }

// add_action( 'widgets_init', 'remove_calendar_widget' );



require get_template_directory() . '/inc/custom_post_types.php';
//could make a widget this way too to split up the files and make it easier to read

require get_template_directory() . '/inc/customizer.php';
//for client to change colors