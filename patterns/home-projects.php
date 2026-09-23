<?php
/**
 * Title: Proyectos Intertiempo
 * Slug: newbdtr/home-projects
 * Categories: newbdtr
 * Description: Rejilla de proyectos de Intertiempo.
 *
 * @package NewBdTr
 */

$proyectos = esc_url(newbdtr_page_url('proyectos'));
$lanas = newbdtr_img('teConLanas_up.png');
$lee = newbdtr_img('rivasLee_up.png');
$almohadas = newbdtr_img('almohadasDeCorazon_up.png');
$huerto = newbdtr_img('huertoVecinal_up.png');
?>
<!-- wp:group {"align":"full","backgroundColor":"background","className":"newbdtr-section newbdtr-projects-section py-8 px-4 sm:py-section-padding sm:px-gutter","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-projects-section has-background-background-color has-background py-8 px-4 sm:py-section-padding sm:px-gutter">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Proyectos que mueven Rivas <mark class="bg-transparent has-inline-color has-secondary-color">♥</mark></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
		<p class="has-on-surface-variant-color has-text-color">Descubre todo lo que estamos creando juntos</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"newbdtr-projects-grid","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"constrained","contentSize":"1280px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide newbdtr-projects-grid">
		<!-- wp:columns {"className":"newbdtr-projects"} -->
		<div class="wp-block-columns newbdtr-projects">
			<!-- wp:column {"className":"basis-2/3"} -->
			<div class="wp-block-column basis-2/3">
				<!-- wp:cover {"url":"<?php echo $lanas; ?>","alt":"Té con Lanas","dimRatio":100,"isUserOverlayColor":true,"contentPosition":"bottom left","className":"newbdtr-project newbdtr-project--wide hover-lift min-h-80! rounded-xl p-8!"} -->
				<div class="wp-block-cover has-custom-content-position is-position-bottom-left newbdtr-project newbdtr-project--wide hover-lift min-h-80! rounded-xl p-8!"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient bg-linear-45 from-black to-transparent"></span><img class="wp-block-cover__image-background" alt="Té con Lanas" src="<?php echo $lanas; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Té con Lanas</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Tejemos comunidad, un punto a la vez.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"newbdtr-project__btn"} -->
						<div class="wp-block-button newbdtr-project__btn"><a class="wp-block-button__link wp-element-button" href="<?php echo $proyectos; ?>">Más info</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div></div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"basis-1/3"} -->
			<div class="wp-block-column basis-1/3">
				<!-- wp:cover {"url":"<?php echo $lee; ?>","alt":"Rivas Lee","dimRatio":100,"isUserOverlayColor":true,"contentPosition":"bottom left","className":"newbdtr-project hover-lift min-h-80! rounded-xl p-8!"} -->
				<div class="wp-block-cover has-custom-content-position is-position-bottom-left newbdtr-project hover-lift min-h-80! rounded-xl p-8!"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient bg-linear-45 from-black to-transparent"></span><img class="wp-block-cover__image-background" alt="Rivas Lee" src="<?php echo $lee; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Rivas Lee</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Libros que viajan por el barrio.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"newbdtr-project__btn"} -->
						<div class="wp-block-button newbdtr-project__btn"><a class="wp-block-button__link wp-element-button" href="<?php echo $proyectos; ?>">Más info</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div></div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"className":"newbdtr-projects"} -->
		<div class="wp-block-columns newbdtr-projects">
			<!-- wp:column {"className":"basis-1/3"} -->
			<div class="wp-block-column basis-1/3">
				<!-- wp:cover {"url":"<?php echo $almohadas; ?>","alt":"Almohadas de Corazón","dimRatio":100,"isUserOverlayColor":true,"contentPosition":"bottom left","className":"newbdtr-project hover-lift min-h-64! rounded-xl p-6!"} -->
				<div class="wp-block-cover has-custom-content-position is-position-bottom-left newbdtr-project hover-lift min-h-64! rounded-xl p-6!"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient bg-linear-45 from-black to-transparent"></span><img class="wp-block-cover__image-background" alt="Almohadas de Corazón" src="<?php echo $almohadas; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Almohadas de Corazón</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Hechas con amor para quien lo necesita.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"newbdtr-project__btn"} -->
						<div class="wp-block-button newbdtr-project__btn"><a class="wp-block-button__link wp-element-button" href="<?php echo $proyectos; ?>">Más info</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div></div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"basis-2/3"} -->
			<div class="wp-block-column basis-2/3">
				<!-- wp:cover {"url":"<?php echo $huerto; ?>","alt":"Huerto Vecinal","dimRatio":100,"isUserOverlayColor":true,"contentPosition":"bottom left","className":"newbdtr-project newbdtr-project--wide hover-lift min-h-64! rounded-xl p-8!"} -->
				<div class="wp-block-cover has-custom-content-position is-position-bottom-left newbdtr-project newbdtr-project--wide hover-lift min-h-64! rounded-xl p-8!"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient bg-linear-45 from-black to-transparent"></span><img class="wp-block-cover__image-background" alt="Huerto Vecinal" src="<?php echo $huerto; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Huerto Vecinal</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>Sembrando juntos el futuro de Rivas.</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"newbdtr-project__btn"} -->
						<div class="wp-block-button newbdtr-project__btn"><a class="wp-block-button__link wp-element-button" href="<?php echo $proyectos; ?>">Más info</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div></div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
