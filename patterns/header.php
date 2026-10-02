<?php

/**
 * Title: Header
 * Slug: newbdtr/header
 * Categories: header, newbdtr
 * Block Types: core/template-part/header
 * Description: Cabecera fija Intertiempo con logo, navegación y acceso.
 *
 * @package NewBdTr
 */

$logo = newbdtr_img('logo_BdT.png');
$home = esc_url(home_url('/'));
$como = esc_url(newbdtr_page_url('como-funciona'));
$comunidad = esc_url(newbdtr_page_url('comunidad'));
$proyectos = esc_url(newbdtr_page_url('proyectos'));
$noticias = esc_url(newbdtr_page_url('noticias'));
$eventos = esc_url(newbdtr_page_url('eventos'));
$fotos = esc_url(newbdtr_page_url('fotos'));
$escolar = esc_url(newbdtr_page_url('bdtescolar'));
$blog = esc_url(newbdtr_page_url('blog'));
$contacto = esc_url(newbdtr_page_url('contacto'));
$register = esc_url(newbdtr_page_url('register'));
$login = esc_url(wp_login_url());
$logged_in = is_user_logged_in();
$appbar = newbdtr_appbar_items();
?>
<?php if ($appbar) : ?>
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Menú de cuenta","className":"newbdtr-appbar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
<?php foreach ($appbar as $item) :
  $icon = preg_replace('/^dashicons-/', '', (string) $item['icon']);
  $label = substr(wp_json_encode((string) $item['label']), 1, -1);
  $url = substr(wp_json_encode((string) $item['url']), 1, -1);
?>
<!-- wp:navigation-link {"label":"<?php echo $label; ?>","url":"<?php echo $url; ?>","kind":"custom","className":"newbdtr-appbar__item newbdtr-appbar__item--<?php echo esc_attr($icon); ?>"} /-->
<?php endforeach; ?>
<!-- /wp:navigation -->
<?php endif; ?>
<!-- wp:group {"tagName":"div","align":"full","className":"newbdtr-header glass-nav border-b border-outline-variant/30","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-header glass-nav border-b border-outline-variant/30">
  <!-- wp:group {"align":"wide","className":"newbdtr-header__bar px-gutter xl:px-0","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
  <div class="wp-block-group alignwide newbdtr-header__bar px-gutter xl:px-0">
    <!-- wp:group {"className":"newbdtr-brand","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
    <div class="wp-block-group newbdtr-brand">
      <!-- wp:image {"width":"40px","height":"40px","scale":"contain","url":"<?php echo $logo; ?>","alt":"Intertiempo","className":"newbdtr-logo w-8 lg:w-9 xl:w-10","href":"<?php echo $home; ?>"} -->
      <figure class="wp-block-image is-resized newbdtr-logo w-8 lg:w-9 xl:w-10">
        <a href="<?php echo $home; ?>">
          <img src="<?php echo $logo; ?>" alt="Intertiempo" style="object-fit:contain;width:40px;height:40px" />
        </a>
      </figure>
      <!-- /wp:image -->

      <!-- wp:paragraph {"className":"newbdtr-wordmark text-lg lg:text-xl xl:text-2xl"} -->
      <p class="newbdtr-wordmark text-lg lg:text-xl xl:text-2xl">
        <a href="<?php echo $home; ?>">Intertiempo</a>
      </p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"background","overlayTextColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"className":"newbdtr-nav"} -->
    <!-- wp:navigation-link {"label":"Inicio","url":"<?php echo $home; ?>","kind":"custom"} /-->
    <!-- wp:navigation-link {"label":"Cómo funciona","url":"<?php echo $como; ?>","kind":"custom"} /-->
    <!-- wp:navigation-link {"label":"Comunidad","url":"<?php echo $comunidad; ?>","kind":"custom"} /-->
    <!-- wp:navigation-link {"label":"Proyectos","url":"<?php echo $proyectos; ?>","kind":"custom"} /-->
    <!-- wp:navigation-submenu {"label":"Noticias y Eventos","url":"#","kind":"custom"} -->
    <!-- wp:navigation-link {"label":"Noticias","url":"<?php echo $noticias; ?>","kind":"custom"} /-->
    <!-- wp:navigation-link {"label":"Eventos","url":"<?php echo $eventos; ?>","kind":"custom"} /-->
    <!-- wp:navigation-link {"label":"Fotos","url":"<?php echo $fotos; ?>","kind":"custom"} /-->
    <!-- wp:navigation-link {"label":"BdT escolar","url":"<?php echo $escolar; ?>","kind":"custom"} /-->
    <!-- wp:navigation-link {"label":"Blog","url":"<?php echo $blog; ?>","kind":"custom"} /-->
    <!-- /wp:navigation-submenu -->
    <!-- wp:navigation-link {"label":"Contacto","url":"<?php echo $contacto; ?>","kind":"custom"} /-->
    <!-- /wp:navigation -->

    <?php if (!$logged_in) : ?>
      <!-- wp:buttons {"className":"newbdtr-header-cta"} -->
      <div class="wp-block-buttons newbdtr-header-cta">
        <!-- wp:button {"className":"newbdtr-btn-login"} -->
        <div class="wp-block-button newbdtr-btn-login"><a class="wp-block-button__link wp-element-button" href="<?php echo $login; ?>">Entrar</a></div>
        <!-- /wp:button -->
        <!-- wp:button {"className":"newbdtr-btn-register"} -->
        <div class="wp-block-button newbdtr-btn-register"><a class="wp-block-button__link wp-element-button" href="<?php echo $register; ?>">Unirse</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    <?php endif; ?>
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->