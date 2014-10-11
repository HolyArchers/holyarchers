<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package holyarchers
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function holyarchers_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'holyarchers_jetpack_setup' );
