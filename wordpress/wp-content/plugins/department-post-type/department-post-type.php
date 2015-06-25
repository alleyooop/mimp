<?php
/*Plugin Name: MIMP Department Post Type
Description: This plugin registers the 'Department' post type for MIMP. DO NOT DELETE
Version: 0.1
License: MIT
Author: Andrew Duckworth
*/


// Register Custom Post Type
function custom_department_post_type() {

	$labels = array(
		'name'                => _x( 'Departments', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Department', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Departments', 'text_domain' ),
		'name_admin_bar'      => __( 'Departments', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Department:', 'text_domain' ),
		'all_items'           => __( 'All Departments', 'text_domain' ),
		'add_new_item'        => __( 'Add New Department', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Department', 'text_domain' ),
		'edit_item'           => __( 'Edit Department', 'text_domain' ),
		'update_item'         => __( 'Update Department', 'text_domain' ),
		'view_item'           => __( 'View Department', 'text_domain' ),
		'search_items'        => __( 'Search Department', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'departments', 'text_domain' ),
		'description'         => __( 'Individual Department of MIMP', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes'),
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
	register_post_type( 'departments', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_department_post_type', 0 );
?>