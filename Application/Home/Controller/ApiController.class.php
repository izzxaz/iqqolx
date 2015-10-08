<?php

namespace Home\Controller;

use Think\Controller;
use Think\Hook;

class ApiController extends Controller {
	private $appname,$usr;
	public function __construct($appname, $usr) {
		if (I ( 'get.appname' ) == null) {
			$this->appname = $appname;
		} else {
			$this->appname = I ( 'get.appname' );
		}
		if (I ( 'get.usr' ) == null) {
			$this->usr = $usr;
		} else {
			$this->usr = analyze_ssid ( $this->usr );
		}
		$GLOBALS['API_USR']=$this->usr;
	}
	public function add() {
		Hook::add ( "_add", "Addons\\" . $this->appname . "\\CtrlAddon" );
		hook ( '_add' );
	}
	public function del() {
		Hook::add ( "_del", "Addons\\" . $this->appname . "\\CtrlAddon" );
		hook ( '_del' );
	}
	public function install() {
		Hook::add ( "_install", "Addons\\" . $this->appname . "\\CtrlAddon" );
		hook ( '_install' );
	}
	public function uninstall() {
		Hook::add ( "_uninstall", "Addons\\" . $this->appname . "\\CtrlAddon" );
		hook ( '_uninstall' );
	}
	public function showmsg() {
		Hook::add ( "_showmsg", "Addons\\" . $this->appname . "\\CtrlAddon" );
		hook ( '_showmsg' );
	}
	public function showlist() {
		Hook::add ( "_showlist", "Addons\\" . $this->appname . "\\CtrlAddon" );
		hook ( '_showlist' );
	}
	public function _cron() {
		Hook::add ( "_cron", "Addons\\" . $this->appname . "\\CtrlAddon" );
		hook ( '_cron' );
	}
	public function _info() {
		Hook::add ( "_info", "Addons\\" . $this->appname . "\\CtrlAddon" );
		hook ( '_info' );
	}
}