<?php if (!defined('THINK_PATH')) exit();?><div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php
 $condition['class']=I('get.class'); $con=M('plugins')->where($condition)->select(); foreach($con as $row){ ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <?php echo $row['name']; ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-info" onclick="openwindow('misc.php?action=Aclass&run=query&pid=<?php echo $row['id']; ?>&appid=<?php echo C('APPID'); ?>','_blank','778','622');" autocomplete="off">添加一个挂机</button>
      <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-info" data-toggle="collapse" data-target="#collapseClassShow" aria-expanded="false" aria-controls="collapseClassShow">管理所有挂机</button>
      <div class="collapse" id="collapseClassShow">
            <?php api('showlist',$row['name'],array()); ?>
      </div>
      </div>
    </div>
  </div>
        <?php
 } ?>
</div>