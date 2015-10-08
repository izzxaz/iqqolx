<?php
namespace Admin\Controller;

use Think\Controller;

class WebSiteManagerController extends BasicController {
	public function BasicSetting() {
		if (I ( 'get.edit' ) == 'yes') {
			$con = M ( 'website' );
			$condition ['uid'] = '1';
			unset ( $data );
			$data ['title'] = I ( 'post.title' );
			$data ['description'] = I ( 'post.description' );
			$data ['keywords'] = I ( 'post.keywords' );
			$data ['status'] = I ( 'post.status' );
			$con->where ( $condition )->save ( $data );
			header ( 'Location:admin.php?action=WebSiteManager&run=BasicSetting' );
		} else {
			$this->display ( 'BasicSetting' );
		}
	}
	public function NoticeSetting() {
		if (I ( 'get.edit' ) == 'yes') {
			$con = M ( 'website' );
			$condition ['uid'] = '1';
			unset ( $data );
			$data ['notice'] = I ( 'post.notice' );
			$data ['about'] = I ( 'post.about' );
			$con->where ( $condition )->save ( $data );
			header ( 'Location:admin.php?action=WebSiteManager&run=NoticeSetting' );
		} else {
			$this->display ( 'NoticeSetting' );
		}
	}
	public function LinksSetting() {
		if (I ( 'get.edit' ) == 'add') {
			$con = M ( 'links' );
			unset ( $data );
			$data = I ( 'post.links' );
			$con->add ( $data );
			header ( 'Location:admin.php?action=WebSiteManager&run=LinksSetting' );
		} else if (I ( 'get.edit' ) == 'yes') {
			$con = M ( 'links' );
			unset ( $data );
			$data = I ( 'post.links' );
			$condition ['id'] = $data ['id'];
			unset ( $data ['id'] );
			$con->where ( $condition )->save ( $data );
			header ( 'Location:admin.php?action=WebSiteManager&run=LinksSetting' );
		} else if (I ( 'get.edit' ) == 'del') {
			$con = M ( 'links' );
			$condition ['id'] = I ( 'get.id' );
			$con->where ( $condition )->delete ();
			header ( 'Location:admin.php?action=WebSiteManager&run=LinksSetting' );
		} else {
			$this->display ( 'LinksSetting' );
		}
	}
}