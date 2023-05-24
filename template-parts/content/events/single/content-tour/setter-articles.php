<?php
$title = get_sub_field('article-title');
$items = get_sub_field('articles');
?>
<?php if ($items) : ?>
    <section class="articles">
        <div class="articles__inner container-inner">
            <?php if ($title) : ?>
                <h3 class="articles__title main-title">
                    <?php echo $title; ?>
                </h3>
            <?php endif; ?>
            <?php if ($items) : ?>
                <div class="articles__content">
                    <?php foreach ($items as $item) :
                        $alignment_image = $item['alignment_image'];
                        $item_title = $item['title'];
                        $item_text = $item['text'];
                        $item_image = $item['image'];
                        $item_button = $item['button'];
                        $class_change_rows = '';
                        if ($alignment_image === 'right')
                            $class_change_rows = 'right';
                    ?>
                        <article class="articles__article <?php echo $class_change_rows; ?>" style="<?php echo $alignment_image === 'right' ? 'flex-direction: row-reverse;' : ''; ?>">
                            <?php if ($item_image) : ?>
                                <div class="articles__image">
                                    <img src="<?php echo wp_get_attachment_image_url($item_image, 'full'); ?>" alt="img" class="articles__img">
                                </div>
                            <?php endif; ?>
                            <div class="articles__info">
                                <?php if ($item_title) : ?>
                                    <h4 class="articles__name main-title">
                                        <?php echo $item_title; ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if ($item_text) : ?>
                                    <div class="articles__descr">
                                        <?php echo $item_text; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($item_button) :
                                    $link_url = $item_button['url'];
                                    $link_title = $item_button['title'];
                                    $link_target = $item_button['target'] ? $item_button['target'] : '_self';
                                ?>
                                    <a class="articles__link btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>