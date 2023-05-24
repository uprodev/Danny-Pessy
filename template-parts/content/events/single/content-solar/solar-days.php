<?php
$items = get_sub_field('items');
if ($items) :
?>
  <section class="days">
    <div class="days__inner container-inner">
      <div class="days-slider" id="days-slider">
        <div class="days-slider__container swiper-wrapper">
          <?php while (have_rows('items')) :
            the_row();
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $benefits = get_sub_field('benefits');
            $button = get_sub_field('button');
            $image = get_sub_field('image');
          ?>
            <div class="days-slider__item swiper-slide">
              <div class="days-slider__content">
                <div class="days-slider__image">
                  <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="img" class="days-slider__img">
                </div>
                <div class="days-slider__info">
                  <?php if ($title) : ?>
                    <h4 class="trainings__title waystohelp__title">
                      <?php echo $title; ?>
                    </h4>
                  <?php endif; ?>
                  <?php if ($text) : ?>
                    <p class="trainings__subtitle">
                      <?php echo $text; ?>
                    </p>
                  <?php endif; ?>
                  <?php if ($benefits) : ?>
                    <ul class="trainings__list">
                      <?php foreach ($benefits as $item) : ?>
                        <li class="trainings__line">
                          <span class="trainings__text">
                            <?php echo $item['title']; ?>
                          </span>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                  <?php
                  if ($button) :
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                  ?>
                    <a class="trainings__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="days-slider__navigation">
          <button class="days-slider__btn slider-btn prev">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/arrow-right.svg" ?>" alt="arrow" class="hero-slider__arrow">
          </button>
          <div class="days-slider__pagination"></div>
          <button class="days-slider__btn slider-btn next">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/arrow-right.svg" ?>" alt="arrow" class="hero-slider__arrow">
          </button>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>