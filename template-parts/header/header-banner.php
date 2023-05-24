<?php
$banner_logo = get_field('banner_logo', 'option');
$banner_title = get_field('banner_title', 'option');
$button = get_field('button_name', 'option');
?>
<section class="banner">
  <?php if ($banner_logo) : ?>
    <div class="banner__logo">
      <img src="<?php echo wp_get_attachment_image_url($banner_logo, 'full'); ?>" alt="logo" class="banner__img" />
    </div>
  <?php endif; ?>
  <?php if ($banner_title) : ?>
    <h3 class="banner__title">
      <?php echo $banner_title; ?>
    </h3>
  <?php endif; ?>
  <?php if ($button) :
    $link_url = $button['url'];
    $link_title = $button['title'];
    $link_target = $button['target'] ? $button['target'] : '_self'; ?>
    <a class="banner__link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
      <span class="banner__text"><?php echo esc_html($link_title); ?></span>
      <img src="<?php echo get_template_directory_uri() . '/assets/images/header/99036074fbd6eaf25a3c.svg' ?>" alt="arrow" class="banner__arrow" />
    </a>
  <?php endif; ?>
  <button class="banner__btn" type="button">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/header/50c820d8eb2c350413ca.svg' ?>" alt="close" class="banner__img" />
  </button>
</section>