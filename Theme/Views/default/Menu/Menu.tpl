<script type="text/javascript" src="Public/statics/default/dist/js/vendor/ajaxtabs2.js"></script> 
<ul id="countrytabs2" style="display:none;">
    <a href="#Menu" class="list-group-item active"  rel="#default"> 账号管理</a>
    <php>
    $con=M('class')->where($condition)->select();
    foreach($con as $row){
        echo '<a href="misc.php?action=Aclass&run=show&class='.$row['class'].'" class="list-group-item"  rel="countrycontainer">'.$row['name'].'</a>';
    }
    </php>
</ul>
<div class="row">
  <div class="col-md-3">
    <div id="menus" class="list-group">
    <a href="javascript: countriess.expandit(0)" class="list-group-item active"  onclick="changeBg(this)"> 账号管理</a>
    <php>
    $con=M('class')->where($condition)->select();
    $i=1;
    foreach($con as $row){
        echo '<a href="javascript: countriess.expandit('.$i.')" class="list-group-item"  onclick="changeBg(this)">'.$row['name'].'</a>';
        $i++;
    }
    </php>
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
    <php>
    $con=M('class')->where($condition)->select();
    $i=1;
    foreach($con as $row){
        echo '<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-info" onclick="openwindow(\'http://cloud.iqqol.com/misc.php?action=AccountVerify\',\'_blank\',\'778\',\'622\');" autocomplete="off">'.$row['name'].'</button>&nbsp;';
        $i++;
    }
    </php>
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