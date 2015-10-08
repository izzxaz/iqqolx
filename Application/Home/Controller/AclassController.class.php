<?php
namespace Home\Controller;
use Think\Controller;
use Think\Hook;
class AclassController extends BasicController {
    public function show(){
    	$this->theme ( C ( 'WEB_STYLE' ) )->display ( 'Aclass' );
    }
    public function query(){
    	$condition['id'] = I('get.pid');
    	$con=M('plugins')->where($condition)->select();
    	$row=$con[0];
    	$appinfo=$row['sheet'];
    	$ssid=get_ssid(null,$appinfo,true);
    	header('location:http://cloud.iqqol.com/misc.php?action=AccountVerify&ssid='.$ssid.'&redirect='.urlencode(C('IQQOL_URL_ROOT')).'&appid='.C('APPID').'&pid='.I('get.pid'));
    }
}