<?php
/*Plugin Name: MIMP Condition Post Type
Description: This plugin registers the 'Condition' post type for MIMP. DO NOT DELETE
Version: 0.1
License: MIT
Author: Andrew Duckworth
*/

// Register Custom Post Type
function custom_condition_post_type() {

	$labels = array(
		'name'                => _x( 'Conditions', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Condition', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Conditions', 'text_domain' ),
		'name_admin_bar'      => __( 'Conditions', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'conditions', 'text_domain' ),
		'description'         => __( 'Individual condition', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'trackbacks', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'conditions', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_condition_post_type', 0 );
?>