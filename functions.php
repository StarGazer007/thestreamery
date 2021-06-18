
<?php
/**
 * Functions and definitions
 *
 *
 *
 * @package WordPress
 * @subpackage Streamer
 * @since Streamer 1.0
 */



if ( ! function_exists( 'streamer_setup' ) ) {
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since MyFirstTheme 1.0
*/
function streamer_setup() {

	/**
	* Add post-formats support.
	*/
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
}

add_action('after_setup_theme','streamer_setup');
