<?php
/**
 * Title: CTA Cómo funciona
 * Slug: newbdtr/como-funciona-cta
 * Categories: call-to-action, newbdtr
 *
 * @package NewBdTr
 */

$register = esc_url(newbdtr_page_url('register'));
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","className":"newbdtr-section newbdtr-cta py-8 px-4 sm:py-section-padding sm:px-gutter","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"constrained","contentSize":"42rem"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-cta has-primary-background-color has-background py-8 px-4 sm:py-section-padding sm:px-gutter">
	<!-- wp:heading {"textAlign":"center","level":2,"textColor":"on-primary"} -->
	<h2 class="wp-block-heading has-text-align-center has-on-primary-color has-text-color">¿Listo para empezar?</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"on-primary"} -->
	<p class="has-text-align-center has-on-primary-color has-text-color">Únete a cientos de vecinos de Rivas que ya están intercambiando tiempo y construyendo futuro juntos.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"tertiary-fixed","textColor":"on-tertiary-fixed"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-on-tertiary-fixed-color has-tertiary-fixed-background-color has-text-color has-background wp-element-button" href="<?php echo $register; ?>">Quiero unirme ahora</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
