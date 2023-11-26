<?php

    define('EXPLORER_THEME_ROOT', get_template_directory_uri());
    define('EXPLORER_IMG_DIR', EXPLORER_THEME_ROOT.'/assets/img/');
    

    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

    function theme_name_scripts() {
	    wp_enqueue_style( 'style-css', get_stylesheet_directory_uri().'/assets/css/style.css' );
        wp_enqueue_style( 'blog_catalog-css', get_stylesheet_directory_uri().'/assets/css/blog-catalog.css' );
        wp_enqueue_style( 'blog-page-css', get_stylesheet_directory_uri().'/assets/css/blog-page.css' );
    }

    add_action( 'widgets_init', 'register_my_widgets' );
    function register_my_widgets(){

        register_sidebar( array(
            'name'          => 'Blog Sidebar Author`s',
            'id'            => "blog-sidebar",
            'description'   => 'Description/',
            'class'         => '',
            'before_widget' => '<div class="small__div">',
            'after_widget'  => '</div>',
            'before_title'  => '<p class="saidbar__section">',
            'after_title'   => "</p>\n",
            'before_sidebar' => '', // WP 5.6
            'after_sidebar'  => '', // WP 5.6
        ) );
    }
?>