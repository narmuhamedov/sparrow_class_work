<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');

function register_my_widgets(){
    register_sidebar( array(
        'name' => 'Left Sidebar',
        'id' => "left_sidebar",
        'description' => 'Description sidebar',
// 'class' => '',
// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 'after_widget' => "</li>\n",
// 'before_title' => '<h2 class="widgettitle">',
// 'after_title' => "</h2>\n",
// 'before_sidebar' => '', // WP 5.6
// 'after_sidebar' => '', // WP 5.6
    ) );
}








function theme_register_nav_menu(){
    register_nav_menu('top', 'меню в шапке сайта');
}


function style_theme(){
    wp_enqueue_style('default', get_template_directory_uri().'/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri().'/assets/css/layout.css');
    wp_enqueue_style('fonts', get_template_directory_uri().'/assets/css/fonts.css');
    wp_enqueue_style('md-q', get_template_directory_uri().'/assets/css/media-queries.css');
}


add_action('wp_footer', 'scripts_theme');
function scripts_theme(){
    wp_enqueue_scripts('init', get_template_directory_uri().'/assets/js/init.js');
    wp_enqueue_scripts('dblpt', get_template_directory_uri().'/assets/js/doubletaptogo.js');
    wp_enqueue_scripts('flex', get_template_directory_uri().'/assets/js/jquery.flexslider.js');
}
?>