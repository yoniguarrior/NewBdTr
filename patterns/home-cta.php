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
$comunidad = esc_url(newbdtr_page_url('comunidad'));
$como = esc_url(newbdtr_page_url('como-funciona'));
$proyectos = esc_url(newbdtr_page_url('proyectos'));
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","className":"newbdtr-section newbdtr-cta my-0 py-8 px-4 sm:py-section-padding sm:px-gutter","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-cta has-primary-background-color has-background my-0 py-8 px-4 sm:py-section-padding sm:px-gutter">
	<!-- wp:paragraph {"align":"center","className":"newbdtr-cta__icon"} -->
	<p class="has-text-align-center newbdtr-cta__icon"></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":2,"textColor":"on-primary"} -->
	<h2 class="wp-block-heading has-text-align-center has-on-primary-color has-text-color">Únete a nuestra comunidad</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","className":"newbdtr-cta__lead","textColor":"on-primary"} -->
	<p class="has-text-align-center newbdtr-cta__lead has-on-primary-color has-text-color">Recibe novedades, eventos y mucho más. Ayúdanos a seguir construyendo una red de apoyo mutuo en Rivas Vaciamadrid.</p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<form class="newbdtr-cta__form" action="<?php echo $register; ?>" method="get">
		<label class="screen-reader-text" for="newbdtr-cta-email">Tu email</label>
		<input id="newbdtr-cta-email" type="email" name="email" placeholder="Tu email" required />
		<button type="submit">Suscribirme</button>
	</form>
	<!-- /wp:html -->

	<!-- wp:group {"className":"newbdtr-cta__glyphs","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group newbdtr-cta__glyphs">
		<!-- wp:paragraph {"className":"newbdtr-cta__glyph newbdtr-cta__glyph--hub"} -->
		<p class="newbdtr-cta__glyph newbdtr-cta__glyph--hub"><a href="<?php echo $comunidad; ?>">Comunidad</a></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"newbdtr-cta__glyph newbdtr-cta__glyph--diversity"} -->
		<p class="newbdtr-cta__glyph newbdtr-cta__glyph--diversity"><a href="<?php echo $como; ?>">Cómo funciona</a></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"newbdtr-cta__glyph newbdtr-cta__glyph--verified"} -->
		<p class="newbdtr-cta__glyph newbdtr-cta__glyph--verified"><a href="<?php echo $proyectos; ?>">Proyectos</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
