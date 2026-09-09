<?php
/**
 * Title: Footer
 * Slug: newbdtr/footer
 * Categories: footer, newbdtr
 * Block Types: core/template-part/footer
 * Description: Pie de página Intertiempo con navegación, recursos y contacto.
 *
 * @package NewBdTr
 */

$logo = newbdtr_img('logo_BdT.png');
$year = esc_html(gmdate('Y'));
$como = esc_url(newbdtr_page_url('como-funciona'));
$comunidad = esc_url(newbdtr_page_url('comunidad'));
$proyectos = esc_url(newbdtr_page_url('proyectos'));
$noticias = esc_url(newbdtr_page_url('noticias'));
$eventos = esc_url(newbdtr_page_url('eventos'));
$blog = esc_url(newbdtr_page_url('blog'));
$fotos = esc_url(newbdtr_page_url('fotos'));
$contacto = esc_url(newbdtr_page_url('contacto'));
$legal = esc_url(newbdtr_page_url('aviso-legal'));
$privacidad = esc_url(newbdtr_page_url('politica-de-privacidad'));
$cookies = esc_url(newbdtr_page_url('politica-de-cookies'));
?>
<!-- wp:group {"align":"full","className":"newbdtr-footer bg-surface-container-low border-t border-outline-variant/30","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-footer bg-surface-container-low border-t border-outline-variant/30">
	<!-- wp:columns {"align":"wide","className":"newbdtr-footer__grid"} -->
	<div class="wp-block-columns alignwide newbdtr-footer__grid">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"width":"32px","height":"32px","scale":"contain","url":"<?php echo $logo; ?>","alt":"Intertiempo"} -->
				<figure class="wp-block-image is-resized"><img src="<?php echo $logo; ?>" alt="Intertiempo" style="object-fit:contain;width:32px;height:32px"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"className":"newbdtr-wordmark"} -->
				<p class="newbdtr-wordmark">Intertiempo</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
			<p class="has-on-surface-variant-color has-small-font-size">Intercambiamos tiempo, no dinero. Creamos comunidad, compartimos vida.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"textColor":"primary","className":"newbdtr-footer__title"} -->
			<h4 class="wp-block-heading newbdtr-footer__title has-primary-color has-text-color">Navegación</h4>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"className":"newbdtr-footer-nav"} -->
				<!-- wp:navigation-link {"label":"Cómo funciona","url":"<?php echo $como; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Comunidad","url":"<?php echo $comunidad; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Proyectos","url":"<?php echo $proyectos; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Noticias","url":"<?php echo $noticias; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Eventos","url":"<?php echo $eventos; ?>","kind":"custom"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"textColor":"primary","className":"newbdtr-footer__title"} -->
			<h4 class="wp-block-heading newbdtr-footer__title has-primary-color has-text-color">Recursos</h4>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"className":"newbdtr-footer-nav"} -->
				<!-- wp:navigation-link {"label":"Blog","url":"<?php echo $blog; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Fotos","url":"<?php echo $fotos; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Contacto","url":"<?php echo $contacto; ?>","kind":"custom"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"bg-surface-container-high p-6 rounded-xl","layout":{"type":"constrained"}} -->
			<div class="wp-block-group bg-surface-container-high p-6 rounded-xl">
				<!-- wp:heading {"level":4,"textColor":"primary"} -->
				<h4 class="wp-block-heading has-primary-color has-text-color">¿Necesitas ayuda?</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
				<p class="has-on-surface-variant-color has-small-font-size">Contáctanos directamente vía WhatsApp o mail.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a href="https://wa.me/34649732486">649 73 24 86</a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
				<p class="has-on-surface-variant-color has-small-font-size"><a href="mailto:info@bancodeltiemporivas.org">info@bancodeltiemporivas.org</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","className":"newbdtr-footer__legal border-t border-outline-variant/20","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide newbdtr-footer__legal border-t border-outline-variant/20">
		<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
		<p class="has-on-surface-variant-color has-small-font-size">© <?php echo $year; ?> Intertiempo - Banco del Tiempo de Rivas | Hacemos barrio</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
		<p class="has-on-surface-variant-color has-small-font-size"><a href="<?php echo $legal; ?>">Aviso legal</a> · <a href="<?php echo $privacidad; ?>">Privacidad</a> · <a href="<?php echo $cookies; ?>">Cookies</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
