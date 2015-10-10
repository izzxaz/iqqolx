<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <title>管理中心 - iQQOLX Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="Public/Admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Public/Admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="Public/Admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
                <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">iQQOLX Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        <!--</li>!-->
                        <li>
                            <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> 面板首页</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 项目管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">云挂机项目</a>
                                </li>
                                <li>
                                    <a href="morris.html">Cron任务</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 用户管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?action=UManage&run=Manage">本地账号查看</a>
                                </li>
                                <li>
                                    <a href="admin.php?action=AManage&run=AList">项目用户总表</a>
                                </li>
                                <li>
                                    <a href="admin.php?action=AManage&run=AClass">账号类型管理</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> 插件</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI 设定<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?action=Style&run=Manage">模板风格</a>
                                </li>
                                <li>
                                    <a href="admin.php?action=Style&run=Logo">Logo</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> 网站设定<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?action=WebSiteManager&run=BasicSetting">基本设置</a>
                                </li>
                                <li>
                                    <a href="admin.php?action=WebSiteManager&run=NoticeSetting">编辑公告</a>
                                </li>
                                <li>
                                    <a href="admin.php?action=WebSiteManager&run=LinksSetting">友情链接</a>
                                </li>
                                <li>
                                    <a href="#">待选功能 <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">未开发1</a>
                                        </li>
                                        <li>
                                            <a href="#">未开发2</a>
                                        </li>
                                        <li>
                                            <a href="#">未开发3</a>
                                        </li>
                                        <li>
                                            <a href="#">未开发4</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> 云平台<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?action=Xcloud&run=Setting">数据通信</a>
                                </li>
                                <li>
                                    <a href="admin.php?action=Xcloud&run=Style">风格中心</a>
                                </li>
                                <li>
                                    <a href="admin.php?action=Xcloud&run=Plugins">插件中心</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">风格管理</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<?php $path=get_dir_glob('Theme/Views','name',$dir=true); $a_path=get_dir_glob('Theme/Views','path',$dir=true); $num=count($path); for($i=1;$i<=$num;$i++){ if($i==1){ echo '            <div class="row">'; $style_path=$path[$i-1]; if($style_path==C('WEB_STYLE')){ $dclass='<div class="panel panel-green">'; $dc2='(已启用)'; } else{ $dclass='<div class="panel panel-default">'; $dc2='(<a href="admin.php?action=Style&run=Manage&style='.$style_path.'&edit=yes">使用</a>)'; } $inc=file_get_contents($a_path[0].'/About.inc'); echo '                <div class="col-lg-4">
                    '.$dclass.'
                        <div class="panel-heading">
                            '.$style_path.$dc2.'
                        </div>
                        <div class="panel-body">
                            <p><img src="Theme/Views/'.$style_path.'/preview[1].jpg" width="33%" height="100px"><img src="Theme/Views/'.$style_path.'/preview[2].jpg" width="33%" height="100px"><img src="Theme/Views/'.$style_path.'/preview[3].jpg" width="33%" height="100px"></p>
                        </div>
                        <div class="panel-footer">
                            '.$inc.'
                        </div>
                    </div>
                </div>'; } elseif($i!=1 and $i%3==1){ echo '            </div>
            <!-- /.row -->
            <div class="row">'; $style_path=$path[$i-1]; if($style_path==C('WEB_STYLE')){ $dclass='<div class="panel panel-green">'; $dc2='(已启用)'; } else{ $dclass='<div class="panel panel-default">'; $dc2='(<a href="admin.php?action=Style&run=Manage&style='.$style_path.'&edit=yes">使用</a>)'; } $inc=file_get_contents($a_path[0].'/About.inc'); echo '                <div class="col-lg-4">
                    '.$dclass.'
                        <div class="panel-heading">
                            '.$style_path.$dc2.'
                        </div>
                        <div class="panel-body">
                            <p><img src="Theme/Views/'.$style_path.'/preview[1].jpg" width="33%" height="100px"><img src="Theme/Views/'.$style_path.'/preview[2].jpg" width="33%" height="100px"><img src="Theme/Views/'.$style_path.'/preview[3].jpg" width="33%" height="100px"></p>
                        </div>
                        <div class="panel-footer">
                            '.$inc.'
                        </div>
                    </div>
                </div>'; } elseif($i==$num){ $style_path=$path[$i-1]; if($style_path==C('WEB_STYLE')){ $dclass='<div class="panel panel-green">'; $dc2='(已启用)'; } else{ $dclass='<div class="panel panel-default">'; $dc2='(<a href="admin.php?action=Style&run=Manage&style='.$style_path.'&edit=yes">使用</a>)'; } $inc=file_get_contents($a_path[0].'/About.inc'); echo '                <div class="col-lg-4">
                    '.$dclass.'
                        <div class="panel-heading">
                            '.$style_path.$dc2.'
                        </div>
                        <div class="panel-body">
                            <p><img src="Theme/Views/'.$style_path.'/preview[1].jpg" width="33%" height="100px"><img src="Theme/Views/'.$style_path.'/preview[2].jpg" width="33%" height="100px"><img src="Theme/Views/'.$style_path.'/preview[3].jpg" width="33%" height="100px"></p>
                        </div>
                        <div class="panel-footer">
                            '.$inc.'
                        </div>
                    </div>
                </div>'; echo '</div>'; break; } else{ $style_path=$path[$i-1]; if($style_path==C('WEB_STYLE')){ $dclass='<div class="panel panel-green">'; $dc2='(已启用)'; } else{ $dclass='<div class="panel panel-default">'; $dc2='(<a href="admin.php?action=Style&run=Manage&style='.$style_path.'&edit=yes">使用</a>)'; } $inc=file_get_contents($a_path[0].'/About.inc'); echo '                <div class="col-lg-4">
                    '.$dclass.'
                        <div class="panel-heading">
                            '.$style_path.$dc2.'
                        </div>
                        <div class="panel-body">
                            <p><img src="Theme/Views/'.$style_path.'/preview[1].jpg" width="33%" height="100px"><img src="Theme/Views/'.$style_path.'/preview[2].jpg" width="33%" height="100px"><img src="Theme/Views/'.$style_path.'/preview[3].jpg" width="33%" height="100px"></p>
                        </div>
                        <div class="panel-footer">
                            '.$inc.'
                        </div>
                    </div>
                </div>'; } } ?>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="Public/Admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="Public/Admin/dist/js/sb-admin-2.js"></script>

</body>

</html>