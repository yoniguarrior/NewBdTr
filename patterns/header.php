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
$escolar = esc_url(newbdtr_page_url('bdtescolar'));
$blog = esc_url(newbdtr_page_url('blog'));
$contacto = esc_url(newbdtr_page_url('contacto'));
$register = esc_url(newbdtr_page_url('register'));
$profile = esc_url(newbdtr_page_url('profile'));
$login = esc_url(wp_login_url());
$logged_in = is_user_logged_in();
?>
<!-- wp:group {"tagName":"div","align":"full","className":"newbdtr-header glass-nav border-b border-outline-variant/30","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull newbdtr-header glass-nav border-b border-outline-variant/30">
	<!-- wp:group {"align":"wide","className":"newbdtr-header__bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide newbdtr-header__bar">
		<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
      <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
      <div class="wp-block-group">
        <!-- wp:image {"width":"40px","height":"40px","scale":"contain","url":"<?php echo $logo; ?>","alt":"Intertiempo","className":"newbdtr-logo","href":"<?php echo $home; ?>"} -->
        <figure class="wp-block-image newbdtr-logo is-resized"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" alt="Intertiempo" style="object-fit:contain;width:40px;height:40px"/></a></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"className":"newbdtr-wordmark"} -->
        <p class="newbdtr-wordmark"><a href="<?php echo $home; ?>">Intertiempo</a></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

			<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"background","overlayTextColor":"primary","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"},"className":"newbdtr-nav"} -->
				<!-- wp:navigation-link {"label":"Inicio","url":"<?php echo $home; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Cómo funciona","url":"<?php echo $como; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Comunidad","url":"<?php echo $comunidad; ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Proyectos","url":"<?php echo $proyectos; ?>","kind":"custom"} /-->
				<!-- wp:navigation-submenu {"label":"Noticias y Eventos","url":"#","kind":"custom"} -->
					<!-- wp:navigation-link {"label":"Noticias","url":"<?php echo $noticias; ?>","kind":"custom"} /-->
					<!-- wp:navigation-link {"label":"Eventos","url":"<?php echo $eventos; ?>","kind":"custom"} /-->
					<!-- wp:navigation-link {"label":"BdT escolar","url":"<?php echo $escolar; ?>","kind":"custom"} /-->
					<!-- wp:navigation-link {"label":"Blog","url":"<?php echo $blog; ?>","kind":"custom"} /-->
				<!-- /wp:navigation-submenu -->
				<!-- wp:navigation-link {"label":"Contacto","url":"<?php echo $contacto; ?>","kind":"custom"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"className":"newbdtr-header-cta"} -->
		<div class="wp-block-buttons newbdtr-header-cta">
			<?php if ($logged_in) : ?>
			<!-- wp:button {"className":"newbdtr-btn-profile"} -->
			<div class="wp-block-button newbdtr-btn-profile"><a class="wp-block-button__link wp-element-button" href="<?php echo $profile; ?>">Mi cuenta</a></div>
			<!-- /wp:button -->
			<?php else : ?>
			<!-- wp:button {"className":"newbdtr-btn-login"} -->
			<div class="wp-block-button newbdtr-btn-login"><a class="wp-block-button__link wp-element-button" href="<?php echo $login; ?>">Entrar</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"newbdtr-btn-register"} -->
			<div class="wp-block-button newbdtr-btn-register"><a class="wp-block-button__link wp-element-button" href="<?php echo $register; ?>">Unirse</a></div>
			<!-- /wp:button -->
			<?php endif; ?>
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
