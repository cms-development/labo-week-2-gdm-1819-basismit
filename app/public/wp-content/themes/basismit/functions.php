<?php

function basismit_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), '1.1', 'all');
}

add_action('wp_enqueue_scripts', 'basismit_enqueue_scripts');
function create_sidebar(){
    $args = array(
        'name'          => sprintf( __( 'Sidebar_primary' ) ),
        'id'            => "sidebar_primary",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    );
    register_sidebar( $args );
}

add_action('widgets_init', 'create_sidebar');
?>