<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title><?php echo C('WEB_TITLE');?></title>
<meta name="description" content="<?php echo C('WEB_DESCRIPTION');?>"/>
<meta name="keywords" content="<?php echo C('WEB_KEYWORDS');?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Loading Bootstrap -->
<link href="Public/statics/default/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

<!-- Loading Flat UI -->
<link href="Public/statics/default/dist/css/flat-ui.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<link href="Public/statics/default/dist/css/loading.css" rel="stylesheet" type="text/css">
<script src="Public/statics/default/dist/js/vendor/jquery.min.js"></script> 
<script src="Public/statics/default/dist/js/flat-ui.min.js"></script> 
<script src="Public/statics/default/docs/assets/js/application.js"></script> 
<script src="Public/statics/default/dist/js/vendor/video.js"></script> 
<script type="text/javascript" src="Public/statics/default/dist/js/vendor/ajaxtabs.js"></script> 
<script>videojs.options.flash.swf = "Public/statics/default/dist/js/vendors/video-js.swf"</script>
<style>
.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus{
    color: #fff;
    background-color: #23BD9E;
}
.selected{
    color: #fff;
    background-color: #23BD9E;
}
</style>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-5">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#"><?php echo C('WEB_LOGO_TEXT');?></a>
        </div>
<div id="countrytabs" class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-5">
           <ul class="nav navbar-nav">
            <li><a href="misc.php?action=Menu" rel="countrycontainer">功能中心</a></li>
            <li><a href="misc.php?action=About" rel="countrycontainer">关于我们</a></li>
            <li><a href="misc.php?action=Server" rel="countrycontainer">服务器</a></li>
           </ul>
          <form class="navbar-form navbar-left" action="#" role="search">
            <div class="form-group">
              <div class="input-group">
                <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                <span class="input-group-btn">
                  <button type="submit" class="btn"><span class="fui-search"></span></button>
                </span>
              </div>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ((isset($userinfo["nickname"]) && ($userinfo["nickname"] !== ""))?($userinfo["nickname"]):"求一个名字啦~"); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="misc.php?action=Settings" rel="countrycontainer">个人设置</a></li>
                <?php if($userinfo['cp']==1) { ?><li><a href="admin.php">后台管理</a></li><?php } ?>
                <li><a href="http://passport.qol.iqqol.com/manager.php" target="_blank" rel="#iframe">账号通</a></li>
                <li class="divider"></li>
                <li><a href="misc.php?action=Logout">退出</a></li>
              </ul>
            </li>
            <li><a href="misc.php?action=Settings" rel="countrycontainer"><span class="visible-sm visible-xs">Settings<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li>
          </ul>
          </div>
        </div><!-- /.navbar-collapse -->
</nav>
</head>
<script type='text/javascript'>
(function() {
    var c = document.createElement('script'); 
    c.type = 'text/javascript';
    c.async = true;
    c.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.clicki.cn/boot/46339';
    var h = document.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(c, h);
})();
</script>
<div id="clicki_widget_3907" ></div>
<body style="background-color:#1ABCD9;">
<div class="container">
<div id="countrydivcontainer">

</div>
</div>
<script type="text/javascript">

var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>
</body>