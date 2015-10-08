<?php
namespace Home\Controller;
use Think\Controller;
use Think\Hook;
class IndexController extends BasicController {
	public function index() {
		$this->theme ( C ( 'WEB_STYLE' ) )->display ( 'QManager' );
	}
}
/*This is Bob Universe...*/