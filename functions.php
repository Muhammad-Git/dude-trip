<?php
add_theme_support( 'post-thumbnails' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
  register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'header_menu_reponsive' => 'Header Menu Reponsive',
    'footer_menu' => 'Footer Menu',
  )
);
}

require_once ( get_stylesheet_directory() . '/theme-option.php' );
function theme_scripts() {

  
   
    
    
/*wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css' );*/
    wp_enqueue_style( 'theme-style', get_stylesheet_uri());   
    //wp_enqueue_script( 'jquery-3.1.0.min','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), false, true );
   /* wp_enqueue_script( 'main-lib', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );*/
    //wp_localize_script('custom', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
  }
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


function widget_registration(){
    register_sidebar( array(
        'name' => 'Shop Widget',
        'id' => 'shop-page-widget',
        'description' => $description,
        'before_widget' => '<div class="sidepro">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'widget_registration');

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 260,
        //'subcategory_archive_thumbnail_size' => 2000,
        'single_image_width'    => 461,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 1,
            'max_rows'        => 12,
            'default_columns' => 4,
            'min_columns'     => 3,
            'max_columns'     => 8,
        ),
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    //add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

