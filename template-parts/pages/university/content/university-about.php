<?php
$image = get_field('image-about');
$title = get_field('title-about');
$button = get_field('button-about');
$description = get_field('description-about');
$video = get_field('video-about');
$video_title = get_field('video_title');
$video_about_poster = get_field('video-about_poster');
?>
<section class="university-about scroll-block">
  <div class="university-about__inner container-inner">
    <div class="university-about__content">
      <?php if ($image) : ?>
        <div class="university-about__image">
          <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="img" class="university-about__img">
        </div>
      <?php endif; ?>
      <?php if ($title || $description) : ?>
        <article class="university-about__info">
          <?php if ($title) : ?>
            <h3 class=" main-title">
              <?php echo $title; ?>
            </h3>
          <?php endif; ?>
          <?php if ($description) : ?>
            <div class="university-about__descr">
              <?php echo $description; ?>
            </div>
          <?php endif; ?>
          <?php if ($button) :
            $link_url = $button['url'];
            $link_title = $button['title'];
            $link_target = $button['target'] ? $button['target'] : '_self';
          ?>
            <a class="university-about__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </article>
      <?php endif; ?>
    </div>
  </div>
  <?php if ($video) : ?>
    <div class="solar-video__inner container-inner">
      <div class="video_wrapper">
        <video class="solar-video__video university-about__video" playsinline autoplay muted loop poster="<?php echo wp_get_attachment_image_url($video_about_poster, 'full') ?>" id="what-is-au">
          <source src="<?php echo $video['url']; ?>" type="video/mp4">
        </video>
        <button class="solar-video__play" id="what-is-play">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/play.svg' ?>" alt="play" class="solar-video__icon">
        </button> 
      </div>
      <?php if ($video_title) : ?>
        <h3 class="solar-video__title main-title">
          <?php echo $video_title; ?>
        </h3>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</section>
