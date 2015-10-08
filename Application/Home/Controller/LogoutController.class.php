<?php
namespace Home\Controller;
use Think\Controller;
class LogoutController extends Controller {
	public function index() {
		//session(null,'user_');
		unset($_SESSION);
		session_destroy();
		unset($_COOKIE);
		$this->success(L('logout_success'),C('IQQOL_URL_ROOT'),3);
	}
}