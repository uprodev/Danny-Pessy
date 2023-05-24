<?php
$tickets_title = get_sub_field('tickets_title');
$tickets_subtitle = get_sub_field('tickets_subtitle');
$tickets_shop = get_sub_field('tickets_shop');
$enabled = get_sub_field('enabled');

?>
<?php if ($tickets_shop && $enabled) : ?>
  <section class="tickets">
    <div class="tickets__inner container-inner">
      <?php if ($tickets_title) : ?>
        <h3 class="tickets__title main-title">
          <?php echo $tickets_title; ?>
        </h3>
      <?php endif; ?>
      <?php if ($tickets_subtitle) : ?>
        <p class="tickets__subtitle">
          <?php echo $tickets_subtitle; ?>
        </p>
      <?php endif; ?>
      <?php if ($tickets_shop) : ?>
        <div class="tickets__content">
          <?php while (have_rows('tickets_shop')) :
            the_row();
            $tickets_type = get_sub_field('tickets_type');
            $tickets_price = get_sub_field('tickets_price');
            $tickets_benefits = get_sub_field('tickets_benefits');
            $tickets_button = get_sub_field('tickets_button');
          ?>
            <div class="tickets__item">
              <div class="tickets__top">
                <div class="tickets__name"><?php echo $tickets_type; ?></div>
                <div class="tickets__price"><?php echo $tickets_price; ?></div>
              </div>
              <div class="tickets__main">
                <?php if ($tickets_benefits) : ?>
                  <ul class="tickets__list">
                    <?php foreach ($tickets_benefits as $item) :
                    ?>
                      <li class="tickets__line">
                        <?php echo $item['title'];  ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
                <?php if ($tickets_button) :
                  $link_url = $tickets_button['url'];
                  $link_title = $tickets_button['title'];
                  $link_target = $tickets_button['target'] ? $tickets_button['target'] : '_self';
                ?>
                  <a class="tickets__link btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
