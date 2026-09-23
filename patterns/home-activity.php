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
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","className":"newbdtr-section newbdtr-activity-section my-0 py-8 px-4 sm:py-section-padding sm:px-gutter","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-activity-section has-surface-container-low-background-color has-background my-0 py-8 px-4 sm:py-section-padding sm:px-gutter">
	<!-- wp:columns {"align":"wide","className":"newbdtr-activity"} -->
	<div class="wp-block-columns alignwide newbdtr-activity">
		<!-- wp:column {"className":"basis-2/3","style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<div class="wp-block-column basis-2/3">
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

			<!-- wp:cover {"url":"<?php echo $fondo; ?>","alt":"Comunidad de Intertiempo en Rivas","dimRatio":100,"isUserOverlayColor":true,"contentPosition":"center left","className":"newbdtr-activity-cover min-h-[450px]! rounded-xl"} -->
			<div class="wp-block-cover has-custom-content-position is-position-center-left newbdtr-activity-cover min-h-112.5! rounded-xl"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient bg-linear-to-r from-black/80 to-transparent"></span><img class="wp-block-cover__image-background object-center" alt="Comunidad de Intertiempo en Rivas" src="<?php echo $fondo; ?>" data-object-fit="cover" data-object-position="0% 50%"/><div class="wp-block-cover__inner-container">
				<!-- wp:columns {"isStackedOnMobile":false,"className":"newbdtr-activity-stats glass-card"} -->
				<div class="wp-block-columns is-not-stacked-on-mobile newbdtr-activity-stats glass-card">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3} -->
						<h3 class="wp-block-heading has-text-align-center">21</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr__stat-label"} -->
						<p class="has-text-align-center newbdtr__stat-label">Años</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3} -->
						<h3 class="wp-block-heading has-text-align-center">441</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr__stat-label"} -->
						<p class="has-text-align-center newbdtr__stat-label">Usuarios</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3} -->
						<h3 class="wp-block-heading has-text-align-center">4.781</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr-stat-label"} -->
						<p class="has-text-align-center newbdtr-stat-label">Intercambios</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3,"textColor":"secondary"} -->
						<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color">+15.000</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr-stat-label"} -->
						<p class="has-text-align-center newbdtr-stat-label">Horas</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"textAlign":"center","level":3,"textColor":"tertiary"} -->
						<h3 class="wp-block-heading has-text-align-center has-tertiary-color has-text-color">13</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr-stat-label"} -->
						<p class="has-text-align-center newbdtr-stat-label">Proyectos</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"basis-1/3","style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<div class="wp-block-column basis-1/3">
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

			<!-- wp:group {"className":"newbdtr-activity-list rounded-xl p-6","style":{"spacing":{"blockGap":"1.5rem"}},"backgroundColor":"surface-container-lowest","layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-activity-list rounded-xl p-6 has-surface-container-lowest-background-color has-background">
				<!-- wp:group {"className":"newbdtr-activity-item newbdtr-activity-item--yoga","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-activity-item newbdtr-activity-item--yoga">
					<!-- wp:paragraph -->
					<p><strong>Clases de yoga</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">Hace 10 min</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"newbdtr-activity-item newbdtr-activity-item--internet","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-activity-item newbdtr-activity-item--internet">
					<!-- wp:paragraph -->
					<p><strong>Manejo de internet</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">Hace 2 horas</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"newbdtr-activity-item newbdtr-activity-item--pets","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-activity-item newbdtr-activity-item--pets">
					<!-- wp:paragraph -->
					<p><strong>Atención animales</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">Hace 1 día</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"newbdtr-activity-item newbdtr-activity-item--music","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-activity-item newbdtr-activity-item--music">
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
					<!-- wp:button {"width":100,"className":"newbdtr-activity__more"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 newbdtr-activity__more"><a class="wp-block-button__link wp-element-button" href="<?php echo $comunidad; ?>">Ver toda la actividad</a></div>
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
