<?php
add_action('wp_enqueue_scripts', 'wplms_child_theme_enqueue_styles');
function wplms_child_theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


function exam_hub_child_enqueue_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('single', get_theme_file_uri('/css/single-course.css'), false, time(), 'all');
}
add_action('wp_enqueue_scripts', 'exam_hub_child_enqueue_styles');

function enqueue_custom_page_template_styles()
{
	if (is_page_template('PDF-Exam_Dump.php')) {
		wp_enqueue_style('custom-page-template', get_stylesheet_directory_uri() . '/css/custom-page-template.css', '1.0');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_page_template_styles');


function enqueue_custom_page_template_scripts()
{
	if (is_page_template('PDF-Exam_Dump.php')) {
		wp_enqueue_script('custom-page-template', get_stylesheet_directory_uri() . '/js/custom-page-template.js', array(), false, time(), true);
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_page_template_scripts');





/* Custom Post Type Start */

function pdf_exam_dump_create_posttype()
{
	register_post_type(
		'pdf_exam_dump',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('PDF Exam Dump'),
				'singular_name' => __('PDF Exam Dump')
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'pdf_exam_dump'),
		)
	);
}

// Hooking up our function to theme setup

add_action('init', 'pdf_exam_dump_create_posttype');

/* Custom Post Type End */


// Register Custom Taxonomy

function pdf_dump_custom_taxonomy()
{

	$labels = array(
		'name'                       => _x('PDF Exam Categories', 'PDF Exam Category General Name', 'wplms'),
		'singular_name'              => _x('PDF Exam Category', 'PDF Exam Category Singular Name', 'wplms'),
		'menu_name'                  => __('PDF Exam Category', 'wplms'),
		'all_items'                  => __('All Items', 'wplms'),
		'parent_item'                => __('Parent Item', 'wplms'),
		'parent_item_colon'          => __('Parent Item:', 'wplms'),
		'new_item_name'              => __('New Item Name', 'wplms'),
		'add_new_item'               => __('Add New Item', 'wplms'),
		'edit_item'                  => __('Edit Item', 'wplms'),
		'update_item'                => __('Update Item', 'wplms'),
		'view_item'                  => __('View Item', 'wplms'),
		'separate_items_with_commas' => __('Separate items with commas', 'wplms'),
		'add_or_remove_items'        => __('Add or remove items', 'wplms'),
		'choose_from_most_used'      => __('Choose from the most used', 'wplms'),
		'popular_items'              => __('Popular Items', 'wplms'),
		'search_items'               => __('Search Items', 'wplms'),
		'not_found'                  => __('Not Found', 'wplms'),
		'no_terms'                   => __('No items', 'wplms'),
		'items_list'                 => __('Items list', 'wplms'),
		'items_list_navigation'      => __('Items list navigation', 'wplms'),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy('pdf_exam_cat', array('pdf_exam_dump'), $args);
}
add_action('init', 'pdf_dump_custom_taxonomy', 0);
