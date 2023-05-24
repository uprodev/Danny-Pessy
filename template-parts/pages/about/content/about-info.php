<?php
$description = get_field('description');
?>
<?php if ($description) : ?>
  <section class="about-info scroll-block">
    <div class="about-info__inner">
      <?php foreach ($description as $item) :
        $title = $item['title'];
        $description = $item['description'];
        $preview_image = $item['preview_image'];
        $video = $item['video'];
        $alignment_image = $item['alignment_image'];
        if ($alignment_image === 'right')
          $class_change_rows = 'right';
      ?>
        <article class="about-info__item" style="<?php echo $alignment_image === 'left' ? 'flex-direction: row-reverse;' : ''; ?>">
          <div class="about-info__descr">
            <?php if ($title) : ?>
              <h3 class="about-info__title main-title">
                <?php echo  $title; ?>
              </h3>
            <?php endif; ?>
            <?php if ($description) : ?>
              <div class="about-info__text">
                <?php echo  $description; ?>
              </div>
            <?php endif; ?>
          </div>
          <?php if ($video || $preview_image) : ?>
            <div class="about-info__video">
              <video class="about-info__vid" autoplay muted loop poster="<?php echo wp_get_attachment_image_url($preview_image, 'full') ?>">
                <source src="<?php echo $video['url']; ?>" type="video/mp4">
              </video>
              <button class="setter-testimonials__btn solar-video__play" type="button">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/play.svg' ?>" alt="icon" class="setter-testimonials__icon">
              </button>
            </div>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>