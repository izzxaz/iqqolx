function loginFrame()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==1)
	{
	document.getElementById("loginFrame").innerHTML='loading...';
	document.getElementById("user").innerHTML='<div class="loading" align="center"><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>';	
	}
  if (xmlhttp.readyState==4)
    {	
	  //document.getElementById("loginFrame").innerHTML=xmlhttp.responseText;
	  //document.getElementById("user").innerHTML='';
	  var obj = $.parseJSON(xmlhttp.responseText).status;
	  //alert(obj+username+password);
	  if(obj == '404'){
		  document.getElementById("loginFrame").innerHTML='Login';
		  document.getElementById("user").innerHTML='<div class="form-group has-error"><input class="form-control" id="username" placeholder="username" name="username" type="text" value="'+ username +'" readonly autocomplete="off" autofocus></div><div class="form-group has-error"><input class="form-control" id="password" placeholder="Password" name="password" type="password" autocomplete="off" value=""></div><div class="checkbox"><label>Cookie保存30分钟，与前端同步退出。</label></div>';
		  tips('usertip');
	  }
	  else if(obj == '403'){
		  document.getElementById("loginFrame").innerHTML='Login';
		  document.getElementById("user").innerHTML='<div class="form-group"><input class="form-control" id="username" placeholder="username" name="username" type="text" value="'+ username +'" readonly autocomplete="off" autofocus></div><div class="form-group has-error"><input class="form-control" id="password" placeholder="Password" name="password" type="password" autocomplete="off" value=""></div><div class="checkbox"><label>Cookie保存30分钟，与前端同步退出。</label></div>';
		  tips('usertip');
	  }
	  else{
		  window.location.reload(true);
	  }
    }
  }
var username=document.getElementById("username").value;
var password=document.getElementById("password").value;

 xmlhttp.open("POST","admin.php?action=User&run=VerifyLogin&ssid="+ssid+"&form=yes",true);
 xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8");
 xmlhttp.send("username="+username+"&password="+password);
 
function tips(uri) {
  $('[data-toggle="'+uri+'"]').tooltip();
}
}