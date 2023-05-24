<?php
$train_title = get_field('train_title');
$trains = get_field('train');
?>
<section class="trainings">
    <div class="trainings__inner container-inner">
        <?php if ($train_title): ?>
            <h3 class=" main-title">
                <?php echo $train_title ?>
            </h3>
        <?php endif; ?>
        <?php if ($trains): ?>
            <div class="trainings__content">
                <?php while (have_rows('train')):
                    the_row();
                    $vt_title = get_sub_field('vt_title');
                    $description = get_sub_field('description');
                    $benefits = get_sub_field('benefits');
                    $button = get_sub_field('button');
                    $small_text = get_sub_field('small_text');
                    $background = get_sub_field('background');
                    ?>
                    <div class="trainings__item">
                        <?php if ($vt_title): ?>
                            <h4 class="trainings__title">
                                <?php echo $vt_title; ?>
                            </h4>
                        <?php endif; ?>
                        <?php if ($description): ?>
                            <p class="trainings__subtitle">
                                <?php echo $description; ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($benefits): ?>

                            <ul class="trainings__list">
                                <?php foreach ($benefits as $benefit): ?>
                                    <li class="trainings__line">
                                        <span class="trainings__text">
                                            <?php echo $benefit['title']; ?>
                                        </span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if ($button): ?>
                            <?php
                            $button_link = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                            ?>
                            <a class="trainings__btn btn-gold" href="<?php echo esc_url($button_link); ?>"><?php echo esc_html($button_title) ?></a>
                        <?php endif; ?>
                        <?php if ($small_text): ?>
                            <div class="trainings__fit">
                                <?php echo $small_text; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($background): ?>
                            <img src="<?php echo wp_get_attachment_image_url($background, 'full'); ?>" alt="bg"
                                class="trainings__bg" />
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>
