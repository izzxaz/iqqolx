<?php
// +----------------------------------------------------------------------
// | iQQOLX [ faster && lighter ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011-2099 http://iqqol.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 阿z <admin@izzx.cc>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 绑定访问模块
define('BIND_MODULE','Admin');

// 绑定访问控制器
switch (@$i=$_GET['action']?$_GET['action']:'Index')
{
	case $i:
		define('BIND_CONTROLLER',$i);
		break;
}

// 绑定方法
switch (@$i=$_GET['run']?$_GET['run']:'index')
{
	case $i:
		define('BIND_ACTION',$i);
		break;

	case 'index':
		break;
}

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './TP/TP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单