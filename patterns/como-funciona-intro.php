<?php
/**
 * Title: Qué es un Banco del Tiempo
 * Slug: newbdtr/como-funciona-intro
 * Categories: newbdtr
 *
 * @package NewBdTr
 */

$fondo = newbdtr_img('fondo1.png');
?>
<!-- wp:group {"align":"full","className":"newbdtr-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">¿Qué es un <mark style="background-color:rgba(0,0,0,0)" class="has-inline-color has-secondary-color">Banco del Tiempo</mark>?</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"large"} -->
			<p class="has-on-surface-variant-color has-text-color has-large-font-size">Es una red de ayuda mutua donde el dinero no existe. Aquí, la unidad de valor es la <strong>hora</strong>. No importa el servicio que ofrezcas o recibas: todas las habilidades valen lo mismo.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"large"} -->
			<p class="has-on-surface-variant-color has-text-color has-large-font-size">Intercambiamos tiempo para resolver necesidades cotidianas, desde clases de idiomas hasta pequeñas reparaciones en el hogar. Es pura reciprocidad vecinal para construir un barrio más humano y conectado.</p>
			<!-- /wp:paragraph -->

			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":4} -->
					<h4 class="wp-block-heading">Igualdad total</h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">1 hora siempre vale 1 hora</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":4} -->
					<h4 class="wp-block-heading">Sin dinero</h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
					<p class="has-on-surface-variant-color has-text-color has-small-font-size">Economía colaborativa</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"7/5","scale":"cover","sizeSlug":"large","className":"newbdtr-rounded-media"} -->
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo; ?>" alt="Concepto de Banco del Tiempo" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
