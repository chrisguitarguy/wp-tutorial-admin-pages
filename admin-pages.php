<?php
/**
 * Plugin Name: Chrisguitarguy.com Admin Page Tutorial
 * Plugin URI: https://chrisguitarguy.com/category/wordpress
 * Description: Tutorial code for WordPress admin pages
 * Version: 1.0
 * Text Domain: chrisguitarguy-adminpage
 * Author: Christopher Davis
 * Author URI: http://christopherdavis.me
 * License: MIT
 *
 * @license     http://opensource.org/licenses/MIT MIT
 */

!defined('ABSPATH') && exit;

require_once __DIR__.'/src/functions.php';

add_action('plugins_loaded', 'chrisguitarguy_adminpages_load');
