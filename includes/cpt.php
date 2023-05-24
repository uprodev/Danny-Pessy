<?php
if (!defined('ABSPATH')) {
  exit;
}

add_action('init', 'my_custom_posts_taxonomies');
function my_custom_posts_taxonomies()
{
  register_post_type('events', array(
    'labels' => array(
      'name' => __('Events', 'danny'),
      'singular_name' => __('Events', 'danny'),
      'add_new' => __('Add Event', 'danny'),
      'add_new_item' => __('Add Event', 'danny'),
      'edit_item' => __('Edit Event', 'danny'),
      'new_item' => __('New Event', 'danny'),
      'view_item' => __('View Event', 'danny'),
      'search_items' => __('Find Event', 'danny'),
      'not_found' => __('Events not found', 'danny'),
      'not_found_in_trash' => __('No Events in trash', 'danny'),
      'parent_item' => __('Parent Event', 'danny'),
      'parent_item_colon' => __('Parent Event:', 'danny'),
      'menu_name' => __('Events', 'danny'),
      'back_to_items' => __('Go to Events', 'danny'),
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'events', 'with_front' => false, 'pages' => true, 'feeds' => false, 'feed' => false),
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes', 'revisions')
  ));
  register_post_type('reviews', array(
    'labels' => array(
      'name' => __('Reviews', 'danny'),
      'singular_name' => __('Reviews', 'danny'),
      'add_new' => __('Add Review', 'danny'),
      'add_new_item' => __('Add Review', 'danny'),
      'edit_item' => __('Edit Review', 'danny'),
      'new_item' => __('New Review', 'danny'),
      'view_item' => __('View Review', 'danny'),
      'search_items' => __('Find Review', 'danny'),
      'not_found' => __('Reviews not found', 'danny'),
      'not_found_in_trash' => __('No Reviews in trash', 'danny'),
      'parent_item' => __('Parent Review', 'danny'),
      'parent_item_colon' => __('Parent Review:', 'danny'),
      'menu_name' => __('Reviews', 'danny'),
      'back_to_items' => __('Go to Reviews', 'danny'),
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'reviews', 'with_front' => true, 'pages' => true, 'feeds' => false, 'feed' => false),
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes', 'revisions')
  ));

  register_post_type('faq', array(
    'labels' => array(
      'name' => __('FAQ', 'danny'),
      'singular_name' => __('FAQ', 'danny'),
      'add_new' => __('Add FAQ', 'danny'),
      'add_new_item' => __('Add FAQ', 'danny'),
      'edit_item' => __('Edit FAQ', 'danny'),
      'new_item' => __('New FAQ', 'danny'),
      'view_item' => __('View FAQ', 'danny'),
      'search_items' => __('Find FAQ', 'danny'),
      'not_found' => __('FAQ not found', 'danny'),
      'not_found_in_trash' => __('No FAQ in trash', 'danny'),
      'parent_item' => __('Parent FAQ', 'danny'),
      'parent_item_colon' => __('Parent FAQ:', 'danny'),
      'menu_name' => __('FAQ', 'danny'),
      'back_to_items' => __('Go to FAQ', 'danny'),
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'faq', 'with_front' => true, 'pages' => true, 'feeds' => false, 'feed' => false),
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes', 'revisions')
  ));
}
