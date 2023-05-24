<?php
$title = get_sub_field('title');
$projects = get_sub_field('projects');
$sub_title = get_sub_field('sub_title');
$benefits = get_sub_field('benefits');
$button = get_sub_field('button');
if ($projects) :
?>
  <section class="projects">
    <div class="projects__inner">
      <?php if ($title) : ?>
        <h3 class="projects__title main-title">
          <?php echo $title; ?>
        </h3>
      <?php endif; ?>
      <div class="projects__content">
        <?php while (have_rows('projects')) :
          the_row();
          $image = get_sub_field('image');
          $text = get_sub_field('text');
        ?>
          <div class="projects__item">
            <div class="projects__image">
              <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="project-img" class="projects__img">
            </div>
            <div class="projects__descr">
              <?php echo $text; ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <?php if ($benefits || $sub_title) : ?>
        <div class="projects-footer">
          <h4 class="projects-footer__title">
            <?php echo $sub_title; ?>
          </h4>
          <ul class="projects-footer__list">
            <?php foreach ($benefits as $item) : ?>
              <li class="projects-footer__line">
                <span class="projects-footer__text">
                  <?php echo $item['title']; ?>
                </span>
              </li>
            <?php endforeach; ?>
          </ul>
          <?php if ($button) :
            $link_url = $button['url'];
            $link_title = $button['title'];
            $link_target = $button['target'] ? $button['target'] : '_self';
          ?>
            <a class="projects-footer__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>