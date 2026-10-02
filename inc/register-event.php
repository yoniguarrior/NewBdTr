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
    'name' => 'Eventos',
    'singular_name' => 'Evento',
    'archives' => 'Archivo de Eventos',
    'attributes' => 'Atributos de Evento',
    'all_items' => 'Todos los Eventos',
    'add_new_item' => 'Añadir nuevo Evento',
    'add_new' => 'Añadir Evento',
    'new_item' => 'Nuevo Evento',
    'edit_item' => 'Editar Evento',
    'update_item' => 'Actualizar Evento',
    'view_item' => 'Ver Evento',
    'view_items' => 'Ver Eventos',
    'search_items' => 'Buscar Eventos',
    'not_found' => 'No se encontraron Eventos',
    'not_found_in_trash' => 'No se encontraron Eventos en la papelera',
    'insert_into_item' => 'Insertar en Evento',
    'uploaded_to_this_item' => 'Subido a este evento',
    'items_list' => 'Lista de Eventos',
    'items_list_navigation' => 'Navegación por lista de eventos',
    'filter_items_list' => 'Filtrar lista de Eventos',
    'item_published' => esc_html('Evento Publicado'),
    'item_updated' => esc_html('Evento actualizado.'),
  );

  $args = array(
    'label' => 'Evento',
    'description' => 'Eventos',
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
    'name' => 'Categorías',
    'singular_name' => 'Categoría',
    'search_items' => 'Buscar Categorías',
    'popular_items' => 'Categorías populares',
    'all_items' => 'Todas las Categorías',
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => 'Editar Categorías',
    'update_item' => 'Actualizar Categorías',
    'add_new_item' => 'Añadir Categorías',
    'new_item_name' => 'Nuevo nombre de Categoría',
    'separate_items_with_commas' => 'Separar Categorías con comas',
    'add_or_remove_items' => 'Añadir o eliminar Categorías',
    'choose_from_most_used' => 'Elija entre las Categorías más usadas',
    'back_to_items' => '&larr; Volver a Categorías',
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
