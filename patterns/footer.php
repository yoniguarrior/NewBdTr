<?php

/**
 * Title: Footer
 * Slug: newbdtr/footer
 * Categories: footer, newbdtr
 * Block Types: core/template-part/footer
 * Description: Pie de página Intertiempo con navegación, recursos y contacto.
 *
 * @package NewBdTr
 */

$logo = newbdtr_img('logo_BdT.png');
$home = esc_url(home_url('/'));
$year = esc_html(gmdate('Y'));
$como = esc_url(newbdtr_page_url('como-funciona'));
$comunidad = esc_url(newbdtr_page_url('comunidad'));
$proyectos = esc_url(newbdtr_page_url('proyectos'));
$noticias = esc_url(newbdtr_page_url('noticias'));
$eventos = esc_url(newbdtr_page_url('eventos'));
$faq = esc_url(newbdtr_page_url('preguntas-frecuentes'));
$guia = esc_url(newbdtr_page_url('guia-de-uso'));
$blog = esc_url(newbdtr_page_url('blog'));
$fotos = esc_url(newbdtr_page_url('fotos'));
$contacto = esc_url(newbdtr_page_url('contacto'));
$legal = esc_url(newbdtr_page_url('aviso-legal'));
$privacidad = esc_url(newbdtr_page_url('politica-de-privacidad'));
$cookies = esc_url(newbdtr_page_url('politica-de-cookies'));
?>
<!-- wp:group {"align":"full","className":"newbdtr-footer bg-surface-container-low my-0","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-footer bg-surface-container-low my-0">
  <!-- wp:group {"align":"full","className":"newbdtr-footer__inner px-gutter pt-4 pb-3","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group newbdtr-footer__inner alignfull px-gutter pt-4 pb-3">
    <!-- wp:columns {"align":"wide","className":"newbdtr-footer__grid"} -->
    <div class="wp-block-columns alignwide newbdtr-footer__grid">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"className":"newbdtr-footer__brand","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
        <div class="wp-block-group newbdtr-footer__brand">
          <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
          <div class="wp-block-group">
            <!-- wp:image {"width":"32px","height":"32px","scale":"contain","className":"newbdtr-footer__logo"} -->
            <figure class="wp-block-image newbdtr-footer__logo is-resized"><a href="<?php echo $home; ?>"><img class="size-8 object-contain" src="<?php echo $logo; ?>" alt="Intertiempo" /></a></figure>
            <!-- /wp:image -->
            <!-- wp:paragraph {"className":"newbdtr-wordmark newbdtr-footer__wordmark text-lg lg:text-xl"} -->
            <p class="newbdtr-wordmark newbdtr-footer__wordmark text-lg lg:text-xl"><a href="<?php echo $home; ?>">Intertiempo</a></p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"small"} -->
          <p class="has-on-surface-variant-color has-small-font-size">Intercambiamos tiempo, no dinero. Creamos comunidad, compartimos vida.</p>
          <!-- /wp:paragraph -->

          <!-- wp:group {"className":"newbdtr-footer__social","layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group newbdtr-footer__social">
            <!-- wp:paragraph {"className":"newbdtr-footer__social-link newbdtr-footer__social-link--web"} -->
            <p class="newbdtr-footer__social-link newbdtr-footer__social-link--web"><a href="<?php echo $home; ?>">Web</a></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"className":"newbdtr-footer__social-link newbdtr-footer__social-link--photos"} -->
            <p class="newbdtr-footer__social-link newbdtr-footer__social-link--photos"><a href="<?php echo $fotos; ?>">Fotos</a></p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"className":"newbdtr-footer__links pt-0 md:pt-4","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group newbdtr-footer__links pt-0 md:pt-4">
          <!-- wp:group {"className":"newbdtr-footer__menu","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap"}} -->
          <div class="wp-block-group newbdtr-footer__menu">
            <!-- wp:heading {"level":4,"textColor":"primary","className":"newbdtr-footer__title"} -->
            <h4 class="wp-block-heading newbdtr-footer__title has-primary-color has-text-color">Navegación</h4>
            <!-- /wp:heading -->
            <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"space-between"},"className":"newbdtr-footer-nav"} -->
            <!-- wp:navigation-link {"label":"Cómo funciona","url":"<?php echo $como; ?>","kind":"custom"} /-->
            <!-- wp:navigation-link {"label":"Comunidad","url":"<?php echo $comunidad; ?>","kind":"custom"} /-->
            <!-- wp:navigation-link {"label":"Proyectos","url":"<?php echo $proyectos; ?>","kind":"custom"} /-->
            <!-- wp:navigation-link {"label":"Noticias","url":"<?php echo $noticias; ?>","kind":"custom"} /-->
            <!-- wp:navigation-link {"label":"Eventos","url":"<?php echo $eventos; ?>","kind":"custom"} /-->
            <!-- /wp:navigation -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group {"className":"newbdtr-footer__menu","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap"}} -->
          <div class="wp-block-group newbdtr-footer__menu">
            <!-- wp:heading {"level":4,"textColor":"primary","className":"newbdtr-footer__title"} -->
            <h4 class="wp-block-heading newbdtr-footer__title has-primary-color has-text-color">Recursos</h4>
            <!-- /wp:heading -->
            <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"space-between"},"className":"newbdtr-footer-nav"} -->
            <!-- wp:navigation-link {"label":"Preguntas frecuentes","url":"<?php echo $faq; ?>","kind":"custom"} /-->
            <!-- wp:navigation-link {"label":"Guía de uso","url":"<?php echo $guia; ?>","kind":"custom"} /-->
            <!-- wp:navigation-link {"label":"Blog","url":"<?php echo $blog; ?>","kind":"custom"} /-->
            <!-- wp:navigation-link {"label":"Contacto","url":"<?php echo $contacto; ?>","kind":"custom"} /-->
            <!-- /wp:navigation -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"className":"newbdtr-footer__help","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group newbdtr-footer__help">
          <!-- wp:heading {"level":4,"textColor":"primary","className":"newbdtr-footer__help-title"} -->
          <h4 class="wp-block-heading newbdtr-footer__help-title has-primary-color has-text-color">¿Necesitas ayuda?</h4>
          <!-- /wp:heading -->
          <!-- wp:paragraph {"className":"newbdtr-footer__help-lead","textColor":"on-surface-variant"} -->
          <p class="newbdtr-footer__help-lead has-on-surface-variant-color has-text-color">Contáctanos directamente vía WhatsApp o mail.</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph {"className":"newbdtr-footer__contact newbdtr-footer__contact--phone"} -->
          <p class="newbdtr-footer__contact newbdtr-footer__contact--phone"><a href="https://wa.me/34649732486">649 73 24 86</a></p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph {"className":"newbdtr-footer__contact newbdtr-footer__contact--mail"} -->
          <p class="newbdtr-footer__contact newbdtr-footer__contact--mail"><a href="mailto:info@bancodeltiemporivas.org">info@bancodeltiemporivas.org</a></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"align":"full","className":"newbdtr-footer__inner px-gutter py-0 border-t border-outline-variant/60","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group newbdtr-footer__inner alignfull px-gutter py-0 border-t border-outline-variant/60">
  <!-- wp:group {"align":"wide","className":"newbdtr-footer__legal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
  <div class="wp-block-group alignwide newbdtr-footer__legal">
    <!-- wp:paragraph {"className":"newbdtr-footer__copy"} -->
    <p class="newbdtr-footer__copy">© <?php echo $year; ?> Intertiempo – Banco del Tiempo de Rivas | Hacemos barrio</p>
    <!-- /wp:paragraph -->
    <!-- wp:group {"className":"newbdtr-footer__legal-links","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group newbdtr-footer__legal-links">
      <!-- wp:paragraph -->
      <p><a href="<?php echo $legal; ?>">Aviso legal</a></p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p><a href="<?php echo $privacidad; ?>">Privacidad</a></p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p><a href="<?php echo $cookies; ?>">Cookies</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
  </div>
  <!-- /wp:group -->  
</div>
<!-- /wp:group -->