<?php
$condition['id']=1;
$con=M('website')->where($condition)->select();
$con=$con[0];
$conf = array(
	//'配置项'=>'配置值'
	'TMPL_TEMPLATE_SUFFIX'	=>	'.tpl',
	'DEFAULT_THEME'   	    =>  'default',
	'TMPL_ACTION_ERROR'     =>  'Theme/Views/default/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  'Theme/Views/default/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
	'TMPL_EXCEPTION_FILE'   =>  'Theme/Views/default/think_exception.tpl',// 异常页面的模板文件
	'LANG_SWITCH_ON' 		=>	true, // 开启语言包功能
	'LANG_AUTO_DETECT' 		=>  true, // 自动侦测语言 开启多语言功能后有效
	'LANG_LIST'        		=>  'zh-cn', // 允许切换的语言列表 用逗号分隔
	'VAR_LANGUAGE'    	    =>  'l', // 默认语言切换变量
	
	'WEB_TITLE'				=>  $con['title'],
	'WEB_DESCRIPTION'		=>  $con['description'],
	'WEB_KEYWORDS'			=>  $con['keywords'],
	'WEB_STYLE'				=>  $con['style'],
	'WEB_STATUS'			=>  $con['status'],
	'WEB_LOGO_TEXT'			=>  $con['logotext'],
	'WEB_LOGO_URL'			=>  $con['logourl'],
	'WEB_NOTICE'			=>  $con['notice'],
	'WEB_ABOUT'				=>  $con['about'],
	'THEME_PATH'			=>  'Application/Admin/View/default',
);
return $conf;