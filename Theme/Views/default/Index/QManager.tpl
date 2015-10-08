<include file="Theme/Views/default/Common/header.tpl" />
<body style="background-color:#1ABCD9;">
<div class="container" id="countrydivcontainer">
<include file="Theme/Views/default/Menu/Menu.tpl" />
</div>
</body>
<script type="text/javascript">

var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
var countriess=new ddajaxtabs2("countrytabs2", "countrydivcontainer2")
countriess.setpersist(true)
countriess.setselectedClassTarget("link") //"link" or "linkparent"
countriess.init()

function changeBg(link)  
{  
var alllinks=document.getElementById("menus").getElementsByTagName("a");  
for(var i=0;i<alllinks.length;i++){  
   alllinks[i].className="list-group-item";//默认未点击时引用的样式  
}  
link.className="list-group-item active";//点击切换样式  
} 

</script>