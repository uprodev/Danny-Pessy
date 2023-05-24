<?php

$reviews_title = get_field('reviews_title');
$reviews = get_field('reviews');
?>
<?php if ($reviews): ?>
  <section class="testimonials">
    <?php if ($reviews_title): ?>
      <h3 class="testimonials__title main-title">
        <?php echo $reviews_title; ?>
      </h3>
    <?php endif; ?>
    <div class="testimonials-slider" id="testimonials-slider">
      <div class="testimonials-slider__container swiper-wrapper">
        <?php foreach ($reviews as $post):
          $position = get_field('position');
          $rated = get_field('rated');
          $review_text = get_field('review_text');
          setup_postdata($post); ?>
          <div class="testimonials-slider__slide swiper-slide">
            <div class="testimonials-slider__author">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="author" class="testimonials-slider__img" />
            </div>
            <p class="testimonials-slider__name">
              <?php echo the_title() ?>
            </p>
            <?php if ($position): ?>
              <p class="testimonials-slider__position">
                <?php echo $position; ?>
              </p>
            <?php endif; ?>
            <div class="testimonials-slider__rate">
              <?php if ($rated): ?>
                <?php if ($rated > 5):
                  $rated = 5;
                endif; ?>
                <?php for ($i = 0; $i < $rated; $i++): ?>
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/star.svg' ?>" alt=""
                    class="testimonials-slider__star" />
                <?php endfor; ?>
              <?php endif ?>
            </div>
            <?php if ($review_text): ?>
              <p class="testimonials-slider__text">
                <?php echo $review_text; ?>
              </p>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="testimonials-slider__navigation slider-navigation">
        <button class="t-slider__btn slider-btn prev">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right.svg' ?>" alt="arrow"
            class="hero-slider__arrow" />
        </button>
        <div class="slider-p slider-pagination"></div>
        <button class="t-slider__btn slider-btn next">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right.svg' ?>" alt="arrow"
            class="hero-slider__arrow" />
        </button>
      </div>
    </div>
  </section>
<?php endif; ?>