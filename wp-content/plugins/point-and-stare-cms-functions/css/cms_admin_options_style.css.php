<?php 
header("Content-type: text/css");

include_once(dirname(__FILE__) . '/../../../../wp-config.php');
$options = get_option('pands_script_plugin_options');?>

<?php if ($options['customize_submenu'] == 1){?>
#customize-current-theme-link { display: none !important}
<?php }?>