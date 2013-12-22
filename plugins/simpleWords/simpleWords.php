<?php
/*
 * Plugin Name: Simple Words
 * Plugin URI: http://github.com/sea14/wordPressThemes/blob/master/plugins/simpleWords
 * Description: An extremely basic plugin. It outputs 'I am plugin output!'
 * Author: Sharon Austin
 * Version: 1.0
 * Author URI: http://www.sharon-elizabeth.com/
*/


add_filter( 'the_content', 'simple_content_change');

function simple_content_change( $content ){

	return $content . '<p>I am plugin output!</p>';

}

?>
