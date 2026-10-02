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
    'name' => esc_html('Galerías'),
    'singular_name' => esc_html('Galería'),
    'all_items' => esc_html('Todas las Galerías'),
    'add_new_item' => esc_html('Añadir nueva galería'),
    'add_new' => esc_html('Añadir Galería'),
    'new_item' => esc_html('Nueva Galería'),
    'edit_item' => esc_html('Editar Galería'),
    'update_item' => 'Actualizar Galería',
    'view_item' => esc_html('Ver Galería'),
    'view_items' => esc_html('Ver Galerías'),
    'search_items' => esc_html('Buscar Galerías'),
    'not_found' => esc_html('No se encontraron Galerías'),
    'not_found_in_trash' => esc_html('No se encontraron Galerías en la papelera'),
    'featured_image' => esc_html('Imagen destacada'),
    'set_featured_image' => esc_html('Establecer Imagen destacada'),
    'remove_featured_image' => esc_html('Eliminar Imagen destacada'),
    'insert_into_item' => esc_html('Insertar en Galería'),
    'uploaded_to_this_item' => esc_html('Subir a esta Galería'),
    'items_list' => esc_html('Lista de Galerías'),
    'items_list_navigation' => esc_html('Navegación por lista de Galerías'),
    'filter_items_list' => esc_html('Filtrar lista de Galerías'),
    'item_published' => esc_html('Galería Publicada'),
    'item_updated' => esc_html('Galería actualizada.'),
  );

  $args = array(
    'label' => esc_html('Galerías'),
    'description' => esc_html('Tipo de entrada para Galerías'),
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
