<?php
/**
 * Title: Servicios populares
 * Slug: newbdtr/home-services
 * Categories: newbdtr
 * Description: Cuatro servicios más realizados en los últimos 120 días.
 *
 * @package NewBdTr
 */

$comunidad = esc_url(newbdtr_page_url('comunidad'));
$services = newbdtr_get_popular_services();
$tag_modifiers = array('primary', 'secondary', 'tertiary');
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
			<p class="has-on-surface-variant-color has-text-color">Lo que más se ha intercambiado últimamente</p>
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
		<?php foreach ($services as $index => $service) :
			$modifier = $tag_modifiers[$index % count($tag_modifiers)];
		?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"newbdtr-card hover-lift","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-card hover-lift">
				<!-- wp:group {"className":"newbdtr-card__media","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group newbdtr-card__media">
					<!-- wp:image {"scale":"cover","sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="<?php echo esc_url($service['image']); ?>" alt="<?php echo esc_attr($service['name']); ?>" style="object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"newbdtr-card__tag newbdtr-card__tag--<?php echo esc_attr($modifier); ?>"} -->
					<p class="newbdtr-card__tag newbdtr-card__tag--<?php echo esc_attr($modifier); ?>"><?php echo esc_html($service['type']); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"px-6 py-4 m-0!","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group px-6 py-4 m-0!">
					<!-- wp:heading {"level":5} -->
					<h5 class="wp-block-heading"><?php echo esc_html($service['name']); ?></h5>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
