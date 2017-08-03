<?php

$options = array (

	array("action" => "open_postbox", "title" => "Restaurant Options"),
	array(
		"action" => "add_text_field",
		"title" => "Restaurant Slug",
		"desc"  => "Provided by EasyWay Online Ordering. E.g: <strong>demo</strong>",
		"id" => PLUGIN_PREFIX . "_restaurant_slug",
	),
	array("action" => "add_seperator"),
	array(
		"action" => "add_radio_field",
		"title" => "Choose your layout style",
		"id" => PLUGIN_PREFIX . "_appearence",
		"appearence" => "large",
		"std" => "1",
		"options" => array(
			array("value" => "1", "label" => "<img src='" . PLUGIN_URL . "/images/layout_1.png'>"),
			array("value" => "2", "label" => "<img src='" . PLUGIN_URL . "/images/layout_2.png'>")
		)
	),
	array(
		"action" => "add_checkbox_field",
		"title" => "Show item pictures and description",
		"desc"  => "Show item pictures and description on item's listing page.",
		"id" => PLUGIN_PREFIX . "_show_item_pictures_and_description"
	),
	array("action" => "add_seperator"),
	array(
		"action" => "add_text_field",
		"title" => "General font size",
		"std" => "12px",
		"desc"  => "All elments without any font size defined will use this.",
		"id" => PLUGIN_PREFIX . "_general_font_size",
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "General text color",
		"std" => "#000000",
		"desc"  => "Text without any color defined will use this color as default",
		"id" => PLUGIN_PREFIX . "_general_text_color"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Secondary text color",
		"std" => "#000000",
		"desc"  => "Secondary text color",
		"id" => PLUGIN_PREFIX . "_secondary_text_color"
	),
	array("action" => "add_seperator"),
	array(
		"action" => "add_colorbox_field",
		"title" => "Menu BG Color",
		"std" => "#F4F4F4",
		"desc"  => "Default is grey, applied to the top menu backgroud.",
		"id" => PLUGIN_PREFIX . "_menu_bg_color"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Menu link color on active",
		"std" => "#CC0000",
		"desc"  => "Default is red, used for active menu link.",
		"id" => PLUGIN_PREFIX . "_active_menu_link_color"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Menu link color on inactive",
		"std" => "#333333",
		"desc"  => "Default is #333333, Used for inactive menu link.",
		"id" => PLUGIN_PREFIX . "_inactive_menu_link_color"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Sub Menu Headings color",
		"std" => "#585858",
		"desc"  => "Default is #585858, Used for sub menu headings color.",
		"id" => PLUGIN_PREFIX . "_sub_menu_headings_color"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Sub Menu Descriptions color",
		"std" => "#585858",
		"desc"  => "Default is #585858, Used for sub menu descriptions color.",
		"id" => PLUGIN_PREFIX . "_sub_menu_descriptions_color"
	),
	array("action" => "add_seperator"),
	array(
		"action" => "add_colorbox_field",
		"title" => "Item's title color",
		"std" => "#000000",
		"desc"  => "Default is #000000, color for item's title color.",
		"id" => PLUGIN_PREFIX . "_items_title_color"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Item's price color",
		"std" => "#000000",
		"desc"  => "Default is #000000, color for item's price color.",
		"id" => PLUGIN_PREFIX . "_items_price_color"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Item's description color",
		"std" => "#000000",
		"desc"  => "Default is #000000, color for item's description color.",
		"id" => PLUGIN_PREFIX . "_items_description_color"
	),
	array(
		"action" => "add_text_field", 
		"title" => "Items &amp; Prices font size",
		"desc"  => "Default is 14px, used for &quot;Items &amp; Prices&quot; font size.",
		"std" => "14px",
		"attr" => 'style="width: 128px;"',
		"id" => PLUGIN_PREFIX . "_items_and_prices_font_size"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "&quot;Your Order Summary&quot; color",
		"std" => "#5f5f5f",
		"desc"  => "Default is #5f5f5f, color for &quot;Your Order Summary&quot; color.",
		"id" => PLUGIN_PREFIX . "_your_order_summary_color"
	),
	array(
		"action" => "add_text_field", 
		"title" => "&quot;Your Order Summary&quot; font size",
		"desc"  => "Default is 18px, Font size of &quot;Your Order Summary&quot;.",
		"std" => "18px",
		"attr" => 'style="width: 128px;"',
		"id" => PLUGIN_PREFIX . "_your_order_summary_font_size"
	),
	array(
		"action" => "add_upload_file_field", 
		"title" => "&quot;Order Online&quot; button image",
		"desc"  => "Default is grey, appears behind the menu list and sub menu title.",
		"id" => PLUGIN_PREFIX . "_order_online_button_image"
	),
	array("action" => "add_seperator"),
	array(
		"action" => "add_upload_file_field",
		"title" => "Cell BG image",
		"desc"  => "Specify background image for the white behind menu items and cart contents.",
		"id" => PLUGIN_PREFIX . "_cell_bg_image"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Cell BG color",
		"std" => "#ffffff",
		"desc"  => "Specify background color or chose &quot;transparent&quot; for the white behind menu items and cart contents.",
		"id" => PLUGIN_PREFIX . "_cell_bg_color"
	),
	array(
		"action" => "add_radio_field", 
		"title" => "Cell BG image strech / tile",
		"std" => "2",
		"desc"  => "Default is Tile, appears behind menu items and cart contents.",
		"id" => PLUGIN_PREFIX . "_cell_bg_image_strech_or_tile",
		"options" => array(
			array("value" => "1", "label" => "Strech"),
			array("value" => "2", "label" => "Tile")
		)
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Cell border color",
		"std" => "#f4f4f4",
		"desc"  => "Default is #f4f4f4, set the border color of the columns.",
		"id" => PLUGIN_PREFIX . "_cell_border_color"
	),
	array(
		"action" => "add_text_field",
		"title" => "Cell border thickness",
		"std" => "1px",
		"attr" => 'style="width: 128px;"',
		"desc"  => "Default is 1, set the border thickness of the columns.",
		"id" => PLUGIN_PREFIX . "_cell_border_thickness"
	),
	array("action" => "add_seperator"),
	array(
		"action" => "add_text_field", 
		"title" => "Titles font size",
		"std" => "16px",
		"desc"  => "Default is 12px, font size of titles.",
		"attr" => 'style="width: 128px;"',
		"id" => PLUGIN_PREFIX . "_titles_font_size"
	),
	array(
		"action" => "add_text_field",
		"title" => "Titles font",
		"std" => "Arial,Helvetica,sans-serif",
		"desc"  => "Default is 'Arial,Helvetica,sans-serif', font family or style of titles.",
		"id" => PLUGIN_PREFIX . "_titles_font_family"
	),
	array("action" => "add_seperator"),
	array(
		"action" => "add_text_field",
		"title" => "Min Width of the container",
		"desc"  => "Min width of the container.",
		"attr" => 'style="width: 128px;"',
		"id" => PLUGIN_PREFIX . "_min_width_of_the_container"
	),
	/*array(
		"action" => "add_text_field",
		"title" => "Container Height",
		"std" => "550px",
		"desc"  => "Set Container(iFrame) height.",
		"attr" => 'style="width: 128px;"',
		"id" => PLUGIN_PREFIX . "_iframe_height"
	),
	array(
		"action" => "add_checkbox_field",
		"title" => "Container height infinite",
		"desc"  => "Set container(iFrame) height to infinite.",
		"id" => PLUGIN_PREFIX . "_iframe_height_infinite"
	),*/
	array("action" => "add_seperator"),
	array(
		"action" => "add_checkbox_field",
		"title" => "Show loyalty box above the cart",
		"desc"  => "Show loyalty box above the cart.",
		"id" => PLUGIN_PREFIX . "_show_loyalty_box_about_the_cart"
	),
	array(
		"action" => "add_colorbox_field",
		"title" => "Color for VIP progress bar",
		"std" => "#00CCFF",
		"desc"  => "Set the color fo the VIP progress bar",
		"id" => PLUGIN_PREFIX . "_vip_progress_bar_color"
	),
	array("action" => "close_postbox")

);

function easyway_get_all_options() {
	$options = array(
		"easyway_active_menu_link_color" => "",
		"easyway_appearence" => "1",
		"easyway_cell_bg_color" => "#ffffff",
		"easyway_general_font_size" => "12px",
		"easyway_general_text_color" => "#000000",
		"easyway_secondary_text_color" => "#000000",
		"easyway_cell_bg_image" => "",
		"easyway_cell_bg_image_strech_or_tile" => "2",
		"easyway_inactive_menu_link_color" => "#333333",
		"easyway_items_and_prices_font_size" => "14px",
		"easyway_items_title_color" => "#000000",
		"easyway_items_price_color" => "#000000",
		"easyway_items_description_color" => "#000000",
		"easyway_menu_bg_color" => "#f4f4f4",
		"easyway_min_width_of_the_container" => "",
		"easyway_order_online_button_image" => "",
		"easyway_restaurant_slug" => "",
		"easyway_show_loyalty_box_about_the_cart" => "1",
		"easyway_sub_menu_descriptions_color" => "#585858",
		"easyway_sub_menu_headings_color" => "#585858",
		"easyway_titles_font_family" => "Arial,Helvetica,sans-serif",
		"easyway_titles_font_size" => "16px",
		"easyway_your_order_summary_color" => "#5F5F5F",
		"easyway_your_order_summary_font_size" => "18px",
		"easyway_show_item_pictures_and_description" => "1",
		//"easyway_iframe_height" => "550px",
		"easyway_iframe_height_infinite" => "1",
		"easyway_cell_border_color" => "#F4F4F4",
		"easyway_cell_border_thickness" => "1px",
		"easyway_vip_progress_bar_color" => "#00CCFF"
	);
	foreach($options as $key => $option) {
		$options[$key] = get_option($key);
	}

	$options["easyway_url"] = (empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "https://" : "http://") . $_SERVER["SERVER_NAME"];
	return $options;
}

if ('save' == $_POST['action']) {
	if (get_magic_quotes_gpc()) {
		$_POST = array_map('stripslashes_deep', $_POST);
		$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
	}
	foreach ($options as $option) {
		
		if( isset($_POST[$option['id']]) or isset($_FILES[$option['id']])) {
			if($option['id'] == PLUGIN_PREFIX . "_order_online_button_image" or $option['id'] == PLUGIN_PREFIX . "_cell_bg_image") {
				if($_FILES[$option['id']]['error'] != 4) {
					$return = upload_image($_FILES[$option['id']]);
					if(empty($return["upload_feedback"])) {
						$_POST[$option['id']] = $return["file_name_and_location"];
					} else {
						$_POST[$option['id']] = "";
					}
				} else {
					$existing_image = get_option($option['id']);
					if($existing_image) {
						$_POST[$option['id']] = $existing_image;
					} else {
						$_POST[$option['id']] = "";	
					}
				}
			}
			update_option($option['id'], $_POST[$option['id']]); 
		} else { 
			delete_option($option['id']); 
		}
	}
	
	$options_arr = easyway_get_all_options();
	$settings_id = get_option("easyway_settings_id");
	$settings_id = (!$settings_id ? 0 : $settings_id);
	$options_arr["easyway_settings_id"] = $settings_id;

	$data_url = EASYWAYHOST . $options_arr["easyway_restaurant_slug"] . "/?wp_api=save_settings";

	$args = array(
		'timeout' => 60,
		'sslverify' => false,
		'method' => 'POST',
		'body' =>  $options_arr
	);
	$result = wp_remote_request( $data_url, $args );
	if(is_numeric($result["body"])) {
		$settings_id = intval($result["body"]);
		update_option("easyway_settings_id", $settings_id);
	}
?>
	<div class="updated"><p><strong><?php _e('Options saved.'); ?></strong></p></div>
<?php
} else if('reset' == $_POST['action']) {
	foreach ($options as $option) {
		if(empty($value['std']))
			delete_option($option['id']);
		else
			update_option($option['id'], $_POST[$option['std']]);
	}
}

?>

<h3><?php _e('Sign Up with EasyWay', 'easyway_tr' ) ?></h3>

<div class="has-right-sidebar meta-box-sortables easyway-options">
<?php include("content-sidebar.php"); ?>
	<div id="post-body">
		<div id="post-body-content">
		
        
        <div class="postbox">
      	  <h3 class="hndle"></h3>
		   <div class="inside">
           	<h2>Sign Up ... </h2>
           </div>	
        </div>
	    
        
        
        </div>
       
    </div>
</div>
<style type="text/css">
	#easyway_show_item_pictures_and_description_row {
		display: none;
	}
</style>
<script type="text/javascript" charset="utf-8">
	jQuery(document).ready( function($) {
		var row = $("#easyway_show_item_pictures_and_description_row");
		if($("#easyway_appearence_row input[value='2']").is(":checked")) {
			row.slideDown();
		}
		$("#easyway_appearence_row input[value='2']").click(function() {
			if($(this).is(":checked")) {
				row.slideDown();
			}
		});
		$("#easyway_appearence_row input[value='1']").click(function() {
			if($(this).is(":checked")) {
				row.slideUp();
			}
		});
		
		$('.postbox h3, .postbox .handlediv, .stuffbox h3').click( function() {
			$(this).parent().toggleClass('closed');
		});
	
		$('#reset_template_button').click(function(e){
			if(confirm("Do you really want to reset your options?")) {
				$('#easyway_form_action').val('reset');
				$('#easyway_form').submit();
			}
			e.preventDefault();
		});
	});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39801314-2', 'idk.com');
  ga('send', 'pageview');

</script>

<script type='text/javascript'>
var ssa = '46b6dff5280fb113';
var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel.sitescout.com/iap/' + ssa;
new Image().src=ssaUrl;
</script>

<script type="text/javascript">
adroll_adv_id = "6HF2BPRWLNGNPK2JH2HFU2";
adroll_pix_id = "KLSWDQ4O7NGIXC7WTNCXY7";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>