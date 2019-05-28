@extends('index\layouts')

@section('title', '我的')

@section('sidebar')

<body>
    <div class="header">
    <table width="100%" border="0" cellspacing="0" class="header_nav">
    	<tr>
        	<td width="10%" class="nav_left1"><a  href='javascript:window.history.go(-1)'><</a></td>
            <td width="80%"class="nav_title">我的中心</td>
            <td width="10%" class="nav_r"></td>
        </tr>
    </table>
    </div>
    
    <!--/*主要部分*/-->
    <div class="my">

            <table width="100%" border="0" cellspacing="0" class="my_name">
            	<tr>
                	<td class="my_main_1"><a href="{{url('address')}}">
                    	<div><h3>用户名</h3></div>
                        <div>手机：158 0000 1111  </div></a>
                    </td>
                    <td class="my_mainn"><a href="{{url('address')}}">></a></td>
                </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" class="my_2">
            	<tr>
                	<td width="30" class="my_3"><a href="pingjia.html"><img src="img/pj.jpg" width="30%" height="auto"/><p>商家评价</p></a></td>
                    <td width="30" class="my_4"><a href="myjf.html"><img src="img/xh.jpg" width="30%" height="auto"/><p>我的积分</p></a></td>
                    <td width="30" class="my_4"><a href="myjk.html"><img src="img/jk.jpg" width="30%" height="auto"/><p>我的金库</p></a></td>
                </tr>
            </table>
            
        	<table width="100%" border="0" cellspacing="0" class="my_n">
            	<tr>
                	<td class="my_main"><a href="{{url('myorder')}}">我的订单</a></td>
                    <td class="my_mainn"><a href="{{url('myorder')}}">></a></td>
                </tr>
                <tr>
                	<td class="my_main_p"><a href="{{url('shop')}}">我的购物车</a></td>
                    <td class="my_mainn_p"><a href="{{url('shop')}}">></a></td>
                </tr>
             </table> 
             <table width="100%" border="0" cellspacing="0" class="my_n">   
				<tr>
                	<td class="my_main"><a href="language.html">语言</a></td>
                    <td class="my_mainn"><a href="language.html">></a></td>
                </tr>
                <tr>
                	<td class="my_main_p"><a href="makepassword.html">修改密码</a></td>
                    <td class="my_mainn_p"><a href="makepassword.html">></a></td>
                </tr>
                <tr>
                	<td class="my_main_p"><a href="text.html">服务与广告</a></td>
                    <td class="my_mainn_p"><a href="text.html">></a></td>
                </tr>
                <tr>
                	<td class="my_main_p">推荐给好友</td>
                    <td class="my_mainn_p">></td>
                </tr>
                <tr>
                	<td class="my_main_p"><a href="text.html">最新消息</a></td>
                    <td class="my_mainn_p"><a href="text.html">></a></td>
                </tr>
            </table>
        </div>
        <div class="button1"><a href="login.blade.php"><input type="submit" value="退出当前账号" class="text2" /></a></div>

    @endsection('sidebar')
