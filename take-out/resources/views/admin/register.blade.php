<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link type="text/css" href="{{url('/index/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('/admin/lib/layui/css/layui.css')}}">
    <script src="/admin/lib/layui/layui.js" charset="utf-8"></script>
    <title>注册</title>
</head>

<body>
<div class="login">
    <div class="logo"></div>
    <div class="main">
        <table width="100%" border="0" cellspacing="0" class="main1">
            <tr>
                <td class="text"><input type="text/css" class="text1" placeholder="输入账号" id="business_name" name="business_name"/></td>
            </tr>
        </table>
        <div class="linee"></div>
        <table width="100%" border="0" cellspacing="0" class="main1">
            <tr>
                <td class="text"><input type="password" class="text1" placeholder="输入新密码" id="pwd" name="business_password"/></td>
            </tr>
        </table>
        <div class="linee"></div>
        <table width="100%" border="0" cellspacing="0" class="main1">
            <tr>
                <td class="text"><input type="password" class="text1" placeholder="输入确认密码" id="conpwd"/></td>
            </tr>
        </table>
        <div class="linee"></div>
    </div>
    <div class="button"><a id="btn" href="javascript:;" class="text2">注册</a></div>
</div>
<div class="footrt">
    <div class="footrt_left"><a href="{{url('admins/login')}}">已有账号？立即登录</a></div>
</div>
<input type="hidden" id="_token" value="{{csrf_token()}}">
</body>
</html>
<script src="{{url('admin/js/jquery.js')}}"></script>
<script>
    $(function(){
        layui.use(['form','layer'],function(){
            var form=layui.form;
            var layer=layui.layer;
            //发送验证码
            var falg=false;
            $("#btn").click(function(){
                var business_name=$("#business_name").val();
                var _token=$("#_token").val();
                var pwd=$('#pwd').val();
                var conpwd=$('#conpwd').val();
                if($('#business_name').val()==''){
                    layer.msg('请输入您的账号！');
                    return false;
                }else if($('#pwd').val()==''){
                    layer.msg('请输入您的密码!');
                    return false;
                }else if($('#conpwd').val()==''){
                    layer.msg('请您再次输入密码！');
                    return false;
                }else if(pwd!=conpwd){
                    layer.msg('确认密码与密码不一致！');
                    return false;
                }

                if(business_name==''){
                    layer.msg('账号不能为空');
                    return false;
                }else{
                    $.ajax({
                        type:"post",
                        data:{business_name:business_name,_token:$("#_token").val()},
                        url:"{{url('admins/registerdd')}}",
                        assoc:false
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
                    $.ajax({
                        type:'post',
                        url:"{{url('admins/registerDo')}}",
                        data:{business_name:business_name,pwd:pwd,conpwd:conpwd,_token:_token},
                        dataType:'json'
                    }).done(function (res) {
                        if(res.code==1){
                          //  alert(1);
                            layer.msg(res.font,{icon:res.code,time:2000},function () {
                                location.href="{{url('admins/login')}}"
                            });
                        }else{
                            layer.msg(res.font,{icon:res.code});
                        };
                    })



            })
            function registertel() {
                // 账号失去焦点
                $('#business_name').blur(function () {
                    reg = /^\d{5,}$/;//验证账号正则(5位以上字符串)
                    var that = $(this);
                    // var falg=false;
                    if (that.val() == "" || that.val() == "请输入您的账号") {
                        layer.msg('请输入您的账号！');
                    } else if (that.val().length < 5) {
                        layer.msg('您输入的账号长度有误！');
                    }
                })
                // 密码失去焦点
                $('#pwd').blur(function () {
                    reg = /^[0-9a-zA-Z]{6,16}$/;
                    var that = $(this);
                    if (that.val() == "" || that.val() == "6-16位数字或字母组成") {
                        layer.msg('请设置您的密码！');
                    } else if (!reg.test($("#pwd").val())) {
                        layer.msg('请输入6-16位数字或字母组成的密码!');
                    }
                })
                // 重复输入密码失去焦点时
                $('#conpwd').blur(function () {
                    var that = $(this);
                    var pwd1 = $('#pwd').val();
                    var pwd2 = that.val();
                    if (pwd1 != pwd2) {
                        layer.msg('您俩次输入的密码不一致哦！');
                    }
                })
            }
            registertel();

        })

    });
</script>