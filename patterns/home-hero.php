<?php
/**
 * Title: Hero de inicio
 * Slug: newbdtr/home-hero
 * Categories: banner, newbdtr
 * Description: Hero de la portada con cifra de comunidad y llamadas a la acción.
 *
 * @package NewBdTr
 */

$fondo = newbdtr_img('fondo6.png');
$register = esc_url(newbdtr_page_url('register'));
$como = esc_url(newbdtr_page_url('como-funciona'));
?>
<!-- wp:cover {"url":"<?php echo $fondo; ?>","alt":"Comunidad de Intertiempo","dimRatio":0,"isUserOverlayColor":true,"isDark":false,"minHeight":85,"minHeightUnit":"vh","contentPosition":"center left","align":"full","className":"newbdtr-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px","justifyContent":"left"}} -->
<div class="wp-block-cover alignfull is-light newbdtr-hero has-custom-content-position is-position-center-left" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);min-height:85vh">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="Comunidad de Intertiempo" src="<?php echo $fondo; ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"className":"newbdtr-hero__copy","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"36rem"}} -->
		<div class="wp-block-group newbdtr-hero__copy">
			<!-- wp:paragraph {"className":"newbdtr-hero__badge","textColor":"primary","fontSize":"small"} -->
			<p class="newbdtr-hero__badge has-primary-color has-text-color has-small-font-size">441 personas conectadas ahora</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">¿Qué puedes <mark style="background-color:rgba(0,0,0,0)" class="has-inline-color has-secondary-color">intercambiar</mark> hoy?</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"large"} -->
			<p class="has-on-surface-variant-color has-text-color has-large-font-size">Intercambiamos tiempo, no dinero. Creamos comunidad, compartimos vida. La red social que construye barrio.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"1rem"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"on-primary","className":"newbdtr-btn-register"} -->
				<div class="wp-block-button newbdtr-btn-register"><a class="wp-block-button__link has-on-primary-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo $register; ?>">Únete gratis</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline newbdtr-btn-login"} -->
				<div class="wp-block-button is-style-outline newbdtr-btn-login"><a class="wp-block-button__link wp-element-button" href="<?php echo $como; ?>">Descubre cómo funciona</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:columns {"className":"newbdtr-hero__stats"} -->
			<div class="wp-block-columns newbdtr-hero__stats">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">4.781</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr-stat-label","textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="newbdtr-stat-label has-on-surface-variant-color has-text-color has-small-font-size">Intercambios</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"textColor":"secondary"} -->
					<h3 class="wp-block-heading has-secondary-color has-text-color">+15.000</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr-stat-label","textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="newbdtr-stat-label has-on-surface-variant-color has-text-color has-small-font-size">Horas compartidas</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"textColor":"tertiary"} -->
					<h3 class="wp-block-heading has-tertiary-color has-text-color">13</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr-stat-label","textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="newbdtr-stat-label has-on-surface-variant-color has-text-color has-small-font-size">Proyectos</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
