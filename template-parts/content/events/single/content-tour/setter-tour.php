<?php
$title = get_sub_field('tour_title');
$descr = get_sub_field('tour_descr');
$button = get_sub_field('tour_button');
$tour_arg = get_sub_field('active_locations');
$image = get_sub_field('tour_image');
$email_block = get_sub_field('email_block');
$email_block_title = $email_block['title'];
$email_block_shortcode = $email_block['shortcode'];
?>
<?php if ($title || $descr || $image) : ?>
    <section class="tour">
        <div class="tour__inner container-inner">
            <article class="tour__info">
                <?php if ($tour_arg) : ?>
                    <?php if ($title) : ?>
                        <h3 class="tour__title main-title">
                            <?php echo $title; ?>
                        </h3>
                    <?php endif; ?>
                    <div class="tour__descr">
                        <?php if ($descr) : ?>
                            <div>
                                <?php echo $descr; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($button) : ?>
                            <button class="tour__btn btn-gold" type="button">
                                <?php echo esc_html($button['title']); ?>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php else : ?>
                    <div class="locations_disabled">
                        <?php if ($email_block_title) : ?>
                            <h3 class="tour__title main-title">
                                <?php echo $email_block_title; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($email_block_shortcode) : ?>
                            <div class="form_wrapper">
                                <?php echo do_shortcode($email_block_shortcode); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </article>
            <?php if ($image) : ?>
                <div class="tour__image">
                    <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="img" class="tour__img">
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>