<?php
/**
 * Plugin Name: Admin Color Schemes
 * Plugin URI: http://wordpress.org/plugins/admin-color-schemes/
 * Description: Even more admin color schemes
 * Version: 2.2
 * Author: WordPress Core Team
 * Author URI: http://wordpress.org/
 * Text Domain: admin_schemes
 * Domain Path: /languages
 */

/*
Copyright 2013 Kelly Dwan, Mel Choyce, Dave Whitley, Kate Whitley

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

class ACS_Color_Schemes {

	/**
	 * List of colors registered in this plugin.
	 *
	 * @since 1.0
	 * @access private
	 * @var array $colors List of colors registered in this plugin.
	 *                    Needed for registering colors-fresh dependency.
	 */
	private $colors = array(
		'vinyard', 'primary'
	);

	function __construct() {
		add_action( 'admin_init' , array( $this, 'add_colors' ) );
	}

	/**
	 * Register color schemes.
	 */
	function add_colors() {
		$suffix = is_rtl() ? '-rtl' : '';

		wp_admin_css_color(
			'novo', __( 'Odontologia', 'admin_schemes' ),
			plugins_url( "novo/colors$suffix.css", __FILE__ ),
			array( '#1d386d', '#FFF', '#3b568b', '#f1f1f1' ),
			array( 'base' => '#f1f2f3', 'focus' => '#35395c', 'current' => '#35395c' )
		);
	}

}
global $acs_colors;
$acs_colors = new ACS_Color_Schemes;

