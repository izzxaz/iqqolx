<?php
namespace Home\Controller;
use Think\Controller;
use Think\Hook;
class BasicController extends Controller {
	public function _initialize() {
		if (!isset ( $_SESSION ['user_info'] )) {
			$this->theme ( C ( 'WEB_STYLE' ) )->display ( 'Index/Index' );
			die ();
		}
		$userinfo=session ( 'user_info' );
		$condition['uid']=$userinfo['uid'];
		$num = count ( $con=M('admins')->where($condition)->select() );
		if($num > 0){
			$userinfo['cp']=1;
		}
		$this->assign ( 'userinfo', $userinfo );
	}
}