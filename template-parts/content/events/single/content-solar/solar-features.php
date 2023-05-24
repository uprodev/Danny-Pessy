<?php
$title_feature = get_sub_field('title_feature');
$text_feature = get_sub_field('text_feature');
$features = get_sub_field('features');
$count = count($features);
?>
<?php if ($features) : ?>
  <section class="trainings waystohelp">
    <div class="trainings__inner container-inner">
      <?php if ($title_feature) : ?>
        <h3 class="waystohelp__heading trainings__heading main-title">
          <?php echo $title_feature; ?>
        </h3>
      <?php endif; ?>
      <?php if ($text_feature) : ?>
        <p class="waystohelp__subtitle">
          <?php echo $text_feature; ?>
        </p>
      <?php endif; ?>
      <div class="trainings__content waystohelp__content <?php echo $count < 2 ? 'one_item' : ''; ?>">
        <?php while (have_rows('features')) :
          the_row();
          $title = get_sub_field('title');
          $benefits = get_sub_field('benefits');
          $link = get_sub_field('link');
        ?>
          <div class="trainings__item waystohelp__item">
            <?php if ($title) : ?>
              <h4 class="trainings__title waystohelp__title">
                <?php echo $title; ?>
              </h4>
            <?php endif; ?>
            <?php if ($benefits) : ?>
              <ul class="trainings__list waystohelp__list">
                <?php foreach ($benefits as $item) : ?>
                  <li class="trainings__line">
                    <span class="trainings__text">
                      <?php echo $item['title']; ?>
                    </span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <?php if ($link) :
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a class="trainings__btn btn-gold waystohelp__btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>