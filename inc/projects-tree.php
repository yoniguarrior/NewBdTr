<?php

/**
 * Project archive: active logos as fruit in the Intertiempo tree.
 *
 * @package NewBdTr
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Canopy slots, as percentages of the tree image.
 * The first entries are the ones used when there are few logos.
 * Upper slots open the name below the frame so it stays on the crown.
 *
 * @return array<int, array{x: float, y: float, below: bool}>
 */
function newbdtr_project_tree_slots()
{
  return array(
    array('x' => 34, 'y' => 14, 'below' => true),
    array('x' => 50, 'y' => 11, 'below' => true),
    array('x' => 22, 'y' => 22, 'below' => true),
    array('x' => 78, 'y' => 20, 'below' => true),
    array('x' => 66, 'y' => 15, 'below' => true),
    array('x' => 12, 'y' => 30, 'below' => false),
    array('x' => 88, 'y' => 28, 'below' => false),
    array('x' => 42, 'y' => 28, 'below' => false),
    array('x' => 18, 'y' => 40, 'below' => false),
    array('x' => 56, 'y' => 34, 'below' => false),
    array('x' => 30, 'y' => 48, 'below' => false),
    array('x' => 80, 'y' => 38, 'below' => false),
    array('x' => 14, 'y' => 54, 'below' => false),
    array('x' => 62, 'y' => 50, 'below' => false),
    array('x' => 24, 'y' => 62, 'below' => false),
    array('x' => 74, 'y' => 63, 'below' => false),
  );
}

/**
 * Spread logos through the whole crown, including when there are only a few.
 *
 * @param int $count Number of logos.
 * @return array<int, array{x: float, y: float, below: bool}>
 */
function newbdtr_project_tree_pick_slots($count)
{
  $slots = newbdtr_project_tree_slots();
  $total = count($slots);
  if ($count <= 0 || $total === 0) {
    return array();
  }
  if ($count === 1) {
    return array($slots[0]);
  }

  $picked = array();
  $used = array();
  $limit = min($count, $total);
  for ($i = 0; $i < $limit; $i++) {
    $index = (int) round($i * ($total - 1) / ($limit - 1));
    while (isset($used[$index]) && $index < $total - 1) {
      $index++;
    }
    $used[$index] = true;
    $picked[] = $slots[$index];
  }

  for ($i = $total; $i < $count; $i++) {
    $picked[] = $slots[$i % $total];
  }

  return $picked;
}

/**
 * Whether a project is marked active. An empty value counts as active.
 *
 * @param int $post_id Project ID.
 * @return bool
 */
function newbdtr_project_is_active($post_id)
{
  $prefix = defined('META_PREFIX') ? META_PREFIX : 'bdt_';
  $stored = get_post_meta($post_id, $prefix . 'active', true);
  if ($stored === '' || $stored === false) {
    return true;
  }
  return $stored === '1' || $stored === 1 || $stored === true;
}

/**
 * Logo URL and intrinsic size for a project, or null when it has none.
 *
 * @param int $post_id Project ID.
 * @return array{url: string, w: int, h: int}|null
 */
function newbdtr_project_logo($post_id)
{
  $prefix = defined('META_PREFIX') ? META_PREFIX : 'bdt_';
  $stored = get_post_meta($post_id, $prefix . 'logo', true);
  if ($stored === '' || $stored === false || $stored === null) {
    return null;
  }

  $id = 0;
  $url = '';
  if (is_numeric($stored)) {
    $id = (int) $stored;
  } elseif (is_string($stored)) {
    $url = $stored;
    $id = (int) attachment_url_to_postid($url);
  }

  if ($id > 0) {
    $src = wp_get_attachment_image_src($id, 'medium');
    if (!$src || empty($src[0])) {
      $src = wp_get_attachment_image_src($id, 'full');
    }
    if (!$src || empty($src[0])) {
      return null;
    }
    return array(
      'url' => $src[0],
      'w' => max(1, (int) $src[1]),
      'h' => max(1, (int) $src[2]),
    );
  }

  if ($url === '') {
    return null;
  }

  return array(
    'url' => $url,
    'w' => 1,
    'h' => 1,
  );
}

/**
 * Published, active projects that have a logo.
 *
 * @return array<int, array{title: string, url: string, logo: string, w: int, h: int}>
 */
function newbdtr_project_tree_items()
{
  $query = new WP_Query(
    array(
      'post_type' => 'project',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
      'no_found_rows' => true,
    )
  );

  $items = array();
  foreach ($query->posts as $post) {
    if (!newbdtr_project_is_active($post->ID)) {
      continue;
    }
    $logo = newbdtr_project_logo($post->ID);
    if ($logo === null) {
      continue;
    }
    $items[] = array(
      'title' => get_the_title($post),
      'url' => get_permalink($post),
      'logo' => $logo['url'],
      'w' => $logo['w'],
      'h' => $logo['h'],
    );
  }
  wp_reset_postdata();

  return $items;
}

/**
 * Tree illustration markup.
 *
 * @return string
 */
function newbdtr_project_tree_image_html()
{
  $uploads = wp_upload_dir();
  $relative = '2026/09/arbolIntertiempo-scaled.png';
  $url = $uploads['baseurl'] . '/' . $relative;
  $id = (int) attachment_url_to_postid($url);
  $alt = 'Árbol de Intertiempo';

  if ($id > 0) {
    return wp_get_attachment_image(
      $id,
      'full',
      false,
      array(
        'class' => 'newbdtr-tree__img',
        'alt' => $alt,
        'decoding' => 'async',
      )
    );
  }

  $path = $uploads['basedir'] . '/' . $relative;
  if (!is_readable($path)) {
    return '';
  }

  $size = getimagesize($path);
  $width = $size ? (int) $size[0] : 2560;
  $height = $size ? (int) $size[1] : 2222;

  return sprintf(
    '<img class="newbdtr-tree__img" src="%s" alt="%s" width="%d" height="%d" decoding="async" />',
    esc_url($url),
    esc_attr($alt),
    $width,
    $height
  );
}

/**
 * Markup for the project tree.
 *
 * @return string
 */
function newbdtr_project_tree_html()
{
  $image = newbdtr_project_tree_image_html();
  if ($image === '') {
    return '';
  }

  $items = newbdtr_project_tree_items();
  $slots = newbdtr_project_tree_pick_slots(count($items));
  $fruits = '';

  foreach ($items as $index => $item) {
    $slot = $slots[$index % count($slots)];
    $class = 'newbdtr-fruit';
    if (!empty($slot['below'])) {
      $class .= ' newbdtr-fruit--below';
    }
    $fruits .= sprintf(
      '<a class="%1$s" href="%2$s" style="left:%3$s%%;top:%4$s%%;--aw:%5$d;--ah:%6$d"><img src="%7$s" alt="" width="%5$d" height="%6$d" /><span class="newbdtr-fruit__name">%8$s</span></a>',
      esc_attr($class),
      esc_url($item['url']),
      esc_attr((string) $slot['x']),
      esc_attr((string) $slot['y']),
      (int) $item['w'],
      (int) $item['h'],
      esc_url($item['logo']),
      esc_html($item['title'])
    );
  }

  return '<div class="newbdtr-project-tree">' . $image . $fruits . '</div>';
}

/**
 * Shortcode callback.
 *
 * @return string
 */
function newbdtr_project_tree_shortcode()
{
  return newbdtr_project_tree_html();
}
add_shortcode('newbdtr_project_tree', 'newbdtr_project_tree_shortcode');

/**
 * Browser title for the project listing.
 *
 * @param array $title Title parts.
 * @return array
 */
function newbdtr_project_archive_document_title($title)
{
  if (is_post_type_archive('project')) {
    $title['title'] = 'Proyectos';
  }
  return $title;
}
add_filter('document_title_parts', 'newbdtr_project_archive_document_title');
