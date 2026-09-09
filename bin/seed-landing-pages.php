<?php
/**
 * Seed landing page content from theme patterns.
 * Run: wp eval-file wp-content/themes/NewBdTr/bin/seed-landing-pages.php
 */

defined('ABSPATH') || die('No script kiddies please!');

$theme = wp_get_theme();
if (method_exists($theme, 'delete_pattern_cache')) {
  $theme->delete_pattern_cache();
}

$map = array(
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

$intros = array(
  'noticias' => '<!-- wp:paragraph {"textColor":"on-surface-variant"} --><p class="has-on-surface-variant-color has-text-color">Todas las noticias de la comunidad Intertiempo.</p><!-- /wp:paragraph -->',
  'eventos' => '<!-- wp:paragraph {"textColor":"on-surface-variant"} --><p class="has-on-surface-variant-color has-text-color">Próximos y recientes encuentros de la comunidad.</p><!-- /wp:paragraph -->',
  'fotos' => '<!-- wp:paragraph {"textColor":"on-surface-variant"} --><p class="has-on-surface-variant-color has-text-color">Galerías de la vida del Banco del Tiempo.</p><!-- /wp:paragraph -->',
  'bdtescolar' => '<!-- wp:paragraph {"textColor":"on-surface-variant"} --><p class="has-on-surface-variant-color has-text-color">Proyectos e historias del Banco del Tiempo Escolar.</p><!-- /wp:paragraph -->',
);

foreach ($map as $slug => $files) {
  $page = get_page_by_path($slug);
  if (!$page) {
    if (class_exists('WP_CLI')) {
      WP_CLI::warning('No existe la página ' . $slug);
    }
    continue;
  }
  $content = newbdtr_compose_patterns($files);
  wp_update_post(
    array(
      'ID' => $page->ID,
      'post_content' => $content,
    )
  );
  if (class_exists('WP_CLI')) {
    WP_CLI::success($slug . ' actualizada (' . strlen($content) . ' bytes).');
  }
}

foreach ($intros as $slug => $content) {
  $page = get_page_by_path($slug);
  if (!$page) {
    continue;
  }
  if (trim((string) $page->post_content) !== '') {
    continue;
  }
  wp_update_post(
    array(
      'ID' => $page->ID,
      'post_content' => $content,
    )
  );
  if (class_exists('WP_CLI')) {
    WP_CLI::success($slug . ' intro añadida.');
  }
}
