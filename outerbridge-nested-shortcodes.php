<?php  
/* 
Plugin Name: Outerbridge Nested Shortcodes 
Plugin URI: http://outerbridge.co.uk/tools
Description: A small plugin which allows you to use nested shortcodes (i.e. a shortcode within an enclosing shortcode) by implementing a simple "do_shortcode" filter as per the WordPress Codex to content and widgets - see http://codex.wordpress.org/Shortcode_API#Nested_Shortcodes and http://codex.wordpress.org/Function_Reference/do_shortcode
Author: Mike Jones a.k.a. Outerbridge Mike
Version: 1.0
Author URI: http://outerbridge.co.uk
License: GPL v2
*/

/**
 *
 * v1.0 120301 Tested and stable up to WP3.3
 *
 * v0.1 110830 Initial release
 *
 */

/** use FILTERPRIORITY to change where this operates.
 *  BE CAREFUL though as you may break WordPress by setting this
 *  to run too soon
 *
 *  10 is the default
 *  lower than 10 runs earlier and greater than 10 is later
 */
    
define('FILTERPRIORITY', 10);
add_filter('the_content', 'do_shortcode', FILTERPRIORITY);
add_filter('widget_text', 'do_shortcode', FILTERPRIORITY);
?>