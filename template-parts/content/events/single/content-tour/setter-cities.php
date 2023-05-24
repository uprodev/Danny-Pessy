<?php
$title = get_sub_field('city_title');
$subtitle = get_sub_field('city_subtitle');
$city_tours = get_sub_field('city_tour');
$cities_map = get_sub_field('cities_map');

$content = get_field('content');



foreach ($content as $item) {

    if ($item['acf_fc_layout'] == 'tour_setter') {
        if (!$item['active_locations'])
           return;
    }
}

?>
<?php if ($title || $city_tours) : ?>
    <section class="cities">
        <div class="cities__inner container-inner">
            <?php if ($title) : ?>
                <h3 class="cities__title main-title">
                    <?php echo $title; ?>
                </h3>
            <?php endif; ?>
            <?php if ($subtitle) : ?>
                <p class="cities__subtitle">
                    <?php echo $subtitle; ?>
                </p>
            <?php endif; ?>
            <div class="cities__content">
                <div class="cities__cities">
                    <?php if ($city_tours) :
                    ?>
                        <ul class="cities__list">
                            <?php foreach ($city_tours as $tour) :
                                $city_title = $tour['city_title'];
                                $tour_date = $tour['tour_date'];
                                $button_book = $tour['button_book']; ?>
                                <li class="cities__line">
                                    <div class="cities__descr">
                                        <h4 class="cities__name main-title">
                                            <?php echo $city_title; ?>
                                        </h4>
                                        <p class="cities__date">
                                            <?php echo $tour_date; ?>
                                        </p>
                                    </div>
                                    <?php if ($button_book) : ?>
                                        <a href="<?php echo esc_html($button_book['url']); ?>" class="cities__book">
                                            <span>
                                                <?php echo esc_html($button_book['title']); ?>
                                            </span>
                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    <?php endif; ?>
                </div>
                <?php if ($cities_map) : ?>
                    <div class="cities__map">
                        <img src="<?php echo wp_get_attachment_image_url($cities_map, 'full'); ?>" alt="map" class="cities__img">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
