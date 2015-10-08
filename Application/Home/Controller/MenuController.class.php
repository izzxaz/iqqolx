<?php
namespace Home\Controller;
use Think\Controller;
class MenuController extends BasicController {
    public function index(){
        $this->theme ( C ( 'WEB_STYLE' ) )->display ( 'Menu' );
    }
}