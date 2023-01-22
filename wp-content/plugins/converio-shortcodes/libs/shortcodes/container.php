<?php

function converio_container($attr, $content = null) {
	extract(shortcode_atts(array('id' => '', 'class' => '', 'style' => ''), $attr));

	$html = '<div';
	if ($id) {$html .= ' id="'.$id.'"';}
	if ($class) {$html .= ' class="'.$class.'"';}
	if ($style) {$html .= ' style="'.$style.'"';}
	$html .= '>'. do_shortcode($content) . '</div>';
	return $html;
}

function converio_container_shortcodes() {
	add_shortcode('container', 'converio_container');
}

add_action('init', 'converio_container_shortcodes');