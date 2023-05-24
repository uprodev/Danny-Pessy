<?php
$back_image_hero = get_sub_field('back_image_hero');
$title = get_sub_field('title_hero');
$top_logo = get_sub_field('top_logo');
$subtitle_hero = get_sub_field('subtitle_hero');
$bottom_logo = get_sub_field('bottom_logo');
$btn =  get_sub_field('btn');
?>
<section class="hero solar solar-hero">
  <div class="hero-about">
    <div class="hero-about__content">
      <?php if ($top_logo) : ?>
        <img src="<?php echo wp_get_attachment_image_url($top_logo, 'full') ?>" alt="logo" class="hero__logo">
      <?php endif; ?>
      <?php if ($title) : ?>
        <h2 class="hero-setter__title hero__title hero-about__title main-title">
          <?php echo $title; ?>
        </h2>
      <?php endif; ?>
      <?php if ($subtitle_hero) : ?>
        <p class="solar-hero__region">
          <?php echo $subtitle_hero; ?>
        </p>
      <?php endif; ?>

        <?php if ($btn) : ?>
            <a class="hero-info__btn btn-gold book-btn" href="<?= $btn['url']  ?>"><?= $btn['title'] ?></a><br>
        <?php endif; ?>

        <?php if ($bottom_logo) : ?>
        <img src="<?php echo wp_get_attachment_image_url($bottom_logo, 'full') ?>" alt="logo" class="hero__logo">
      <?php endif; ?>
      <button class="hero-about__btn scroll-btn">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/chevron-down-sm.svg" ?>" alt="icon" class="hero-about__icon">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/chevron-down-lg.svg" ?>" alt="icon" class="hero-about__icon">
      </button>
    </div>
    <?php if ($back_image_hero) : ?>
      <div class="hero__image">
        <img src="<?php echo wp_get_attachment_image_url($back_image_hero, 'full') ?>" alt="bg" class="hero__img">
      </div>
    <?php endif; ?>
  </div>
</section>
