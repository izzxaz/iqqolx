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
                    <h1 class="page-header">界面风格基础选项</h1>
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
                                    <form action="admin.php?action=Style&run=Logo&edit=yes" method="post" enctype="multipart/form-data" role="form">
                                        <div class="form-group">
                                            <label>文字Logo(默认iQQOL UI)</label>
                                            <input name="logotext" class="form-control" value="{:C('WEB_LOGO_TEXT')}">
                                            <p class="help-block">文字Logo会在大多数情况下被展示.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>图片Logo(仅在模板支持图片Logo时启用)</label>
                                            <input name="logourl" class="form-control" value="{:C('WEB_LOGO_URL')}" placeholder="如果没有URL，请在下方上传">
                                        </div>
                                        <div class="form-group">
                                            <label>File input(仅限PNG,JPG,GIF,JPEG)</label>
                                            <input type="file" name="fileField">
                                        </div>
                                        <button type="submit" class="btn btn-default">提交</button>
                                        <!--<button type="reset" class="btn btn-default">Reset Button</button>!-->
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{:C('WEB_LOGO_URL')}">
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