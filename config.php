<?php
@error_reporting(0);
@set_time_limit(0);
@ignore_user_abort(true);
function Global_Config(){
    $data = array(
//--------------------------------------------------------------
        'APPID'=>'',//心挂Q开放平台应用ID
        'SECRET'=>'',//心挂Q开放平台应用密钥
        'IQQOL_URL_ROOT'=>'http://gqt.izzx.cc',
//--------------------------------------------------------------
        'DB_TYPE'               =>  'mysql',     // 数据库类型
        'DB_HOST'               =>  'localhost', // 服务器地址
        'DB_NAME'               =>  'iqqolx',          // 数据库名
        'DB_USER'               =>  'root',      // 用户名
        'DB_PWD'                =>  '',          // 密码
        'DB_PORT'               =>  '3306',        // 端口
        'DB_PREFIX'             =>  'iqqolx_',    // 数据库表前缀
        'DB_CHARSET'            =>  'utf8', // 字符集
    );
    return $data;
}