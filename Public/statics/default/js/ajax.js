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
	document.getElementById("loading").innerHTML='<div class="loading" align="center"><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>';	
	}
  if (xmlhttp.readyState==4)
    {	
    document.getElementById("loginFrame").innerHTML=xmlhttp.responseText;
	document.getElementById("loading").innerHTML='';
	document.getElementById("user").innerHTML='<div class="form-group has-error" data-toggle="usertip" data-placement="right" title="请检查账号！"><input type="text" id="username" class="form-control" value="" placeholder="Enter your name"/><label class="login-field-icon fui-user" for="login-name"></label></div>';
	tips('usertip');
    }
  }
var username=document.getElementById("username").value;
var password=document.getElementById("password").value;
/*xmlhttp.open("POST","http://passport.qol.iqqol.com/verifyadmin.php?ssid="+ssid+"&form=yes",true);
xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8");
xmlhttp.send("username="+username+"&password="+password);*/
$(function($){  
    var url = 'admin.php?action=verifyLogin&ssid="+ssid+"&form=yes';  
    $.ajax(url, {  
      data: {  
        'username': username,  
        'password': password, 
        '_': new Date().getTime()  
      },  
      dataType: 'json',  
      crossDomain: true,  
      success: function(data) {  
        if(data && data.resultcode == '200'){  
          console.log(data.result.today);  
        }  
      }  
    }); 
}

$('#exampleModal').on('show.bs.modal');

function tips(uri) {
  $('[data-toggle="'+uri+'"]').tooltip();
}
/*var arr = {"red":{"id":1,"name":"mary"},"blue":{"id":2,"name":"u71d5u5b50"}};
  $.each(arr,function(idx,item){     
   //输出
   alert(item.id+"哈哈"+item.name);
})*/