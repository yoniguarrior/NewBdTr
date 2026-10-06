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
$facts = newbdtr_get_facts();
$hero_alt = esc_attr('Comunidad de Intertiempo');
?>
<!-- wp:cover {"url":"<?php echo $fondo; ?>","alt":"<?php echo $hero_alt; ?>","isUserOverlayColor":true,"isDark":false,"align":"full","className":"newbdtr-hero my-0 mb-0 min-h-[85vh]! py-8 px-4 sm:py-section-padding sm:px-gutter"} -->
<div class="wp-block-cover alignfull is-light newbdtr-hero my-0 mb-0 min-h-[85vh]! py-8 px-4 sm:py-section-padding sm:px-gutter">
	<img class="wp-block-cover__image-background" alt="<?php echo $hero_alt; ?>" src="<?php echo $fondo; ?>" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"className":"newbdtr-hero__copy","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"720px"}} -->
		<div class="wp-block-group newbdtr-hero__copy">
			<!-- wp:paragraph {"className":"newbdtr-hero__badge text-base! sm:text-lg! md:text-xl!","textColor":"primary"} -->
			<p class="newbdtr-hero__badge text-base! sm:text-lg! md:text-xl! has-primary-color has-text-color"><?php
				printf(
					esc_html('%s personas conectadas ahora'),
					esc_html($facts['users'])
				);
			?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"newbdtr-hero__title"} -->
			<h1 class="wp-block-heading newbdtr-hero__title"><?php
				echo wp_kses(
					'¿Qué puedes <mark class="bg-transparent has-inline-color has-secondary-color">intercambiar</mark> hoy?',
					array(
						'mark' => array(
							'class' => array(),
						),
					)
				);
			?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"newbdtr-hero__lead text-[1.0625rem] leading-[1.5rem] md:text-[1.125rem] md:leading-[1.6rem]","textColor":"on-surface-variant"} -->
			<p class="newbdtr-hero__lead text-[1.0625rem] leading-[1.5rem] md:text-[1.125rem] md:leading-[1.6rem] has-on-surface-variant-color has-text-color"><?php echo esc_html('Intercambiamos tiempo, no dinero. Creamos comunidad, compartimos vida. La red social que construye barrio.'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"newbdtr-hero__actions","style":{"spacing":{"blockGap":"1rem"}}} -->
			<div class="wp-block-buttons newbdtr-hero__actions">
				<!-- wp:button {"backgroundColor":"primary","textColor":"on-primary","className":"newbdtr-hero__btn-primary"} -->
				<div class="wp-block-button newbdtr-hero__btn-primary"><a class="wp-block-button__link has-on-primary-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo $register; ?>"><?php echo esc_html('Únete gratis'); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"newbdtr-hero__btn-secondary"} -->
				<div class="wp-block-button newbdtr-hero__btn-secondary"><a class="wp-block-button__link wp-element-button" href="<?php echo $como; ?>"><?php echo esc_html('Descubre cómo funciona'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:columns {"isStackedOnMobile":false,"className":"newbdtr-hero__stats gap-4! sm:gap-6! md:gap-8!"} -->
			<div class="wp-block-columns is-not-stacked-on-mobile newbdtr-hero__stats gap-4! sm:gap-6! md:gap-8!">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"className":"newbdtr-hero__stat-value","textColor":"primary"} -->
					<h3 class="wp-block-heading newbdtr-hero__stat-value has-primary-color has-text-color"><?php echo esc_html($facts['exchanges']); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr__stat-label has-on-surface-variant-color has-text-color"} -->
					<p class="newbdtr__stat-label has-on-surface-variant-color has-text-color"><?php echo esc_html('Intercambios'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"className":"newbdtr-hero__stat-value","textColor":"secondary"} -->
					<h3 class="wp-block-heading newbdtr-hero__stat-value has-secondary-color has-text-color"><?php echo esc_html($facts['hours']); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr__stat-label has-on-surface-variant-color has-text-color"} -->
					<p class="newbdtr__stat-label has-on-surface-variant-color has-text-color"><?php echo esc_html('Horas compartidas'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"className":"newbdtr-hero__stat-value","textColor":"tertiary"} -->
					<h3 class="wp-block-heading newbdtr-hero__stat-value has-tertiary-color has-text-color"><?php echo esc_html($facts['projects']); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"newbdtr__stat-label has-on-surface-variant-color has-text-color"} -->
					<p class="newbdtr__stat-label has-on-surface-variant-color has-text-color"><?php echo esc_html('Proyectos'); ?></p>
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
