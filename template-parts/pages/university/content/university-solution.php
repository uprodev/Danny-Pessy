<?php
$title = get_field('title-solution');
$button = get_field('button-solution');
$description = get_field('description-solution');
$video = get_field('video-solution');
$solution_video_poster = get_field('solution_video_poster');
?>
<section class="solution">
  <div class="solution__inner container-inner">
    <?php if ($title || $description) : ?>
      <article class="solution__info">
        <?php if ($title) : ?>
          <h4 class="solution__title main-title">
            <?php echo $title; ?>
          </h4>
        <?php endif; ?>
        <?php if ($description) : ?>
          <p class="solution__text">
            <?php echo $description; ?>
          </p>
        <?php endif; ?>
        <?php if ($button) :
          $link_url = $button['url'];
          $link_title = $button['title'];
          $link_target = $button['target'] ? $button['target'] : '_self';
        ?>
          <a class="solution__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
      </article>
    <?php endif; ?>
    <?php if ($video) : ?>
      <div class="solution__content">
        <video class="solution__video" id="white-label-au" poster="<?php echo wp_get_attachment_image_url($solution_video_poster, 'full') ?>" loop>
          <source src="<?php echo $video['url']; ?>" type="video/mp4">
        </video>
        <button class="solution__play solar-video__play" id="white-label-play">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/play.svg' ?>" alt="play" class="solar-video__icon">
        </button>
      </div>
    <?php endif; ?>
  </div>
</section>