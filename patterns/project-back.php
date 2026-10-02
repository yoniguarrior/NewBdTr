<?php

/**
 * Title: Volver al listado de proyectos
 * Slug: newbdtr/project-back
 * Inserter: no
 * Description: Botón para regresar al listado de proyectos.
 *
 * @package NewBdTr
 */

$projects = get_post_type_archive_link('project');
if (!$projects) {
  $projects = home_url('/proyectos/');
}
$projects = esc_url($projects);
?>
<!-- wp:buttons {"className":"newbdtr-project-back","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons newbdtr-project-back is-content-justification-right"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $projects; ?>">Volver</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
