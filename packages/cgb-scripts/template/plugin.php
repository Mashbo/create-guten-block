<?php
/**
 * Plugin Name: <% blockName %>
 * Description: <% blockName %> — is a Gutenberg block built for a Mashbo theme.
 * Author: Mashbo
 * Author URI: https://mashbo.com
 * Version: 1.0.0
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
