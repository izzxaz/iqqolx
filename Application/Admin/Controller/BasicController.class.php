<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Hook;

class BasicController extends Controller {
	public function _initialize() {
		if (! isset ( $_SESSION ['user_info'] )) {
			header ( 'Location:index.php' );
			die ();
		}
		$userinfo = session ( 'user_info' );
		$condition ['uid'] = $userinfo ['uid'];
		$num = count ( $con = M ( 'admins' )->where ( $condition )->select () );
		if ($num <= 0) {
			header ( 'Location:index.php' );
			die ();
		}
		if(!isset($userinfo['cplogin']))
		{
			$this->assign ( 'userinfo', $userinfo);
			$this->assign ( 'ssid',    get_ssid());
			$this->display ( 'Login' );
			die ();
		}
		$userinfo ['cp'] = 1;
		$userinfo ['level'] = $con [0] ['level'];
		$this->assign ( 'userinfo', $userinfo );
	}
}