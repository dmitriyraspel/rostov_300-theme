<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package rostov
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function raspel_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'raspel_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function raspel_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'raspel_pingback_header' );

/**
 * Add Dima Raspel for admin console footer. Без перевода
 */
function raspel_change_admin_footer () {
	$footer_text = array(
	'Спасибо за творчество с <a href="http://wordpress.org">WordPress</a>',
	'Дизайн и разработка <a href="https://raspel.ru">Dmitriy Raspel</a>'
	);
	return implode( ' &bull; ', $footer_text);
}	
add_filter('admin_footer_text', 'raspel_change_admin_footer');

/**
 * Remove url from comments.
 */
function raspel_remove_url_field( $fields ) {
	unset( $fields['url'] );
	return $fields;
} 
add_filter( 'comment_form_default_fields', 'raspel_remove_url_field', 10, 1);


/**
 * Change the excerpt more string
 */
function raspel_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'raspel_excerpt_more' );