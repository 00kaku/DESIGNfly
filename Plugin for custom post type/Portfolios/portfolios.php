<?php
/**
 * Plugin Name: Portfolios
 * Description: Declares a plugin that will create a custom post type displaying portfolios.
 * Version: 1.0
 * Author: Akash Sharma
 * Author URI: http://github.com/00kaku
 * License: GPLv2
 *
 *  @package DESIIGNfly
 */

/**
 * Undocumented function
 *
 * @return void
 */
function create_portfolios() {
	register_post_type(
		'portfolios',
		array(
			'labels'        => array(
				'name'               => 'Portfolios',
				'singular_name'      => 'Portfolio',
				'add_new'            => 'Add New',
				'add_new_item'       => 'Add New Portfolio',
				'edit'               => 'Edit',
				'edit_item'          => 'Edit Portfolio',
				'new_item'           => 'New Portfolio',
				'view'               => 'View',
				'view_item'          => 'View Portfolio',
				'search_items'       => 'Search Portfolios',
				'not_found'          => 'No Portfolios found',
				'not_found_in_trash' => 'No Portfolios found in Trash',
			),
			'public'        => true,
			'menu_position' => 6,
			'supports'      => array( 'title', 'thumbnail', 'custom-fields' ),
			'taxonomies'    => array( '' ),
			'has_archive'   => true,
		)
	);
}

add_action( 'init', 'create_portfolios' );
