<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link type="text/css" href="{{url('/index/css/css.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{url('/index/css/style.css')}}" rel="stylesheet" />
    <title>@yield('title')</title>
</head>
@section('sidebar')
    @show
<table width="100%" border="0" cellspacing="0" class="nav">
    <tr>
        <td width="25" class="foot"><img src="/index/img/1.png" width="30%" height="auto"/><span><p>外卖</p></span></td>
        <td width="25" class="foot"><a href="{{url('classify')}}"><img src="/index/img/22.png" width="30%" height="auto"/><p>分类</p></a></td>
        <td width="25" class="foot"><a href="{{url('shop')}}"><img src="/index/img/33.png" width="30%" height="auto"/><p>购物车</p></a></td>
        <td width="25" class="foot"><a href="{{url('login')}}"><img src="/index/img/44.png" width="30%" height="auto"/><p>我的</p></a></td>
    </tr>

</table>
<div class="kb"></div>
</body>
</html>