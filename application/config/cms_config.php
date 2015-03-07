<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function show_pre($arry = Null)
{
    if ($arry) {
        echo "<pre>";
        print_r($arry);
        echo "</pre>";
    }
}

$config['site_name']="Vision Soft Site";
$config['powered_by']="Vision Soft";

$config['admin_template_path']="admin/templates/";
$config['admin_template']="default";
$config['admin_template']="charisma-master";
$config['admin_template']="metis";

function template_asset_path(){
	$path="templates/default";
	$path="templates/charisma-master";
	$path="templates/metis";
	return $path;
}

function admin_template_asset_path(){
	$path="templates/admin/default";
	$path="templates/admin/charisma-master";
	$path="templates/admin/metis";
	return base_url().$path;
}

/* End of file cms_config.php */
/* Location: ./application/config/cms_config.php */