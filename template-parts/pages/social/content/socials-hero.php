<?php
global $post;
$logo = get_sub_field('logo');
$background_image = get_sub_field('background_image');
$video = get_sub_field('video');
$slug = $post->post_name;


?>
<?php if ($background_image || $video) : ?>
  <section class="hero tiktok-hero">
    <div class="hero-about">
      <div class="hero-about__content">
        <?php if ($logo) : ?>
          <div class="<?= $slug == 'instagram' ? 'instagram' : 'tiktok'?>-hero__logo hero__title">
            <img src="<?php echo wp_get_attachment_image_url($logo, 'full') ?>" alt="logo" class="hero__img">
          </div>
        <?php endif; ?>
        <button class="hero-about__btn scroll-btn">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-sm.svg' ?>" alt="icon" class="hero-about__icon">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-lg.svg' ?>" alt="icon" class="hero-about__icon">
        </button>
      </div>
      <div class="video_wrapper">
        <video class="hero-about__video" playsinline autoplay muted loop poster="<?php echo wp_get_attachment_image_url($background_image, 'full') ?>">
          <source src="<?php echo $video['url']; ?>" type="video/mp4">
        </video>
      </div>
    </div>
  </section>
<?php endif; ?>
