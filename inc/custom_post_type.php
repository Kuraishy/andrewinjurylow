<?php
add_action( 'init', 'custom_post_type_datacreative' );
function custom_post_type_datacreative()
{
	//custom_post_type_practice_areas();
	custom_post_type_case_results();
	custom_post_type_testimonials();
}
function custom_post_type_case_results() {
  $labels = array(
    'name'               => _x( 'Case Result', 'post type general name' ),
    'singular_name'      => _x( 'Case Result', 'post type singular name' ),
    'add_new'            => _x( 'Add New Case Result', 'Case Result' ),
    'add_new_item'       => __( 'Add New Case Result' ),
    'new_item'           => __( 'New Case Result' ),
    'all_items'          => __( 'All Case Results' ),
    'view_item'          => __( 'View Case Result' ),
    'search_items'       => __( 'Search Case Results' ),
    'not_found'          => __( 'No Case Result found' ),
    'not_found_in_trash' => __( 'No Case Result found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Case Results'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => '',
    'public'        => true,
    'menu_position' => 6,
	'publicly_queryable' => false,
    'supports'      => array( 'title','editor','page-attributes' ),
  );
  register_post_type( 'case-result', $args ); 
}
function custom_post_type_testimonials() {
  $labels = array(
    'name'               => _x( 'Testimonial', 'post type general name' ),
    'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
    'add_new'            => _x( 'Add New Testimonial', 'Testimonial' ),
    'add_new_item'       => __( 'Add New Testimonial' ),
    'new_item'           => __( 'New Testimonial' ),
    'all_items'          => __( 'All Testimonial' ),
    'view_item'          => __( 'View Testimonial' ),
    'search_items'       => __( 'Search Testimonial' ),
    'not_found'          => __( 'No Testimonial found' ),
    'not_found_in_trash' => __( 'No Testimonial found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Testimonial'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => '',
    'public'        => true,
    'menu_position' => 7,
	'publicly_queryable' => false,
    'supports'      => array( 'title','editor','page-attributes' ),
  );
  register_post_type( 'testimonial', $args ); 
}

?>
