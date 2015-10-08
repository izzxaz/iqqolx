<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BasicController {
    public function index(){
        $this->display ( 'Main' );
    }
}