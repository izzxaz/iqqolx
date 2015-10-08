<include file="Application/Admin/View/default/Common/header.tpl" />
    <!-- Bootstrap Core CSS -->
    <link href="Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="Public/Admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="Public/Admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="Public/Admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                    <h1 class="page-header">账号类型管理</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            增加一个类（新手勿入）
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">类名称</th>
                                            <th width="10%">class</th>
                                            <th width="70%">array(<a href="">必看！使用方法</a>)</th>
                                            <th width="10%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <form action="admin.php?action=AManager&run=AClass&edit=add" method="post">
                                            <td><input class="form-control" name="class[name]" placeholder="类名称"></td>
                                            <td><input class="form-control" name="class[class]" placeholder="类型"></td>
                                            <td><input class="form-control" name="class[array]" placeholder="例：username:1|cookie:1|other:0"></td>
                                            <td><button type="submit" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button></td>
                                        </form>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            查看数据
                        </div>
                               <script type="text/javascript">
                                function show_confirm()
                                {
                                var r=confirm("真的要删掉吗？");
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
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <php>
                                        $rows = M('class')->where($condition)->select();
                                        foreach ($rows as $row) {
                                            if($row['default']==1){
                                                $r='readonly';
                                                $d='disabled';
                                            }
                                            else{
                                                $r='';
                                                $d='';
                                            }
                                            echo '<form action="admin.php?action=AManager&run=AClass&edit=yes" method="post" '.$d.'>
                                            <tr class="odd gradeX">
                                            <td width="10%"><input class="form-control" name="class[title]" value="'.$row['name'].'" '.$r.'></td>
                                            <td width="10%"><input class="form-control" name="class[title]" value="'.$row['class'].'" '.$r.'></td>
                                            <td width="70%"><input class="form-control" name="class[description]" value="'.$row['array'].'" '.$r.'></td>
                                            <td class="center" width="10%">
                                            <input type="hidden" name="class[id]" value="'.$row['id'].'"'.$d.'>
                                            <button type="submit" class="btn btn-success btn-circle" '.$d.'><i class="fa fa-check"></i></button>
                                            <a onclick="return show_confirm();" href="admin.php?action=AManager&run=AClass&edit=del&id='.$row['id'].'" '.$d.'><button type="button" class="btn btn-warning btn-circle" '.$d.'><i class="fa fa-times"></i></button></a>
                                            </td>
                                        </tr></form>';
                                        }
                                        </php>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                          </div>
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

    <!-- DataTables JavaScript -->
    <script src="Public/Admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="Public/Admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="Public/Admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>