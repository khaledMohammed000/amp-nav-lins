<?php
/*
Plugin Name: AMP Nav Links
Version: 0.0.
Author: Ahmed Kaludi, Mohammed Kaludi
Author URI: https://ampforwp.com/
Donate link: https://www.paypal.me/Kaludi/5
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

function ampforwp_next() {
  return 'next';
}
function ampforwp_previous() {
  return 'previous';
}
function ampforwp_custom_modifications() {
add_filter('ampforwp_next_link','ampforwp_next' );
add_filter('ampforwp_prev_link', 'ampforwp_previous');
}
add_action('amp_init','ampforwp_custom_modifications');