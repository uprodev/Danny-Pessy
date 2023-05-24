<?php
$title = get_sub_field('sold_out_title');
$content = get_sub_field('content');
$date_title = get_sub_field('date_title');
$sold_out_button = get_sub_field('sold_out_button');
$date_subtitle = get_sub_field('date_subtitle');
$hide_timer = get_sub_field('hide_timer');
$now = new DateTime();
$date = get_sub_field('sold_out_timepicker', 85);
$date = new DateTime($date);
$interval = $now->diff($date);
?>
<?php if ($date || $title) :

  $end =  date("m/d/Y g:i A", strtotime(get_sub_field('sold_out_timepicker')));  ?>

  <section class="sold-out">
    <div class="sold-out__inner container-inner">
      <div class="sold-out__item">
        <?php if ($title) : ?>
          <h4 class="trainings__title">
            <?php echo $title; ?>
          </h4>
        <?php endif; ?>
        <?php if ($content) : ?>
          <ul class="trainings__list">
            <?php foreach ($content as $item) : ?>
              <li class="trainings__line">
                <span class="trainings__text"><?php echo $item['title']; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
        <?php if ($sold_out_button) :
          $link_url = $sold_out_button['url'];
          $link_title = $sold_out_button['title'];
          $link_target = $sold_out_button['target'] ? $sold_out_button['target'] : '_self';
        ?>
          <a class="sold-out__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
      </div>
      <div class="sold-out__item">
        <?php if ($date_title) : ?>
          <h4 class="sold-out__title main-title">
            <?php echo $date_title; ?>
          </h4>
        <?php endif; ?>
        <?php if ($date_subtitle) : ?>
          <p class="sold-out__date">
            <?php echo $date_subtitle; ?>
          </p>
        <?php endif; ?>
        <?php if ($date && !$hide_timer) : ?>
          <ul class="sold-out__list">
            <li class="sold-out__line">
              <span class="sold-out__num main-title" id="d"><?php echo $interval->format('%d'); ?></span>
              <span class="sold-out__name"><?php echo __('days', 'danny') ?></span>
            </li>
            <li class="sold-out__line">
              <span class="sold-out__num main-title" id="h"><?php echo $interval->format('%h'); ?></span>
              <span class="sold-out__name"><?php echo __('hours', 'danny') ?></span>
            </li>
            <li class="sold-out__line">
              <span class="sold-out__num main-title" id="m"><?php echo $interval->format('%i'); ?></span>
              <span class="sold-out__name"><?php echo __('minutes', 'danny') ?></span>
            </li>
            <li class="sold-out__line">
              <span class="sold-out__num main-title" id="s"><?php echo $interval->format('%s'); ?></span>
              <span class="sold-out__name"><?php echo __('seconds', 'danny') ?></span>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content/counter', '', ['end' => $end]); ?>


<?php endif; ?>