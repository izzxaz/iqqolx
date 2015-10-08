<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function VerifyLogin() {
		$url = "https://passport.qol.iqqol.com/verifyadmin.php?ssid=" . get_ssid () . "&form=yes";
		$data = "username=" . I ( 'post.username' ) . "&password=" . I ( 'post.password' );
		$httpstr = http ( $url, $data, 'POST','', array (
				"Content-type: text/html; charset=utf-8" 
		), true );
		$result = json_decode ( $httpstr, true );
		if ($result ['status'] == 200) {
			$userinfo = session ( 'user_info' );
			$userinfo ['cplogin'] = 1;
			$_SESSION ['user_info']=$userinfo;
		}
		echo $httpstr;
	}
}