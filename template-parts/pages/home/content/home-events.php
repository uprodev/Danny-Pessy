<?php
$events_title = get_field('events_title');
$events = get_field('events');
?>
<?php if ($events): ?>
  <section class="events">
    <div class="events__inner container-inner">
      <?php if ($events_title): ?>
        <div class="events__title main-title">
          <?php echo $events_title; ?>
        </div>
      <?php endif; ?>
      <?php if ($events): ?>
        <div class="events__content">
          <?php foreach ($events as $post):
            setup_postdata($post); ?>
            <div class="events-item">
              <div class="events-item__image">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img" class="events-item__img" />
              </div>
              <h4 class="events-item__title main-title">
                <?php the_title(); ?>
              </h4>
              <div class="events-item__text">
                <?php the_content(); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="events-item__link btn-gold"><?php echo __('More', 'danny') ?></a>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    </div>
    </div>
  </section>
<?php endif; ?>