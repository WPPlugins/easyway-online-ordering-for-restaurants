<?php


function add_select_field($options) { ?>  
	<tr id="<?php echo $options['id']; ?>_row">
        <th scope="row"><?php echo $options['title']; ?></th>
        <td>
        	<?php
		        $selected = ( get_option($options['id']) != "" ) ? get_option($options['id']) : $options["std"];
        	?>
        <select style="width:240px;" name="<?php echo $options['id']; ?>" id="<?php echo $options['id']; ?>">
        <?php foreach ($options['options'] as $option) { ?>
	        <option value="<?php echo $option['value']; ?>" <?php if ( $selected == $option['value']) { echo ' selected="selected"'; } ?>>
        		<?php echo $option['label']; ?>
	        </option>
        <?php } ?>
        </select>
        <?php if (!empty($options['desc'])) { ?><br /><span class="description"><?php echo $options['desc']; ?></span><?php } ;?>
		</td>
	</tr>
<?php
}

function add_radio_field($options) { ?>
	<tr id="<?php echo $options['id']; ?>_row">
    <th scope="row"><?php echo $options['title']; ?></th>
    <td colspan="2">
        <?php if(isset($options['appearence']) && $options['appearence'] == 'large') { ?>
        	
	        	<!-- <label><?php echo $options['title']."<br><br>"; ?></label> -->
		<? } else { ?>
        	
        	<!-- <td> -->
		<?php } ?>
        
        <?php $selected = ( get_option($options['id']) != "" ) ? get_option($options['id']) : $options["std"]; ?>
        <?php foreach ($options['options'] as $option) { ?>
        	<label>
		        <input type="radio" name="<?php echo $options['id']; ?>" value="<?php echo $option['value']; ?>" <?php if ( $selected == $option['value']) { echo ' checked="checked"'; } ?>/> 
        		<?php echo $option['label']; ?>
	        </label>
        <?php } ?>
        
        <?php if (!empty($options['desc'])) { ?><br /><span class="description"><?php echo $options['desc']; ?></span><?php } ;?>
			</td>
        </tr>
<?php
}
            
function add_checkbox_field($options) { ?>
        
	<tr id="<?php echo $options['id']; ?>_row">
        <th scope="row"><?php echo $options['title']; ?></th>
        <td>
			<?php
                if(get_option($options['id'])){
                    $checked = "checked=\"checked\"";
                }else{
                    $checked = "";
                }
            ?>
            <input type="checkbox" name="<?php echo $options['id']; ?>" id="<?php echo $options['id']; ?>" value="1" <?php echo $checked; ?> />
			<?php
                if (!empty($options['desc'])) {
            ?>
                    <br /><span class="description"><?php echo $options['desc']; ?></span>
            <?php }?>
		</td>
	</tr>
        
<?php
}
            
function add_colorbox_field($options) { ?>
        
	<tr id="<?php echo $options['id']; ?>_row">
        <th scope="row"><?php echo $options['title']; ?></th>
        <td>
        	<input type="text" value="<?php $color = get_option($options['id']); echo ($color != false ? $color : $options['std']); ?>" id="<?php echo $options['id']; ?>" name="<?php echo $options['id']; ?>" />
            <?php
                if (!empty($options['desc'])) {
            ?>
                    <br /><span class="description"><?php echo $options['desc']; ?></span>
            <?php }?>
            <script type="text/javascript">
				jQuery(document).ready( function($) {
					jQuery('#<?php echo $options['id']; ?>').ColorPicker({
						color: '<?php $color = get_option($options['id']); echo ($color != false ? $color : $options['std']); ?>',
						onShow: function (colpkr) {
							jQuery(colpkr).fadeIn(500);
							return false;
						},
						onHide: function (colpkr) {
							jQuery(colpkr).fadeOut(500);
							return false;
						},
						onChange: function (hsb, hex, rgb) {
							jQuery('#<?php echo $options['id']; ?>').val('#' + hex);
						}
					});
				});
			</script>
		</td>
	</tr>
        
<?php
}

function add_upload_file_field($options) { ?>
	<tr id="<?php echo $options['id']; ?>_row">
		<th scope="row"><?php echo $options['title']; ?></th>
		<td>
        	<span style="display: inline-block; vertical-align: top; width: 350px;">
			<input type="file" name="<?php echo $options['id']; ?>" id="<?php echo $options['id']; ?>" class="regular-text" <?php echo (!empty($options['attr']) ? $options['attr'] : ""); ?> />
            <?php if (!empty($options['desc'])) { ?><br /><span class="description"><?php echo $options['desc']; ?></span><?php } ;?>
            </span>
            <?php
				$file_src = get_option($options['id']);
				if($file_src) {
					echo '<span style="display: inline-block; margin-left: 10px;" class="' . $options['id'] . '_container"><b>Current:</b> <br/><img src="'. $file_src .'" width="100px" title="Current '. $options['title'] .'" /><br/><input type="button" value="delete" data="'. $options['id'] .'" style="padding: 0 3px;"/></span>'; 
				}
			?>
			<script type="text/javascript">
				(function($) {
					$(function() {
						$("input[data='<? echo $options['id']; ?>']").click(function() {
							$.post("<? echo admin_url(); ?>admin-ajax.php", { 'action': 'delete_image', 'key' : '<? echo $options['id']; ?>' }, function(data) {$(".<? echo $options['id']; ?>_container").fadeOut();});
						});
					});
				})(jQuery);
			</script>
        </td>
	</tr>

<?php
}

function open_postbox($options = array()){ ?>
    <div class="postbox">
	    <div class="handlediv" title="Click to toggle"><br></div> 
    	<h3 class="hndle"><?php echo $options['title']; ?></h3>
	    <div class="inside">
    		<table class="form-table">
<?php
}

function close_postbox($options = array()) { ?>
			</table>
		</div>
	</div>
<?php 
}
    
function add_text_field($options) { ?>
	<tr id="<?php echo $options['id']; ?>_row">
		<th scope="row"><?php echo $options['title']; ?></th>
		<td>
			<input type="text" name="<?php echo $options['id']; ?>" id="<?php echo $options['id']; ?>" value="<?php if ( get_option( $options['id'] ) != "") { echo get_option( $options['id'] ); } else { echo $options['std']; } ?>" class="regular-text" <?php echo (!empty($options['attr']) ? $options['attr'] : ""); ?>/>
<?php if (!empty($options['desc'])) { ?><br /><span class="description"><?php echo $options['desc']; ?></span><?php } ;?>
        </td>
	</tr>

<?php
}

function add_seperator($options) { ?>
	<tr><td colspan="2"><div style="margin-bottom:5px;border-bottom:1px dotted #999;"></div></td></tr>

<?php
}
   
function add_textarea_field($options) { ?>
	<tr id="<?php echo $value['id']; ?>_row">
		<td colspan="2">
			<label><?php echo $options['title']; ?></label>
            <textarea name="<?php echo $options['id']; ?>" style="width:99%; height:300px;" class="z-code-editor"><?php if ( get_option( $options['id'] ) != "") { echo get_option( $options['id'] ); } else { echo $value['std']; } ?></textarea>
            <?php if (!empty($options['desc'])) { ?>
                <div style="clear:both;">
                    <span class="description"><?php echo $options['desc']; ?></span>
                </div>
            <?php } ;?>
        </td>
      </tr>
<?php
}

function upload_image($image) {
	$return = array();
	if(isset($image) && ($image['size'] > 0)) {
		$arr_file_type = wp_check_filetype(basename($image['name']));
		$uploaded_file_type = $arr_file_type['type'];
		$allowed_file_types = array('image/jpg','image/jpeg','image/gif','image/png');
		if(in_array($uploaded_file_type, $allowed_file_types)) {
			$upload_overrides = array( 'test_form' => false ); 
			$uploaded_file = wp_handle_upload($image, $upload_overrides);
			if(isset($uploaded_file['file'])) {
				$return["file_name_and_location"] = $uploaded_file['url'];
			} else {
				$return["upload_feedback"] = 'There was a problem with your upload.';
			}
		} else {
			$return["upload_feedback"] = 'Please upload only image files (jpg, gif or png).';
		}
	} else {
		$return["upload_feedback"] = false;
	}
	return $return;
}

?>