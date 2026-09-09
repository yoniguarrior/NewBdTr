<?php get_header(); ?>

<div id="main-content">
  <div class="container">
    <div id="content-area" class="clearfix">
      <?php
      while (have_posts()) :
        the_post();
      ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>

          <div class="entry-content">
            <?php
            // Show images gallery
            $gallery_images = get_attached_media('image');
            if (!empty($gallery_images)) {
              echo '<div class="sbdtpq-gallery-grid">';
              foreach ($gallery_images as $image) {
                $image_id = $image->ID;
                $image_url = wp_get_attachment_image_src($image_id, 'thumbnail')[0];
            ?>
                <div class="sbdtpq-gallery-item">
                  <a href="<?php echo esc_url(wp_get_attachment_url($image_id)); ?>">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_the_title($image_id)); ?>">
                  </a>
                </div>
            <?php
              }
              echo '</div>';
            } else {
              echo '<p>' . __('No images found for this gallery', SBDTPQ_TEXTDOMAIN) . ' </p>';
            }
            ?>
          </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

      <?php endwhile; ?>
    </div>
  </div>

</div><!-- #main-content -->

<?php get_footer(); ?>