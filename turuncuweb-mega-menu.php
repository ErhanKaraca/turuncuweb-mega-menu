<?php

/**
 * Plugin Name: Turuncu Mega Menu
 * Plugin URI: https://turuncuweb.net
 * Description: Turuncu Mega Menu Pack for Elementor Plug-In
 * Version: 1.0.0
 * Author: Turuncu Internet Solutions
 * Author URI: https://turuncuweb.net
 */


namespace TURUNCUMEGAMENU;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('TURUNCUMEGAMENU_VERSION', '1.0.0');
define('TURUNCUMEGAMENU__FILE__', __FILE__);
define('TURUNCUMEGAMENU_PLUGIN_BASE', plugin_basename(TURUNCUMEGAMENU__FILE__));
define('TURUNCUMEGAMENU_PATH', plugin_dir_path(TURUNCUMEGAMENU__FILE__));
define('TURUNCUMEGAMENU_URL', plugin_dir_url(TURUNCUMEGAMENU__FILE__));



// Widgets
require TURUNCUMEGAMENU_PATH . 'widgets/init.php';


// Enqueue Scripts and Styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('turuncu-mega-menu', TURUNCUMEGAMENU_URL . 'assets/css/turuncu-mega-menu.css');
    wp_enqueue_script('turuncu-mega-menu', TURUNCUMEGAMENU_URL . 'assets/js/turuncu-mega-menu.js', ['jquery'], '1.0.0', true);
});
