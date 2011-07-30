<?php
function my_init_method() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }
}    
 
add_action('init', 'my_init_method');

add_theme_support('post-thumbnails');

/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );


?>
