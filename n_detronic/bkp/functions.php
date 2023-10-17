<?php
show_admin_bar( false );

    /**
    * Theme custom styles and scripts
    */
    function theme_scripts(){

        //Styles
        wp_enqueue_style('main-style', get_stylesheet_uri());
        wp_enqueue_style('media-querie-mobile', get_stylesheet_directory_uri() . '/css/mobile.css', false, '2', 'all');
        wp_enqueue_style('media-querie-mobile', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', false, '2', 'all');

        //Javascript files
        //wp_enqueue_script('functions-js', get_template_directory_uri() . '/js/functions.js', array(), 2, true);
    }
	add_action('init', 'theme_scripts');
