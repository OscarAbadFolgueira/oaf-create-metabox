<?php
/*

Plugin Name: OAF Create Meta Box
Plugin URI: http://oscarabadfolgueira.com/programacion-de-plugins-wordpress-crear-un-meta-box
Description: This plugin creates tow Meta Boxes
Version: 1.0
Author: Oscar Abad Folgueira
Author URI: http://www.oscarabadfolgueira.com
License: GPLv2
License URL: http://www.gnu.org/licenses/gpl-2.0.html

*/

// Action hook add_meta_boxes

add_action( 'add_meta_boxes', 'oaf_create_metabox' );


function oaf_create_metabox () {

	// Function to create the meta box: oaf-metabox1 -- en posts, normal y high.
	add_meta_box( 'oaf-metabox1', 'Mi primer Meta Box', 'oaf_create_metabox_function', 'post', 'normal', 'high' );

	//Function to create the meta box: oaf-metabox2  -- en páginas, side, core
	add_meta_box( 'oaf-metabox2', 'Mi segundo Meta Box', 'oaf_create_metabox_function', 'page', 'side', 'core' );

}

// Function that prints out the HTML for the edit screen section.
function oaf_create_metabox_function(){

	echo 'Mi nuevo Meta Box';
}

?>