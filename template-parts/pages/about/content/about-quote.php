<?php
$banner = get_field('banner');
$quote = get_field('quote');
$name = get_field('name');
?>
<section class="about-quote">
  <div class="about-quote__inner">
    <?php if ($banner) : ?>
      <div class="about-quote__image">
        <img src="<?php echo wp_get_attachment_image_url($banner, 'full') ?>" alt="img" class="about-quote__img">
      </div>
    <?php endif; ?>
    <?php if ($quote || $name) : ?>
      <div class="about-quote__content">
        <p class="about-quote__text main-title">
          <?php echo $quote; ?>
        </p>
        <span class="about-quote__author">
          <?php echo $name; ?>
        </span>
      </div>
    <?php endif; ?>
  </div>
</section>