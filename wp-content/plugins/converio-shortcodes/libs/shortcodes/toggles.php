<?php

// shortcode for Toggles
add_shortcode('toggles', 'converio_toggles_group');
add_shortcode('toggle', 'converio_toggle');
$toggle = '';
function converio_toggles_group( $atts, $content = null ) {
    global $toggle;
    // reset divs
    $accordion = '';	
    $output= '<ul class="accordion toggles">';    
    $output.=do_shortcode($content);
    $output.='</ul>';
    return $output;  
}  

function converio_toggle($atts, $content = null) {
    global $toggle;
    $title = '';
    extract(shortcode_atts(array(  
        'title' => '',
		'expanded' => ''
    ), $atts));  
    $output = '
        <li><a ';
	if ($expanded == 'yes') { $output .= 'class="expanded" ';}
	$output .= 'href="#">'.$title.'</a><div';
	if ($expanded == 'yes') { $output .= ' style="display:block"';}
	$output .= '>'.do_shortcode($content).'</div></li>';
    return $output;
}
