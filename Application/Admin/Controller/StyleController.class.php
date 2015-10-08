<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Storage;

class StyleController extends BasicController {
	public function Manage() {
		if (I ( 'get.edit' ) == 'yes') {
			$con = M ( 'website' );
			$condition ['uid'] = '1';
			unset ( $data );
			$data ['style'] = I ( 'get.style' );
			$con->where ( $condition )->save ( $data );
			header ( 'Location:admin.php?action=Style&run=Manage' );
		} else {
			$this->display ( 'Manage' );
		}
	}
	public function Logo() {
		if (I ( 'get.edit' ) == 'yes') {
			$con = M ( 'website' );
			$condition ['uid'] = '1';
			unset ( $data );
			$data ['logotext'] = I ( 'post.logotext' );
			if (isset ( $_FILES )) {
				$config = array (
						'maxSize' => 3145728,
						'rootPath' => 'Public/Upload/Admin/images/',
						'savePath' => '',
						'saveName' => array (
								'uniqid',
								'' 
						),
						'exts' => array (
								'jpg',
								'gif',
								'png',
								'jpeg' 
						),
						'autoSub' => true,
						'subName' => array (
								'date',
								'Ymd' 
						) 
				);
				$upload = new \Think\Upload ( $config ); // 实例化上传类
				$info = $upload->uploadOne ( $_FILES ['fileField'] );
				if (! $info) { // 上传错误提示错误信息
					$this->error ( $upload->getError () );
				}
				$data ['logourl'] = $config ['rootPath'] . $info ['savepath'] . $info ['savename'];
				$con->where ( $condition )->save ( $data );
			} else {
				$data ['logourl'] = I ( 'post.logourl' );
				$con->where ( $condition )->save ( $data );
			}
			header ( 'Location:admin.php?action=Style&run=Logo' );
		}
		$this->display ( 'Logo' );
	}
}