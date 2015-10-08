<?php
namespace Admin\Controller;
use Think\Controller;
class XcloudController extends BasicController {
	public function Setting() {
		if (I ( 'get.edit' ) == 'app') {
			
		}
		$this->display('Setting');
	}
	public function Style() {
		if (I ( 'get.edit' ) == 'app') {
				
		}
		$this->display('Style');
	}
	public function Plugins() {
		if (I ( 'get.edit' ) == 'app') {
				
		}
		$this->display('Plugins');
	}
}