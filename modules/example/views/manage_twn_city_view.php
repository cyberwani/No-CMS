<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

$asset = new CMS_Asset(); 
foreach($css_files as $file){
	$asset->add_css($file);
} 
echo $asset->compile_css();

foreach($js_files as $file){
	$asset->add_js($file);
}
echo $asset->compile_js();	
echo $output;

?>
<a class="btn btn-primary" href="{{ site_url }}{{ module_path }}/browse_twn_city/index">Show Front Page</a>