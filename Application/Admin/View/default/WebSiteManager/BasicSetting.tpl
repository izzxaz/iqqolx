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
                    <h1 class="page-header">站点基础资料</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            基础资料编辑
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="admin.php?action=WebSiteManager&run=BasicSetting&edit=yes" method="post" role="form">
                                        <div class="form-group">
                                            <label>站点标题(Title)</label>
                                            <input name="title" class="form-control" value="{:C('WEB_TITLE')}">
                                            <p class="help-block">非文字Logo，仅在标签栏显示.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>站点描述(Description)</label>
                                            <input name="description" class="form-control" value="{:C('WEB_DESCRIPTION')}" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>关键词(Keywords)</label>
                                            <input name="keywords" class="form-control" value="{:C('WEB_KEYWORDS')}" placeholder="">
                                        </div>
                                        <button type="submit" class="btn btn-default">提交</button>
                                        <!--<button type="reset" class="btn btn-default">Reset Button</button>!-->
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>LOGO</label>
                                            <p><img src="{:C('WEB_LOGO_URL')}"></p>
                                            <p><a href="admin.php?action=Style&run=Logo">修改LOGO图片以及文字LOGO点这里</a></p>
                                            <p><a href="admin.php?action=Xcloud&run=Setting">修改数据库以及账号通点这里</a></p>
                                        </div>
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