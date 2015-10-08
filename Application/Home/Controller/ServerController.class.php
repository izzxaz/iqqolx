<?php
namespace Home\Controller;
use Think\Controller;
class ServerController extends Controller {
    public function index(){
    	$this->theme ( C ( 'WEB_STYLE' ) )->display ( 'Server' );
    }
}