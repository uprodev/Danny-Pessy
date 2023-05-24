<?php
$title_hero = get_field('title-hero');
$text_hero = get_field('text-hero');
$logo_hero = get_field('logo-hero');
$background_image_hero = get_field('background_image_hero');
?>
<section class="hero contact-hero">
  <div class="hero-about">
    <div class="hero-about__content contact-hero__content">
      <?php if ($title_hero) : ?>
        <h2 class="contact-hero__title hero__title main-title">
          <?php echo  $title_hero; ?>
        </h2>
      <?php endif; ?>
      <?php if ($text_hero) : ?>
        <p class="contact-hero__subtitle">
          <?php echo  $text_hero; ?>
        </p>
      <?php endif; ?>
      <?php if ($logo_hero) : ?>
        <img src="<?php echo wp_get_attachment_image_url($logo_hero, 'full') ?>" alt="logo" class="contact-hero__logo hero__logo">
      <?php endif; ?>
      <button class="hero-about__btn scroll-btn">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-sm.svg' ?>" alt="icon" class="hero-about__icon">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-lg.svg' ?>" alt="icon" class="hero-about__icon">
      </button>
    </div>
    <?php if ($background_image_hero) : ?>
      <div class="hero__image">
        <img src="<?php echo wp_get_attachment_image_url($background_image_hero, 'full') ?>" alt="bg" class="hero__img">
      </div>
    <?php endif; ?>
  </div>
</section>