<?php
/**
 * ridwanprogrammer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ridwanprogrammer
 */
/*===== the_excerpt =====*/
function get_excerpt_length(){  //untuk menampilkan jumlah kata artikel pada blog
	return 30;
}

add_filter('excerpt_length','get_excerpt_length' );

function return_excerpt_text(){ //untuk menampilkan lanjut baca pada artikel

	return '';

}

add_filter('excerpt_more', 'return_excerpt_text' );


require get_template_directory() . '/inc/init.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
