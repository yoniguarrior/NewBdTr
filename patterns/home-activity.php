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

$facts = newbdtr_get_facts();
$activities = newbdtr_get_recent_activity();
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","className":"newbdtr-section newbdtr-activity-section my-0 py-8 px-4 sm:py-section-padding sm:px-gutter","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-activity-section has-surface-container-low-background-color has-background my-0 py-8 px-4 sm:py-section-padding sm:px-gutter">
	<!-- wp:group {"align":"wide","className":"newbdtr-activity","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide newbdtr-activity">
			<!-- wp:group {"className":"newbdtr-activity__heading","style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group newbdtr-activity__heading">
				<!-- wp:heading {"level":2} -->
				<h2 class="wp-block-heading">Logros</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
				<p class="has-on-surface-variant-color has-text-color">Estas son nuestras cifras</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:cover {"url":"<?php echo $fondo; ?>","alt":"Comunidad de Intertiempo en Rivas","isUserOverlayColor":true,"contentPosition":"center left","className":"newbdtr-activity-cover min-h-[450px]! rounded-xl"} -->
			<div class="wp-block-cover has-custom-content-position is-position-center-left newbdtr-activity-cover min-h-[450px]! rounded-xl"><img class="wp-block-cover__image-background" alt="Comunidad de Intertiempo en Rivas" src="<?php echo $fondo; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
				<!-- wp:columns {"isStackedOnMobile":false,"className":"newbdtr-activity-stats glass-card"} -->
				<div class="wp-block-columns is-not-stacked-on-mobile newbdtr-activity-stats glass-card">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"className":"newbdtr__stat-value","textAlign":"center","level":3} -->
						<h3 class="wp-block-heading has-text-align-center newbdtr__stat-value"><?php echo esc_html($facts['years']); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr__stat-label"} -->
						<p class="has-text-align-center newbdtr__stat-label"><?php echo esc_html('Años'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"className":"newbdtr__stat-value","textAlign":"center","level":3,"textColor":"rose"} -->
						<h3 class="wp-block-heading has-text-align-center has-rose-color has-text-color newbdtr__stat-value"><?php echo esc_html($facts['users']); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr__stat-label"} -->
						<p class="has-text-align-center newbdtr__stat-label"><?php echo esc_html('Usuarios'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"className":"newbdtr__stat-value","textAlign":"center","level":3,"textColor":"secondary"} -->
						<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color newbdtr__stat-value"><?php echo esc_html($facts['exchanges']); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr__stat-label"} -->
						<p class="has-text-align-center newbdtr__stat-label"><?php echo esc_html('Intercambios'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"className":"newbdtr__stat-value","textAlign":"center","level":3,"textColor":"teal"} -->
						<h3 class="wp-block-heading has-text-align-center has-teal-color has-text-color newbdtr__stat-value"><?php echo esc_html($facts['hours']); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr__stat-label"} -->
						<p class="has-text-align-center newbdtr__stat-label"><?php echo esc_html('Horas'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"className":"newbdtr__stat-value","textAlign":"center","level":3,"textColor":"tertiary"} -->
						<h3 class="wp-block-heading has-text-align-center has-tertiary-color has-text-color newbdtr__stat-value"><?php echo esc_html($facts['projects']); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center","className":"newbdtr__stat-label"} -->
						<p class="has-text-align-center newbdtr__stat-label"><?php echo esc_html('Proyectos'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div></div>
			<!-- /wp:cover -->
			<!-- wp:group {"className":"newbdtr-activity__heading newbdtr-activity__heading--feed","style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group newbdtr-activity__heading newbdtr-activity__heading--feed">
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
				<?php foreach ($activities as $activity) : ?>
				<!-- wp:group {"className":"newbdtr-activity-item","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-activity-item">
					<!-- wp:html -->
					<span class="material-symbols-outlined newbdtr-activity-item__icon" aria-hidden="true"><?php echo esc_html($activity['icon']); ?></span>
					<!-- /wp:html -->
					<!-- wp:paragraph -->
					<p><strong><?php echo esc_html($activity['name']); ?></strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size"><?php echo esc_html($activity['elapsed']); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"newbdtr-activity__more"} -->
					<div class="wp-block-button newbdtr-activity__more"><a class="wp-block-button__link wp-element-button" href="<?php echo $comunidad; ?>">Ver toda la actividad</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
