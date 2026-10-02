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
    'name' => 'Ubicaciones',
    'singular_name' => 'Ubicación',
    'archives' => 'Archivo de Ubicaciones',
    'attributes' => 'Atributos de Ubicación',
    'all_items' => 'Todas las Ubicaciones',
    'add_new_item' => 'Añadir nueva Ubicación',
    'add_new' => 'Añadir Ubicación',
    'new_item' => 'Nueva Ubicación',
    'edit_item' => 'Editar Ubicación',
    'update_item' => 'Actualizar Ubicación',
    'view_item' => 'Ver Ubicación',
    'view_items' => 'Ver Ubicaciones',
    'search_items' => 'Buscar Ubicaciones',
    'not_found' => 'No se encontraron ubicaciones',
    'not_found_in_trash' => 'No se encontraron Ubicaciones en la papelera',
    'insert_into_item' => 'Insertar en Ubicación',
    'uploaded_to_this_item' => 'Subido a esta ubicación',
    'items_list' => 'Lista de Ubicaciones',
    'items_list_navigation' => 'Navegación por lista de Ubicaciones',
    'filter_items_list' => 'Filtrar lista de Ubicaciones',
    'item_published' => esc_html('Ubicación Publicada'),
    'item_updated' => esc_html('Ubicación actualizada.'),
  );

  $args = array(
    'label' => 'Ubicación',
    'description' => 'Ubicaciones',
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
