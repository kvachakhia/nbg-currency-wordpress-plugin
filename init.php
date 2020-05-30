<?php
/*
Plugin Name: NBG Currency
Plugin URI: https://github.com/kvachakhia/nbg-currency-wordpress-plugin
Description: NBG Currency Widget
Version: 1.1
Author: Dimitri Kvachakhia
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Text Domain: nbg-currency
*/

define('nbgc_LICENSE', true);

if (!defined('ABSPATH')) {
    die('Invalid request.');
}

if (!function_exists('nbgc_widget_short_code')) {

    require 'vendor/autoload.php';
    include_once 'shortcode.php';

}
