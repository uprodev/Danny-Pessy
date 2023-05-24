<?php
$title_trip = get_sub_field('title_trip');
$text_trip = get_sub_field('text_trip');
$images = get_sub_field('images');
?>
<?php if ($images) : ?>
  <section class="trip">
    <div class="trip__top">
      <?php if ($title_trip || $text_trip) : ?>
        <h3 class="trip__title main-title"> <?php echo $title_trip; ?></h3>
        <p class="trip__subtitle"> <?php echo $text_trip; ?></p>
      <?php endif; ?>
    </div>
    <div class="trip-slider-wrapper">
      <div class="trip-slider" id="trip-slider">
        <div class="trip-slider__container swiper-wrapper">
          <?php foreach ($images as $image) : ?>
            <div class="trip-slider__slide swiper-slide">
              <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="img" class="trip-slider__img">
            </div>
          <?php endforeach; ?>
        </div>
        <div class="trip-slider__navigation">
          <button class="trip-slider__btn slider-btn prev">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/arrow-right.svg" ?>" alt="arrow" class="hero-slider__arrow">
          </button>
          <div class="trip-slider__pagination"></div>
          <button class="trip-slider__btn slider-btn next">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/arrow-right.svg" ?>" alt="arrow" class="hero-slider__arrow">
          </button>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>