<?php
$banner = get_field('banner');
$title = get_field('title');
?>
<?php if ($banner && $title) : ?>
  <section class="hero affiliate-hero">
    <div class="hero-about">
      <div class="hero-about__content affiliate-hero__content">
        <h2 class="affiliate-hero__title hero__title main-title">
          <?php echo $title; ?>
        </h2>
        <button class="hero-about__btn scroll-btn">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-sm.svg' ?>" alt="icon" class="hero-about__icon">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-lg.svg' ?>" alt="icon" class="hero-about__icon">
        </button>
      </div>
      <div class="hero__image">
        <img src="<?php echo wp_get_attachment_image_url($banner, 'full') ?>" alt="bg" class="hero__img">
      </div>
    </div>
  </section>
<?php endif; ?>