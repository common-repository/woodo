<?php
/*
* Plugin Name: autometa's WOODO
* Description: It reproduces product categories and tags in products and it generates a cloud mixing categories and tags of products simply via: [woocats] and [wootags] and [woodo].
* Version: 2.2
* Author: JorgeAmVF
* Author URI: https://profiles.wordpress.org/jorgeamvf/
* License: GPL2
 
autometa's WOODO is developed by JorgeAmVF in order to improve the quality of Quaestio.org
and it is freely provided with the intent to help other developers to fulfill
their needs. 
 
autometa's WOODO is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
autometa's WOODO is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with autometa's WOODO. If not, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
*/

// [woocats] = (product) categories
function autometa_product_categories( $atts, $content = null ) {
	global $post;
	$am_woocats = '<span id="woocats" class="autometa">' . get_the_term_list( $post->ID, 'product_cat', $separator = ' ' ) . '</span>';
	return $am_woocats;
}
add_shortcode( "woocats", "autometa_product_categories" );

// [wootags] = (product) tags
function autometa_product_tags( $atts, $content = null ) {
	global $post;
	$am_wootags = '<span id="woocats" class="autometa">' . get_the_term_list( $post->ID, 'product_tag', $separator = ' ' ) . '</span>';
	return $am_wootags;
}
add_shortcode( "wootags", "autometa_product_tags" );

// [woodo] = (product) categories & tags
function autometa_product_taxonomies( $echo = false ) {
	if ( function_exists( 'wp_tag_cloud' ) )
		 $am_woodoo = '<span id="woodo" class="autometa">' . wp_tag_cloud( array( 
			'number' => 0,
			'orderby' => 'count',
			'order' => 'RAND',
			'taxonomy' => array(
				'product_tag',
				'product_cat'
			),
		 ) ) . '</span>';
	return $am_woodo;
}
add_shortcode( "woodo", "autometa_product_taxonomies" );
?>
