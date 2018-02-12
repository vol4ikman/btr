<?php
/*** Register new Custom Post types & Taxonomies here ***/
// Register Custom Post Type
function team_post_type() {

	$labels = array(
		'name'                  => _x( 'אנשי צוות', 'Post Type General Name', 'btrvalue' ),
		'singular_name'         => _x( 'אנשי צוות', 'Post Type Singular Name', 'btrvalue' ),
		'menu_name'             => __( 'אנשי צוות', 'btrvalue' ),
		'name_admin_bar'        => __( 'אנשי צוות', 'btrvalue' ),
		'archives'              => __( 'Item Archives', 'btrvalue' ),
		'attributes'            => __( 'Item Attributes', 'btrvalue' ),
		'parent_item_colon'     => __( 'Parent Item:', 'btrvalue' ),
		'all_items'             => __( 'All Items', 'btrvalue' ),
		'add_new_item'          => __( 'Add New Item', 'btrvalue' ),
		'add_new'               => __( 'Add New', 'btrvalue' ),
		'new_item'              => __( 'New Item', 'btrvalue' ),
		'edit_item'             => __( 'Edit Item', 'btrvalue' ),
		'update_item'           => __( 'Update Item', 'btrvalue' ),
		'view_item'             => __( 'View Item', 'btrvalue' ),
		'view_items'            => __( 'View Items', 'btrvalue' ),
		'search_items'          => __( 'Search Item', 'btrvalue' ),
		'not_found'             => __( 'Not found', 'btrvalue' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'btrvalue' ),
		'featured_image'        => __( 'Featured Image', 'btrvalue' ),
		'set_featured_image'    => __( 'Set featured image', 'btrvalue' ),
		'remove_featured_image' => __( 'Remove featured image', 'btrvalue' ),
		'use_featured_image'    => __( 'Use as featured image', 'btrvalue' ),
		'insert_into_item'      => __( 'Insert into item', 'btrvalue' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'btrvalue' ),
		'items_list'            => __( 'Items list', 'btrvalue' ),
		'items_list_navigation' => __( 'Items list navigation', 'btrvalue' ),
		'filter_items_list'     => __( 'Filter items list', 'btrvalue' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'btrvalue' ),
		'description'           => __( 'Team', 'btrvalue' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'team_post_type', 0 );
