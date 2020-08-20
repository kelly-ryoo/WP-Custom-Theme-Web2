<?php

/* post thumbnails */
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
set_post_thumbnail_size( 200, 200);
add_image_size( 'category-page', 1000,1000 );



/* enque scripts */
function mytheme_scripts() {
  wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

function misha_include_script() {
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
}

add_action( 'admin_enqueue_scripts', 'misha_include_script' );



/* menu */
function theme_prefix_register_menus() {
    register_nav_menus(
        array(
            'primary_menu' => __( 'Primary Menu', 'theme_prefix' ),
        )
    );
}
add_action( 'init', 'theme_prefix_register_menus' );



/* widgets */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'sidebar',
		'id'            => 'the_sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );




/* font awesome */
function wpb_load_fa() {
 
wp_enqueue_script( 'wpb-fa', 'https://use.fontawesome.com/123456abc.js', array(), '1.0.0', true );
 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );



/* custom logo */
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
?>



<?php
/* breadcrumbs */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

?>





