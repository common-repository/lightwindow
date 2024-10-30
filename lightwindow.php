<?php
/*
Plugin Name: LightWindow
Plugin URI: http://
Description: This plugin includes the LightWindow v2.0 javascript written by <a href="http://www.stickmanlabs.com/lightwindow/">stickmanlabs.com</a>. See <a href="http://www.stickmanlabs.com/lightwindow/">stickmanlabs.com</a> for demo and description.
Author: John Svensson
Version: 0.1
Author URI: http://johnsvensson.com
*/

function lightwindow() {
	$myBase = get_option('siteurl') . '/' . PLUGINDIR.'/'.dirname(plugin_basename(__FILE__));
	?>
	<!-- LightWindow 2 -->
	<script type="text/javascript">lw_path = "<?php echo $myBase ?>/images/";</script>
	<script type="text/javascript" src="<?php echo $myBase ?>/javascript/prototype.js"></script>
	<script type="text/javascript" src="<?php echo $myBase ?>/javascript/scriptaculous.js?load=effects"></script>
	<script type="text/javascript" src="<?php echo $myBase ?>/javascript/lightwindow.js"></script>
	<link rel="stylesheet" href="<?php echo $myBase ?>/css/lightwindow.css" type="text/css" media="screen" />
	<!-- /LightWindow 2 -->
	<?php
}

add_action('wp_head', 'lightwindow');
?>
