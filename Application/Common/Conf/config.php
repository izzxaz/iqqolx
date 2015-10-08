<?php
$lifetime=600;
session_start();
setcookie(session_name(),session_id(),time()+$lifetime,"/");
define('IQQOL_FILE_ROOT',dirname(dirname(dirname(dirname(__FILE__)))));
require_once(IQQOL_FILE_ROOT.'/config.php');
$conf1  = Global_Config();
$conf2  = array(
    //'配置项'=>'配置值'
    'URL_MODEL' 		 => '1',
	'AUTOLOAD_NAMESPACE' => array(
			'Addons'  => './Addons/',
			'Myclass' => './Myclass/'
	), //扩展模块列表
	'SESSION_AUTO_START' =>true,
);
$conf = MergeArray($conf1,$conf2);
return $conf;