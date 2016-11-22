* ---------------------------------------------------------------------------
* Top of the screen login if not logged in
* --------------------------------------------------------------------------- */
<?php

$current_user = wp_get_current_user();

if ( is_user_logged_in() ) {
	echo 'Welcome ' . $current_user->user_login . '!';
} else {

wp_login_form();

};

?>

#loginform p {
  display: inline;
}

* ---------------------------------------------------------------------------
* Dynamic Copyright
* --------------------------------------------------------------------------- */
<center> &copy; Copyright CLIENT NAME <?php echo date("Y") ?>, All rights reserved. Powered by <a href="http://rainmancreative.com/">Rainman Creative</a></center>


* ---------------------------------------------------------------------------
* Loop A YouTube Embed
* --------------------------------------------------------------------------- */
<iframe width="560" height="315" src="http://www.youtube.com/embed/2nRmUC0Qg68?autoplay=1&loop=1&playlist=2nRmUC0Qg68" frameborder="0" allowfullscreen></iframe>

* ---------------------------------------------------------------------------
* Conditional Logic (useful in contact form 7 for showing/hiding fields based on user input)
* --------------------------------------------------------------------------- */

Add Another Vehicle? &nbsp <input name="chkCheckbox" type="checkbox" onclick="if (this.checked) { document.getElementById('Car2div').style.display='inherit' } else { document.getElementById('Car2div').style.display='none' } "/>&nbsp Yes

<div id="Car2div" style="display:none">
<hr>
<p>[text auto2year placeholder "Year"] </p>
</div>

* ---------------------------------------------------------------------------
* MySQL Find and Replace
* --------------------------------------------------------------------------- */

UPDATE wp_posts SET post_content = REPLACE (
post_content,
'Item to replace here',
'Replacement text here');

* ---------------------------------------------------------------------------
* Media Breaks
* --------------------------------------------------------------------------- */

@media screen and (min-width : 601px) and (max-width : 645px) {
.page-id-847 a.w-btn.color_primary.style_raised.icon_atright {
margin-bottom:10px;
}
}

* ---------------------------------------------------------------------------
* Image Popout
* --------------------------------------------------------------------------- */

<a onclick="window.open('http://www.whiteconstructioncompany.com/wp-content/uploads/Elevation.jpg','_blank','toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, copyhistory=0, menuBar=0, width=1200, height=350');return(false)" href="#"><img style="width: 600px;" alt="" src="http://www.whiteconstructioncompany.com/wp-content/uploads/Elevation.jpg" /></a>

* ---------------------------------------------------------------------------
* BeTheme Pop-up Short Code
* --------------------------------------------------------------------------- */

[popup title="Button name" padding="0" button="1"]Insert your popup content here[/popup]

* ---------------------------------------------------------------------------
* State Abbreviations
* --------------------------------------------------------------------------- */

Useful Data
<----State Abbreviations---->
AL, MT, AK, NE, AZ, NV, AR, NH, CA, NJ, CO, NM, CT, NY, DE, NC, FL, ND, GA, OH, HI, OK, ID, OR, IL, PA, IN, RI, IA, SC, KS, SD, KY, TN, LA, ME, UT, MD, VT, MA, VA, MI, WA, MN, WV, MS, WI, MO, WY, TX

* ---------------------------------------------------------------------------
* Scaling Google ReCaptcha
* --------------------------------------------------------------------------- */

Using scale for recaptcha --> transform: scale(.75,.75);

* ---------------------------------------------------------------------------
* Add Text below Products on WooCommerce Product Page
* --------------------------------------------------------------------------- */

 function woa_content_after_shop() {
 	echo "<center><p>Primitive Camping available on a limited basis. Inquire at 
<a href='mailto:info@weber-ranch-tx.com?Subject=Primitive Camping'>info@weber-ranch-tx.com</a></p></center>";
 }

 add_action( 'woocommerce_after_shop_loop', 'woa_content_after_shop');

?>

* ---------------------------------------------------------------------------
* Load JQuery from Google after page load (interferes with some plugins)
* --------------------------------------------------------------------------- */
// Place at Top of Header file just below opening comment
if( !is_admin()){
	wp_deregister_script('jquery');
}

Then 

// Place in footer file just before /body
<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>

* ---------------------------------------------------------------------------
* Javascript form validation
* --------------------------------------------------------------------------- */
Add validateForm() to the form like below:
<FORM name="form1" onsubmit="return validateForm()" METHOD="POST" 

include identifier name in form:
<INPUT class="txt" TYPE="TEXT" NAME="1"  >

Add this function somewhere it will be called:
<script type="text/javascript">
function validateForm() {

var x=document.forms["form1"]["1"].value;
if (x==null || x=="")
 {
  alert("Name must be filled out");
  return false;
 }

var y=document.forms["form1"]["6"].value;
if (y==null || y=="") {
  alert("Phone Number must be filled out");
  return false;
}
}
</script>

* ---------------------------------------------------------------------------
* Add File Upload Types - WordPress
* --------------------------------------------------------------------------- */
Find the below code in the wp-admin/network/settings.php file:

'upload_filetypes', 'jpg jpeg png gif'

Add whichever extension is needed.

* ---------------------------------------------------------------------------
* Increase File Upload Limit - WordPress
* --------------------------------------------------------------------------- */

In the .htaccess file - add these lines below </IfModule>, and before # END WordPress:

php_value upload_max_filesize 64M
php_value post_max_size 64M
php_value max_execution_time 300
php_value max_input_time 300

* ---------------------------------------------------------------------------
* Rewrite for the .htaccess file
* --------------------------------------------------------------------------- */

RewriteCond %{HTTP_HOST} ^support\.rainman\.com  [NC]
RewriteRule ^(.*) http://rainman.com/$1 [L,R=301]

* ---------------------------------------------------------------------------
* Enable Browser Caching
* --------------------------------------------------------------------------- */
## EXPIRES CACHING ##
<IfModule mod_expires.c>
ExpiresActive On
ExpiresByType image/jpg "access plus 1 year"
ExpiresByType image/jpeg "access plus 1 year"
ExpiresByType image/gif "access plus 1 year"
ExpiresByType image/png "access plus 1 year"
ExpiresByType text/css "access plus 1 month"
ExpiresByType application/pdf "access plus 1 month"
ExpiresByType text/x-javascript "access plus 1 month"
ExpiresByType application/x-shockwave-flash "access plus 1 month"
ExpiresByType image/x-icon "access plus 1 year"
ExpiresDefault "access plus 2 days"
</IfModule>
## EXPIRES CACHING ##

* ---------------------------------------------------------------------------
* Use jQuery to change div based on checkbox status (creates the impression of buttons)
* --------------------------------------------------------------------------- */

<script>
jQuery("input[type='checkbox']").change(function(){
	if(jQuery(this).is(":checked")){
		jQuery(this).parent().addClass("greenBackground"); 
	}
	else{
		jQuery(this).parent().removeClass("greenBackground");  
	}
});
</script>

.greenBackground{
    background-color: #06530e;  
    color: #ffffff;
}

* ---------------------------------------------------------------------------
* Change Placeholder Text in CF7
* --------------------------------------------------------------------------- */

::-webkit-input-placeholder {
color: #000 !important;
opacity: 1;
}

:-moz-placeholder {
color: #000 !important;
opacity: 1;
}
::-moz-placeholder {
color: #000 !important;
opacity: 1;
}
:-ms-input-placeholder {
color: #000 !important;
opacity: 1;
}


* ---------------------------------------------------------------------------
* Aim a Link Partway Down a Page
* --------------------------------------------------------------------------- */

A Bookmark like this one in the place where you want to go:
<a name="Here_is_text_lower_on_the_page">Here is text lower on the page</a>

and at the top of your page a link like this one:
<a href="#Here_is_text_lower_on_the_page">Link</a>

* ---------------------------------------------------------------------------
* Redirect Page after specified amount of time
* --------------------------------------------------------------------------- */
<script type="text/javascript">
setTimeout("window.location='https://www.habagallofoods.com'",14500);
</script>
