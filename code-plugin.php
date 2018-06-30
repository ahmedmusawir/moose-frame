<?php
/*
 * Plugin Name: Paulund Syntax Highlighter
 * Plugin URI: http://www.paulund.co.uk
 * Description: A plugin that allows you to display code on your Website
 * Version: 1.0
 * Author: Paul Underwood
 * Author URI: http://www.paulund.co.uk
 * License: GPL2 

    Copyright 2012  Paul Underwood

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License,
    version 2, as published by the Free Software Foundation. 

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details. 
*/

/**
* Stop WordPress converting quotes to pretty quotes
*/
remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');

/**
* Define the different language shortcodes
*/
$language = array("html", "css", "javascript", "php");

/**
* Create the different shortcodes
*/
foreach($language as $lang){
	add_shortcode( $lang, 'paulund_highlight_code' );	
}

/**
* Change the content of the shortcode to display code in the content
*
* @param $atts - Shortcode Attributes
* @param $content - Content inside the shortcode
*/
function paulund_highlight_code($atts, $content = null){
	
	$encode = false;
	
	if($content != strip_tags($content)){
		$encode = true;
	}
	
	if($encode){
	
		$remove_array = array("<p>", "</p>", "<br />", "<br/>");
		$content = str_replace($remove_array, "", $content);
		
		$content = str_replace("<", "<", $content);
		$content = str_replace(">", ">", $content);
	}
		
	$content = "<pre><code>" . trim($content) . "</code></pre>";
	
	return $content;
}

?>