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
                    <h1 class="page-header">风格管理</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<php>
$path=get_dir_glob('Theme/Views','name',$dir=true);
$a_path=get_dir_glob('Theme/Views','path',$dir=true);
$num=count($path);
    for($i=1;$i<=$num;$i++){
        if($i==1){
            echo '            <div class="row">';
            $style_path=$path[$i-1];
            if($style_path==C('WEB_STYLE')){
                $dclass='<div class="panel panel-green">';
                $dc2='(已启用)';
            }
            else{
                $dclass='<div class="panel panel-default">';
                $dc2='(<a href="admin.php?action=Style&run=Manage&style='.$style_path.'&edit=yes">使用</a>)';
            }
            $inc=file_get_contents($a_path[0].'/About.inc');
            echo '                <div class="col-lg-4">
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
                </div>';
        }
        elseif($i!=1 and $i%3==1){
            echo '            </div>
            <!-- /.row -->
            <div class="row">';
            $style_path=$path[$i-1];
            if($style_path==C('WEB_STYLE')){
                $dclass='<div class="panel panel-green">';
                $dc2='(已启用)';
            }
            else{
                $dclass='<div class="panel panel-default">';
                $dc2='(<a href="admin.php?action=Style&run=Manage&style='.$style_path.'&edit=yes">使用</a>)';
            }
            $inc=file_get_contents($a_path[0].'/About.inc');
            echo '                <div class="col-lg-4">
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
                </div>';
        }
        elseif($i==$num){
            $style_path=$path[$i-1];
            if($style_path==C('WEB_STYLE')){
                $dclass='<div class="panel panel-green">';
                $dc2='(已启用)';
            }
            else{
                $dclass='<div class="panel panel-default">';
                $dc2='(<a href="admin.php?action=Style&run=Manage&style='.$style_path.'&edit=yes">使用</a>)';
            }
            $inc=file_get_contents($a_path[0].'/About.inc');
            echo '                <div class="col-lg-4">
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
                </div>';
            echo '</div>';
            break;
        }
        else{
            $style_path=$path[$i-1];
            if($style_path==C('WEB_STYLE')){
                $dclass='<div class="panel panel-green">';
                $dc2='(已启用)';
            }
            else{
                $dclass='<div class="panel panel-default">';
                $dc2='(<a href="admin.php?action=Style&run=Manage&style='.$style_path.'&edit=yes">使用</a>)';
            }
            $inc=file_get_contents($a_path[0].'/About.inc');
            echo '                <div class="col-lg-4">
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
                </div>';
        }
    }
</php>

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