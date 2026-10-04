<?php
/**
 * Title: Servicios populares
 * Slug: newbdtr/home-services
 * Categories: newbdtr
 * Description: Cuatro servicios destacados de la comunidad.
 *
 * @package NewBdTr
 */

$comunidad = esc_url(newbdtr_page_url('comunidad'));
$ingles = newbdtr_img('clases_up.png');
$bricolaje = newbdtr_img('montar_muebles.jpeg');
$internet = newbdtr_img('moviles.png');
$mascotas = newbdtr_img('mascotas_en.jpeg');
$popular = newbdtr_get_popular_services();
$lead = $popular['items']
  ? newbdtr_popular_services_lead($popular['window'])
  : 'Lo que más se está moviendo esta semana en la comunidad';
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","className":"newbdtr-section newbdtr-services py-8 px-4 sm:py-section-padding sm:px-gutter","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-services has-surface-container-low-background-color has-background py-8 px-4 sm:py-section-padding sm:px-gutter">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Servicios populares</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color"><?php echo esc_html($lead); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"className":"newbdtr-section__link"} -->
		<p class="newbdtr-section__link"><a href="<?php echo $comunidad; ?>">Ver todos</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"newbdtr-cards"} -->
	<div class="wp-block-columns alignwide newbdtr-cards">
		<?php if ($popular['items']) : ?>
			<?php echo newbdtr_popular_services_cards_html($popular['items']); ?>
		<?php else : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"newbdtr-card hover-lift","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-card hover-lift">
				<!-- wp:group {"className":"newbdtr-card__media","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-card__media">
					<!-- wp:image {"scale":"cover","sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="<?php echo $ingles; ?>" alt="Clases de inglés" style="object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"newbdtr-card__tag newbdtr-card__tag--primary"} -->
					<p class="newbdtr-card__tag newbdtr-card__tag--primary">Idiomas</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"p-6","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group p-6">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Inglés</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"newbdtr-card hover-lift","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-card hover-lift">
				<!-- wp:group {"className":"newbdtr-card__media","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-card__media">
					<!-- wp:image {"scale":"cover","sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="<?php echo $bricolaje; ?>" alt="Bricolaje" style="object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"newbdtr-card__tag newbdtr-card__tag--secondary"} -->
					<p class="newbdtr-card__tag newbdtr-card__tag--secondary">Reparaciones domésticas</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"p-6","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group p-6">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Bricolaje</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"newbdtr-card hover-lift","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-card hover-lift">
				<!-- wp:group {"className":"newbdtr-card__media","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-card__media">
					<!-- wp:image {"scale":"cover","sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="<?php echo $internet; ?>" alt="Manejar internet" style="object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"newbdtr-card__tag newbdtr-card__tag--tertiary"} -->
					<p class="newbdtr-card__tag newbdtr-card__tag--tertiary">Informática</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"p-6","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group p-6">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Manejar internet</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"newbdtr-card hover-lift","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-card hover-lift">
				<!-- wp:group {"className":"newbdtr-card__media","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-card__media">
					<!-- wp:image {"scale":"cover","sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="<?php echo $mascotas; ?>" alt="Cuidado de animales" style="object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"newbdtr-card__tag newbdtr-card__tag--primary"} -->
					<p class="newbdtr-card__tag newbdtr-card__tag--primary">Atención a animales</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"p-6","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group p-6">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Cuidado animales</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endif; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
