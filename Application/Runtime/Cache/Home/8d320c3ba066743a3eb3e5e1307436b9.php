<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title><?php echo C('WEB_TITLE');?></title>
<meta name="description" content="<?php echo C('WEB_DESCRIPTION');?>"/>
<meta name="keywords" content="<?php echo C('WEB_KEYWORDS');?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta name="renderer" content="webkit" />
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
            <li><a href="#Menu" rel="#default">功能中心</a></li>
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
<body style="background-color:#1ABCD9;">
<div class="container" id="countrydivcontainer">
<script type="text/javascript" src="Public/statics/default/dist/js/vendor/ajaxtabs2.js"></script> 
<ul id="countrytabs2" style="display:none;">
    <a href="#Menu" class="list-group-item active"  rel="#default"> 账号管理</a>
    <?php $con=M('class')->where($condition)->select(); foreach($con as $row){ echo '<a href="misc.php?action=Aclass&run=show&class='.$row['class'].'" class="list-group-item"  rel="countrycontainer">'.$row['name'].'</a>'; } ?>
</ul>
<div class="row">
  <div class="col-md-3">
    <div id="menus" class="list-group">
    <a href="javascript: countriess.expandit(0)" class="list-group-item active"  onclick="changeBg(this)"> 账号管理</a>
    <?php $con=M('class')->where($condition)->select(); $i=1; foreach($con as $row){ echo '<a href="javascript: countriess.expandit('.$i.')" class="list-group-item"  onclick="changeBg(this)">'.$row['name'].'</a>'; $i++; } ?>
    </div>
  </div>
  <div class="col-md-9">
        <div>
         <div class="well well-lg" id="countrydivcontainer2">
<!-- Split button -->
<div class="btn-group" data-toggle="buttons">
  <button class="btn btn-primary" role="button" data-toggle="collapse" data-target="#collapseAccount" aria-expanded="false" aria-controls="collapseAccount">添加账号</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseClassShow" aria-expanded="false" aria-controls="collapseClassShow">我的记录</button>
</div>
<div class="collapse" id="collapseAccount">
  <div class="well bs-example">
    <?php $con=M('class')->where($condition)->select(); $i=1; foreach($con as $row){ echo '<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-info" onclick="openwindow(\'http://cloud.iqqol.com/misc.php?action=AccountVerify\',\'_blank\',\'778\',\'622\');" autocomplete="off">'.$row['name'].'</button>&nbsp;'; $i++; } ?>
  </div>
</div>
<div class="collapse" id="collapseClassShow">
  <div class="well">
    ...
  </div>
</div>
<h2>功能大全</h2>
<hr>

         </div>
        </div>
  </div>
</div>
<script>
  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
function openwindow(url,name,iWidth,iHeight)
{
    var url; //转向网页的地址;
    var name; //网页名称，可为空;
    var iWidth; //弹出窗口的宽度;
    var iHeight; //弹出窗口的高度;
    //window.screen.height获得屏幕的高，window.screen.width获得屏幕的宽
    var iTop = (window.screen.height-30-iHeight)/2; //获得窗口的垂直位置;
    var iLeft = (window.screen.width-10-iWidth)/2; //获得窗口的水平位置;
    window.open(url,name,'height='+iHeight+',,innerHeight='+iHeight+',width='+iWidth+',innerWidth='+iWidth+',top='+iTop+',left='+iLeft+',toolbar=no,menubar=no,scrollbars=yes,resizeable=no,location=no,status=no');
}
</script>
</div>
</body>
<script type="text/javascript">

var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
var countriess=new ddajaxtabs2("countrytabs2", "countrydivcontainer2")
countriess.setpersist(true)
countriess.setselectedClassTarget("link") //"link" or "linkparent"
countriess.init()

function changeBg(link)  
{  
var alllinks=document.getElementById("menus").getElementsByTagName("a");  
for(var i=0;i<alllinks.length;i++){  
   alllinks[i].className="list-group-item";//默认未点击时引用的样式  
}  
link.className="list-group-item active";//点击切换样式  
} 

</script>