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
    'content-template.php' => 'content',
    'content-template' => 'content',
    'management-template.php' => 'management',
    'management-template' => 'management',
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
 * Enforce login / capability before the block canvas renders.
 */
function newbdtr_sbdtpq_enforce_access()
{
  $level = newbdtr_sbdtpq_current_access_level();
  if ($level === '' || $level === 'front') {
    return;
  }

  $ok = false;
  if ($level === 'logged') {
    $ok = is_user_logged_in();
  } elseif ($level === 'content') {
    $ok = current_user_can('moderate_content');
  } elseif ($level === 'management') {
    $ok = current_user_can('manage_system');
  }

  if ($ok) {
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
    'content-template.php' => 'content-template',
    'management-template.php' => 'management-template',
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
