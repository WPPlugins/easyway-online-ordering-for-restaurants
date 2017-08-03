<?php 
/*
Plugin Name: EasyWay Online Ordering
Plugin URI: http://EasyWayOrdering.com
Description: This plugin lets you easily integrate EasyWay Online Ordering.
Author: EasyWay INC 
Author URI: http://EasyWayOrdering.com
Version: 1.3
*/

/*  Copyright 2013 EasyWay INC 

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

define(PLUGIN_URL, plugins_url() . "/easyway-online-ordering-for-restaurants");
define(PLUGIN_PREFIX, "easyway");
define(EASYWAYHOST, "http://www.easywayordering.com/");
define(FORM_ACTION, str_replace( '%7E', '~', $_SERVER['REQUEST_URI']));

require_once('libs/helpers.php');

function embed_restaurant($atts, $content){
	$settings_id = get_option("easyway_settings_id");
	if(!$settings_id) {
		$settings_id = 0;
	}
	$infinite_height = get_option("easyway_iframe_height_infinite");
	$height = "";
	if($infinite_height == 0) {
		$height = ' height="' . get_option("easyway_iframe_height") . '"';
	} else {
		$height = ' height="800px"';
	}
	$host = urlencode((empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "https://" : "http://") . $_SERVER["SERVER_NAME"]);
	return '<iframe width="100%" frameborder="0" marginheight="0" marginwidth="0" scrolling="0" id="ifm"' . $height . ' src="'. EASYWAYHOST . get_option("easyway_restaurant_slug") . '/?wp_api=load_resturant&host='. $host .'""></iframe>
			<script type="text/javascript">
				var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
				var eventer = window[eventMethod];
				var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";

				/// Listen to message from child window
				eventer(messageEvent,function(e) {
					var data1= JSON.parse(e.data);
					document.getElementById("ifm").style.height  = data1.height+ "px";
				},false);

			</script>';
	
}
add_shortcode('easywayordering', 'embed_restaurant' );

function admin_register_head_styles() {
	$stylesheets_path = PLUGIN_URL . "/stylesheets/";
	$scripts_path = PLUGIN_URL . "/js/";
	
	wp_register_style('easywayordering-admin-styles', $stylesheets_path . "admin.css");
	wp_enqueue_style( 'easywayordering-admin-styles');

	wp_register_script("easywayordering-admin-colorpicker-script", $scripts_path . "colorpicker.js");
	wp_enqueue_script("easywayordering-admin-colorpicker-script");
	
}
add_action('admin_init', 'admin_register_head_styles');


function easyway_online_ordering_admin() {
	$tabs = array('started'=>'Getting Started','options' => 'Online Ordering Design Options','support'=>'Support / FAQ','signup'=>'Sign Up');
	$current_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : "options";
	echo '<div class="wrap easyway-opts">';
	echo '<div id="icon-options-general" class="icon32 icon-easyway"></div>';
	echo '<h2 class="nav-tab-wrapper">';
	foreach ( $tabs as $tab_key => $tab_caption ) {
		$active = $current_tab == $tab_key ? 'nav-tab-active' : '';
		echo '<a class="nav-tab ' . $active . '" href="?page=easyway-online-ordering-options&tab=' . $tab_key . '">' . $tab_caption . '</a>'; 
	}
	echo '</h2>';
	
	if( array_key_exists($current_tab, $tabs) ) include("libs/content-".$current_tab.".php");
	
	echo '</div>';
}

function easyway_online_ordering_admin_actions() {
    add_menu_page('EasyWay Online Ordering Options', 'EasyWay Online Ordering', "edit_posts", "easyway-online-ordering-options", "easyway_online_ordering_admin", plugin_dir_url(__FILE__) . "images/logo.png");
}
add_action('admin_menu', 'easyway_online_ordering_admin_actions');

add_action("wp_ajax_nopriv_delete_image", "delete_image");
add_action("wp_ajax_delete_image", "delete_image");
function delete_image() {
	update_option($_REQUEST["key"], '');
	echo 1;
	die();
}

?>