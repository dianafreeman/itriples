<?php
/*
Plugin Name: Custom Post Types for ISSS  
*/


/**
* Adds custom post types and flushes
* rewrite rules only once on initialization.
*/
 
/**
* On activation, set an option called 'my_plugin_name_flush' to true,
* so our plugin knows, on initialization, to flush the rewrite rules.
*/
function itriples_customposts_activation() {
add_option('itriples_customposts_flush', 'true');
}
 
register_activation_hook( __FILE__, 'itriples_customposts_activation' );
 
/**
* On deactivation, remove our 'my_plugin_name_flush' option if it is
* still around. It shouldn't be after we register our post type.
*/
function itriples_customposts_deactivation() {
delete_option('itriples_customposts_flush');
}
 
register_deactivation_hook( __FILE__, 'itriples_customposts_deactivation' );
 
/**
* Register post type. Checks if
* 'my_plugin_name_flush' option is true. If so, flushes the rewrite rules,
* then deletes the option, so it only flushes the rules once.
*/
function itriples_register_post_types() {

 
// Check the option we set on activation.
if (get_option('itriples_customposts_flush') == 'true') {
flush_rewrite_rules();
delete_option('itriples_customposts_flush');
}

 
register_post_type( 'conference',  
        array(  
        'labels' => array(  
                'name' => __( 'Conferences' ),  
                'singular_name' => __( 'Conference' ),
                'edit_item' => __('Edit Conference'),
                'view_item' => __('View Conferences')  
            ),  
        'public' => true,
        'show_in_rest' => true,
        'taxonomies' => array('post_tag'),
        'exclude_from_search' => true,  
        'supports' => array( 'title', 'editor', 'excerpt', 'revisions', 'thumbnail'), 
        )
    );
     
register_post_type( 'eboard',  
        array(  
        'labels' => array(  
                'name' => __( 'E-Board' ),  
                'singular_name' => __( 'E-Board Member' ),
                'edit_item' => __('Edit E-Board Member'),
                'view_item' => __('View E-Board Members')  
            ),  
        'public' => true,
        'show_in_rest' => false,
        'taxonomies' => array('post_tag'),
        'exclude_from_search' => true,  
        'supports' => array( 'title', 'editor', 'excerpt', 'revisions', 'thumbnail'), 
        )
    );
    
}

add_action( 'init', 'itriples_register_post_types' );
