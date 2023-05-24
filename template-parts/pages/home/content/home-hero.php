<?php
$banner = get_field('banner');
$video = get_field('video');
$video_banner = get_field('video_banner');
$id = 1;
?>
<?php if ($banner) : ?>
  <section class="hero main_slider">
    <div class="hero-slider__wrapper">
      <div class="hero-slider" id="hero-slider">
        <div class="hero-slider__container swiper-wrapper">
          <?php foreach ($banner as $item) :
            $image = $item['image'];
            $title = $item['title'];
            $button__link = $item['button__link'];
            $button_name = $item['button_name'];
            $link = $item['link'];
          ?>
            <div class="hero-slider__item swiper-slide">
              <?php if ($image) : ?>
                <div class="hero-slider__image">
                  <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="slide" class="hero-slider__img" />
                </div>
              <?php endif; ?>
              <?php if ($title) : ?>
                <div class="hero_slide_content">
                  <div class="hero_content_inner">
                    <div class="container-inner">
                      <div class="hero-info">
                        <h2 class="hero-info__title">
                          <?php echo  $title; ?>
                        </h2>
                        <div class="btns_wrapper">
                          <?php if ($button__link === 'link') :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                            <a class="hero-info__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                          <?php elseif ($button__link === 'button') :
                          ?>
                            <button class="hero-info__btn btn-gold book-btn" id="<?php echo $id; ?>" type="button"><?php echo $button_name; ?></button>
                          <?php
                            $id++;
                          endif; ?>
                          <?php if ($video) : ?>
                            <button class="btn_watch_video video_home" data-url="<?php echo $video['url']; ?>">
                              <div class="title"><?php echo __('Watch video', 'danny'); ?></div>
                            </button>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="hero-slider__navigation">
          <button class="hero-slider__btn prev">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right.svg' ?>" alt="arrow" class="hero-slider__arrow" />
          </button>
          <div class="hero-slider__pagination"></div>
          <button class="hero-slider__btn next">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right.svg' ?>" alt="arrow" class="hero-slider__arrow" />
          </button>
        </div>
      </div>
    </div>
    <?php if ($video) : ?>
      <video class="hero__video" data-fancybox data-src="<?php echo $video['url']; ?>" autoplay muted loop>
        <source src="<?php echo $video['url']; ?>" type="video/mp4">
      </video>
    <?php endif; ?>
  </section>
<?php endif; ?>