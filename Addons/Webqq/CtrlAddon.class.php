<?php
/* 插件 WEBQQ Powered by iQQOL */
namespace Addons\Webqq;

use Think\Controller;

class CtrlAddon extends Controller {
	public function _add($usr) {
		$ssid = I ( 'get.ssid' );
		$info = analyze_ssid($ssid);
		$data ['id'] = null;
		$data ['pid'] = $_GET['pid'];
		$userinfo = $GLOBALS['_SESSION']["user_info"];
		$data ['uid'] = $userinfo ['uid'];
		$data ['appuser'] = $info['username'];
		$data ['other'] = base64_encode(json_encode($info));
		$condition ['appuser'] = $info['username'];
		$num = count ( $con = M ( 'account' )->where ( $condition )->select () );
		if ($num >= 1) {
			unset($data['id']);
			$con = M ( 'account' );
			$condition ['appuser'] = $data ['appuser'];
			$con->where ( $condition )->save ( $data );
			$this->_showmsg ( '资料已更新！', 'success' );
		} else {
			$con = M ( 'account' );
			$con->add ( $data );
			$this->_showmsg ( '成功', 'success' );
		}
	}
	public function _del($usr) {
		$con = M ( 'account' );
		$condition ['id'] = I ( 'get.id' );
		$con->where ( $condition )->delete ();
		$this->_showmsg ( '成功', 'success' );
	}
	public function _install($usr) {
		$data ['id'] = null;
		$data ['name'] = "WebQQ云挂机（测试版）";
		$data ['sheet'] = '{"appname":"WebQQ云挂机（测试版）","appid":"","ver":"1.0","cookie":"http://w.qq.com","redirect":"misc.php?action=Api&run=add&appname=Webqq","description":"WEBQQ1.0","form":[{"ext":"0","function":"input","fname":"QQ号","name":"username","type":"text","value":""}]}';
		$data ['info'] = '{"appname":"WebQQ云挂机（测试版）","ver":"1.0","cookie":"yes","description":"WEBQQ插件1.0","Inc":"iQQol"}';
		$data ['class'] = "qq";
		$con = M ( 'account' );
		$con->add ( $data );
		$this->_showmsg ( '成功', 'success' );
	}
	public function _uninstall($usr) {
		$con = M ( 'plugins' );
		$condition ['id'] = I ( 'get.id' );
		$con->where ( $condition )->delete ();
		$con = M ( 'account' );
		$condition ['pid'] = I ( 'get.pid' );
		$con->where ( $condition )->delete ();
		$this->_showmsg ( '成功', 'success' );
	}
	public function _showmsg($msg, $function) {
		$this->$function ( $msg, C ( 'IQQOL_URL_ROOT' ), 1000 );
	}
	public function _showlist($usr) {
		echo '<table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>QQ</th>
          <th>COOKIE</th>
          <th>状态</th>
        </tr>';
		$userinfo = $GLOBALS['API_USR'];
		$condition ['uid'] = $userinfo ['uid'];
		$con = M ( 'account' )->where ( $condition )->select ();
		foreach ( $con as $row ) {
			$info = base64_decode ( $row ['other'] );
			$info = json_decode ( $info, true );
			echo '<tr>
		  <th scope="row">'.$row ['id'].'</th>
		  <td>'.$row ['appuser'].'</td>
		  <td><input type="text" style="width:100%;" value="'.$info ['cookie'].'"></td>
		  <td><a onclick="openwindow(\'misc.php?action=Aclass&run=query&pid='.$row ['pid'].'&appid='.C('APPID').'\',\'_blank\',\'778\',\'622\');">更新</a>|<a href="misc.php?action=Api&run=del&appname=Webqq">删除</a></td>
		  </tr>';
		}
		/*
		 * <tr>
		 * <th scope="row">1</th>
		 * <td>Mark</td>
		 * <td>Otto</td>
		 * <td>@mdo</td>
		 * </tr>
		 */
		echo '
      </tbody>
    </table>';
	}
	public function _cron($pid) {
		$condition ['pid'] = $pid;
		$con = M ( 'account' )->where ( $condition )->select ();
		foreach ( $con as $row ) {
			$info = base64_decode ( $row );
			$info = json_decode ( $info, true );
		}
	}
	/*
	 * array(5) {
	 * ["username"] => string(3) "QQ"
	 * ["cookie"] => string(3) "STRING COOKIE"
	 * }
	 */
	public function _info($usr) {
		return array (
				"Inc" => "iQQOL",
				"appname" => "WebQQ云挂机（测试版）1.0",
				"ver" => "1.0",
				"cookie" => "yes",
				"description" => "WEBQQ插件1.0" 
		);
	}
	private function http($url, $params, $method = 'GET', $cookie_jar, $header = array(), $multi = false) {
		$opts = array (
				CURLOPT_TIMEOUT => 30,
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_SSL_VERIFYHOST => false 
		);
		// CURLOPT_HTTPHEADER => $header
		
		/* 根据请求类型设置特定参数 */
		switch (strtoupper ( $method )) {
			case 'GET' :
				$params = $multi ? $params : http_build_query ( $params );
				$opts [CURLOPT_URL] = $url . '?' . $params;
				break;
			case 'POST' :
				
				// 判断是否传输文件
				$params = $multi ? $params : http_build_query ( $params );
				$opts [CURLOPT_URL] = $url;
				$opts [CURLOPT_POST] = 1;
				$opts [CURLOPT_POSTFIELDS] = $params;
				// echo $params;
				break;
			default :
				throw new Exception ( '不支持的请求方式！' );
		}
		/* 初始化并执行curl请求 */
		$ch = curl_init ();
		// var_dump($opts);
		curl_setopt_array ( $ch, $opts );
		curl_setopt ( $ch, CURLOPT_COOKIE, $cookie_jar );
		curl_setopt ( $ch, CURLOPT_REFERER, "http://w.qq.com/ " ); // 来路
		curl_setopt ( $ch, CURLOPT_USERAGENT,"IQQOL Client"); // UserAgent
		$data = curl_exec ( $ch );
		$error = curl_error ( $ch );
		curl_close ( $ch );
		if ($error)
			throw new Exception ( '请求发生错误：' . $error );
		return $data;
	}
}