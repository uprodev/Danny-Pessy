<?php
$image = get_field('image');
$title = get_field('title');
$button = get_field('button');
?>
<section class="about-banner">
  <div class="about-banner__inner container-inner">
    <?php if ($image) : ?>
      <div class="about-banner__image">
        <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="img" class="about-banner__img">
      </div>
    <?php endif; ?>
    <?php if ($title || $button) : ?>
      <div class="about-banner__content">
        <div class="about-banner__title main-title">
          <?php echo $title; ?>
        </div>
        <?php if ($button) :
          $link_url = $button['url'];
          $link_title = $button['title'];
          $link_target = $button['target'] ? $button['target'] : '_self';
        ?>
          <a class="about-banner__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>