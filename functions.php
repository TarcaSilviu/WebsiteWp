<?php 
require_once('class-wp-bootstrap-navwalker.php');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function custom_initial_setup(){
    add_theme_support('post-thumbnails');

    //theme support 
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Main' ),
    ) );
}
add_action('init','custom_initial_setup', 0);

// Widget Locations
function wbp_init_widgets($id){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id=>'=>'sidebar',
        'before_widget'=>'<div calss="sidebar-module">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'

        ));
}

add_action('widgets_init','wbp_init_widgets');