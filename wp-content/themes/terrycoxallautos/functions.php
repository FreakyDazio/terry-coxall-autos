<?php

function setup_theme()
{
    register_nav_menu('primary', 'Primary Menu');
    register_nav_menu('footer', 'Footer Menu');
    register_sidebar(array(
        'name' => 'Primary Sidebar',
        'id' => 'primary-sidebar',
        'description' => 'The primary side bar.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<header><h5 class="widgettitle">',
        'after_title'   => '</h5></header>'
    ));
    register_sidebar(array(
        'name' => 'Secondary Sidebar',
        'id' => 'secondary-sidebar',
        'description' => 'The secondary side bar. Only left out on homepage',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<header><h5 class="widgettitle">',
        'after_title'   => '</h5></header>'
    ));
    register_sidebar(array(
        'name' => 'Front Page Sidebar',
        'id' => 'front-page-sidebar',
        'description' => 'These are displayed horizontally on the hompage.',
        'before_widget' => '<div id="%1$s" class="home_box %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>'
    ));
}
add_action('after_setup_theme', 'setup_theme');

function include_javascript()
{
    wp_enqueue_script(
        'bigtarget',
        get_template_directory_uri() . '/scripts/jquery.bigtarget.js',
        array('jquery'),
        false,
        true
    );
    wp_enqueue_script(
        'custom',
        get_template_directory_uri() . '/scripts/script.js',
        array('jquery', 'bigtarget'),
        false,
        true
    );
    wp_enqueue_script(
        'html5shiv',
        get_template_directory_uri() . '/scripts/html5shiv.js'
    );
}
add_action('wp_enqueue_scripts', 'include_javascript');
