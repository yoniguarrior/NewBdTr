<?php

/**
 * Register the Notice post type and Topic taxonomy.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Register notice CPT and topic taxonomy early so plugins can attach meta/REST on init.
 *
 * @return void
 */
function bdtrivas_register_notice_and_topic()
{
  $labels = array(
    'name' => _x('Notices', 'Post Type General Name', 'bdtrivas'),
    'singular_name' => _x('Notice', 'Post Type Singular Name', 'bdtrivas'),
    'archives' => __('Notices archives', 'bdtrivas'),
    'attributes' => __('Notice attributes', 'bdtrivas'),
    'all_items' => __('All Notices', 'bdtrivas'),
    'add_new_item' => __('Add new Notice', 'bdtrivas'),
    'add_new' => __('Add Notice', 'bdtrivas'),
    'new_item' => __('New Notice', 'bdtrivas'),
    'edit_item' => __('Edit Notice', 'bdtrivas'),
    'update_item' => __('Update Notice', 'bdtrivas'),
    'view_item' => __('View Notice', 'bdtrivas'),
    'view_items' => __('View Notices', 'bdtrivas'),
    'search_items' => __('Search Notices', 'bdtrivas'),
    'not_found' => __('No Notices found', 'bdtrivas'),
    'not_found_in_trash' => __('No Notices found in trash', 'bdtrivas'),
    'insert_into_item' => __('Insert into Notice', 'bdtrivas'),
    'uploaded_to_this_item' => __('Uploaded to this Notices', 'bdtrivas'),
    'items_list' => __('Notices list', 'bdtrivas'),
    'items_list_navigation' => __('Notices list navigation', 'bdtrivas'),
    'filter_items_list' => __('Filter Notices list', 'bdtrivas'),
    'item_published' => esc_html__('Notice published', 'bdtrivas'),
    'item_updated' => esc_html__('Notice updated.', 'bdtrivas'),
  );

  $args = array(
    'label' => __('Notice', 'bdtrivas'),
    'description' => __('Notice pieces', 'bdtrivas'),
    'labels' => $labels,
    'supports' => array(
      'title',
      'editor',
      'author',
      'thumbnail',
      'excerpt',
      'custom-fields',
    ),
    'taxonomies' => array('topic'),
    'hierarchical' => false,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'rest_base' => 'notices',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-megaphone',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'notices', 'with_front' => true),
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'query_var' => true,
    'capability_type' => 'post',
  );

  register_post_type('notice', $args);

  $topic_labels = array(
    'name' => _x('Topics', 'taxonomy general name', 'bdtrivas'),
    'singular_name' => _x('Topic', 'taxonomy singular name', 'bdtrivas'),
    'search_items' => __('Search Topics', 'bdtrivas'),
    'popular_items' => __('Popular Topics', 'bdtrivas'),
    'all_items' => __('All the Topics', 'bdtrivas'),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __('Edit Topics', 'bdtrivas'),
    'update_item' => __('Update Topics', 'bdtrivas'),
    'add_new_item' => __('Add Topics', 'bdtrivas'),
    'new_item_name' => __('New Topic name', 'bdtrivas'),
    'separate_items_with_commas' => __('Separate Topics with commas', 'bdtrivas'),
    'add_or_remove_items' => __('Add or remove Topics', 'bdtrivas'),
    'choose_from_most_used' => __('Choose from most used Topics', 'bdtrivas'),
    'back_to_items' => __('&larr; Back to Topics', 'bdtrivas'),
  );

  register_taxonomy(
    'topic',
    'notice',
    array(
      'labels' => $topic_labels,
      'hierarchical' => true,
      'show_ui' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rest_base' => 'topics',
    )
  );
}
add_action('init', 'bdtrivas_register_notice_and_topic', 5);
