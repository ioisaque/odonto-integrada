<?php defined('ABSPATH') or die("Access denied!");
/*one click import*/
function converio_ocdi_import_files() {
    return array(
        array(
            'import_file_name'       => esc_attr__('Main demo (with images, sidebars, slider and settings)', 'converio'),
            //'import_file_url'        => get_template_directory_uri().'/dummy-data/empty-test.xml',
            //'import_widget_file_url' => ''
            'import_file_url'        => get_template_directory_uri().'/dummy-data/converio-dummy.xml',
            'import_widget_file_url' => get_template_directory_uri().'/dummy-data/converio-widgets.wie'
        ),
        array(
            'import_file_name'       => esc_attr__('WooCommerce Shop (dummy data)', 'converio'),
            'import_file_url'        => get_template_directory_uri().'/dummy-data/woocommerce/dummy-data.xml',
            'import_widget_file_url' => ''
        ),
    );
}

add_filter( 'pt-ocdi/import_files', 'converio_ocdi_import_files' );
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

function converio_ocdi_import_start( $selected_import ) {
	
	if ( 'Main demo (with images, sidebars, slider and settings)' === $selected_import['import_file_name'] ) {
				
		/*add custom sidebars*/
		$custom_sidebar[] = 'Side nav';
		$custom_sidebar[] = 'FAQ';
		$custom_sidebar[] = 'Contact fullwidth';
		$custom_sidebar[] = 'Menu sidebar 1';
		$custom_sidebar[] = 'Menu sidebar 2';
		$custom_sidebar[] = 'Menu sidebar 3';
		$custom_sidebar[] = 'Pages';
		$custom_sidebar[] = 'Shortcodes';
		$custom_sidebar[] = 'Blog Masonry';

		update_option( 'custom_sidebar', $custom_sidebar );
		
		/*import revolution slider before importing xml*/
		converio_import_revolution_slider();
		
		//set social media icons
		set_theme_mod('social_facebook', 'https://www.facebook.com/ThemeMotive');
		set_theme_mod('social_twitter', 'https://twitter.com/ThemeMotive');
		set_theme_mod('social_googleplus', 'https://plus.google.com/110285812849220660717/posts');
		set_theme_mod('social_pinterest', 'https://pinterest.com/thememotive/');
		set_theme_mod('social_email', 'http://thememotive.us7.list-manage1.com/subscribe?u=0ebfb07d5971d0d5896940d8a&id=737e7e75fb');
		
		update_option('blogdescription', 'Premium Theme');
		update_option('blogname', 'converio');
		
		set_theme_mod('logo_file', get_template_directory_uri().'/images/logo@2x.png');
		
		set_theme_mod('logo_width', '198');
		set_theme_mod('logo_height', '42');
		
		set_theme_mod('favicon', get_template_directory_uri().'/images/favicon.png');
	}
	
}

add_action( 'pt-ocdi/before_content_import', 'converio_ocdi_import_start' );

function converio_ocdi_after_import( $selected_import ) {

    if ( 'Main demo (with images, sidebars, slider and settings)' === $selected_import['import_file_name'] ) {
		
		//Revolution Slider - assign sliders to pages
		if ( is_plugin_active( 'revslider/revslider.php' ) ) {
			$slider = new RevSlider();
			// Array of current slider "alias" names
			$arrSliders = $slider->getArrSlidersShort();
			
			//check sliders and assign to choosen pages
			foreach($arrSliders as $rev_id => $rev_slider_alias) {
			
				if($rev_slider_alias == 'slider1') {
					update_post_meta(2574, 'revolution_slider', strip_tags($rev_id));
					update_post_meta(2537, 'revolution_slider', strip_tags($rev_id));
					update_post_meta(2553, 'revolution_slider', strip_tags($rev_id));
					//} else if($rev_slider_alias == 'slider2') {
					//update_post_meta(2553, 'revolution_slider', strip_tags($rev_id));
				}
				
			}
		}//end of Revolution Slide	
	   
		//Set menu locations
		$locations = get_theme_mod('nav_menu_locations');
		$locations['primary'] = 'Main';
		set_theme_mod('nav_menu_locations', $locations);
		
		//set home page as the frontpage 
		update_option('show_on_front', 'page');
		update_option('page_on_front', '2574');
		
		//set logo
		set_theme_mod('logo_upload', get_template_directory_uri().'/images/logo@2x.png');
		
		set_theme_mod('logo_width', '198');
		set_theme_mod('logo_height', '42');
		
		//set portfolio slug
		set_theme_mod('project_slug', 'portfolio');
		
    }
}
add_action( 'pt-ocdi/after_import', 'converio_ocdi_after_import' );
?>