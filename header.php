<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package danny
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1 minimum-scale=1, maximum-scale=2">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <?php
  $streetaddress = get_field('streetaddress', 'options');
  $addresslocality = get_field('addresslocality', 'options');
  $addressregion = get_field('addressregion', 'options');
  $postalcode = get_field('postalcode', 'options');
  $addresscountry = get_field('addresscountry', 'options');
  $phone_items = get_field('phone_items', 'options');
  $last_key = end(array_keys($phone_items));
  ?>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://dannypessy.com/",
      "logo": "https://dannypessy.com/wp-content/themes/danny/assets/images/logo/logo_home.svg",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo $streetaddress; ?>",
        "addressLocality": "<?php echo $addresslocality; ?>",
        "addressRegion": "<?php echo $addressregion; ?>",
        "postalCode": "<?php echo $postalcode; ?>",
        "addressCountry": "<?php echo $addresscountry; ?>"
      },
      "contactPoint": [
        <?php foreach ($phone_items as $post => $value) :
        ?> {
            "@type": "ContactPoint",
            "telephone": "<?php echo $value['telephone']; ?>",
            "contactType": "<?php echo $value['contacttype']; ?>"
          }
          <?php
          if ($post == $last_key) {
          } else {
            echo ',';
          }
          ?>
        <?php endforeach;
        wp_reset_postdata();
        ?>
      ],
      "sameAs": [
        "https://www.facebook.com/profile.php?id=100037924614024",
        "https://www.youtube.com/channel/UCUOyvkEtyY-Lu0s551Sy6VA",
        "https://twitter.com/danny_pessy",
        "https://www.instagram.com/dannypessy/?next=%2F"
      ]
    }
  </script>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>