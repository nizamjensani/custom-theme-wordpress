<?php

function nizamtemplate_theme_support(){
//add dynamic title tag
add_theme_support("title-tag");
add_theme_support("custom-logo");
add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','nizamtemplate_theme_support');


function nizamtemplate_menu(){
    $locations = array(
        'primary' => "Dekstop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action("init",'nizamtemplate_menu');

//
function nizamtemplate_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('nizamtemplate-style', get_template_directory_uri() .'/style.css', array('nizamtemplate-bootstrap'), $version , 'all');
    wp_enqueue_style('nizamtemplate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1' , 'all');
    wp_enqueue_style('nizamtemplate-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0' , 'all');
}
add_action('wp_enqueue_scripts','nizamtemplate_register_styles');

function nizamtemplate_register_scripts(){
    wp_enqueue_script('nizamtemplate-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1',true);

    wp_enqueue_script('nizamtemplate-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0',true);

    wp_enqueue_script('nizamtemplate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1',true);

    wp_enqueue_script('nizamtemplate-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0',true);

}
add_action('wp_enqueue_scripts','nizamtemplate_register_scripts');


//Sidebar
function nizamtemplate_widget_area(){


    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
        );


    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
        );
}

add_action('widgets_init', 'nizamtemplate_widget_area')

?>