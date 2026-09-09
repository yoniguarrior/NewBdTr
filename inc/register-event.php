<?php

/**
 * Register the Event post type and ev-category taxonomy.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Register event CPT and ev-category taxonomy early so plugins can attach meta/REST on init.
 *
 * @return void
 */
function bdtrivas_register_event_and_category()
{
  $labels = array(
    'name' => _x('Events', 'Post Type General Name', 'bdtrivas'),
    'singular_name' => _x('Event', 'Post Type Singular Name', 'bdtrivas'),
    'archives' => __('Events archives', 'bdtrivas'),
    'attributes' => __('Event attributes', 'bdtrivas'),
    'all_items' => __('All Events', 'bdtrivas'),
    'add_new_item' => __('Add new Event', 'bdtrivas'),
    'add_new' => __('Add Event', 'bdtrivas'),
    'new_item' => __('New Event', 'bdtrivas'),
    'edit_item' => __('Edit Event', 'bdtrivas'),
    'update_item' => __('Update Event', 'bdtrivas'),
    'view_item' => __('View Event', 'bdtrivas'),
    'view_items' => __('View Events', 'bdtrivas'),
    'search_items' => __('Search Events', 'bdtrivas'),
    'not_found' => __('No Events found', 'bdtrivas'),
    'not_found_in_trash' => __('No Events found in trash', 'bdtrivas'),
    'insert_into_item' => __('Insert into Event', 'bdtrivas'),
    'uploaded_to_this_item' => __('Uploaded to this event', 'bdtrivas'),
    'items_list' => __('Events list', 'bdtrivas'),
    'items_list_navigation' => __('Events list navigation', 'bdtrivas'),
    'filter_items_list' => __('Filter Events list', 'bdtrivas'),
    'item_published' => esc_html__('Event published', 'bdtrivas'),
    'item_updated' => esc_html__('Event updated.', 'bdtrivas'),
  );

  $args = array(
    'label' => __('Event', 'bdtrivas'),
    'description' => __('Events', 'bdtrivas'),
    'labels' => $labels,
    'supports' => array(
      'title',
      'editor',
      'author',
      'thumbnail',
      'excerpt',
      'custom-fields',
    ),
    'taxonomies' => array('ev-category'),
    'hierarchical' => false,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'rest_base' => 'events',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-calendar-alt',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'events', 'with_front' => true),
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'query_var' => true,
    'capability_type' => 'post',
  );

  register_post_type('event', $args);

  $category_labels = array(
    'name' => _x('Categories', 'taxonomy general name', 'bdtrivas'),
    'singular_name' => _x('Category', 'taxonomy singular name', 'bdtrivas'),
    'search_items' => __('Search Categories', 'bdtrivas'),
    'popular_items' => __('Popular Categories', 'bdtrivas'),
    'all_items' => __('All the Categories', 'bdtrivas'),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __('Edit Categories', 'bdtrivas'),
    'update_item' => __('Update Categories', 'bdtrivas'),
    'add_new_item' => __('Add Categories', 'bdtrivas'),
    'new_item_name' => __('New Category name', 'bdtrivas'),
    'separate_items_with_commas' => __('Separate Categories with commas', 'bdtrivas'),
    'add_or_remove_items' => __('Add or remove Categories', 'bdtrivas'),
    'choose_from_most_used' => __('Choose from most used Categories', 'bdtrivas'),
    'back_to_items' => __('&larr; Back to Categories', 'bdtrivas'),
  );

  register_taxonomy(
    'ev-category',
    'event',
    array(
      'labels' => $category_labels,
      'hierarchical' => true,
      'show_ui' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rest_base' => 'ev-categories',
    )
  );
}
add_action('init', 'bdtrivas_register_event_and_category', 5);
