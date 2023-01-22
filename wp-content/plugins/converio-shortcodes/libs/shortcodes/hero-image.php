<?php 
function converio_hero_image($attr, $content = null) {
	extract(shortcode_atts(array('image' => '', 'text_align' => '', 'text_color' => ''), $attr));
	$style = "";
	if ($image) {
		$style .= " background-image: url(" . $image . ");";
	}
	if ($text_color) {
		$style .= " color: ". $text_color . ";";
	}
	if ($text_align) {
		$style .= " text-align: " . $text_align;
	}
	$output = '<div class="hero" style="'.$style.'"><div class="hero-content">'.do_shortcode($content).'</div></div>';
	return $output;
}

function converio_hero() {
	add_shortcode('hero', 'converio_hero_image');
}

add_action('init', 'converio_hero');