<?php
$title = get_sub_field('title');
$poster = get_sub_field('poster');
$video = get_sub_field('video');
$youtube = get_sub_field('youtube');
if ($poster || $video || $youtube) :
?>
  <section class="solar-video">
    <div class="solar-video__inner container-inner">

      <div class="video_wrapper jsVideoWrapper">
          <?php if ($youtube) { ?>
              <div class="video_from_youtube">
                  <iframe width="560" height="315" src="<?= $youtube ?>" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
        <?php } else { ?>
        <video class="solar-video__video jsVideo" poster="<?php echo wp_get_attachment_image_url($poster, 'full') ?>">
          <source src="<?php echo $video['url']; ?>" type="video/mp4">
        </video>
        <button class="solar-video__play jsBtnVideoPlay">
          <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/play.svg" ?>" alt="play" class="solar-video__icon">
        </button>
        <?php } ?>
      </div>
      <?php if ($title) : ?>
        <h3 class="solar-video__title main-title">
          <?php echo $title; ?>
        </h3>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
