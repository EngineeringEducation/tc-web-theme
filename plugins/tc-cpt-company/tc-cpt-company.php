<?php
/*
Plugin Name: Custom Post Type: Company
Description: Add support for company types
*/

function create_posttype() {

  register_post_type( 'companies',
  // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Companies' ),
        'singular_name' => __( 'Company' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'companies'),
    )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

?>