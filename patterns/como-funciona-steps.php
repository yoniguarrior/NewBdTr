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
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","className":"newbdtr-section newbdtr-cf newbdtr-cf-steps py-section-padding px-gutter","style":{"spacing":{"blockGap":"4rem"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-cf newbdtr-cf-steps has-surface-container-low-background-color has-background py-section-padding px-gutter">
	<!-- wp:group {"className":"newbdtr-cf-steps__head","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group newbdtr-cf-steps__head">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center">Cómo unirse a la comunidad de intercambio</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"on-surface-variant","className":"newbdtr-cf-steps__lead"} -->
		<p class="has-text-align-center has-on-surface-variant-color has-text-color newbdtr-cf-steps__lead">Sigue estos pasos para unirte a una comunidad que construye barrio.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","className":"newbdtr-cf-row newbdtr-cf-row--image-first","style":{"spacing":{"blockGap":"4rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center newbdtr-cf-row newbdtr-cf-row--image-first">
		<!-- wp:column {"verticalAlignment":"center","className":"newbdtr-cf-step"} -->
		<div class="wp-block-column is-vertically-aligned-center newbdtr-cf-step">
			<!-- wp:paragraph {"className":"newbdtr-cf-num newbdtr-cf-num--1"} -->
			<p class="newbdtr-cf-num newbdtr-cf-num--1">1</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Regístrate y forma parte</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Cualquier persona que resida o trabaje en Rivas puede unirse.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">La inscripción se gestiona en la <strong>Secretaría de la Asociación Intertiempo</strong> (Casa de Asociaciones de Barrio Oeste).</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"newbdtr-cf-note","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group newbdtr-cf-note">
				<!-- wp:paragraph {"className":"newbdtr-cf-note__item newbdtr-cf-note__item--edit"} -->
				<p class="newbdtr-cf-note__item newbdtr-cf-note__item--edit">Puede solicitarse vía web, rellenando este <a href="<?php echo $register; ?>">formulario</a>, o presencialmente en la propia <strong>Secretaría de la Asociación Intertiempo</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"newbdtr-cf-note__item newbdtr-cf-note__item--info"} -->
				<p class="newbdtr-cf-note__item newbdtr-cf-note__item--info">Una vez realizada la inscripción, se te entrevistará para conocerte un poco mejor y orientarte y, finalmente, se aprobará y formalizará tu alta en la comunidad</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"newbdtr-cf-note__item newbdtr-cf-note__item--id"} -->
				<p class="newbdtr-cf-note__item newbdtr-cf-note__item--id">Dispondrás de un nombre de usuaria/o y una contraseña para acceder a la web y poder iniciar el intercambio de servicios con otros usuarios.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"7/5","scale":"cover","sizeSlug":"large","className":"newbdtr-rounded-media"} -->
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo3; ?>" alt="Vecinos adultos de Rivas dando una cálida bienvenida a un nuevo miembro del Banco del Tiempo" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","className":"newbdtr-cf-row","style":{"spacing":{"blockGap":"4rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center newbdtr-cf-row">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"7/5","scale":"cover","sizeSlug":"large","className":"newbdtr-rounded-media"} -->
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo4; ?>" alt="Reloj de tiempo y manos" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","className":"newbdtr-cf-step"} -->
		<div class="wp-block-column is-vertically-aligned-center newbdtr-cf-step">
			<!-- wp:paragraph {"className":"newbdtr-cf-num newbdtr-cf-num--2"} -->
			<p class="newbdtr-cf-num newbdtr-cf-num--2">2</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Ofrece/Busca</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Registra, modifica, actualiza los servicios que ofreces y demandas en la web. Localiza usuarios que ofrezcan servicios en los que estés interesada/o</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","className":"newbdtr-cf-row newbdtr-cf-row--image-first","style":{"spacing":{"blockGap":"4rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center newbdtr-cf-row newbdtr-cf-row--image-first">
		<!-- wp:column {"verticalAlignment":"center","className":"newbdtr-cf-step"} -->
		<div class="wp-block-column is-vertically-aligned-center newbdtr-cf-step">
			<!-- wp:paragraph {"className":"newbdtr-cf-num newbdtr-cf-num--3"} -->
			<p class="newbdtr-cf-num newbdtr-cf-num--3">3</p>
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
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo5; ?>" alt="Vecina coordinando actividades comunitarias por teléfono en Rivas" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","className":"newbdtr-cf-row","style":{"spacing":{"blockGap":"4rem"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center newbdtr-cf-row">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"7/5","scale":"cover","sizeSlug":"large","className":"newbdtr-rounded-media"} -->
			<figure class="wp-block-image size-large newbdtr-rounded-media"><img src="<?php echo $fondo2; ?>" alt="Dos vecinos de Rivas sonriendo tras completar una tarea juntos" style="aspect-ratio:7/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","className":"newbdtr-cf-step"} -->
		<div class="wp-block-column is-vertically-aligned-center newbdtr-cf-step">
			<!-- wp:paragraph {"className":"newbdtr-cf-num newbdtr-cf-num--4"} -->
			<p class="newbdtr-cf-num newbdtr-cf-num--4">4</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Intercambia</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"on-surface-variant"} -->
			<p class="has-on-surface-variant-color has-text-color">Una vez realizado el servicio, se registrará en la web el tipo de servicio, la duración, usuario que ofrece y usuario que recibe.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"newbdtr-cf-checks","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group newbdtr-cf-checks">
				<!-- wp:paragraph {"className":"newbdtr-cf-check"} -->
				<p class="newbdtr-cf-check">El usuario que recibe el servicio es el encargado de registrarlo.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"newbdtr-cf-check"} -->
				<p class="newbdtr-cf-check">La duración en horas quedará registrada en positivo para el ofertante y en negativo para el receptor.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
