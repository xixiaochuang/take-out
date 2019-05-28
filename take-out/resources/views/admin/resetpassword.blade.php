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
    <title>修改密码</title>
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
                <td class="text"><input type="password" class="text1" placeholder="输入原密码" id="pwd" name="business_password"/></td>
            </tr>
        </table>
        <div class="linee"></div>
        <table width="100%" border="0" cellspacing="0" class="main1">
            <tr>
                <td class="text"><input type="password" class="text1" placeholder="输入新密码" id="verifcode"/></td>
            </tr>
        </table>
        <div class="linee"></div>
    </div>
    <div class="button"><a id="findPasswordNextBtn" href="javascript:;" class="text2">确认修改密码</a></div>
</div>

<input type="hidden" id="_token" value="{{csrf_token()}}">
</body>
</html>
<script src="{{url('admin/js/jquery.js')}}"></script>
<script>
    layui.use(['form','layer'], function(){
        var form=layui.form;
        var layer=layui.layer;
        $("#findPasswordNextBtn").click(function () {
            var business_name=$("#business_name").val();
            var pwd=$("#pwd").val();
            var newpwd=$("#verifcode").val();
            var _token=$("#_token").val();
            if($('#business_name').val()==''){
                layer.msg('请输入您的账号！');
                return false;
            }else if($('#pwd').val()==''){
                layer.msg('请输入您的原密码!');
                return false;
            }else if($('#conpwd').val()==''){
                layer.msg('请您再次输入您的新密码！');
                return false;
            }
            $.ajax({
                type:'post',
                data:{business_name:business_name,pwd:pwd,newpwd:newpwd,_token:_token},
                url:"{{url('admins/resetpassworddo')}}",
                dataType:'json'
            }).done(function (res) {
               if(res.code==4){
                   layer.msg(res.font,{icon:res.code})
               }else if(res.code==1){
                   layer.msg(res.font,{icon:res.code,time:2000},function () {
                       {{--//location.href="{{url('userpage')}}"--}}
                   });
               }else if(res.code==3){
                   layer.msg(res.font,{icon:res.code})
               }else{
                   layer.msg(res.font,{icon:res.code})
               }
            })
        })
    })

    function resetpwd(){
        // 原密码失去焦点
        $('#pwd').blur(function(){
            reg=/^[0-9A-Za-z]{6,16}$/;
            var that = $(this);
            if( that.val()==""|| that.val()=="6-16位数字、字母组成"){
                layer.msg('请重置密码！');
            }else if(!reg.test(that.val())){
                layer.msg('请输入6-16位数字、字母组成的密码！');
            }
        })
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
        //新密码失去焦点
        $('#verifcode').blur(function(){
            reg=/^[0-9A-Za-z]{6,16}$/;
            var that = $(this);
            if( that.val()==""|| that.val()=="6-16位数字、字母组成"){
                layer.msg('请重置密码！');
            }else if(!reg.test(that.val())){
                layer.msg('请输入6-16位数字、字母组成的密码！');
            }
        })
    }
    resetpwd();



</script>
