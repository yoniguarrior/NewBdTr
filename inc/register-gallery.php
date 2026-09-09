<?php

/**
 * Register the Gallery post type.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Register gallery CPT early so plugins can attach meta/REST on init.
 *
 * @return void
 */
function bdtrivas_register_gallery()
{
  $labels = array(
    'name' => esc_html__('Galleries', 'bdtrivas'),
    'singular_name' => esc_html__('Gallery', 'bdtrivas'),
    'all_items' => esc_html__('All Galleries', 'bdtrivas'),
    'add_new_item' => esc_html__('Add new Gallery', 'bdtrivas'),
    'add_new' => esc_html__('Add Gallery', 'bdtrivas'),
    'new_item' => esc_html__('New Gallery', 'bdtrivas'),
    'edit_item' => esc_html__('Edit Gallery', 'bdtrivas'),
    'update_item' => __('Update Gallery', 'bdtrivas'),
    'view_item' => esc_html__('View Gallery', 'bdtrivas'),
    'view_items' => esc_html__('View Galleries', 'bdtrivas'),
    'search_items' => esc_html__('Search Galleries', 'bdtrivas'),
    'not_found' => esc_html__('No Galleries found', 'bdtrivas'),
    'not_found_in_trash' => esc_html__('No Galleries found in trash', 'bdtrivas'),
    'featured_image' => esc_html__('Featured image', 'bdtrivas'),
    'set_featured_image' => esc_html__('Set Featured image', 'bdtrivas'),
    'remove_featured_image' => esc_html__('Remove Featured image', 'bdtrivas'),
    'insert_into_item' => esc_html__('Insert into Gallery', 'bdtrivas'),
    'uploaded_to_this_item' => esc_html__('Upload to this Gallery', 'bdtrivas'),
    'items_list' => esc_html__('Galleries list', 'bdtrivas'),
    'items_list_navigation' => esc_html__('Galleries list navigation', 'bdtrivas'),
    'filter_items_list' => esc_html__('Filter Galleries list', 'bdtrivas'),
    'item_published' => esc_html__('Gallery published', 'bdtrivas'),
    'item_updated' => esc_html__('Gallery updated.', 'bdtrivas'),
  );

  $args = array(
    'label' => esc_html__('Galleries', 'bdtrivas'),
    'description' => esc_html__('Post type for galleries', 'bdtrivas'),
    'labels' => $labels,
    'supports' => array('title', 'editor', 'thumbnail'),
    'hierarchical' => false,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_rest' => true,
    'rest_base' => 'galleries',
    'menu_position' => 6,
    'menu_icon' => 'dashicons-images-alt2',
    'rewrite' => array('slug' => 'galleries', 'with_front' => true),
    'can_export' => true,
    'has_archive' => false,
    'exclude_from_search' => false,
    'query_var' => true,
    'capability_type' => 'post',
  );

  register_post_type('gallery', $args);
}
add_action('init', 'bdtrivas_register_gallery', 5);
