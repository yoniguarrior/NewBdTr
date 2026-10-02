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
<!-- wp:group {"align":"full","backgroundColor":"primary","className":"newbdtr-section newbdtr-cta newbdtr-cf-cta py-section-padding px-gutter","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-cta newbdtr-cf-cta has-primary-background-color has-background py-section-padding px-gutter">
	<!-- wp:heading {"textAlign":"center","level":2,"textColor":"on-primary"} -->
	<h2 class="wp-block-heading has-text-align-center has-on-primary-color has-text-color">¿Listo para empezar?</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","className":"newbdtr-cta__lead","textColor":"on-primary"} -->
	<p class="has-text-align-center newbdtr-cta__lead has-on-primary-color has-text-color">Únete a cientos de vecinos de Rivas que ya están intercambiando tiempo y construyendo futuro juntos.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"className":"newbdtr-cf-cta__actions","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons newbdtr-cf-cta__actions">
		<!-- wp:button {"backgroundColor":"tertiary-fixed","textColor":"on-tertiary-fixed","className":"newbdtr-cf-cta__btn"} -->
		<div class="wp-block-button newbdtr-cf-cta__btn"><a class="wp-block-button__link has-on-tertiary-fixed-color has-tertiary-fixed-background-color has-text-color has-background wp-element-button" href="<?php echo $register; ?>">Quiero unirme ahora</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
