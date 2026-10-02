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
    'name' => 'Noticias',
    'singular_name' => 'Noticia',
    'archives' => 'Archivo de Noticias',
    'attributes' => 'Atributos de Noticia',
    'all_items' => 'Todas las Noticias',
    'add_new_item' => 'Añadir nueva Noticia',
    'add_new' => 'Añadir Noticia',
    'new_item' => 'Nueva Noticia',
    'edit_item' => 'Editar Noticia',
    'update_item' => 'Actualizar Noticia',
    'view_item' => 'Ver Noticia',
    'view_items' => 'Ver Noticias',
    'search_items' => 'Buscar Noticias',
    'not_found' => 'No se encontraron Noticias',
    'not_found_in_trash' => 'No se encontraron Noticias en la papelera',
    'insert_into_item' => 'Insertar en Noticia',
    'uploaded_to_this_item' => 'Subido a esta noticia',
    'items_list' => 'Lista de Noticias',
    'items_list_navigation' => 'Navegación por lista de noticias',
    'filter_items_list' => 'Filtrar lista de Noticias',
    'item_published' => esc_html('Noticia Publicada'),
    'item_updated' => esc_html('Noticia actualizada.'),
  );

  $args = array(
    'label' => 'Noticia',
    'description' => 'Noticias',
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
    'name' => 'Temas',
    'singular_name' => 'Tema',
    'search_items' => 'Buscar Temas',
    'popular_items' => 'Temas populares',
    'all_items' => 'Todos los Temas',
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => 'Editar Temas',
    'update_item' => 'Actualizar Temas',
    'add_new_item' => 'Añadir Temas',
    'new_item_name' => 'Nuevo nombre de Tema',
    'separate_items_with_commas' => 'Separar Temas con comas',
    'add_or_remove_items' => 'Añadir o eliminar Temas',
    'choose_from_most_used' => 'Elija entre los Temas más usados',
    'back_to_items' => '&larr; Volver a Temas',
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
