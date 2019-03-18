<?php
/**
* Create custom post types.
*/
add_action('init', 'create_posttype');

function create_posttype()
{
  register_post_type('testimonials',
    array(
      'supports' => array('title', 'editor'),
      'labels' => array(
        'name' => __('Testimonials'),
        'singular_name' => __('Testimonial')
      ),
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-format-quote',
      'rewrite' => array('slug' => 'testimonials'),
      )
  );
  register_post_type('logo',
    array(
      'supports' => array('title', 'editor'),
      'labels' => array(
        'name' => __('Logo'),
        'singular_name' => __('Logo')
      ),
      'public' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-images-alt2',
      'rewrite' => array('slug' => 'logo'),
      )
  );
  register_post_type('events',
  array(
    'supports' => array('title', 'editor', 'excerpt'),
    'labels' => array(
      'name' => __('Events'),
      'singular_name' => __('Events')
    ),
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-format-quote',
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    )
);
}
