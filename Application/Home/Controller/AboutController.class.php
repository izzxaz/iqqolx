<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function index(){
    	$this->theme ( C ( 'WEB_STYLE' ) )->display ( 'About' );
    }
}