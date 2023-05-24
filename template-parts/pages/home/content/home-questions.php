<?php
$faq_title = get_field('faq_title');
$faq_text = get_field('faq_text');
$faq = get_field('faq');
$faq_images = get_field('faq_image');
$last_key = end(array_keys($faq));
?>
<?php if ($faq || $faq_images) : ?>
  <section class="questions">
    <div class="questions__inner container-inner">
      <?php if ($faq_title) : ?>
        <h3 class="questions__title main-title">
          <?php echo $faq_title; ?>
        </h3>
      <?php endif; ?>
      <div class="questions__content">
        <div class="questions-slider">
          <div class="questions-slider-inner">
            <?php if ($faq_text) : ?>
              <p class="questions-slider__text">
                <?php echo $faq_text ?>
              </p>
            <?php endif ?>
            <?php if ($faq_images) : ?>
              <div class="questions-slider__wrapper" id="questions-slider">
                <div class="questions-slider__container swiper-wrapper">
                  <?php foreach ($faq_images as $images) :
                    $image = $images['image'];
                  ?>
                    <div class="questions-slider__item swiper-slide">
                      <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="slide" class="questions-slider__img" />
                    </div>
                  <?php endforeach; ?>
                </div>

                <div class="questions-slider__navigation">
                  <button class="questions-slider__btn prev" type="button">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-gold.svg' ?>" alt="arrow" class="questions-slider__icon" />
                  </button>
                  <button class="questions-slider__btn next" type="button">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/chevron-gold.svg' ?>" alt="arrow" class="questions-slider__icon" />
                  </button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <?php if ($faq) : ?>
          <div class="questions-tabs">
            <?php foreach ($faq as $post) :
              $sub_title = get_field('title_2');
              $description = get_field('description');
              setup_postdata($post); ?>
              <div class="questions-tabs__item">
                <div class="questions-tabs__top">
                  <h4 class="questions-tabs__title">
                    <span class="question"><?php the_title(); ?></span>
                    <?php if ($sub_title) : ?>
                      <span class="author"><?php echo $sub_title; ?></span>
                    <?php endif; ?>
                  </h4>
                  <button class="questions-tabs__btn">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/plus.svg' ?>" alt="icon" class="questions-tabs__icon open" />
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/close-gold.svg' ?>" alt="icon" class="questions-tabs__icon close" />
                  </button>
                </div>
                <?php if ($description) : ?>
                  <div class="questions-tabs__content">
                    <p class="questions-tabs__answer">
                      <?php echo $description; ?>
                    </p>
                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
          <?php foreach ($faq as $post => $value) :
            $sub_title = get_field('title_2');
            $description = get_field('description', $value->ID);
            setup_postdata($post); ?> {
              "@type": "Question",
              "name": "<?php echo $value->post_title; ?>",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "<?php echo $description; ?>"
              }
            }
            <?php
            if ($post == $last_key) {
            } else {
              echo ',';
            }
            ?>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        ]
      }
    </script>
  </section>
<?php endif; ?>