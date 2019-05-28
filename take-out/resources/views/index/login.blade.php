<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link type="text/css" href="{{url('/index/css/style.css')}}" rel="stylesheet" />
<title>登录</title>
</head>

<body>
<form action="">
	<div class="login">
    	<div class="logo"></div>
        <div class="main">
        	<table width="100%" border="0" cellspacing="0" class="mainl">
            	<tr>
                	<td class="text"><input type="text/css" id="user_name" class="text1" placeholder="输入手机号"/></td>
                </tr>
            </table>
            <div class="linee"></div>
			<table width="100%" border="0" cellspacing="0" class="mainl">
                <tr>
                    <td class="text"><input type="password" id="pwd" class="text1" placeholder="输入密码"/></td>
                </tr>
            </table>
            <div class="linee"></div>
        </div>
        <div class="button"><input type="button" value="登 录" id="login" class="text2" /></div>
    </div>
    <div class="footrt">
    	<div class="footrt_left"><a href="{{url('register')}}">注册新用户</a></div>
        <div class="footrt_right"><a href="{{url('password')}}">忘记密码？</a></div>
    </div>
</form>
</body>
</html>

<script src="{{url('admin/js/jquery.min.js')}}"></script>

<script src="{{url('admin/lib/layui/layui.js')}}"></script>

<script>
    $(function(){
        layui.use('form',function(){
            var form = layui.form;
            $("#login").click(function(){
                var user_name = $("#user_name").val();
                var pwd = $("#pwd").val();
                if(user_name == ""){
                    layer.msg("手机号不能为空",{icon: 2});
                    return false;
                }

                if(pwd == ""){
                    layer.msg("密码不能为空",{icon: 2});
                    return false;
                }

                $.ajax({
                    type:"POST",
                    url:"{{url('addLogin')}}",
                    data:{user_name:user_name,pwd:pwd},
                    dataType:"json",
                    success:function(res){
                        if(res.code==1){
                            layer.msg('登录成功',{icon: 1});
                            var url = "{{url('/')}}"; //成功跳转的url
                            setTimeout(window.location.href=url,2000);
                        }else{
                            layer.msg("登录失败",{icon: 2});
                        }
                    }
                })
            })
        })
    })
</script>