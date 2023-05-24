<?php
$title = get_field('title-free-trial');
$description = get_field('description-free-trial');
$button = get_field('button-free-trial');
?>
<section class="free-trial">
  <div class="free-trial__inner">
    <?php if ($title) : ?>
      <h3 class="free-trial__title main-title">
        <?php echo $title; ?>
      </h3>
    <?php endif; ?>
    <?php if ($title) : ?>
      <p class="free-trial__subtitle">
        <?php echo $description; ?>
      </p>
    <?php endif; ?>
    <?php if ($button) :
      $link_url = $button['url'];
      $link_title = $button['title'];
      $link_target = $button['target'] ? $button['target'] : '_self';
    ?>
      <a class="university-about__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
    <?php endif; ?>
  </div>
</section>