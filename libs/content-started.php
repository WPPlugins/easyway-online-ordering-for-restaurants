


<h3><?php _e('Getting Started ... the EasyWay', 'easyway_tr' ) ?></h3>

<div class="has-right-sidebar meta-box-sortables easyway-options">
<?php include("content-sidebar.php"); ?>
	<div id="post-body">
		<div id="post-body-content">
		
         <div class="postbox">
      	  <h3 class="hndle"></h3>
		   <div class="inside">
           <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td><img src='<?php echo PLUGIN_URL; ?>/images/getting-started.png' border='0' /></td>
    <td><h2>Increase sales by 20% with Online Ordering!</h2>

<h4>EasyWay Ordering lets your customers place orders however, wherever and whenever they want.  Your customers can order from their computer, smartphone, tablet and even by text message. More convenience = more orders.</h4>

<ul style='list-style:inside;margin-left:20px;'>
<li>Customizable layout and color scheme </li>
<li>Up to 3 precise delivery zones</li>
<li>Payment via your own merchant account</li>
<li>Orders can be sent to Fax, e-mail or POS</li>
<li>Compatible with in-store gift and loyalty cards</li>
</ul></td>
  </tr>
</table>

           		
           </div>	
        </div>
        
      
        
        <div class="postbox">
      	  <h3 class="hndle"></h3>
		   <div class="inside">
           	<h2>About this plugin ... </h2><br>
            
            <div class='info'>
            <strong>HELP – Plugin Set-Up</strong>
            <ol>
           <li>To display Your EasyWay Ordering Menu, add the following shortcode to the page where you want the online ordering menu to appear.

[easywayordering]
</li>
<li>Select “layout” from the right sidebar and choose “Full Width Page Template, No Sidebar”</li>
<li>In the plugin settings, enter your restaurant slug.  Your restaurant slug is the portion of your Site URL immediately following “easywayordering.com” </li>
</ol>
            </div>
            <br>
         
         <div class='info'>
            <strong>Help finding your slug</strong>
            <br>
            <br>
            You can find your site URL on the main page of your <span style="color:#0895a2;text-decoration:underline;"><a href="http://www.easywayordering.com/c_panel/login.php">Manager Control Panel</a> </span> 
		<br>
        <img src='<?php echo PLUGIN_URL; ?>/images/punta-cana-1.png' border='0' />
        <br>
 
In this example the site URL is http://www.easywayordering.com/punta_cana/ and the slug is “punta_cana”<br><br>

Note: If you do have an account yet, you can use the site slug “demo” to see how the menu will look in your website. <br> <br>

When you are ready to go live, visit easywayordering.com and click “Get Started” <br><br>

For help anytime:<br>
Call: (800) 671-1616<br><br>

Or Schedule an Orientation<br>
 <iframe src="http://www.vcita.com/contact_widget?v=956a329f" width="100%" height="110" scrolling="no" frameborder="0" style="max-width:525;">
              <p>Contact EasyWay Ordering</p>
              <p><a href="http://www.vcita.com/meeting_scheduler?v=956a329f" target="_blank">Online Scheduling</a> or
            <a href="http://www.vcita.com/contact_page?v=956a329f" target="_blank">Send a Message</a>
            </p>
              <p>Powered by <a href='http://www.vcita.com/?invite=VR_PB-424205'>vCita</a></p>
            </iframe>

            </div>
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