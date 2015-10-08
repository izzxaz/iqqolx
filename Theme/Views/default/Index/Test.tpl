<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>iQQOL X1</title>
<meta name="description" content="iQQOL X1 Description."/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Loading Bootstrap -->
<link href="Public/statics/default/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

<!-- Loading Flat UI -->
<link href="Public/statics/default/dist/css/flat-ui.css" rel="stylesheet">
<link href="Public/statics/default/docs/assets/css/demo.css" rel="stylesheet">
<link rel="shortcut icon" href="Public/statics/default/img/favicon.ico">
<link href="Public/statics/default/dist/css/loading.css" rel="stylesheet" type="text/css">


    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">iQQOL UI</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">登录</a></li>
            <li><a href="./">注册</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</head>
<body>
<div class="container">
  <div class="login">
    <div class="login-screen">
      <div class="login-icon"> 
        <h4>Welcome to <small>iQQOL X1</small></h4>
      </div>
      <div class="login-icon" style="top:250px;width:160px;left:200px;"> 
        <h4>Faster and Lighter</h4>
      </div>
      <div class="login-form">
      <div id="user">
        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control login-field" value="" placeholder="Enter your name"/>
          <label class="login-field-icon fui-user" for="login-name"></label>
        </div>
       </div>
       <div id="pass">
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
          <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>
       </div>
        <a class="btn btn-primary btn-lg btn-block" href="#"  id="loginFrame" onClick="loginFrame();">Log in</a> <a class="login-link" href="#"  data-toggle="modal" data-target="#exampleModal" data-whatever="找回密码">Lost your password?</a> </div>      
<div class="loader" id="loading"></div>     
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">找回密码</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label class="control-label">E-mail:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /container --> 

<script type="text/javascript">
var ssid='{$ssid}';
</script> 
<script src="Public/statics/default/dist/js/vendor/jquery.min.js"></script> 
<script src="Public/statics/default/dist/js/flat-ui.min.js"></script> 
<script src="Public/statics/default/docs/assets/js/application.js"></script>
<!--<script src="Public/statics/default/dist/js/vendor/video.js"></script>  
<script>
      videojs.options.flash.swf = "Public/statics/default/dist/js/vendors/video-js.swf"
    </script>!-->
<script src="Public/statics/default/js/ajax.js"></script>
</body>
</html>