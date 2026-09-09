<?php

/**
 * Register the Location post type.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Register location CPT early so plugins can attach meta/REST on init.
 *
 * @return void
 */
function bdtrivas_register_location()
{
  $labels = array(
    'name' => _x('Locations', 'Post Type General Name', 'bdtrivas'),
    'singular_name' => _x('Location', 'Post Type Singular Name', 'bdtrivas'),
    'archives' => __('Locations archives', 'bdtrivas'),
    'attributes' => __('Location attributes', 'bdtrivas'),
    'all_items' => __('All Locations', 'bdtrivas'),
    'add_new_item' => __('Add new Location', 'bdtrivas'),
    'add_new' => __('Add Location', 'bdtrivas'),
    'new_item' => __('New Location', 'bdtrivas'),
    'edit_item' => __('Edit Location', 'bdtrivas'),
    'update_item' => __('Update Location', 'bdtrivas'),
    'view_item' => __('View Location', 'bdtrivas'),
    'view_items' => __('View Locations', 'bdtrivas'),
    'search_items' => __('Search Locations', 'bdtrivas'),
    'not_found' => __('No Locations found', 'bdtrivas'),
    'not_found_in_trash' => __('No Locations found in trash', 'bdtrivas'),
    'insert_into_item' => __('Insert into Location', 'bdtrivas'),
    'uploaded_to_this_item' => __('Uploaded to this location', 'bdtrivas'),
    'items_list' => __('Locations list', 'bdtrivas'),
    'items_list_navigation' => __('Locations list navigation', 'bdtrivas'),
    'filter_items_list' => __('Filter Locations list', 'bdtrivas'),
    'item_published' => esc_html__('Location published', 'bdtrivas'),
    'item_updated' => esc_html__('Location updated.', 'bdtrivas'),
  );

  $args = array(
    'label' => __('Location', 'bdtrivas'),
    'description' => __('Locations', 'bdtrivas'),
    'labels' => $labels,
    'supports' => array(
      'title',
      'editor',
      'author',
      'thumbnail',
      'excerpt',
      'custom-fields',
    ),
    'hierarchical' => false,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'rest_base' => 'locations',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-location-alt',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'locations', 'with_front' => true),
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'query_var' => true,
    'capability_type' => 'post',
  );

  register_post_type('location', $args);
}
add_action('init', 'bdtrivas_register_location', 5);
