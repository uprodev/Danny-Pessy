<?php
$title = get_sub_field('tes_title');
$videos = get_sub_field('video-items');
?>
<?php if ($title || $videos) : ?>
    <section class="setter-testimonials scroll-block">
        <div class="lines">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/line-white-setter.svg" ?>" alt="line" class="line-white">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/line-gold-setter.svg" ?>" alt="line" class="line-gold">
        </div>
        <div class="setter-testimonials__inner location__inner container-inner">
            <?php if ($title) : ?>
                <h3 class="setter-testimonials__title main-title">
                    <?php echo $title; ?>
                </h3>
            <?php endif; ?>
            <?php if ($videos) : ?>
                <div class="setter-testimonials__content swiper-container" id="setter-testimonials">
                    <div class="swiper-wrapper">
                        <?php foreach ($videos as $video) :
                            $video_list = $video['video'];

                   //     print_r($video);

                        ?>

                            <div class="setter-testimonials__item swiper-slide jsVideoWrapper">
                                <a data-fancybox data-src="<?php echo $video_list['url']; ?>" class="video_wrapper">
                                    <img src="<?php echo  $video['image'] ? $video['image']['sizes']['large'] : ''; ?>" alt="bg" class="hero__img">

                                </a>

                            </div>



                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="testimonials-slider__navigation slider-navigation">
                    <button class="set-slider__btn slider-btn prev">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/arrow-right.svg" ?>" alt="arrow" class="hero-slider__arrow">
                    </button>
                    <div class="set-slider-p slider-pagination"></div>
                    <button class="set-slider__btn slider-btn next">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/arrow-right.svg" ?>" alt="arrow" class="hero-slider__arrow">
                    </button>
                </div>
            <?php endif; ?>
        </div>
        </div>
    </section>
<?php endif; ?>
