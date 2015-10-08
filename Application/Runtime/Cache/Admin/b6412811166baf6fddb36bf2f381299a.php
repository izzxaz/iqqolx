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

<script type="text/javascript" src="Public/statics/default/dist/js/vendor/ajaxtabs.js"></script> 
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span></button>
      <a class="navbar-brand" href="#">iQQOL UI</a></div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav" id="countrytabs">
        <li class="active"><a href="#" rel="#default">功能中心</a></li>
        <li><a href="misc.php?action=About" rel="countrycontainer">关于我们</a></li>
        <li><a href="misc.php?action=Server" rel="countrycontainer">服务器</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">登录</a></li>
        <li><a href="registra.php">注册</a></li>
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</div>
</head>
<body>
<div class="container" id="countrydivcontainer">
  <div class="jumbotron">
    <h1>心挂Q X1</h1>
    <p>心挂Q不仅仅是挂QQ，甚至不再挂QQ.</p>
    <p>To see the difference between this version and old version.</p>
    <p> <a class="btn btn-lg btn-primary" href="login.php" role="button">开启您的云挂机之旅 »</a> </p>
  </div>
  <h4>Tiles</h4>
  <div class="row">
    <div class="col-lg-10">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
          <div class="tile"> <img src="Public/statics/default/img/icons/svg/compas.svg" alt="Compas" class="tile-image big-illustration">
            <h3 class="tile-title">代码规范</h3>
            <p>使用 Bootstrap 布局，并基于ThinkPHP框架完成。</p>
             </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
          <div class="tile"> <img src="Public/statics/default/img/icons/svg/loop.svg" alt="Infinity-Loop" class="tile-image">
            <h3 class="tile-title">极易定制</h3>
            <p>基于矢量的形状和最小的图层样式。拥有插件系统。<br></p>
             </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
          <div class="tile"> <img src="Public/statics/default/img/icons/svg/map.svg" alt="Pensils" class="tile-image">
            <h3 class="tile-title">多终端支持</h3>
            <p>您的手机、平板电脑、PC均可适应页面。<br></p>
             </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
          <div class="tile"> <img src="Public/statics/default/img/icons/svg/clipboard.svg" alt="Chat" class="tile-image">
            <h3 class="tile-title">开源代码</h3>
            <p>你可以免费获取到我们的程序，并附上您的商业标识。<br></p>
             </div>
        </div>
      </div>
      <!-- /row --> 
    </div>
  </div>
  <!-- /row --> 
</div>
<script type="text/javascript">

var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>
<!-- /container --> 
<script src="Public/statics/default/dist/js/vendor/jquery.min.js"></script> 
<script src="Public/statics/default/dist/js/flat-ui.min.js"></script> 
<script src="Public/statics/default/docs/assets/js/application.js"></script> 
<script src="Public/statics/default/dist/js/vendor/video.js"></script>  
<script>videojs.options.flash.swf = "Public/statics/default/dist/js/vendors/video-js.swf"</script>
</body>
</html>