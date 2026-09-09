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
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","className":"newbdtr-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section has-surface-container-low-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Servicios populares</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Lo que más se está moviendo esta semana en la comunidad</p>
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
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"newbdtr-card hover-lift","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-card hover-lift">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo $ingles; ?>" alt="Clases de inglés" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
					<!-- wp:paragraph {"className":"newbdtr-card__tag","fontSize":"small"} -->
					<p class="newbdtr-card__tag has-small-font-size">Idiomas</p>
					<!-- /wp:paragraph -->
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
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo $bricolaje; ?>" alt="Bricolaje" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
					<!-- wp:paragraph {"className":"newbdtr-card__tag","fontSize":"small"} -->
					<p class="newbdtr-card__tag has-small-font-size">Reparaciones domésticas</p>
					<!-- /wp:paragraph -->
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
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo $internet; ?>" alt="Manejar internet" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
					<!-- wp:paragraph {"className":"newbdtr-card__tag","fontSize":"small"} -->
					<p class="newbdtr-card__tag has-small-font-size">Informática</p>
					<!-- /wp:paragraph -->
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
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo $mascotas; ?>" alt="Cuidado de animales" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
					<!-- wp:paragraph {"className":"newbdtr-card__tag","fontSize":"small"} -->
					<p class="newbdtr-card__tag has-small-font-size">Atención a animales</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Cuidado animales</h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
