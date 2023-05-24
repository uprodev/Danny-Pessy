<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/*Custom Images Size*/
if (function_exists('add_image_size')) {

  add_image_size('400x217', 400, 217, true);

  add_image_size('logo_size_laptop', 270, 87, false);
  add_image_size('logo_size_mobile', 144, 42, false);
}
/*Custom Images Size*/