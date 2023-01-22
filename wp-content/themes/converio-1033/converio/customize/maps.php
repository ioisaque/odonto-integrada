<?php
function converio_customize_register_maps($wp_customize) {
	$wp_customize->add_section('maps', array(
		'title' => __('Maps', 'converio'),
		'priority' => 60
	));
	
	/*
	 * Map customization settings
	 */

	$wp_customize->add_setting('map_api_key', array(
		'sanitize_callback' => 'converio_sanitize_text'
	));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'map_api_key', array(
		'label' => __('API key:', 'converio'),
		'section' => 'maps',
		'settings' => 'map_api_key'
	)));

}

add_action('customize_register', 'converio_customize_register_maps');