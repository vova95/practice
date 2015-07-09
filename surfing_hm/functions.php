<?php

if (function_exists('register_sidebar')) {
    register_sidebar(array('name' => 'Sidebar'));
}


// Our custom post type function
function create_posttypes()
{

    register_post_type('Slider',
        array(
            'labels' => array(
                'name' => __('slider'),
                'singular_name' => __('Slider')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'slider'),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
        )
    );
    register_post_type('Become_member_list',
        array(
            'labels' => array(
                'name' => __('become_member_list'),
                'singular_name' => __('Become_member_list')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'become_member_list'),
            'supports' => array('title', 'editor', 'custom-fields')
        )
    );

    register_post_type('Portfolio',
        array(
            'labels' => array(
                'name' => __('portfolio'),
                'singular_name' => __('portfolio')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'portfolio'),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'comments')
        )
    );

    register_post_type('About Us',
        array(
            'labels' => array(
                'name' => __('about'),
                'singular_name' => __('About us')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'about'),
            'supports' => array('title', 'editor', 'custom-fields')
        )
    );
    register_post_type('Contacts',
        array(
            'labels' => array(
                'name' => __('contacts'),
                'singular_name' => __('Contacts')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'contacts'),
            'supports' => array('title', 'editor', 'custom-fields')
        )
    );
}


add_action('init', 'create_posttypes');
add_theme_support('post-thumbnails');
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
?>
