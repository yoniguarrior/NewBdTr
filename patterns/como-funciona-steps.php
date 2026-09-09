<?php
/**
 * Title: Pasos para unirse
 * Slug: newbdtr/como-funciona-steps
 * Categories: newbdtr
 *
 * @package NewBdTr
 */

$register = esc_url(newbdtr_page_url('register'));
$fondo3 = newbdtr_img('fondo3.png');
$fondo4 = newbdtr_img('fondo4.png');
$fondo5 = newbdtr_img('fondo5.png');
$fondo2 = newbdtr_img('fondo2.png');
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","className":"newbdtr-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section has-surface-container-low-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center">Cómo unirse a la comunidad de intercambio</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"on-surface-variant"} -->
		<p class="has-text-align-center has-on-surface-variant-color has-text-color">Sigue estos pasos para unirte a una comunidad que construye barrio.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"newbdtr-step__num newbdtr-step__num--1"} -->
			<p class="newbdtr-step__num newbdtr-step__num--1">1</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Regístrate y forma parte</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Cualquier persona que resida o trabaje en Rivas puede unirse.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">La inscripción se gestiona en la <strong>Secretaría de la Asociación Intertiempo</strong> (Casa de Asociaciones de Barrio Oeste). Puede solicitarse vía web, rellenando este <a href="<?php echo $register; ?>">formulario</a>, o presencialmente en la propia Secretaría.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"newbdtr-note","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"12px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group newbdtr-note has-background-background-color has-background" style="border-radius:12px;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
				<p class="has-on-surface-variant-color has-text-color has-small-font-size">Una vez realizada la inscripción, se te entrevistará para conocerte un poco mejor y orientarte y, finalmente se aprobará y formalizará tu alta en la comunidad.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
				<p class="has-on-surface-variant-color has-text-color has-small-font-size">Dispondrás de un nombre de usuaria/o y una contraseña para acceder a la web y poder iniciar el intercambio de servicios con otros usuarios.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"7/5","scale":"cover","sizeSlug":"large","className":"newbdtr-rounded-media"} -->
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo3; ?>" alt="Bienvenida a un nuevo miembro" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"7/5","scale":"cover","sizeSlug":"large","className":"newbdtr-rounded-media"} -->
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo4; ?>" alt="Ofrece y busca servicios" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"newbdtr-step__num newbdtr-step__num--2"} -->
			<p class="newbdtr-step__num newbdtr-step__num--2">2</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Ofrece/Busca</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Registra, modifica, actualiza los servicios que ofreces y demandas en la web. Localiza usuarios que ofrezcan servicios en los que estés interesada/o.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"newbdtr-step__num newbdtr-step__num--3"} -->
			<p class="newbdtr-step__num newbdtr-step__num--3">3</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Conecta</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Ponte en contacto con quien solicita tu ayuda o con quien ofrece el servicio que necesitas para acordar los detalles.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"7/5","scale":"cover","sizeSlug":"large","className":"newbdtr-rounded-media"} -->
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo5; ?>" alt="Conecta con la comunidad" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"7/5","scale":"cover","sizeSlug":"large","className":"newbdtr-rounded-media"} -->
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo2; ?>" alt="Intercambio completado" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"newbdtr-step__num newbdtr-step__num--4"} -->
			<p class="newbdtr-step__num newbdtr-step__num--4">4</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Intercambia</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Una vez realizado el servicio, se registrará en la web el tipo de servicio, la duración, usuario que ofrece y usuario que recibe.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item -->
				<li>El usuario que recibe el servicio es el encargado de registrarlo.</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>La duración en horas quedará registrada en positivo para el ofertante y en negativo para el receptor.</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
