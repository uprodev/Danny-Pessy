<?php
$subtitle_location = get_sub_field('subtitle_location');
$title_location = get_sub_field('title_location');
$date_location = get_sub_field('date_location');
$text_location = get_sub_field('text_location');
$link_location = get_sub_field('link_location');
$image_location = get_sub_field('image_location');
?>
<section class="location scroll-block">
  <div class="lines">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/line-white.svg" ?>" alt="line" class="line-white">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/line-gold.svg" ?>" alt="line" class="line-gold">
  </div>
  <div class="location__inner container-inner">
    <div class="location__content">
      <article class="location__info">
        <?php if ($subtitle_location) : ?>
          <div class="location__name">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/location.svg" ?>" alt="icon" class="location__icon">
            <span class="location__location"><?php echo $subtitle_location; ?></span>
          </div>
        <?php endif; ?>
        <?php if ($title_location) : ?>
          <h2 class="location__title main-title">
            <?php echo $title_location; ?>
          </h2>
        <?php endif; ?>
        <?php if ($date_location) : ?>
          <p class="location__date">
            <?php echo $date_location; ?>
          </p>
        <?php endif; ?>
        <?php if ($text_location) : ?>
          <div class="location__descr">
            <?php echo $text_location; ?>
          </div>
        <?php endif; ?>
        <?php if ($link_location) :
          $link_url = $link_location['url'];
          $link_title = $link_location['title'];
          $link_target = $link_location['target'] ? $link_location['target'] : '_self';
        ?>
          <a class="location__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
      </article>
      <?php if ($image_location) : ?>
        <div class="location__image">
          <img src="<?php echo wp_get_attachment_image_url($image_location, 'full') ?>" alt="loc" class="location__img">
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>