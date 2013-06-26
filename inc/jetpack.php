<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package wolf_starter
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function wolf_starter_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'false',
	) );
}
add_action( 'after_setup_theme', 'wolf_starter_jetpack_setup' );
