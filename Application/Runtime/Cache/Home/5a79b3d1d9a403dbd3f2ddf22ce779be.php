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
</head>
<body style="background-color:#1ABCD9;">
<div class="container-fluid">
<div class="row">
  <div class="col-md-3">
    <ul id="countrytabs" style="display:none;">
    <a href="#" class="list-group-item active"  rel="#default"> 账号管理</a>
    <?php $con=M('class')->where($condition)->select(); foreach($con as $row){ echo '<a href="misc.php?action=Aclass&run=show&class='.$row['class'].'" class="list-group-item"  rel="countrycontainer">'.$row['name'].'</a>'; } ?>
    </ul>
    <div class="list-group">
    <a href="#" class="list-group-item active"  rel="#default"> 账号管理</a>
    <?php $con=M('class')->where($condition)->select(); $i=1; foreach($con as $row){ echo '<a href="javascript: countries.expandit('.$i.')" class="list-group-item"  rel="countrycontainer">'.$row['name'].'</a>'; $i++; } ?>
    </div>
  </div>
  <div class="col-md-9">
        <div id="countrydivcontainer">
         <div class="well well-lg">1111111111111111111111111111111111111</div>
        </div>
  </div>
</div>
</div>
</body>
<script type="text/javascript">

var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>