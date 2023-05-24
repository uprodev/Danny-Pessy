<?php
/*
Template Name: Social Page
*/
?>
<?php get_header(); ?>
<?php
get_template_part('template-parts/header/header-banner', 'none');
?>
<main>
  <?php
  get_template_part('template-parts/header/header', 'none');
  ?>
  <?php get_template_part('template-parts/pages/social/content', 'none'); ?>
</main>
<?php get_footer(); ?>