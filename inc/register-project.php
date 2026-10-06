<?php

/**
 * Register the Project post type.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Register project CPT early so plugins can attach meta/REST on init.
 *
 * @return void
 */
function bdtrivas_register_project()
{
  $labels = array(
    'name' => 'Proyectos',
    'singular_name' => 'Proyecto',
    'archives' => 'Archivo de Proyectos',
    'attributes' => 'Atributos de Proyecto',
    'all_items' => 'Todos los Proyectos',
    'add_new_item' => 'Añadir nuevo Proyecto',
    'add_new' => 'Añadir Proyecto',
    'new_item' => 'Nuevo Proyecto',
    'edit_item' => 'Editar Proyecto',
    'update_item' => 'Actualizar Proyecto',
    'view_item' => 'Ver Proyecto',
    'view_items' => 'Ver Proyectos',
    'search_items' => 'Buscar Proyectos',
    'not_found' => 'No se encontraron Proyectos',
    'not_found_in_trash' => 'No se encontraron Proyectos en la papelera',
    'insert_into_item' => 'Insertar en Proyecto',
    'uploaded_to_this_item' => 'Subido a este proyecto',
    'items_list' => 'Lista de Proyectos',
    'items_list_navigation' => 'Navegación por lista de Proyectos',
    'filter_items_list' => 'Filtrar lista de Proyectos',
    'item_published' => esc_html('Proyecto Publicado'),
    'item_updated' => esc_html('Proyecto actualizado.'),
  );

  $args = array(
    'label' => 'Proyecto',
    'description' => 'Proyectos',
    'labels' => $labels,
    'supports' => array('title', 'editor', 'thumbnail'),
    'hierarchical' => false,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'rest_base' => 'projects',
    'menu_position' => 7,
    'menu_icon' => 'dashicons-portfolio',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'proyectos', 'with_front' => true),
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'query_var' => true,
    'capability_type' => 'post',
  );

  register_post_type('project', $args);
}
add_action('init', 'bdtrivas_register_project', 5);
