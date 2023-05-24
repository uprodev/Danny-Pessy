<?php
$about_title = get_field('about_title');
$description = get_field('description');
$backgroung = get_field('backgroung');
$danny_logo = get_field('danny_logo');
$text_logo = get_field('text_logo');
$button_2 = get_field('button_2');
?>
<section class="about" style="background-image:<?php echo $backgroung ? wp_get_attachment_image_url($backgroung, 'full')  : ''; ?>;">
  <div class="about__inner">
    <div class="about__info">
      <?php if ($about_title) : ?>
        <h2 class="about__title">
          <?php echo $about_title; ?>
        </h2>
      <?php endif; ?>
      <?php if ($description) : ?>
        <p class="about__text">
          <?php echo $description; ?>
        </p>
      <?php endif; ?>
      <?php if ($button_2) :
        $link_url = $button_2['url'];
        $link_title = $button_2['title'];
        $link_target = $button_2['target'] ? $button_2['target'] : '_self';
      ?>
        <a class="about__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    </div>
    <?php if ($danny_logo || $text_logo) : ?>
      <div class="about__danny">
        <?php if ($danny_logo) : ?>
          <img src="<?php echo wp_get_attachment_image_url($danny_logo, 'full') ?>" alt="danny" class="about__image" />
        <?php endif; ?>
        <?php if ($text_logo) : ?>
          <img src="<?php echo wp_get_attachment_image_url($text_logo, 'full') ?>" alt="logo" class="about__logo" />
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>