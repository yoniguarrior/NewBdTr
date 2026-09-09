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
<!-- wp:group {"align":"full","backgroundColor":"background","className":"newbdtr-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Proyectos que mueven Rivas <mark style="background-color:rgba(0,0,0,0)" class="has-inline-color has-secondary-color">♥</mark></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
		<p class="has-on-surface-variant-color has-text-color">Descubre todo lo que estamos creando juntos</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"newbdtr-projects"} -->
	<div class="wp-block-columns alignwide newbdtr-projects">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:cover {"url":"<?php echo $lanas; ?>","alt":"Té con Lanas","dimRatio":60,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":320,"minHeightUnit":"px","contentPosition":"bottom left","className":"newbdtr-project hover-lift","style":{"border":{"radius":"12px"}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left newbdtr-project hover-lift" style="border-radius:12px;min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Té con Lanas" src="<?php echo $lanas; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:heading {"level":3,"textColor":"on-primary"} -->
				<h3 class="wp-block-heading has-on-primary-color has-text-color">Té con Lanas</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"on-primary"} -->
				<p class="has-on-primary-color has-text-color">Tejemos comunidad, un punto a la vez.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo $proyectos; ?>">Más info</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:cover {"url":"<?php echo $lee; ?>","alt":"Rivas Lee","dimRatio":60,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":320,"minHeightUnit":"px","contentPosition":"bottom left","className":"newbdtr-project hover-lift","style":{"border":{"radius":"12px"}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left newbdtr-project hover-lift" style="border-radius:12px;min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Rivas Lee" src="<?php echo $lee; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:heading {"level":3,"textColor":"on-primary"} -->
				<h3 class="wp-block-heading has-on-primary-color has-text-color">Rivas Lee</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"on-primary"} -->
				<p class="has-on-primary-color has-text-color">Libros que viajan por el barrio.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo $proyectos; ?>">Más info</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","className":"newbdtr-projects"} -->
	<div class="wp-block-columns alignwide newbdtr-projects">
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:cover {"url":"<?php echo $almohadas; ?>","alt":"Almohadas de Corazón","dimRatio":60,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":256,"minHeightUnit":"px","contentPosition":"bottom left","className":"newbdtr-project hover-lift","style":{"border":{"radius":"12px"}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left newbdtr-project hover-lift" style="border-radius:12px;min-height:256px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Almohadas de Corazón" src="<?php echo $almohadas; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:heading {"level":3,"textColor":"on-primary"} -->
				<h3 class="wp-block-heading has-on-primary-color has-text-color">Almohadas de Corazón</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"on-primary"} -->
				<p class="has-on-primary-color has-text-color">Hechas con amor para quien lo necesita.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo $proyectos; ?>">Más info</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:cover {"url":"<?php echo $huerto; ?>","alt":"Huerto Vecinal","dimRatio":60,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":256,"minHeightUnit":"px","contentPosition":"bottom left","className":"newbdtr-project hover-lift","style":{"border":{"radius":"12px"}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left newbdtr-project hover-lift" style="border-radius:12px;min-height:256px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Huerto Vecinal" src="<?php echo $huerto; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:heading {"level":3,"textColor":"on-primary"} -->
				<h3 class="wp-block-heading has-on-primary-color has-text-color">Huerto Vecinal</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"on-primary"} -->
				<p class="has-on-primary-color has-text-color">Sembrando juntos el futuro de Rivas.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo $proyectos; ?>">Más info</a></div>
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
