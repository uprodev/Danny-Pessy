<?php
$title = get_sub_field('review_title');
$subtitle = get_sub_field('review_subtitle');
$review = get_sub_field('review');
$image = get_sub_field('review_image');
?>
<?php if ($review) : ?>
    <section class="setter-review">
        <div class="setter-review__inner container-inner">
            <div class="setter-review__review">
                <?php if ($title) : ?>
                    <h4 class="setter-review__title main-title">
                        <?php echo $title; ?>
                    </h4>
                <?php endif; ?>
                <?php if ($subtitle) : ?>
                    <div class="setter-review__text">
                        <?php echo $subtitle; ?>
                    </div>
                <?php endif; ?>
                <?php if ($review) : ?>
                    <?php if ($review > 5) :
                        $review = 5;
                    endif; ?>
                    <div class="setter-review__rate">
                        <?php for ($i = 0; $i < $review; $i++) : ?>
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/icons/star.svg" ?>" alt="star" class="setter-review__star">
                        <?php endfor;
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($image) : ?>
                <div class="setter-review__image">
                    <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="img" class="setter-review__img">
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>