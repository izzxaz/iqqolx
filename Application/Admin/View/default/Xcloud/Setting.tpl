<include file="Application/Admin/View/default/Common/header.tpl" />
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
        <include file="Application/Admin/View/default/Common/nav.tpl" />
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">通信设置</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            云平台通信设置
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <script type="text/javascript">
                                function show_confirm()
                                {
                                var r=confirm("真的要提交吗？这里很危险！\r\n出错后要自己手动修改根目录下config.php");
                                if (r==true)
                                  {
                                  return true;
                                  }
                                else
                                  {
                                  return false;
                                  }
                                }
                                </script>
                                    <form action="admin.php?action=Xcloud&run=Setting&edit=app" method="post" onsubmit="return show_confirm()" role="form">
                                        <div class="form-group">
                                            <label>APPID</label>
                                            <input name="appid" class="form-control" value="{:C('APPID')}">
                                            <p class="help-block">切勿随意更改！！<font color=red>后果自负！</font></p>
                                        </div>
                                        <div class="form-group">
                                            <label>APIKEY</label>
                                            <input name="secret" class="form-control" value="{:C('SECRET')}" placeholder="">
                                            <p class="help-block">切勿随意更改！！<font color=red>后果自负！</font></p>
                                        </div>
                                        <button type="submit" class="btn btn-default">提交</button>
                                        <!--<button type="reset" class="btn btn-default">Reset Button</button>!-->
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            数据库通信设置
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="admin.php?action=Xcloud&run=Setting&edit=sql" method="post" onsubmit="return show_confirm()" role="form">
                                        <div class="form-group">
                                            <label>数据库地址</label>
                                            <input name="host" class="form-control" value="{:C('DB_HOST')}">
                                            <p class="help-block">HTTP_HOST.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>数据库端口</label>
                                            <input name="port" class="form-control" value="{:C('DB_PORT')}">
                                            <p class="help-block">HTTP_HOST.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>数据库名</label>
                                            <input name="dbname" class="form-control" value="{:C('DB_NAME')}">
                                            <p class="help-block">DATABASE.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>数据库用户名</label>
                                            <input name="user" class="form-control" value="{:C('DB_USER')}">
                                            <p class="help-block">USER.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>数据库密码</label>
                                            <input name="pwd" class="form-control" value="{:C('DB_PWD')}">
                                            <p class="help-block">PWD.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>数据库表前缀</label>
                                            <input name="prefix" class="form-control" value="{:C('DB_PREFIX')}">
                                            <p class="help-block">PREFIX.</p>
                                        </div>
                                        <button type="submit" class="btn btn-default">提交</button>
                                        <!--<button type="reset" class="btn btn-default">Reset Button</button>!-->
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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