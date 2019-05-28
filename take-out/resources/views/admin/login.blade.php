<!doctype html>
<html  class="x-admin-sm">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin2.2</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/admin/css/font.css">
    <link rel="stylesheet" href="/admin/css/login.css">
	  <link rel="stylesheet" href="/admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/admin/lib/layui/layui.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
    
    <div class="login layui-anim layui-anim-up">
        <div class="message">x-admin2.0-管理登录</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" class="layui-form" >
            <input name="business_name" placeholder="用户名"  type="text" lay-verify="required|username" class="layui-input" >
            <hr class="hr15">
            <input name="business_password" lay-verify="required|pwd" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="button">
            <hr class="hr20" >
            <a href="{{url('admins/resetpassword')}}">忘记密码</a>&nbsp;&nbsp;<a href="{{url('admins/register')}}">注册</a>
        </form>
    </div>
    <script>
        $(function  () {
            layui.use(['form','layer'], function(){
              var form = layui.form;
              var layer = layui.layer;
              form.verify({
                    username: function(value, item){ //value：表单的值、item：表单的DOM对象
                        if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
                            return '用户名不能有特殊字符';
                        }
                        if(/(^\_)|(\__)|(\_+$)/.test(value)){
                            return '用户名首尾不能出现下划线\'_\'';
                        }

                    }

                });
                form.verify({
                    pwd: function(value, item){ //value：表单的值、item：表单的DOM对象
                      var preg=/^\d{5,}$/;
                        if(!preg.test(value)){
                            return "密码5位以上 ";
                        }
                    }

                });

              //监听提交
              form.on('submit(login)', function(data){
                  var value=data.field;
                  console.log(value);
                  $.post(
                      "{{url('admins/disposelogin')}}",
                      value,
                      function (res) {
                         if(res.code==1){
                        layer.msg('登录成功',{icon:1,time:2000},function () {
                            location.href="{{url('admins')}}";
                        })
                         }else{
                             layer.msg('账号或密码错误',{icon:2})
                         }
                      },'json'
                  );
                // alert(888)
                // layer.msg(JSON.stringify(data.field),function(){
                //     location.href='index.html'
                // });
                return false;
              });
            });
        })
    </script>
    <!-- 底部结束 -->
    <script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>
</html>