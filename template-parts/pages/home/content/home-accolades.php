<?php
$logos = get_field('logo');
$accolades = get_field('accolades');
$accolades_title = get_field('accolades_title');
?>
<?php if ($accolades || $logos) : ?>
  <section class="accolades">
    <ul class="accolades__list">
      <?php foreach ($logos as $logo) : ?>
        <li class="accolades__line">
          <img src="<?php echo wp_get_attachment_image_url($logo, 'full') ?>" alt="logo" class="accolades__logo" />
        </li>
      <?php endforeach; ?>
    </ul>
    <?php if ($accolades) : ?>
      <?php if ($accolades_title) : ?>
        <h3 class="accolades__title"><?php echo $accolades_title; ?></h3>
      <?php endif; ?>
      <div class="accolades__content">
        <div class="accolades-slider swiper-container" id="acc-slider">
          <div class="accolades-slider__container swiper-wrapper">
            <?php foreach ($accolades as $item) :
              $photo = $item['photo'];
              $text = $item['text'];
            ?>
              <div class="accolades-slider__slide swiper-slide">
                <div class="slide_block">
                  <img src="<?php echo wp_get_attachment_image_url($photo, 'full') ?>" alt="slide" class="accolades-slider__img" />
                  <p class="accolades-slider__text">
                    <?php echo $text; ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="accolades-slider__navigation">
            <button class="accolades-slider__btn slider-btn prev swiper-button-disabled" disabled="disabled">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right.svg' ?>" alt="arrow" class="hero-slider__arrow" />
            </button>
            <button class="accolades-slider__btn slider-btn next">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/arrow-right.svg' ?>" alt="arrow" class="hero-slider__arrow" />
            </button>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>