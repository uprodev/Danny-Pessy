<?php
$logo = get_field('logo', 'option');
$button_header = get_field('button-header', 'option');
$menu_items = get_field('menu_items', 'option');
?>
<header class="header absolute">
  <div class="container">
    <div class="header__inner">
      <div class="header__logo_wrapper">
        <?php
        if ($logo) :
          $logo_size = 'logo_size_laptop';
          $logo_size_mobile = 'logo_size_mobile';
          $logo_url = wp_get_attachment_image_url($logo, $logo_size);
          $logo_alt = get_post_meta($logo, '_wp_attachment_image_alt', true);
          $home_url = (is_front_page()) ? '#page' : get_home_url();
        ?>
          <a href="<?php echo $home_url; ?>" class="header__logo">
            <div class="desktop_logo">
              <?php if (strripos($logo_url, '.svg')) : ?>
                <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt ?>" width="270" height="87">
              <?php else : ?>
                <?php echo wp_get_attachment_image($logo, $logo_size); ?>
              <?php endif; ?>
            </div>
            <div class="mobile_logo">
              <?php if (strripos($logo_url, '.svg')) : ?>
                <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt ?>" width="144" height="42">
              <?php else : ?>
                <?php echo wp_get_attachment_image($logo, $logo_size_mobile); ?>
              <?php endif; ?>
            </div>
          </a>
        <?php endif; ?>
      </div>
      <div class="menu_wrapper">
        <nav class="nav">
          <?php if ($menu_items) : ?>
            <ul class="nav__list">
              <?php while (have_rows('menu_items', 'option')) :
                the_row();
                $link = get_sub_field('link');
                $text_link = get_sub_field('text_link');
                $sub_menu = get_sub_field('sub_menu');
                $link_choise = get_sub_field('link-choise');
                $url = get_sub_field('url');
              ?>
                <li class="nav__line <?php echo $sub_menu ? 'has_sub_menu' : ''; ?>">
                  <?php if ($link_choise === 'site') : ?>
                    <a href="<?php echo $link; ?>" class="nav__link"><?php echo $text_link; ?></a>
                  <?php elseif ($link_choise === 'url') : ?>
                    <a href="<?php echo $url; ?>" class="nav__link" target="_blank"><?php echo $text_link; ?></a>
                  <?php endif; ?>
                  <?php if ($sub_menu) : ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/header/91d06c1940f0e082e72f.svg' ?>" alt="chevron" class="nav__icon" />
                    <div class="dropdown">
                      <img src="<?php echo get_template_directory_uri() . '/assets/images/header/91d06c1940f0e082e72f.svg' ?>" alt="chevron" class="dropdown__icon" />
                      <ul class="dropdown__list">
                        <?php foreach ($sub_menu as $item) :
                          $sub_link_choise = $item['link-choise'];
                          $sub_url = $item['url'];
                        ?>
                          <li class="dropdown__line">
                            <?php if ($sub_link_choise === 'site') : ?>
                              <a href="<?php echo $item['link']; ?>" class="dropdown__link"><?php echo $item['text_link']; ?></a>
                            <?php elseif ($sub_link_choise === 'url') : ?>
                              <a href="<?php echo $sub_url ?>" class="dropdown__link" target="_blank"><?php echo $item['text_link']; ?></a>
                            <?php endif; ?>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  <?php endif; ?>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          <?php if ($button_header) :
            $link_url = $button_header['url'];
            $link_title = $button_header['title'];
            $link_target = $button_header['target'] ? $button_header['target'] : '_self';
          ?>
            <a class="nav__btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
              <?php echo esc_html($link_title); ?>
            </a>
          <?php endif; ?>
        </nav>
      </div>
      <div class="mobile_btn">
        <button type="button" class="menu_btn jsBtnMenu"></button>
      </div>
    </div>
  </div>
</header>