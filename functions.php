<?php


/**
 * DANNY functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package danny
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/enqueue-scripts-and-styles.php';
require get_template_directory() . '/includes/acf-settings.php';
require get_template_directory() . '/includes/custom-images-size.php';
require get_template_directory() . '/includes/cpt.php';
//add_filter( 'show_admin_bar', '__return_false' );
