<?php
$title = get_sub_field('title');
$button = get_sub_field('button');
$background_image = get_sub_field('background_image');
?>
<?php if ($title && $background_image) : ?>
  <section class="hero podcast-hero">
    <div class="hero-about">
      <div class="hero-about__content">
        <?php if ($title) : ?>
          <h2 class="hero-about__title hero__title main-title">
            <?php echo $title; ?>
          </h2>
        <?php endif; ?>
        <?php if ($button) :
          $link_url = $button['url'];
          $link_title = $button['title'];
          $link_target = $button['target'] ? $button['target'] : '_self';
        ?>
          <a class="podcast-hero__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
        <button class="hero-about__btn scroll-btn">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-sm.svg' ?>" alt="icon" class="hero-about__icon">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-lg.svg' ?>" alt="icon" class="hero-about__icon">
        </button>
      </div>
      <div class="hero__image">
        <img src="<?php echo wp_get_attachment_image_url($background_image, 'full') ?>" alt="bg" class="hero__img">
      </div>
    </div>
  </section>
<?php endif; ?>