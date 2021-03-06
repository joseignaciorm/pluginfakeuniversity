<?php 


function university_post_types() {
  // Campus post type
  register_post_type('campus', array(
    //'capability_type' => 'campus',
    //'map_meta_cap' => true,
    'has_archive' => true,
    'public' => true,
    'rewrite' => array('slug', 'campuses'),
    'labels' => array(
      'name' => 'Campuses',
      'add_new_item'  => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus',
    ),
    'menu_icon' => 'dashicons-location-alt',
    'supports' => array(
      'title',
      'editor',
      'excerpt',
    ),
  ));

  // Event post type
  register_post_type('event', array(
      //'capability_type' => 'event', // Activa permisos de capabilities
      //'map_meta_cap' => true, // Indica a WP que conceda permisos a CPT events para editar...
      'has_archive' => true,
      'public' => true,
      'rewrite' => array('slug', 'events'),
      'labels' => array(
        'name' => 'Events',
        'add_new_item'  => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event',
      ),
      'menu_icon' => 'dashicons-calendar',
      'supports' => array(
        'title',
        'editor',
        'excerpt',
      ),
  ));


  // Program post type
  register_post_type('program', array(
      'has_archive' => true,
      'public' => true,
      'rewrite' => array('slug', 'programs'),
      'labels' => array(
        'name' => 'Programs',
        'add_new_item'  => 'Add New Program',
        'edit_item' => 'Edit Program',
        'all_items' => 'All Programs',
        'singular_name' => 'Program',
      ),
      'menu_icon' => 'dashicons-awards',
      'supports' => array(
        'title',
        //'editor',
        'excerpt',
      ),
  ));

  // Professor post type
  register_post_type('professor', array(
      'public' => true,
      'labels' => array(
        'name' => 'Professors',
        'add_new_item'  => 'Add New Professor',
        'edit_item' => 'Edit Professor',
        'all_items' => 'All Professors',
        'singular_name' => 'Professor',
      ),
      'menu_icon' => 'dashicons-welcome-learn-more',
      'show_in_rest' => true,
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      ),
  ));
}
add_action('init', 'university_post_types');

?>