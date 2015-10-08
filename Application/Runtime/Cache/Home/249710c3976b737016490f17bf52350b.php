<?php if (!defined('THINK_PATH')) exit();?><div class="row">
  <div class="col-md-3">
    <div class="list-group" id="countrytabs">
    <a href="#" class="list-group-item active"  rel="countrycontainer"> 账号管理</a>
    <a href="#" class="list-group-item"  rel="countrycontainer">插件1</a>
    <a href="#" class="list-group-item"  rel="countrycontainer">插件2</a>
    <a href="#" class="list-group-item"  rel="countrycontainer">插件3</a>
    <a href="#" class="list-group-item"  rel="countrycontainer">插件4</a>
    </div>
  </div>
  <div class="col-md-9">
    <div id="countrydivcontainer">
        <div class="well well-lg">{hook('test')}</div>
    </div>
  </div>
</div>
<script type="text/javascript">

var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>