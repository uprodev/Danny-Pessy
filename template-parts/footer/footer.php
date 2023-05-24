<?php
$copyright_text = get_field('copyright_text', 'option');
$instagram_title = get_field('instagram_title', 'option');
$instagram_subtitle = get_field('instagram_subtitle', 'option');
$inst_feed = get_field('inst', 'option');
$follow_button = get_field('follow_button', 'option');
$social_media_image = get_field('social_media_image', 'option');
$title = get_field('title', 'option');
$text = get_field('text', 'option');
$contacts = get_field('contacts', 'option');
$mail_icon = $contacts['mail_icon'];
$email_adress = $contacts['email_adress'];
$phone_icon = $contacts['phone_icon'];
$phone_number = $contacts['phone_number'];
$follow_text = get_field('follow_text', 'option');
$social_media = get_field('social_media', 'option');
$contact_form_shortcode = get_field('contact_form_shortcode', 'option');
$iframe_shortcode = get_field('iframe_shortcode', 'option');
$menu_items = get_field('menu_items', 'option');
$popup_image = get_field('popup_image', 'option');
$popup_title = get_field('popup_title', 'option');
$popup_button = get_field('popup_button', 'option');
$popup_link = get_field('popup_link', 'option');
$popup_shortcode = get_field('contact_form_shortcode_popup', 'option');
$slug = $post->post_name;

?>
<section class="insta">
  <div class="insta__inner container-inner">
    <?php if ($instagram_title) : ?>
      <h3 class="insta__title main-title"><?php echo $instagram_title; ?></h3>
    <?php endif; ?>
    <?php if ($instagram_subtitle) : ?>
      <p class="insta__subtitle"><?php echo $instagram_subtitle; ?></p>
    <?php endif; ?>
    <?php if ($follow_button) :
      $link_url = $follow_button['url'];
      $link_title = $follow_button['title'];
      $link_target = $follow_button['target'] ? $link['target'] : '_self';
    ?>
      <a class="insta__btn btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
    <?php endif; ?>


    <?php if ($inst_feed && $slug !== 'instagram') { ?>
      <br>
      <?php echo $inst_feed ?>

    <?php } else { ?>

      <?php if ($social_media_image) : ?>
        <div class="insta__content">
          <?php foreach ($social_media_image as $item) :
            $list_image = $item['photo'];
          ?>
            <div class="insta__item">
              <img src="<?php echo wp_get_attachment_image_url($list_image, 'full') ?>" alt="image" class="insta__img" />
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    <?php } ?>
  </div>
</section>

<section class="contact" id="contact">
  <div class="contact__inner container-inner">
    <?php if ($title) : ?>
      <h3 class="contact__title main-title"><?php echo $title; ?></h3>
    <?php endif; ?>
    <div class="contact__content">
      <div class="contact__info">
        <?php if ($text) : ?>
          <p class="contact__text">
            <?php echo $text; ?>
          </p>
        <?php endif; ?>
        <?php if ($email_adress || $phone_number) : ?>
          <ul class="contact__list">
            <?php if ($email_adress) : ?>
              <li class="contact__line">
                <a href="mailto:<?php echo $email_adress; ?>" class="contact__link">
                  <div class="contact__image">
                    <img src="<?php echo wp_get_attachment_image_url($mail_icon, 'full') ?>" alt="icon" class="contact__icon" />
                  </div>
                  <?php echo $email_adress; ?>
                </a>
              </li>
            <?php endif; ?>
            <?php if ($phone_number) : ?>
              <li class="contact__line">
                <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone_number); ?>" class="contact__link">
                  <div class="contact__image">
                    <img src="<?php echo wp_get_attachment_image_url($phone_icon, 'full') ?>" alt="icon" class="contact__icon" />
                  </div>
                  <?php echo $phone_number; ?>
                </a>
              </li>
            <?php endif; ?>
          </ul>
        <?php endif; ?>
        <div class="contact-socials">
          <?php if ($follow_text) : ?>
            <p class="contact-socials__title"><?php echo $follow_text; ?></p>
          <?php endif; ?>
          <?php if ($social_media) : ?>
            <ul class="contact-socials__list">
              <?php foreach ($social_media as $item) :
                $social_media_icon = $item['social_media_icon'];
                $social_media_link = $item['social_media_link'];
              ?>
                <li class="contact-socials__line">
                  <a href="<?php echo $social_media_link; ?>" class="contact-socials__link" target="_blank">
                    <img src="<?php echo wp_get_attachment_image_url($social_media_icon, 'full') ?>" alt="icon" class="contact-socials__icon" />
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($contact_form_shortcode) : ?>
        <div class="contact-form">
          <?php echo do_shortcode($contact_form_shortcode); ?>
        </div>
      <?php endif; ?>
      <?php if ($iframe_shortcode) : ?>
        <div class="contact-form">
          <?php echo $iframe_shortcode; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer__inner container-inner">
    <?php if ($menu_items) : ?>
      <nav class="nav">
        <ul class="nav__list">
          <?php while (have_rows('menu_items', 'option')) :
            the_row();
            $link = get_sub_field('link');
            $text_link = get_sub_field('text_link');
            $sub_menu = get_sub_field('sub_menu');
          ?>
            <li class="nav__line">
              <a href="<?php echo $link; ?>" class="nav__link"><?php echo $text_link; ?></a>
              <?php if ($sub_menu) : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/header/91d06c1940f0e082e72f.svg' ?>" alt="chevron" class="nav__icon" />
                <div class="dropdown footer-dropdown__first">
                  <img src="<?php echo get_template_directory_uri() . '/assets/images/header/91d06c1940f0e082e72f.svg' ?>" alt="chevron" class="dropdown__icon" />
                  <ul class="dropdown__list">
                    <?php foreach ($sub_menu as $item) : ?>
                      <li class="dropdown__line">
                        <a href="<?php echo $item['link']; ?>" class="dropdown__link"><?php echo $item['text_link']; ?></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        </ul>
      </nav>
    <?php endif; ?>
    <?php if ($copyright_text) : ?>
      <p class="footer__reserved"><?php echo $copyright_text; ?></p>
    <?php endif; ?>
    <a href="https://www.crossland-design.com/" class="footer__powered-by" target="_blank" rel="noffolow">Powered by Crossland Design</a>
  </div>
</footer>

<section class="book">
  <div class="book__inner">
    <div class="book-item item-first">
      <button class="book-item__close" type="button">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/header/4ca0b2e5d200c46f47a7.svg' ?>" alt="close" class="book-item__icon" />
      </button>
      <?php if ($popup_image) : ?>
        <div class="book-item__image">
          <img src="<?php echo wp_get_attachment_image_url($popup_image, 'full'); ?>" alt="img" class="book-item__img" />
        </div>
      <?php endif; ?>
      <div class="book-item__info">
        <?php if ($popup_title) : ?>
          <h3 class="book-item__title main-title">
            <?php echo $popup_title; ?>
          </h3>
        <?php endif; ?>
        <?php if ($popup_button) : ?>
          <button class="book-item__copy" type="button">
            <span class="book-item__text main-title">
              <?php echo $popup_button; ?>
            </span>
          </button>
          </h3>
        <?php endif; ?>
        <?php if ($popup_link) :
          $link_url = $popup_link['url'];
          $link_title = $popup_link['title'];
          $link_target = $popup_link['target'] ? $popup_link['target'] : '_self';
        ?>
          <a class="book-item__link btn-gold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="book-item item-second">
      <button class="book-item__close" type="button">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/header/4ca0b2e5d200c46f47a7.svg' ?>" alt="close" class="book-item__icon" />
      </button>
      <?php if ($popup_image) : ?>
        <div class="book-item__image">
          <img src="<?php echo wp_get_attachment_image_url($popup_image, 'full'); ?>" alt="img" class="book-item__img" />
        </div>
      <?php endif; ?>
      <?php if ($popup_shortcode) : ?>
        <div class="">
          <?php echo do_shortcode($popup_shortcode); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>