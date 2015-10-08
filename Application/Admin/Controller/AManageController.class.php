<?php
namespace Admin\Controller;
use Think\Controller;
class AManageController extends BasicController {
	public function AClass() {
		$this->display('AClass');
	}
	public function AList() {
		$this->display('AList');
	}
}