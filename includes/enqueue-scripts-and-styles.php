<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
function danny_styles()
{
  wp_enqueue_style('fancybox', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/main.css');
  wp_enqueue_style('style-help', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'danny_styles');

function danny_script()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), null, true);
  wp_enqueue_script('fancybox', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), null, true);
  wp_enqueue_script('scripts', get_template_directory_uri() . '/main.js', array(), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'danny_script');
