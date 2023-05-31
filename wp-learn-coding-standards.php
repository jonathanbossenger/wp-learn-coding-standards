<?php
/**
 * Plugin Name: WP Learn Coding Standards
 * Description: A plugin to demonstrate WordPress coding standards
 * Author: Jonathan Bossenger
 * Version: 1.0.0
 */

add_action('init','wp_learn_register_custom_post_type');
function register_custom_post_type()
{
    /**
    * Register a custom post type book
    */
    register_post_type('book', array(
        'labels'=>array(
            'name'=>__('Books'),
            'singular_name'=>__('Book'),
        ),
        'public'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug'=>'books'),
	));
}
