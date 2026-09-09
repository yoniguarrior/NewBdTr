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
