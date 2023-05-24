<?php
$logo = get_sub_field('logo');
$title = get_sub_field('main_title');
$image = get_sub_field('main_image');
?>
<section class="hero solar-hero hero-setter">
    <div class="hero-about">
        <div class="hero-about__content">
            <?php if ($logo) : ?>
                <img src="<?php echo wp_get_attachment_image_url($logo, 'full') ?>" alt="logo" class="hero__logo">
            <?php endif; ?>
            <?php if ($title) : ?>
                <h2 class="hero-setter__title hero__title hero-about__title main-title">
                    <?php echo $title; ?>
                </h2>
            <?php endif; ?>

            <button class="hero-setter__btn hero-about__btn scroll-btn">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/chevron-down-sm.svg" ?>" alt="icon" class="hero-about__icon">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/chevron-down-lg.svg" ?>" alt="icon" class="hero-about__icon">
            </button>
        </div>
        <?php if ($image) : ?>
            <div class="hero__image">
                <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="bg" class="hero__img">
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>