<?php
/**
 * Custom functions
 */

//Services Custom Post Type

function services_posttype() {

// Set UI labels for Services Custom Post Type
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name'),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name'),
		'menu_name'           => __( 'Services'),
		'all_items'           => __( 'All Services'),
		'view_item'           => __( 'View Service'),
		'add_new_item'        => __( 'Add New Service'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Service'),
		'update_item'         => __( 'Update Service'),
		'search_items'        => __( 'Search Service'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
	);
	
// Set other options for Services Custom Post Type
	
	$args = array(
		'label'               => __( 'services' ),
		'description'         => __( 'New Directions Services'),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions',),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon' => get_stylesheet_directory_uri() . '/assets/img/services.png',
			);
	
	// Registering Services
	register_post_type( 'services', $args );
	flush_rewrite_rules();

}

add_action( 'init', 'services_posttype', 0 );

//Featured Image Column in Admin

// GET FEATURED IMAGE

add_image_size('featured_preview', 55, 55, true);

function ST4_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}

function ST4_columns_head($defaults) {
    $defaults['featured_image'] = 'Featured Image';
    return $defaults;
}
 
// SHOW THE FEATURED IMAGE
function ST4_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = ST4_get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" />';
        }

        else {
        	//No Featured Image Show this default image
        	echo '<img src="' . get_stylesheet_directory_uri() . '/assets/img/mark_thumb.jpg" />';
        }
    }
}

add_filter('manage_posts_columns', 'ST4_columns_head');
add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);

//Make stupid column widths pretty

add_action('admin_head', 'pretty_admin_columns');

function pretty_admin_columns() {
    echo '<style type="text/css">';
    echo '.column-featured_image {width:120px; text-align:center}';
    echo '</style>';
}

/**
* Fix nav menu active classes for custom post types
*/
function roots_cpt_active_menu($menu) {
if ('services' === get_post_type()) {
$menu = str_replace('active', '', $menu);
$menu = str_replace('menu-services', 'menu-services active', $menu);
}
if ('base_portfolio' === get_post_type()) {
$menu = str_replace('active', '', $menu);
$menu = str_replace('menu-portfolio', 'menu-portfolio active', $menu);
}
return $menu;
}
add_filter('nav_menu_css_class', 'roots_cpt_active_menu', 400);

