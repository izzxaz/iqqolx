<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	public function login() {
		if (!isset ( $_SESSION ['user_info'] )) {
			if (getgpc ( 'ssid' )) {
				$data = analyze_ssid ( getgpc ( 'ssid' ) );
				unset ( $data ['status'] );
				$con = M ( 'user' );
				$condition ['uid'] = $data ['uid'];
				$num = count ( $con->where ( $condition )->select () );
				if ($num == 0) {
					$con->add ( $data );
				} else {
					$con->where ( $condition )->save ( $data );
				}
				$_SESSION ['user_info']=$data;
				$this->success ( L ( 'user_login_success' ), C ( 'IQQOL_URL_ROOT' ) . '/index.php', 3 );
				die ();
			}
			$ssid = get_ssid ();
			header ( "Location:http://passport.qol.iqqol.com/connect.php?ssid=" . $ssid );
			die();
		}
		header ( "Location:index.php" );
	}
	public function registra() {
		header ( "Location:http://passport.qol.iqqol.com/misc.php?id=ucapi:register" . '&return_url=' . C ( 'IQQOL_URL_ROOT' ) );
	}
}