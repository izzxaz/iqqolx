<?php
namespace Home\Controller;
use Think\Controller;
class SettingsController extends BasicController {
    public function index(){
    	$this->theme ( C ( 'WEB_STYLE' ) )->display ( 'Settings' );
    }
}