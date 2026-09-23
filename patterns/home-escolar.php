<?php
/**
 * Title: Banner BdT Escolar
 * Slug: newbdtr/home-escolar
 * Categories: banner, newbdtr
 * Description: Franja del Banco del Tiempo Escolar.
 *
 * @package NewBdTr
 */

$logo = newbdtr_img('logo_BdT_escolar.png');
$escolar = esc_url(newbdtr_page_url('bdtescolar'));
?>
<!-- wp:group {"align":"full","backgroundColor":"tertiary-container","className":"newbdtr-section newbdtr-escolar my-0 p-4 sm:p-gutter","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-escolar has-tertiary-container-background-color has-background my-0 p-4 sm:p-gutter">
	<!-- wp:group {"align":"wide","className":"newbdtr-escolar__inner","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide newbdtr-escolar__inner">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"96px","height":"96px","scale":"contain","className":"newbdtr-escolar__logo"} -->
			<figure class="wp-block-image newbdtr-escolar__logo is-resized"><img class="size-24 object-contain" src="<?php echo $logo; ?>" alt="BdT Escolar"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":2,"textColor":"on-tertiary-container"} -->
				<h2 class="wp-block-heading has-on-tertiary-container-color has-text-color">Banco del Tiempo Escolar</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"tertiary-fixed"} -->
				<p class="has-tertiary-fixed-color has-text-color">Fomentando la solidaridad y el intercambio desde las aulas de Rivas. ¡Los más jóvenes también hacen barrio!</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"tertiary-fixed","textColor":"on-tertiary-fixed","className":"newbdtr-escolar__btn"} -->
			<div class="wp-block-button newbdtr-escolar__btn"><a class="wp-block-button__link has-on-tertiary-fixed-color has-tertiary-fixed-background-color has-text-color has-background wp-element-button" href="<?php echo $escolar; ?>">Ver proyectos escolares</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
