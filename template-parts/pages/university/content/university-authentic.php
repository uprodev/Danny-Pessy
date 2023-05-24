<?php
$preview_banner = get_field('preview_banner');
$video = get_field('video');
$title = get_field('title');
?>
<section class="hero authentic-university tiktok-hero">
  <div class="hero-about">
    <div class="hero-about__content hero-university__content">
      <?php if ($title) : ?>
        <h3 class="hero__title main-title">
          <?php echo  $title; ?>
        </h3>
      <?php endif; ?>
      <button class="hero-about__btn scroll-btn">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-sm.svg' ?>" alt="icon" class="hero-about__icon">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-down-lg.svg' ?>" alt="icon" class="hero-about__icon">
      </button>
    </div>
    <?php if ($video || $preview_banner) : ?>
      <div class="video_wrapper">
        <video class="hero-about__video" playsinline autoplay loop muted>
          <source src="<?php echo $video['url']; ?>" type="video/mp4">
        </video>
      </div>
    <?php endif; ?>
  </div>
</section>

