<?php
/**
 * Access levels for sbdtpq block templates.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Map page template slug → access level.
 *
 * @return array<string, string>
 */
function newbdtr_sbdtpq_template_levels()
{
  return array(
    'front-template.php' => 'front',
    'front-template' => 'front',
    'logged-template.php' => 'logged',
    'logged-template' => 'logged',
  );
}

/**
 * Access level for the current page template, or empty.
 *
 * @return string
 */
function newbdtr_sbdtpq_current_access_level()
{
  if (!is_page()) {
    return '';
  }

  $slug = (string) get_page_template_slug();
  $map = newbdtr_sbdtpq_template_levels();

  return isset($map[$slug]) ? $map[$slug] : '';
}

/**
 * Send guests to the login screen when the page requires a session.
 *
 * Capability checks for a specific page stay in the plugin. Logged-in
 * visitors continue and the logged template is rendered.
 */
function newbdtr_sbdtpq_enforce_access()
{
  $level = newbdtr_sbdtpq_current_access_level();
  if ($level === '' || $level === 'front' || is_user_logged_in()) {
    return;
  }

  wp_safe_redirect(wp_login_url(get_permalink()));
  exit;
}
add_action('template_redirect', 'newbdtr_sbdtpq_enforce_access', 9);

/**
 * Point existing pages at the HTML custom templates (drop .php suffix).
 */
function newbdtr_migrate_sbdtpq_page_templates()
{
  if (get_option('newbdtr_sbdtpq_templates_migrated') === '1') {
    return;
  }

  $map = array(
    'front-template.php' => 'front-template',
    'logged-template.php' => 'logged-template',
  );

  foreach ($map as $old => $new) {
    $pages = get_posts(
      array(
        'post_type' => 'page',
        'post_status' => 'any',
        'numberposts' => -1,
        'meta_key' => '_wp_page_template',
        'meta_value' => $old,
      )
    );
    foreach ($pages as $page) {
      update_post_meta($page->ID, '_wp_page_template', $new);
    }
  }

  update_option('newbdtr_sbdtpq_templates_migrated', '1');

  $theme = wp_get_theme();
  if (method_exists($theme, 'delete_pattern_cache')) {
    $theme->delete_pattern_cache();
  }
}
add_action('init', 'newbdtr_migrate_sbdtpq_page_templates');

/**
 * App bar entries for the logged-in user.
 *
 * Administrators and Gestora BdT see every item. Moderadora BdT sees content
 * tools. Any other logged-in member sees search, ticket and account.
 *
 * @return array<int, array{label: string, url: string, icon: string}>
 */
function newbdtr_appbar_items()
{
  if (!is_user_logged_in()) {
    return array();
  }

  $tier = 'user';
  if (current_user_can('manage_system') || current_user_can('manage_options')) {
    $tier = 'manager';
  } elseif (current_user_can('moderate_content')) {
    $tier = 'moderator';
  }

  $visible = array(
    'manager' => array('manager', 'moderator', 'user'),
    'moderator' => array('moderator', 'user'),
    'user' => array('user'),
  );

  $entries = array(
    array(
      'label' => 'Informes',
      'url' => newbdtr_page_url('reports'),
      'icon' => 'dashicons-chart-area',
      'tier' => 'manager',
    ),
    array(
      'label' => 'Administración',
      'url' => newbdtr_page_url('management'),
      'icon' => 'dashicons-admin-generic',
      'tier' => 'manager',
    ),
    array(
      'label' => 'Contenido',
      'url' => newbdtr_page_url('content'),
      'icon' => 'dashicons-edit-large',
      'tier' => 'moderator',
    ),
    array(
      'label' => 'Buscar',
      'url' => newbdtr_page_url('search'),
      'icon' => 'dashicons-search',
      'tier' => 'user',
    ),
    array(
      'label' => 'Talón',
      'url' => newbdtr_page_url('ticket'),
      'icon' => 'dashicons-feedback',
      'tier' => 'user',
    ),
    array(
      'label' => 'Mi cuenta',
      'url' => newbdtr_page_url('profile'),
      'icon' => 'dashicons-admin-users',
      'tier' => 'user',
    ),
  );

  $items = array();
  foreach ($entries as $entry) {
    if (!in_array($entry['tier'], $visible[$tier], true)) {
      continue;
    }
    $items[] = array(
      'label' => $entry['label'],
      'url' => $entry['url'],
      'icon' => $entry['icon'],
    );
  }

  $items[] = array(
    'label' => 'Salir',
    'url' => wp_logout_url(home_url('/')),
    'icon' => 'dashicons-exit',
  );

  return $items;
}
