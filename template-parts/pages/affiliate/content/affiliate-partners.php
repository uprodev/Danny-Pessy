<?php
$title_our_partners = get_field('title-our-partners');
$text_our_partners = get_field('text-our-partners');
$image_our_partners = get_field('image-our-partners');
$content_our_partners = get_field('content-our-partners');
$partners_list = get_field('partners_list');
$partners_list_first_block = get_field('partners_list_first_block');
$partners_list_first_block_title = $partners_list_first_block['title'];
$partners_list_first_block_text = $partners_list_first_block['text'];
$partners_list_first_block_button_name = $partners_list_first_block['button_name'];
$partners_list_first_block_image = $partners_list_first_block['image'];
?>
<section class="affiliate scroll-block">
  <div class="affiliate__inner container-inner">
    <?php if ($title_our_partners) : ?>
      <h3 class="affiliate__title main-title">
        <?php echo $title_our_partners; ?>
      </h3>
    <?php endif; ?>
    <?php if ($text_our_partners) : ?>
      <p class="affiliate__subtitle">
        <?php echo $text_our_partners; ?>
      </p>
    <?php endif; ?>
    <?php if ($image_our_partners && $content_our_partners) : ?>
      <article class="affiliate__article">
        <div class="affiliate__image">
          <img src="<?php echo wp_get_attachment_image_url($image_our_partners, 'full') ?>" alt="image" class="affiliate__img">
        </div>
        <div class="affiliate__descr">
          <?php echo $content_our_partners; ?>
        </div>
      </article>
    <?php endif; ?>
    <?php if ($partners_list) : ?>
      <div class="affiliate__content">
        <?php while (have_rows('partners_list')) :
          the_row();
          $logo_image = get_sub_field('logo_image');
          $title = get_sub_field('title');
          $text = get_sub_field('text');
          $button = get_sub_field('button');
          $image = get_sub_field('image');
        ?>
          <?php if (get_row_index() === 1) : ?>
            <?php if ($partners_list_first_block_title || $partners_list_first_block_image) : ?>
              <article class="affiliate-item">
                <div class="affiliate-item__info">
                  <div class="send_message">
                    <div class="title_wrapper">
                      <h3 class="main-title"><?php echo $partners_list_first_block_title; ?></h3>
                    </div>
                    <?php if ($partners_list_first_block_text) : ?>
                      <div class="content_wrapper">
                        <?php echo $partners_list_first_block_text; ?>
                      </div>
                    <?php endif; ?>
                    <?php if ($partners_list_first_block_button_name) :
                      $link_url = $partners_list_first_block_button_name['url'];
                      $link_title = $partners_list_first_block_button_name['title'];
                      $link_target = $partners_list_first_block_button_name['target'] ? $partners_list_first_block_button_name['target'] : '_self';
                    ?>
                      <div class="btn_wrapper">
                        <a class="btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="affiliate-item__image">
                  <img src="<?php echo wp_get_attachment_image_url($partners_list_first_block_image, 'full') ?>" alt="image" class="affiliate-item__img">
                </div>
              </article>
            <?php endif; ?>
          <?php endif; ?>
          <article class="affiliate-item" style="<?php echo get_row_index() % 2 !== 0 ? 'flex-direction: row-reverse;' : ''; ?>">
            <div class="affiliate-item__info">
              <?php if ($logo_image) : ?>
                <img src="<?php echo wp_get_attachment_image_url($logo_image, 'full') ?>" alt="logo" class="affiliate-item__logo">
              <?php endif; ?>
              <?php if ($title) : ?>
                <h4 class="affiliate-item__title">
                  <?php echo $title; ?>
                </h4>
              <?php endif; ?>
              <?php if ($text) : ?>
                <p class="affiliate-item__text">
                  <?php echo $text; ?>
                </p>
              <?php endif; ?>
              <?php if ($button) :
                $link_url = $button['url'];
                $link_title = $button['title'];
                $link_target = $button['target'] ? $button['target'] : '_self';
              ?>
                <a class="affiliate-item__link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </div>
            <?php if ($image) : ?>
              <div class="affiliate-item__image">
                <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="image" class="affiliate-item__img">
              </div>
            <?php endif; ?>
          </article>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>