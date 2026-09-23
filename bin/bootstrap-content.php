<?php
/**
 * Create pages, reading settings and primary menu for NewBdTr.
 * Run: wp eval-file wp-content/themes/NewBdTr/bin/bootstrap-content.php
 */

defined('ABSPATH') || die('No script kiddies please!');

$wanted_slugs = array(
  'inicio',
  'como-funciona',
  'comunidad',
  'proyectos',
  'contacto',
  'blog',
  'noticias',
  'eventos',
  'fotos',
  'bdtescolar',
  'preguntas-frecuentes',
  'guia-de-uso',
);

$trashed_pages = get_posts(
  array(
    'post_type' => 'page',
    'post_status' => 'trash',
    'numberposts' => -1,
  )
);
foreach ($trashed_pages as $trashed) {
  $base = preg_replace('/__trashed$/', '', $trashed->post_name);
  if (in_array($base, $wanted_slugs, true)) {
    wp_delete_post($trashed->ID, true);
  }
}

function newbdtr_bootstrap_page($slug, $title, $content = '', $template = '')
{
  $existing = get_page_by_path($slug);
  if ($existing) {
    $update = array('ID' => $existing->ID);
    if ($existing->post_status !== 'publish') {
      $update['post_status'] = 'publish';
    }
    if ($template) {
      update_post_meta($existing->ID, '_wp_page_template', $template);
    }
    if ($content !== '' && trim((string) $existing->post_content) === '') {
      $update['post_content'] = $content;
    }
    if (count($update) > 1) {
      wp_update_post($update);
    }
    return (int) $existing->ID;
  }

  $id = wp_insert_post(
    array(
      'post_type' => 'page',
      'post_status' => 'publish',
      'post_title' => $title,
      'post_name' => $slug,
      'post_content' => $content,
    ),
    true
  );

  if (is_wp_error($id)) {
    if (class_exists('WP_CLI')) {
      WP_CLI::warning($id->get_error_message());
    }
    return 0;
  }

  if ($template) {
    update_post_meta($id, '_wp_page_template', $template);
  }

  return (int) $id;
}

$pages = array(
  'inicio' => array('Inicio', '', ''),
  'como-funciona' => array('Cómo funciona', '', 'page-como-funciona.php'),
  'comunidad' => array(
    'Comunidad',
    '<!-- wp:paragraph --><p>La comunidad de Intertiempo: vecinos que intercambian tiempo y construyen barrio.</p><!-- /wp:paragraph -->',
    '',
  ),
  'proyectos' => array(
    'Proyectos',
    '<!-- wp:paragraph --><p>Proyectos colectivos que mueven Rivas: Té con Lanas, Rivas Lee, Almohadas de Corazón, Huerto Vecinal y más.</p><!-- /wp:paragraph -->',
    '',
  ),
  'contacto' => array(
    'Contacto',
    '<!-- wp:paragraph --><p>Escríbenos a <a href="mailto:info@bancodeltiemporivas.org">info@bancodeltiemporivas.org</a> o llama al <a href="https://wa.me/34649732486">649 73 24 86</a>.</p><!-- /wp:paragraph -->',
    '',
  ),
  'blog' => array('Blog', '', ''),
  'noticias' => array(
    'Noticias',
    '<!-- wp:paragraph {"textColor":"on-surface-variant"} --><p class="has-on-surface-variant-color has-text-color">Todas las noticias de la comunidad Intertiempo.</p><!-- /wp:paragraph -->',
    'page-noticias.php',
  ),
  'eventos' => array(
    'Eventos',
    '<!-- wp:paragraph {"textColor":"on-surface-variant"} --><p class="has-on-surface-variant-color has-text-color">Próximos y recientes encuentros de la comunidad.</p><!-- /wp:paragraph -->',
    'page-eventos.php',
  ),
  'fotos' => array(
    'Fotos',
    '<!-- wp:paragraph {"textColor":"on-surface-variant"} --><p class="has-on-surface-variant-color has-text-color">Galerías de la vida del Banco del Tiempo.</p><!-- /wp:paragraph -->',
    'page-fotos.php',
  ),
  'bdtescolar' => array(
    'BdTescolar',
    '<!-- wp:paragraph {"textColor":"on-surface-variant"} --><p class="has-on-surface-variant-color has-text-color">Proyectos e historias del Banco del Tiempo Escolar.</p><!-- /wp:paragraph -->',
    'page-bdtescolar.php',
  ),
  'preguntas-frecuentes' => array('Preguntas frecuentes', '', ''),
  'guia-de-uso' => array('Guía de uso', '', ''),
);

$ids = array();
foreach ($pages as $slug => $data) {
  $ids[$slug] = newbdtr_bootstrap_page($slug, $data[0], $data[1], $data[2]);
}

$composed = array(
  'inicio' => array(
    'home-hero.php',
    'home-escolar.php',
    'home-services.php',
    'home-steps.php',
    'home-projects.php',
    'home-activity.php',
    'home-cta.php',
  ),
  'como-funciona' => array(
    'como-funciona-intro.php',
    'como-funciona-steps.php',
    'como-funciona-benefits.php',
    'como-funciona-cta.php',
  ),
);
foreach ($composed as $slug => $files) {
  if (empty($ids[$slug])) {
    continue;
  }
  $page = get_post($ids[$slug]);
  if ($page && trim((string) $page->post_content) === '') {
    wp_update_post(
      array(
        'ID' => $ids[$slug],
        'post_content' => newbdtr_compose_patterns($files),
      )
    );
  }
}

if (!empty($ids['inicio']) && !empty($ids['blog'])) {
  update_option('show_on_front', 'page');
  update_option('page_on_front', $ids['inicio']);
  update_option('page_for_posts', $ids['blog']);
}

$menu_name = 'Principal NewBdTr';
$menu = wp_get_nav_menu_object($menu_name);
if (!$menu) {
  $menu_id = wp_create_nav_menu($menu_name);
} else {
  $menu_id = (int) $menu->term_id;
  $old_items = wp_get_nav_menu_items($menu_id);
  if ($old_items) {
    foreach ($old_items as $item) {
      wp_delete_post($item->ID, true);
    }
  }
}

$mods = get_option('theme_mods_NewBdTr');
if (!is_array($mods)) {
  $mods = array();
}
if (!isset($mods['nav_menu_locations']) || !is_array($mods['nav_menu_locations'])) {
  $mods['nav_menu_locations'] = array();
}
$mods['nav_menu_locations']['primary'] = (int) $menu_id;
update_option('theme_mods_NewBdTr', $mods);
set_theme_mod('nav_menu_locations', $mods['nav_menu_locations']);

$top = array(
  array('inicio', 'Inicio'),
  array('como-funciona', 'Cómo funciona'),
  array('comunidad', 'Comunidad'),
  array('proyectos', 'Proyectos'),
);
$order = 1;
foreach ($top as $item) {
  wp_update_nav_menu_item(
    $menu_id,
    0,
    array(
      'menu-item-title' => $item[1],
      'menu-item-object' => 'page',
      'menu-item-object-id' => $ids[$item[0]],
      'menu-item-type' => 'post_type',
      'menu-item-status' => 'publish',
      'menu-item-position' => $order++,
    )
  );
}

$parent_id = wp_update_nav_menu_item(
  $menu_id,
  0,
  array(
    'menu-item-title' => 'Noticias y Eventos',
    'menu-item-url' => '#',
    'menu-item-type' => 'custom',
    'menu-item-status' => 'publish',
    'menu-item-position' => $order++,
  )
);

$children = array(
  array('noticias', 'Noticias'),
  array('eventos', 'Eventos'),
  array('bdtescolar', 'BdTescolar'),
  array('blog', 'Blog'),
);
foreach ($children as $item) {
  wp_update_nav_menu_item(
    $menu_id,
    0,
    array(
      'menu-item-title' => $item[1],
      'menu-item-object' => 'page',
      'menu-item-object-id' => $ids[$item[0]],
      'menu-item-type' => 'post_type',
      'menu-item-status' => 'publish',
      'menu-item-parent-id' => $parent_id,
      'menu-item-position' => $order++,
    )
  );
}

wp_update_nav_menu_item(
  $menu_id,
  0,
  array(
    'menu-item-title' => 'Contacto',
    'menu-item-object' => 'page',
    'menu-item-object-id' => $ids['contacto'],
    'menu-item-type' => 'post_type',
    'menu-item-status' => 'publish',
    'menu-item-position' => $order,
  )
);

flush_rewrite_rules();

if (class_exists('WP_CLI')) {
  WP_CLI::success('Páginas, lectura y menú principal listos.');
  foreach ($ids as $slug => $id) {
    WP_CLI::log($slug . ' => ' . $id);
  }
}
