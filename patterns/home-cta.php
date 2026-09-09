<?php
/**
 * Title: CTA unirse
 * Slug: newbdtr/home-cta
 * Categories: call-to-action, newbdtr
 * Description: Cierre de portada para unirse a la comunidad.
 *
 * @package NewBdTr
 */

$register = esc_url(newbdtr_page_url('register'));
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","className":"newbdtr-section newbdtr-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"1.5rem"}},"layout":{"type":"constrained","contentSize":"42rem"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-cta has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"textAlign":"center","level":2,"textColor":"on-primary"} -->
	<h2 class="wp-block-heading has-text-align-center has-on-primary-color has-text-color">Únete a nuestra comunidad</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"on-primary"} -->
	<p class="has-text-align-center has-on-primary-color has-text-color">Recibe novedades, eventos y mucho más. Ayúdanos a seguir construyendo una red de apoyo mutuo en Rivas Vaciamadrid.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"secondary","textColor":"on-secondary"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-on-secondary-color has-secondary-background-color has-text-color has-background wp-element-button" href="<?php echo $register; ?>">Suscribirme</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
