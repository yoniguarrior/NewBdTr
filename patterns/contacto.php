<?php
/**
 * Title: Contacto
 * Slug: newbdtr/contacto
 * Categories: newbdtr
 * Description: Datos de la asociación y formulario de contacto.
 *
 * @package NewBdTr
 */

$phone_url = 'tel:+34649732486';
$mail = 'info@bancodeltiemporivas.org';
$mail_url = 'mailto:' . $mail;
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","className":"newbdtr-section newbdtr-contact my-0 py-8 px-4 sm:py-section-padding sm:px-gutter","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-section newbdtr-contact has-surface-container-low-background-color has-background my-0 py-8 px-4 sm:py-section-padding sm:px-gutter">
	<!-- wp:columns {"align":"wide","className":"newbdtr-contact__grid"} -->
	<div class="wp-block-columns alignwide newbdtr-contact__grid">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":1,"className":"newbdtr-contact__title"} -->
			<h1 class="wp-block-heading newbdtr-contact__title">Contacta con nosotros</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"newbdtr-contact__lead","textColor":"on-surface-variant"} -->
			<p class="newbdtr-contact__lead has-on-surface-variant-color has-text-color">Estamos aquí para resolver tus dudas, escucharte o simplemente darte la bienvenida a la comunidad.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"newbdtr-contact__items","layout":{"type":"default"}} -->
			<div class="wp-block-group newbdtr-contact__items">
				<!-- wp:group {"className":"newbdtr-contact__item newbdtr-contact__item--place","layout":{"type":"default"}} -->
				<div class="wp-block-group newbdtr-contact__item newbdtr-contact__item--place">
					<!-- wp:group {"className":"newbdtr-contact__item-copy","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group newbdtr-contact__item-copy">
						<!-- wp:paragraph {"className":"newbdtr-contact__item-title"} -->
						<p class="newbdtr-contact__item-title">Visítanos</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"newbdtr-contact__item-text","textColor":"on-surface-variant"} -->
						<p class="newbdtr-contact__item-text has-on-surface-variant-color has-text-color">Secretaría de la Asociación Intertiempo<br>Casa de Asociaciones de Barrio Oeste<br>Rivas-Vaciamadrid</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"newbdtr-contact__item newbdtr-contact__item--phone","layout":{"type":"default"}} -->
				<div class="wp-block-group newbdtr-contact__item newbdtr-contact__item--phone">
					<!-- wp:group {"className":"newbdtr-contact__item-copy","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group newbdtr-contact__item-copy">
						<!-- wp:paragraph {"className":"newbdtr-contact__item-title"} -->
						<p class="newbdtr-contact__item-title">Llámanos</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"newbdtr-contact__item-text"} -->
						<p class="newbdtr-contact__item-text"><a href="<?php echo esc_url($phone_url); ?>">649 73 24 86</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"newbdtr-contact__item newbdtr-contact__item--mail","layout":{"type":"default"}} -->
				<div class="wp-block-group newbdtr-contact__item newbdtr-contact__item--mail">
					<!-- wp:group {"className":"newbdtr-contact__item-copy","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group newbdtr-contact__item-copy">
						<!-- wp:paragraph {"className":"newbdtr-contact__item-title"} -->
						<p class="newbdtr-contact__item-title">Escríbenos</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"newbdtr-contact__item-text"} -->
						<p class="newbdtr-contact__item-text"><a href="<?php echo esc_url($mail_url); ?>"><?php echo esc_html($mail); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"newbdtr-contact__card","layout":{"type":"default"}} -->
			<div class="wp-block-group newbdtr-contact__card">
				<!-- wp:shortcode -->
				[contact-form-7 id="35aee48" title="Formulario de contacto"]
				<!-- /wp:shortcode -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
