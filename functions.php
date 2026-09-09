<?php

/**
 * New BdT Rivas theme functions.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

require_once get_stylesheet_directory() . '/inc/helpers.php';
require_once get_stylesheet_directory() . '/inc/access.php';
require_once get_stylesheet_directory() . '/inc/register-notice.php';
require_once get_stylesheet_directory() . '/inc/register-event.php';
require_once get_stylesheet_directory() . '/inc/register-location.php';
require_once get_stylesheet_directory() . '/inc/register-gallery.php';

/**
 * Theme setup.
 */
function newbdtr_setup()
{
  load_theme_textdomain('bdtrivas', get_stylesheet_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
  add_editor_style(
    array(
      'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap',
      'assets/css/theme.css',
    )
  );
  register_nav_menus(
    array(
      'primary' => __('Menú principal', 'bdtrivas'),
      'footer' => __('Menú pie', 'bdtrivas'),
    )
  );
}
add_action('after_setup_theme', 'newbdtr_setup');

/**
 * Pattern categories, Intertiempo namespace.
 */
function newbdtr_pattern_categories()
{
  register_block_pattern_category(
    'newbdtr',
    array(
      'label' => __('Intertiempo', 'bdtrivas'),
      'description' => __('Patrones del Banco del Tiempo de Rivas.', 'bdtrivas'),
    )
  );
  register_block_pattern_category(
    'newbdtr_page',
    array(
      'label' => __('Páginas Intertiempo', 'bdtrivas'),
      'description' => __('Layouts de página completa.', 'bdtrivas'),
    )
  );
}
add_action('init', 'newbdtr_pattern_categories');

/**
 * Hide parent Twenty Twenty-Five patterns so the inserter stays on-brand.
 */
function newbdtr_unregister_parent_patterns()
{
  $registry = WP_Block_Patterns_Registry::get_instance();
  foreach ($registry->get_all_registered() as $pattern) {
    if (isset($pattern['name']) && str_starts_with($pattern['name'], 'twentytwentyfive/')) {
      unregister_block_pattern($pattern['name']);
    }
  }
}
add_action('init', 'newbdtr_unregister_parent_patterns', 20);

/**
 * Front-end assets: Tailwind 4 build + fonts/icons.
 */
function newbdtr_enqueue_assets()
{
  wp_enqueue_style(
    'newbdtr-fonts',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap',
    array(),
    null
  );

  $css = get_stylesheet_directory() . '/assets/css/theme.css';
  wp_enqueue_style(
    'newbdtr-theme',
    get_stylesheet_directory_uri() . '/assets/css/theme.css',
    array('newbdtr-fonts'),
    file_exists($css) ? filemtime($css) : '1.0.0'
  );

  wp_enqueue_script(
    'newbdtr-theme',
    get_stylesheet_directory_uri() . '/assets/js/theme.js',
    array(),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'newbdtr_enqueue_assets');

/**
 * Drop parent block-theme CSS so Intertiempo tokens win.
 */
function newbdtr_dequeue_conflicting_styles()
{
  wp_dequeue_style('twentytwentyfive-style');
  wp_deregister_style('twentytwentyfive-style');
}
add_action('wp_enqueue_scripts', 'newbdtr_dequeue_conflicting_styles', 100);

/**
 * Flush rewrite rules after switching to this theme.
 */
function newbdtr_after_switch_theme()
{
  flush_rewrite_rules();
}
add_action('after_switch_theme', 'newbdtr_after_switch_theme');

/**
 * Exclude Escolar posts from the main blog index.
 *
 * @param WP_Query $query Query.
 */
function newbdtr_exclude_escolar_from_blog($query)
{
  if (is_admin() || !$query->is_main_query() || !$query->is_home()) {
    return;
  }

  $escolar_id = newbdtr_escolar_category_id();
  if ($escolar_id) {
    $query->set('category__not_in', array($escolar_id));
  }
}
add_action('pre_get_posts', 'newbdtr_exclude_escolar_from_blog');

/**
 * Login screen branding.
 */
function sbdtpq_login_logo()
{
  $logo_url = get_theme_file_uri('images/logo_BdT.png');
  ?>
<style type="text/css">
body.login #login h1 a {
  background-image: url(<?php echo esc_url($logo_url); ?>);
  height: 200px;
  width: auto;
  background-position: bottom;
  background-size: 220px auto;
  background-repeat: no-repeat;
  padding-bottom: 0;
}
.login #nav a,
.login #backtoblog a {
  font-size: 1rem;
  text-decoration: none;
  color: #666;
}
.login #nav,
.login #backtoblog {
  text-align: center;
}
</style>
  <?php
}
add_action('login_head', 'sbdtpq_login_logo');

function sbdtpq_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'sbdtpq_login_logo_url');

function sbdtpq_login_logo_url_title()
{
  return 'Banco del Tiempo - Intertiempo Rivas';
}
add_filter('login_headertext', 'sbdtpq_login_logo_url_title');

add_filter('login_display_language_dropdown', '__return_false');
