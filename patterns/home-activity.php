<?php
/**
 * Title: Logros y actividad
 * Slug: newbdtr/home-activity
 * Categories: newbdtr
 * Description: Cifras de impacto y actividad reciente.
 *
 * @package NewBdTr
 */

$fondo = newbdtr_img('fondo2.png');
$comunidad = esc_url(newbdtr_page_url('comunidad'));
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","className":"newbdtr-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section has-surface-container-low-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":2} -->
				<h2 class="wp-block-heading">Logros</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
				<p class="has-on-surface-variant-color has-text-color">Estas son nuestras cifras</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:cover {"url":"<?php echo $fondo; ?>","alt":"Comunidad de Intertiempo en Rivas","dimRatio":50,"overlayColor":"primary","isUserOverlayColor":true,"focalPoint":{"x":0,"y":0.5},"minHeight":450,"minHeightUnit":"px","contentPosition":"center left","className":"newbdtr-activity-cover","style":{"border":{"radius":"12px"}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-center-left newbdtr-activity-cover" style="border-radius:12px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-50 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Comunidad de Intertiempo en Rivas" src="<?php echo $fondo; ?>" style="object-position:0% 50%" data-object-fit="cover" data-object-position="0% 50%"/><div class="wp-block-cover__inner-container">
				<!-- wp:columns {"className":"newbdtr-activity-stats glass-card"} -->
				<div class="wp-block-columns newbdtr-activity-stats glass-card">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3} -->
						<h3 class="wp-block-heading has-text-align-center">441</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr-stat-label","fontSize":"small"} -->
						<p class="has-text-align-center newbdtr-stat-label has-small-font-size">Usuarios</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3} -->
						<h3 class="wp-block-heading has-text-align-center">4.781</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr-stat-label","fontSize":"small"} -->
						<p class="has-text-align-center newbdtr-stat-label has-small-font-size">Intercambios</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3,"textColor":"secondary"} -->
						<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color">+15.000</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr-stat-label","fontSize":"small"} -->
						<p class="has-text-align-center newbdtr-stat-label has-small-font-size">Horas</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3,"textColor":"tertiary"} -->
						<h3 class="wp-block-heading has-text-align-center has-tertiary-color has-text-color">13</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr-stat-label","fontSize":"small"} -->
						<p class="has-text-align-center newbdtr-stat-label has-small-font-size">Proyectos</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":2} -->
				<h2 class="wp-block-heading">Actividad reciente</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
				<p class="has-on-surface-variant-color has-text-color">Lo último que está pasando</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"newbdtr-activity-list","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"1rem"},"border":{"radius":"12px"}},"backgroundColor":"surface-container-lowest","layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-activity-list has-surface-container-lowest-background-color has-background" style="border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><strong>Clases de yoga</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">Hace 10 min</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide","backgroundColor":"outline-variant"} -->
				<hr class="wp-block-separator has-text-color has-outline-variant-color has-alpha-channel-opacity has-outline-variant-background-color has-background is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><strong>Manejo de internet</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">Hace 2 horas</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide","backgroundColor":"outline-variant"} -->
				<hr class="wp-block-separator has-text-color has-outline-variant-color has-alpha-channel-opacity has-outline-variant-background-color has-background is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><strong>Atención animales</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">Hace 1 día</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide","backgroundColor":"outline-variant"} -->
				<hr class="wp-block-separator has-text-color has-outline-variant-color has-alpha-channel-opacity has-outline-variant-background-color has-background is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><strong>Clases de guitarra</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">Hace 2 días</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100,"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo $comunidad; ?>">Ver toda la actividad</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
