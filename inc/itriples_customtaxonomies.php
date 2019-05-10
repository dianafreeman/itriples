<?php
/*
Plugin Name: Custom Taxonomies for ISSS 
*/

/*
 * Add custom taxonomies
 *These allow users to search by a taxonomy term
*/
function itriples_add_custom_taxonomies() {
	register_taxonomy('conference-details', array( 'conference' ), array(
		'show_in_rest' => true,
		'hierarchical' => false,
		'labels' => array(
			'name' => _x( 'Conference Details', 'taxonomy general name' ),
			'singular_name' => _x( 'Conference Details', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search details' ),
			'all_items' => __( 'All conference details' ),
			'edit_item' => __( 'Edit conference details' ),
			'update_item' => __( 'Update conference details' ),
			'add_new_item' => __( 'Add new conference details' ),
			'new_item_name' => __( 'New conference name' ),
			'menu_name' => __( 'Conference Details' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'conference-details',
			'hierarchical' => false
		),
	));
/*	register_taxonomy('podcast-details', array( 'podcast' ), array(
		'show_in_rest' => true,
		'hierarchical' => false,
		'labels' => array(
			'name' => _x( 'Podcast Details', 'taxonomy general name' ),
			'singular_name' => _x( 'Podcast Details', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Podcast details' ),
			'all_items' => __( 'All Podcast details' ),
			'edit_item' => __( 'Edit Podcast details' ),
			'update_item' => __( 'Update Podcast details' ),
			'add_new_item' => __( 'Add new Podcast details' ),
			'new_item_name' => __( 'New Podcast name' ),
			'menu_name' => __( 'Podcast Details' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'podcast-details',
			'hierarchical' => false
		),
	));*/
}
/* Register taxonomies for custom post types, and categories and tags for pages
*/

function add_itriples_taxonomies(){

register_taxonomy_for_object_type('post_tag', 'page'); 
register_taxonomy_for_object_type('post_tag', 'conference'); 
 

}
add_action('init','add_itriples_taxonomies');



