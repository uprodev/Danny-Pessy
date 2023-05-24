<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

function my_acf_init()
{
  acf_update_setting('google_api_key', 'AIzaSyDiyT05YehIdz2LrV-QOeRa5M18WfKtlnY');
}
add_action('acf/init', 'my_acf_init');


add_filter('acf/settings/save_json', 'dannt_acf_json_save_point');
function dannt_acf_json_save_point($path)
{
  // update path
  $path = get_stylesheet_directory() . '/acf-json';
  // return
  return $path;
}

/* ACF option pages*/
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Main settings',
    'menu_title'  => 'Theme options',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}
