<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package TellyPress
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function tellypress_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'tellypress_jetpack_setup' );
