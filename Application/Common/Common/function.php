<?php
use Home\Controller\ApiController;
/**
 * 处理插件钩子
 * @param string $hook   钩子名称
 * @param mixed $params 传入参数
 * return void
 */
function hook($hook,$params=array()){
	\Think\Hook::listen($hook,$params);
}
function MergeArray($list1,$list2)
 {
    if(!isEmpty($list1) && !isEmpty($list2)) 
    {
        return array_merge($list1,$list2);
    }
    else return (isEmpty($list1)?(isEmpty($list2)?null:$list2):$list1);
 }
 function isEmpty($data)
 {
    return null == $data || false == $data || "" == $data;
 }

function uc_authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {

    $ckey_length = 4;

    $key = md5($key ? $key : UC_KEY);
    $keya = md5(substr($key, 0, 16));
    $keyb = md5(substr($key, 16, 16));
    $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';

    $cryptkey = $keya.md5($keya.$keyc);
    $key_length = strlen($cryptkey);

    $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
    $string_length = strlen($string);

    $result = '';
    $box = range(0, 255);

    $rndkey = array();
    for($i = 0; $i <= 255; $i++) {
        $rndkey[$i] = ord($cryptkey[$i % $key_length]);
    }

    for($j = $i = 0; $i < 256; $i++) {
        $j = ($j + $box[$i] + $rndkey[$i]) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }

    for($a = $j = $i = 0; $i < $string_length; $i++) {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
    }

    if($operation == 'DECODE') {
        if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
            return substr($result, 26);
        } else {
            return '';
        }
    } else {
        return $keyc.str_replace('=', '', base64_encode($result));
    }
}

function get_ssid($return_url=null,$appinfo=null,$json=false){
    if($return_url == null){
        $return_url = C('IQQOL_URL_ROOT')."/login.php";
    }
    if($appinfo == null){
    	$appinfo = array('appid'=>C('appid'),'secret'=>C('secret'),'return_url'=>$return_url);
    }
    if($json){
    	$ssid=uc_authcode($appinfo,"ENCODE","Xmsoft",300);
    }
    else {
    	$ssid=uc_authcode(json_encode($appinfo),"ENCODE","Xmsoft",300);
    }
    return $ssid;
}

function analyze_ssid($ssid){
    $ssid=str_replace(" ", "+", $ssid);
    $ssid=object_to_array(json_decode(uc_authcode($ssid,"DECODE",C('secret'))));
    return $ssid;
}

function object_to_array($obj){ 
    $_arr=is_object($obj)?get_object_vars($obj):$obj; 
    foreach($_arr as $key => $val){
        $val=(is_array($val)||is_object($val))?object_to_array($val):$val; 
        $arr[$key]=$val;
        if(!is_array($val)){
            $arr[$key]=$val;
        }
    }
    return $arr; 
}
function getgpc($keyword){
	return $_GET[$keyword]?$_GET[$keyword]:($_POST[$keyword]?$_POST[$keyword]:($_COOKIE[$keyword]?$_COOKIE[$keyword]:false));
}
/**
 * 发送HTTP请求方法
 * @param  string $url    请求URL
 * @param  array  $params 请求参数
 * @param  string $method 请求方法GET/POST
 * @return array  $data   响应数据
 */
function http($url, $params, $method = 'GET', $cookie_jar ,$header = array(), $multi = false){
	$opts = array(
			CURLOPT_TIMEOUT        => 30,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => false,
			//CURLOPT_HTTPHEADER     => $header
	);
	/* 根据请求类型设置特定参数 */
	switch(strtoupper($method)){
		case 'GET':
			$params = $multi ? $params : http_build_query($params);
			$opts[CURLOPT_URL] = $url . '?' . $params;
			break;
		case 'POST':
			//判断是否传输文件
			$params = $multi ? $params : http_build_query($params);
			$opts[CURLOPT_URL] = $url;
			$opts[CURLOPT_POST] = 1;
			$opts[CURLOPT_POSTFIELDS] = $params;
			//echo $params;
			break;
		default:
			throw new Exception('不支持的请求方式！');
	}
	/* 初始化并执行curl请求 */
	$ch = curl_init();
	//var_dump($opts);
	curl_setopt_array($ch, $opts);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie_jar);
	curl_setopt($ch, CURLOPT_REFERER, "http://bej0a.boxland.cn/ ");   //来路
	$data  = curl_exec($ch);
	$error = curl_error($ch);
	curl_close($ch);
	if($error) throw new Exception('请求发生错误：' . $error);
	return  $data;
}
function get_time(){
	return date('Y-m-d H:i:s');
}
function currentfilename() {
	$dir_file = $_SERVER['SCRIPT_NAME'];
	$filename = basename($dir_file);
	return $filename;
}
function get_dir_glob($path, $type, $dir = false) {
	if ($type == 'path') {
		$tree = array();
		foreach (glob(IQQOL_FILE_ROOT . '/' . $path . '/*') as $single) {
			if ($dir ? is_dir($single) : is_file($single)) {
				$tree[] = $single;
			}
		}
		return $tree;
	} elseif ($type == 'name') {
		$tree = array();
		foreach (scandir(IQQOL_FILE_ROOT . '/' . $path) as $single) {
			if ($dir ? is_dir(IQQOL_FILE_ROOT . '/' . $path . '/' . $single) : is_file(IQQOL_FILE_ROOT . '/' . $path . '/' . $single)) {
				if ($single != '.' and $single != '..') {
					$tree[] = $single;
				}
			}
		}
		return $tree;
	}
}
function delDir($dir) {
	if (is_dir($dir)) {
		$objects = scandir($dir);
		foreach ($objects as $object) {
			if ($object != "." && $object != "..") {
				if (filetype($dir . "/" . $object) == "dir") {
					self::delDir($dir . "/" . $object);
				} else {
					unlink($dir . "/" . $object);
				}
			}
		}
		reset($objects);
		rmdir($dir);
	}
	return true;
}
function nowtime() {
	date_default_timezone_set('PRC');
	$tomorrow = mktime(0, 0, 0, date("m") , date("d") + 30, date("Y"));
	$time = date("Y-m-d", $tomorrow);
	$now = date("Y-m-d");
	$deltime = date('G:i:s');
	$time5 = $time . ' ' . $deltime;
	return $time5;
}
//POST|
function autocreateform($express,$ui=array()){
	$str=explode("|", $express);
	$method=$str[0];
	$json=$str[1];
	$form='<form method="'.$method.'" action="https://cloud.iqqol.com/misc.php?action=AccountVerify">';
	$json=json_decode($json,true);
	$f=$json['form'];
	foreach($f as $k=>$row){
		if($row['ext']==0){
			$function=$row['function'];
			$fname=$row['fname'];
			$ext=$row['ext'];
			unset($row['function']);
			unset($row['fname']);
			unset($row['ext']);
			$string = '';
			foreach($row as $k=>$v){
				$string .=$k.'="'.$v.'" ';
			}
			if(array_key_exists($function,$ui)){
				foreach($ui[$function] as $k=>$v){
					$string .=' '.$k.'="'.$ui[$function][$k].'" ';
				}
			}
			$form .= '<p>'.$fname.'<'.$function.' '.$string.'></p>';
		}
		elseif($row['ext']==1){
			$function=$row['function'];
			$fname=$row['fname'];
			$ext=$row['ext'];
			unset($row['function']);
			unset($row['fname']);
			unset($row['ext']);
			$string = '';
			foreach($row as $k=>$v){
				$string .=$k.'="'.$v.'" ';
			}
			if(array_key_exists($function,$ui)){
				foreach($ui[$function] as $k=>$v){
					$string .=' '.$k.'="'.$ui[$function][$k].'" ';
				}
			}
			$form .= '<p><'.$function.' '.$string.'>'.$fname.'</'.$function.'></p>';
		}
	}
	$form .= '</form>';
	return $form;
}
function api($function,$appname,$usr){
	if($usr == null){
		$usr = session('user_info');
	}
	$api = new ApiController($appname,$usr);
	$api->$function();
}

?>