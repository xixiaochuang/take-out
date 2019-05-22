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
	<div class="login">
    	<div class="logo"></div>
        <div class="main">
        	<table width="100%" border="0" cellspacing="0" class="mainl">
            	<tr>
                	<td class="text"><input type="text/css" class="text1" placeholder="输入手机号"/></td>
                </tr>
            </table>
            <div class="linee"></div>
			<table width="100%" border="0" cellspacing="0" class="mainl">
                <tr>
                    <td class="text"><input type="password" class="text1" placeholder="输入密码"/></td>
                </tr>
            </table>
            <div class="linee"></div>
        </div>
        <div class="button"><a href="member.blade.php"><input type="submit" value="登 录" class="text2" /></a></div>
    </div>
    <div class="footrt">
    	<div class="footrt_left"><a href="{{url('register')}}">注册新用户</a></div>
        <div class="footrt_right"><a href="{{url('password')}}">忘记密码？</a></div>
    </div>
</body>
</html>
