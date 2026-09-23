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
<!-- wp:cover {"url":"<?php echo $fondo; ?>","alt":"Comunidad de Intertiempo","dimRatio":100,"isUserOverlayColor":true,"isDark":false,"align":"full","className":"newbdtr-hero my-0 mb-0 min-h-[85vh]! py-8 px-4 sm:py-section-padding sm:px-gutter"} -->
<div class="wp-block-cover alignfull is-light newbdtr-hero my-0 mb-0 min-h-[85vh]! py-8 px-4 sm:py-section-padding sm:px-gutter">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient bg-linear-45 from-background via-background/60 to-transparent"></span>
	<img class="wp-block-cover__image-background" alt="Comunidad de Intertiempo" src="<?php echo $fondo; ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"className":"newbdtr-hero__copy","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"720px"}} -->
		<div class="wp-block-group newbdtr-hero__copy">
			<!-- wp:paragraph {"className":"newbdtr-hero__badge","textColor":"primary"} -->
			<p class="newbdtr-hero__badge has-primary-color has-text-color">441 personas conectadas ahora</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"newbdtr-hero__title text-3xl sm:text-4xl md:text-5xl"} -->
			<h1 class="wp-block-heading newbdtr-hero__title text-3xl sm:text-4xl md:text-5xl">¿Qué puedes <mark class="bg-transparent has-inline-color has-secondary-color">intercambiar</mark> hoy?</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"newbdtr-hero__lead text-base md:text-[1.125rem] md:leading-[1.6rem]","textColor":"on-surface-variant"} -->
			<p class="newbdtr-hero__lead text-[1.0625rem] leading-[1.5rem] md:text-[1.125rem] md:leading-[1.6rem]">Intercambiamos tiempo, no dinero. Creamos comunidad, compartimos vida. La red social que construye barrio.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"newbdtr-hero__actions","style":{"spacing":{"blockGap":"1rem"}}} -->
			<div class="wp-block-buttons newbdtr-hero__actions">
				<!-- wp:button {"backgroundColor":"primary","textColor":"on-primary","className":"newbdtr-hero__btn-primary"} -->
				<div class="wp-block-button newbdtr-hero__btn-primary"><a class="wp-block-button__link has-on-primary-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo $register; ?>">Únete gratis</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"newbdtr-hero__btn-secondary"} -->
				<div class="wp-block-button newbdtr-hero__btn-secondary"><a class="wp-block-button__link wp-element-button" href="<?php echo $como; ?>">Descubre cómo funciona</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:columns {"className":"newbdtr-hero__stats gap-4! sm:gap-6! md:gap-8!","isStackedOnMobile":false} -->
			<div class="wp-block-columns newbdtr-hero__stats is-not-stacked-on-mobile gap-4! sm:gap-6! md:gap-8!">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"className":"newbdtr-hero__stat-value text-2xl! sm:text-3xl!"} -->
					<h3 class="wp-block-heading newbdtr-hero__stat-value text-2xl! sm:text-3xl!">4.781</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr__stat-label text-[10px] sm:text-xs"} -->
					<p class="newbdtr__stat-label has-on-surface-variant-color has-text-color text-[10px] sm:text-xs">Intercambios</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"className":"newbdtr-hero__stat-value text-2xl! sm:text-3xl!","textColor":"secondary"} -->
					<h3 class="wp-block-heading newbdtr-hero__stat-value has-secondary-color has-text-color text-2xl! sm:text-3xl!">+15.000</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr-stat-label text-[10px] sm:text-xs"} -->
					<p class="newbdtr__stat-label has-on-surface-variant-color has-text-color text-[10px] sm:text-xs">Horas compartidas</p>
					<!--
           /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"className":"newbdtr-hero__stat-value text-2xl! sm:text-3xl!","textColor":"tertiary"} -->
					<h3 class="wp-block-heading newbdtr-hero__stat-value has-tertiary-color has-text-color text-2xl! sm:text-3xl!">13</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr-stat-label text-[10px] sm:text-xs"} -->
					<p class="newbdtr__stat-label has-on-surface-variant-color has-text-color text-[10px] sm:text-xs">Proyectos</p>
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
