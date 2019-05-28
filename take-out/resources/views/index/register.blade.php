<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link type="text/css" href="{{url('/index/css/style.css')}}" rel="stylesheet" />
<title>注册</title>
</head>

<body>
<form method="post">
	<div class="login" >
    	<div class="logo"></div>
        <div class="main" id="one">
        	<table width="100%" border="0" cellspacing="0" class="main1">
            	<tr>
                    <td class="text"><input type="text/css" id="user_name" name="user_name" class="text1" placeholder="请输入账号"/></td>
                </tr>
            </table>
            <div class="linee"></div>
			<table width="100%" border="0" cellspacing="0" class="main1">
                <tr>
                    <td class="text"><input type="password" id="pw1" name="password" class="text1" placeholder="输入新密码"/></td>
                </tr>
            </table>
            <div class="linee"></div>
            <table width="100%" border="0" cellspacing="0" class="main1">
                <tr>
                    <td class="text"><input type="password" id="pw2" name="user_pwd" class="text1" placeholder="输入确认密码"/></td>
                </tr>
            </table>
            <div class="linee"></div>
        </div>
        <div class="button"><input type="submit" value="注 册" id="sub"  class="text2" /></div>
    </div>
    <div class="footrt">
    	<div class="footrt_left"><a href="{{url('/login')}}">已有账号？立即登录</a></div>
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
            var falg = false;
            $("#sub").click(function(){
                var user_name = $("#user_name").val();
                var password = $("#pw1").val();
                var pwd = $("#pw2").val();
                if(user_name==""){
                    layer.msg("手机号不能为空",{icon: 2});
                    return false;
                }else{
                    $.ajax({
                        type:"post",
                        data:{user_name:user_name},
                        url:"{{url('onlyuser')}}",
                    }).done(function (res) {
                        if(res==1){
                            layer.msg("账号已存在");
                            falg=false;
                        }else{
                            falg=true;
                        }
                    })
                    if(falg==false){
                        return falg;
                    }
                }


                if(user_name.length!=11){
                    layer.msg("手机号格式错误",{icon: 2});
                    return false;
                }
                var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
                if(!myreg.test(user_name)){
                    layer.msg('请输入有效的手机号码', {icon: 2});
                    return false;
                }
                if(password==""){
                    layer.msg('密码不能为空', {icon: 2});
                    return false;
                }
                if(pwd == ""){
                    layer.msg('确认密码不能为空', {icon: 2});
                    return false;
                }
                if(password.length!=6){
                    layer.msg('密码长度必需为6位数', {icon: 2});
                    return false;
                }
                if(password !== pwd){
                    layer.msg('确认密码与密码不一致', {icon: 2});
                    return false;
                }

                $.ajax({
                    type:"POST",
                    url:"{{url('/regadd')}}",
                    data:{user_name:user_name,pwd:pwd},
                    dataType:"json",
                    success:function(res){
                        if(res.code==1){
                            layer.msg('注册成功',{icon: 1});
                            var url = "{{url('/login')}}"; //成功跳转的url
                            setTimeout(window.location.href=url,2000);
                        }else{
                            layer.msg("注册失败",{icon: 2});
                        }
                    },
                });
                return false;
            });
        });
    })
</script>

