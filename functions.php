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
require_once get_stylesheet_directory() . '/inc/register-project.php';
require_once get_stylesheet_directory() . '/inc/projects-tree.php';

/**
 * Image used when a popular service has neither a subtype nor a type image.
 */
define('NEWBDTR_DEFAULT_SERVICE_IMAGE', newbdtr_img('comunidad.png'));

/**
 * Theme setup.
 */
function newbdtr_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
  add_editor_style(
    array(
      'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24..48,100..700,0..1,0&display=swap',
      'assets/css/theme.css',
    )
  );
  register_nav_menus(
    array(
      'primary' => 'Menú principal',
      'footer' => 'Menú pie',
    )
  );
}
add_action('after_setup_theme', 'newbdtr_setup');

/**
 * Warn in wp-admin when the management plugin is inactive.
 *
 * Public pages still load. Extra fields on notices, galleries, events
 * and locations stay empty until the plugin registers them.
 *
 * @return void
 */
function newbdtr_require_sbdtpq_notice()
{
  if (defined('SBDTPQ_VERSION')) {
    return;
  }

  echo '<div class="notice notice-warning"><p>'
    . esc_html('El plugin sbdtpq no está activo. La gestión del banco del tiempo y los metadatos de noticias, galerías, eventos y ubicaciones no están disponibles.')
    . '</p></div>';
}
add_action('admin_notices', 'newbdtr_require_sbdtpq_notice');

/**
 * Pattern categories, Intertiempo namespace.
 */
function newbdtr_pattern_categories()
{
  register_block_pattern_category(
    'newbdtr',
    array(
      'label' => 'Intertiempo',
      'description' => 'Patrones del Banco del Tiempo de Rivas.',
    )
  );
  register_block_pattern_category(
    'newbdtr_page',
    array(
      'label' => 'Páginas Intertiempo',
      'description' => 'Layouts de página completa.',
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
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24..48,100..700,0..1,0&display=swap',
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

  if (is_user_logged_in()) {
    wp_enqueue_style('dashicons');
  }
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
 * Keep the newsletter fields in one row.
 *
 * Contact Form 7 would otherwise wrap them in a paragraph.
 *
 * @param bool  $autop   Whether autop runs.
 * @param array $options Autop context. The form key is "form".
 * @return bool
 */
function newbdtr_cta_form_autop($autop, $options)
{
  if (($options['for'] ?? 'form') !== 'form' || !class_exists('WPCF7_ContactForm')) {
    return $autop;
  }

  $contact_form = WPCF7_ContactForm::get_current();
  if ($contact_form && $contact_form->hash() === 'ccb769d') {
    return false;
  }

  return $autop;
}
add_filter('wpcf7_autop_or_not', 'newbdtr_cta_form_autop', 10, 2);

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
  $logo_url = get_theme_file_uri('assets/images/logo_BdT.png');
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

/**
 * Autohide the front-end admin bar on desktop.
 *
 * Visible when the pointer is within 10px of the top edge; hidden again
 * when it moves more than 33px away. Always visible below 782px.
 *
 * WordPress puts `.admin-bar` on `body`, not `html`. Hide/show styles are
 * attached to the `admin-bar` stylesheet so they win over core bump CSS.
 *
 * @return void
 */
function newbdtr_custom_admin_bar_behavior()
{
  if (!is_admin_bar_showing()) {
    return;
  }
  ?>
  <script>
    (function() {
      var SHOW_WITHIN = 10;
      var HIDE_BEYOND = 33;
      var desktopQuery = window.matchMedia('(min-width: 783px)');
      var html = document.documentElement;

      function setVisible(visible) {
        html.classList.toggle('newbdtr-admin-bar-visible', visible);
      }

      function syncMode() {
        setVisible(!desktopQuery.matches);
      }

      function onMouseMove(event) {
        if (!desktopQuery.matches) {
          return;
        }
        if (event.clientY < SHOW_WITHIN) {
          setVisible(true);
        } else if (event.clientY > HIDE_BEYOND) {
          setVisible(false);
        }
      }

      syncMode();
      window.addEventListener('mousemove', onMouseMove, {
        passive: true
      });

      if (desktopQuery.addEventListener) {
        desktopQuery.addEventListener('change', syncMode);
      } else if (desktopQuery.addListener) {
        desktopQuery.addListener(syncMode);
      }
    })();
  </script>
  <?php
}
add_action('wp_footer', 'newbdtr_custom_admin_bar_behavior');

/**
 * Admin-bar autohide CSS (must load with core admin-bar styles).
 *
 * @return void
 */
function newbdtr_custom_admin_bar_css()
{
  if (!is_admin_bar_showing()) {
    return;
  }

  wp_add_inline_style(
    'admin-bar',
    '@media screen and (min-width: 783px) {
      html { margin-top: 0 !important; }
      #wpadminbar {
        top: -32px !important;
        transition: top 0.2s ease;
      }
      html.newbdtr-admin-bar-visible #wpadminbar {
        top: 0 !important;
      }
    }'
  );
}
add_action('wp_enqueue_scripts', 'newbdtr_custom_admin_bar_css', 20);

/**
 * Impact figures for the home activity section.
 *
 * Years are counted from 7 September 2005. Hours are the sum of exchange
 * durations. Numbers use a thousands separator.
 *
 * @return array{years: string, users: string, exchanges: string, hours: string, projects: string}
 */
function newbdtr_get_facts()
{
  global $wpdb;

  $format = static function ($value) {
    return number_format((float) $value, 0, ',', '.');
  };

  return array(
    'years' => $format((new DateTime('2005-09-07'))->diff(new DateTime())->y),
    'users' => $format($wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->users}")),
    'exchanges' => $format($wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->prefix}sbdtpq_svcs_provided")),
    'hours' => $format($wpdb->get_var("SELECT COALESCE(SUM(duration), 0) FROM {$wpdb->prefix}sbdtpq_svcs_provided")),
    'projects' => $format($wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->posts} WHERE post_type = 'project' AND post_status = 'publish'")),
  );
}

/**
 * Four most recent exchanges for the home activity list.
 *
 * Icon falls back from subtype, to type, to a default Material Symbol.
 *
 * @return array<int, array{name: string, icon: string, elapsed: string}>
 */
function newbdtr_get_recent_activity()
{
  global $wpdb;

  $rows = $wpdb->get_results(
    "SELECT p.date_provided, s.svc_subtype_name,
      COALESCE(NULLIF(s.svc_subtype_icon, ''), NULLIF(t.svc_type_icon, ''), 'nest_clock_farsight_analog') AS icon
    FROM {$wpdb->prefix}sbdtpq_svcs_provided p
    LEFT JOIN {$wpdb->prefix}sbdtpq_svc_subtypes s ON s.svc_subtype_id = p.svc_subtype_id
    LEFT JOIN {$wpdb->prefix}sbdtpq_svc_types t ON t.svc_type_id = s.svc_type_id
    ORDER BY p.date_provided DESC, p.svc_id DESC
    LIMIT 4"
  );

  if (!is_array($rows)) {
    return array();
  }

  return array_map(
    static function ($row) {
      return array(
        'name' => $row->svc_subtype_name ?: '',
        'icon' => $row->icon ?: 'nest_clock_farsight_analog',
        'elapsed' => newbdtr_elapsed_since($row->date_provided),
      );
    },
    $rows
  );
}

/**
 * Elapsed time since a service date: hours under 24, otherwise days.
 */
function newbdtr_elapsed_since($date)
{
  $timezone = wp_timezone();
  $provided = new DateTimeImmutable($date, $timezone);
  $now = new DateTimeImmutable('now', $timezone);
  $hours = (int) floor(($now->getTimestamp() - $provided->getTimestamp()) / HOUR_IN_SECONDS);

  if ($hours < 1) {
    return 'Hace menos de 1 hora';
  }

  if ($hours < 24) {
    return $hours === 1 ? 'Hace 1 hora' : sprintf('Hace %d horas', $hours);
  }

  $days = (int) floor($hours / 24);

  return $days === 1 ? 'Hace 1 día' : sprintf('Hace %d días', $days);
}

/**
 * Four service subtypes performed most often in the last 120 days.
 *
 * Exchanges of the type "Servicios internos BdT" are left out.
 *
 * Image URL falls back from the subtype, to its type, to NEWBDTR_DEFAULT_SERVICE_IMAGE.
 *
 * @return array<int, array{name: string, type: string, image: string}>
 */
function newbdtr_get_popular_services()
{
  global $wpdb;

  $since = (new DateTimeImmutable('today', wp_timezone()))->modify('-120 days')->format('Y-m-d');

  $rows = $wpdb->get_results(
    $wpdb->prepare(
      "SELECT s.svc_subtype_name, t.svc_type_name, s.svc_subtype_image_url, t.svc_type_image_url, COUNT(*) AS total
      FROM {$wpdb->prefix}sbdtpq_svcs_provided p
      INNER JOIN {$wpdb->prefix}sbdtpq_svc_subtypes s ON s.svc_subtype_id = p.svc_subtype_id
      LEFT JOIN {$wpdb->prefix}sbdtpq_svc_types t ON t.svc_type_id = s.svc_type_id
      WHERE p.date_provided >= %s
        AND p.svc_subtype_id > 0
        AND s.deleted = 0
        AND (t.svc_type_name IS NULL OR t.svc_type_name <> %s)
      GROUP BY s.svc_subtype_id, s.svc_subtype_name, t.svc_type_name, s.svc_subtype_image_url, t.svc_type_image_url
      ORDER BY total DESC, s.svc_subtype_name ASC
      LIMIT 4",
      $since,
      'Servicios internos BdT'
    )
  );

  if (!is_array($rows)) {
    return array();
  }

  $services = array();
  foreach ($rows as $row) {
    $name = trim((string) $row->svc_subtype_name);
    if ($name === '') {
      continue;
    }

    $subtype_image = trim((string) $row->svc_subtype_image_url);
    $type_image = trim((string) $row->svc_type_image_url);
    if ($subtype_image !== '') {
      $image = $subtype_image;
    } elseif ($type_image !== '') {
      $image = $type_image;
    } else {
      $image = NEWBDTR_DEFAULT_SERVICE_IMAGE;
    }

    $services[] = array(
      'name' => $name,
      'type' => trim((string) $row->svc_type_name),
      'image' => $image,
    );
  }

  return $services;
}

/**
 * Column markup for the popular services cards.
 *
 * @return string
 */
function newbdtr_popular_services_cards_html()
{
  $modifiers = array('primary', 'secondary', 'tertiary');
  $html = '';

  foreach (newbdtr_get_popular_services() as $index => $service) {
    $modifier = $modifiers[$index % count($modifiers)];
    $html .= sprintf(
      '<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"><div class="wp-block-group newbdtr-card hover-lift is-layout-constrained wp-block-group-is-layout-constrained"><div class="wp-block-group newbdtr-card__media is-layout-constrained wp-block-group-is-layout-constrained"><figure class="wp-block-image size-large"><img src="%s" alt="%s" style="object-fit:cover"/></figure><p class="newbdtr-card__tag newbdtr-card__tag--%s">%s</p></div><div class="wp-block-group px-6 py-4 m-0! is-layout-constrained wp-block-group-is-layout-constrained"><h5 class="wp-block-heading">%s</h5></div></div></div>',
      esc_url($service['image']),
      esc_attr($service['name']),
      esc_attr($modifier),
      esc_html($service['type']),
      esc_html($service['name'])
    );
  }

  return $html;
}

/**
 * Replace the static popular-service cards with the latest exchanges.
 *
 * @param string $content
 * @param array  $block
 * @return string
 */
function newbdtr_render_popular_services($content, $block)
{
  if (($block['blockName'] ?? '') !== 'core/columns') {
    return $content;
  }

  $class = $block['attrs']['className'] ?? '';
  if (!str_contains($class, 'newbdtr-cards')) {
    return $content;
  }

  $cards = newbdtr_popular_services_cards_html();
  if ($cards === '') {
    return $content;
  }

  $open_end = strpos($content, '>');
  $close = strrpos($content, '</div>');
  if ($open_end === false || $close === false || $close <= $open_end) {
    return $content;
  }

  return substr($content, 0, $open_end + 1) . $cards . substr($content, $close);
}
add_filter('render_block', 'newbdtr_render_popular_services', 10, 2);

/**
 * Replace the static activity items with the latest exchanges.
 *
 * @param string $content
 * @param array  $block
 * @return string
 */
function newbdtr_render_activity_list($content, $block)
{
  if (($block['blockName'] ?? '') !== 'core/group') {
    return $content;
  }

  $class = $block['attrs']['className'] ?? '';
  if (!str_contains($class, 'newbdtr-activity-list')) {
    return $content;
  }

  $items = '';
  foreach (newbdtr_get_recent_activity() as $activity) {
    $items .= sprintf(
      '<div class="wp-block-group newbdtr-activity-item"><span class="material-symbols-outlined newbdtr-activity-item__icon" aria-hidden="true">%s</span><p><strong>%s</strong></p><p class="has-on-surface-variant-color has-text-color has-small-font-size">%s</p></div>',
      esc_html($activity['icon']),
      esc_html($activity['name']),
      esc_html($activity['elapsed'])
    );
  }

  $replaced = preg_replace(
    '/<div class="wp-block-group newbdtr-activity-item[\s\S]*?(?=<div class="wp-block-buttons)/',
    $items,
    $content,
    1
  );

  return is_string($replaced) ? $replaced : $content;
}
add_filter('render_block', 'newbdtr_render_activity_list', 10, 2);
