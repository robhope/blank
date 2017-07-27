<?php
/**
 *
 * @package blank
 * @since blank 1.0.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------
# Enqueue Styles
#-------------------------------------------------------------

function blank_enqueue_styles() {             

	# Main stylesheet
  	wp_register_style( 'blank-main-styles' , get_template_directory_uri(). "/style.css" , array(), blank_theme_version, 'screen' );  	
  	wp_enqueue_style( 'blank-main-styles' );           

}

add_action( 'wp_enqueue_scripts' , 'blank_enqueue_styles' );