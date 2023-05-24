<?php
$slider = get_field('slider');
if ($slider) : ?>
  <section class="courses">
    <div class="courses-slider" id="courses-slider">

      <div class="courses-slider__container swiper-wrapper">
        <?php while (have_rows('slider')) :
          the_row();
          $image = get_sub_field('image');
          $icon = get_sub_field('icon');
          $title = get_sub_field('title');
          $benefits = get_sub_field('benefits');
        ?>
          <div class="courses-slider__slide swiper-slide">
            <?php if ($image) : ?>
              <div class="courses-slider__image">
                <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="img" class="courses-slider__img">
              </div>
            <?php endif; ?>
            <div class="courses-slider__info">
              <?php if ($title) : ?>
                <h4 class="courses-slider__title">
                  <span class="courses-slider__num"><?php echo get_row_index() <= 9 ? '0' : '';
                                                    echo get_row_index(); ?></span>
                  <span class="courses-slider__name"> <?php echo $title; ?></span>
                </h4>
              <?php endif; ?>
              <?php if ($benefits) : ?>
                <ul class="courses-slider__list trainings__list">
                  <?php foreach ($benefits as $benefit) : ?>
                    <li class="courses-slider__line trainings__line">
                      <span class="courses-slider__text trainings__text"> <?php echo $benefit['title']; ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

      <div class="courses-slider__navigation trip-slider__navigation">
        <button class="courses-slider__btn slider-btn trip-slider__btn prev">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right.svg' ?>" alt="arrow" class="courses-slider__arrow trip-slider__arrow">
        </button>
        <div class="courses-slider__pagination trip-slider__pagination"></div>
        <button class="courses-slider__btn slider-btn trip-slider__btn next">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right.svg' ?>" alt="arrow" class="courses-slider__arrow trip-slider__arrow">
        </button>
      </div>
    </div>
  </section>
<?php endif; ?>