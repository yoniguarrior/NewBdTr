<?php

/**
 * Theme helpers.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Theme image URL.
 *
 * @param string $file Filename inside /images.
 * @return string
 */
function newbdtr_img($file)
{
  return esc_url(get_stylesheet_directory_uri() . '/images/' . ltrim($file, '/'));
}

/**
 * Permalink by slug, or home if missing.
 *
 * @param string $slug Page slug.
 * @return string
 */
function newbdtr_page_url($slug)
{
  $page = get_page_by_path($slug);
  return $page ? get_permalink($page) : home_url('/' . $slug . '/');
}

/**
 * Path only, no trailing slash. Home is ''.
 *
 * @param string $url Absolute or relative URL.
 * @return string
 */
function newbdtr_url_path($url)
{
  $path = wp_parse_url($url, PHP_URL_PATH);
  if (!is_string($path) || $path === '') {
    return '';
  }
  return untrailingslashit($path);
}

/**
 * Whether a nav URL is the page currently being viewed.
 *
 * @param string $url Link href.
 * @return bool
 */
function newbdtr_url_is_current($url)
{
  if (!is_string($url) || $url === '' || $url === '#') {
    return false;
  }

  $link_path = newbdtr_url_path($url);
  $home_path = newbdtr_url_path(home_url('/'));

  if ($link_path === $home_path) {
    return is_front_page();
  }

  $request_path = newbdtr_url_path(wp_unslash($_SERVER['REQUEST_URI'] ?? '/'));
  return strtolower($link_path) === strtolower($request_path);
}

/**
 * Add current-menu-item to custom navigation-link blocks (core only matches by post id).
 *
 * @param string $block_content Rendered HTML.
 * @param array  $block         Parsed block.
 * @return string
 */
function newbdtr_mark_current_nav_link($block_content, $block)
{
  $url = $block['attrs']['url'] ?? '';
  if ($block_content === '' || !newbdtr_url_is_current($url)) {
    return $block_content;
  }

  $processor = new WP_HTML_Tag_Processor($block_content);
  if ($processor->next_tag('li')) {
    $processor->add_class('current-menu-item');
  }
  if ($processor->next_tag('a')) {
    $processor->set_attribute('aria-current', 'page');
  }
  return $processor->get_updated_html();
}
add_filter('render_block_core/navigation-link', 'newbdtr_mark_current_nav_link', 10, 2);

/**
 * Escolar category ID.
 *
 * @return int
 */
function newbdtr_escolar_category_id()
{
  $term = get_term_by('slug', 'banco-del-tiempo-escolar', 'category');
  return ($term && !is_wp_error($term)) ? (int) $term->term_id : 0;
}

/**
 * Render a theme pattern file to block markup.
 *
 * @param string $file Filename inside /patterns.
 * @return string
 */
function newbdtr_pattern_markup($file)
{
  $path = get_stylesheet_directory() . '/patterns/' . ltrim($file, '/');
  if (!is_readable($path)) {
    return '';
  }

  ob_start();
  include $path;
  return trim(ob_get_clean());
}

/**
 * Concatenate several pattern files.
 *
 * @param string[] $files Pattern filenames.
 * @return string
 */
function newbdtr_compose_patterns($files)
{
  $chunks = array();
  foreach ($files as $file) {
    $markup = newbdtr_pattern_markup($file);
    if ($markup !== '') {
      $chunks[] = $markup;
    }
  }
  return implode("\n\n", $chunks);
}
