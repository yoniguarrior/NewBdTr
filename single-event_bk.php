<?php
get_header();
?>
<div id="main-content">
  <div class="container">
    <div id="content-area" class="clearfix">
      <div id="left-area">
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('et_pb_post'); ?>>
            <div class="et_post_meta_wrapper">
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <?php
              et_divi_post_meta();

              $thumb = '';

              $width = (int) apply_filters('et_pb_index_blog_image_width', 1080);

              $height = (int) apply_filters('et_pb_index_blog_image_height', 675);
              $classtext = 'et_featured_image';
              $titletext = get_the_title();
              $alttext = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
              $thumbnail = get_thumbnail($width, $height, $classtext, $alttext, $titletext, false, 'Blogimage');
              $thumb = $thumbnail["thumb"];
              $text_color_class = et_divi_get_post_text_color();

              $inline_style = et_divi_get_post_bg_inline_style();
              ?>
            </div>
            <div class="entry-content">
              <h4 class="event-start-date">
                <?php _e('Date: ', 'bdtrivas');
                $startDate = get_post_meta(get_the_ID(), 'bdt_ev_start_date', true);
                echo date_i18n('j F Y', strtotime($startDate));
                ?>
              </h4>
              <h4 class="event-start-time">
                <?php _e('Start time: ', 'bdtrivas');
                $date = get_post_meta(get_the_ID(), 'bdt_ev_start_time', true);
                $date = date_create($date);
                echo date_format($date, 'H:i');
                ?>
              </h4>
              <h4 class="event-end-time">
                <?php _e('End time: ', 'bdtrivas');
                $date = get_post_meta(get_the_ID(), 'bdt_ev_end_time', true);
                $date = date_create($date);
                echo date_format($date, 'H:i');
                ?>
              </h4>
              <?php
              $locationId = get_post_meta(get_the_ID(), 'bdt_ev_loc_id', true);
              $location = get_post($locationId);
              $locationName = $location->post_title;
              $locationAddress = get_post_meta($locationId, 'bdt_loc_address', true);
              $locationPostcode = get_post_meta($locationId, 'bdt_loc_postcode', true);
              $locationTown = get_post_meta($locationId, 'bdt_loc_town', true);
              $locationBus = get_post_meta($locationId, 'bdt_loc_bus', true);
              $locationUnderground = get_post_meta($locationId, 'bdt_loc_underground', true);
              ?>
              <div class="event-location">
                <h4>
                  <?php
                  _e('Location: ', 'bdtrivas');
                  echo $locationName;
                  ?>
                </h4>
                <p>
                  <?php
                  echo $locationAddress;
                  ?>
                </p>
                <p>
                  <?php
                  echo $locationPostcode . ' ' . $locationTown;
                  ?>
                </p>
                <p>
                  <?php
                  echo ($locationBus !== '' ? __('Bus: ', 'bdtrivas') . $locationBus : '');
                  echo ($locationBus !== '' && $locationUnderground !== '' ? ' - ' : '');
                  echo ($locationUnderground !== '' ? __('Underground: ', 'bdtrivas') . $locationUnderground : '');
                  ?>
                </p>
              </div>
              <?php
              the_content();
              ?>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<?php

get_footer();
