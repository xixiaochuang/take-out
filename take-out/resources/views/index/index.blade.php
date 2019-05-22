
@extends('index\layouts')

@section('title', 'Enough to eat')

@section('sidebar')
<body>
    <div class="header">
    <table width="100%" border="0" cellspacing="0" class="header_nav">
    	<tr>
        	<td class="nav_left">
            <select class="nav_op">
            	<option class="nav_tion">青岛</option>
                <option class="nav_tion">北京</option>
                <option class="nav_tion">上海</option>
                <option class="nav_tion">广州</option>
                <option class="nav_tion">天津</option>
                <option class="nav_tion">沈阳</option>
                <option class="nav_tion">大连</option>
                <option class="nav_tion">重庆</option>
                <option class="nav_tion">西安</option>
                <option class="nav_tion">成都</option>
                <option class="nav_tion">燕郊</option>
                <option class="nav_tion">延边</option>
                <option class="nav_tion">烟台</option>
                <option class="nav_tion">威海</option>
            </select>
            </td>
            <td ></td>
            <td class="nav_right"><input type="text" placeholder="输入关键词搜索商品" autofocus x-webkit-speech class="searc">
            </td>
            <td class="nav_ss"><input type="submit"  value="搜索" class="sss"></td>
        </tr>
    </table>
    </div>
    <div style="margin-top:40px;"><img src="/index/img/000.jpg" width="100%" height="auto"/></div>
    <div class="xx">
    	<div class="xx_1"><img src="/index/img/ts.png" width="40%" height="auto"/></div>
        <div class="xx_2">外卖：30分钟前A用户联系到大方外卖：30分钟前A用户联系到大方炸鸡炸鸡</div>
    </div>
    
    <!--/*主要部分*/-->
    <div class="indexmain">
    	<table width="100%" border="0" cellspacing="0" class="indexmain_1">
        	<tr>
            	<td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">炸鸡</div></a>
                </td>
                <td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp1.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">烧烤</div></a>
                </td>
                <td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp2.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">中餐</div></a>
                </td>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" class="indexmain_1">
        	<tr>
            	<td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp3.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">猪蹄</div></a>
                </td>
                <td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp4.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">披萨</div></a>
                </td>
                <td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp5.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">寿司.肉包</div></a>
                </td>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" class="indexmain_1">
        	<tr>
            	<td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp6.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">盒饭.粥</div></a>
                </td>
                <td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp7.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">拌菜.汤饭</div></a>
                </td>
                <td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp8.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">咖啡店</div></a>
                </td>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" class="indexmain_1">
        	<tr>
            	<td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp9.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">蛋糕</div></a>
                </td>
                <td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp10.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">周边美食</div></a>
                </td>
                <td class="main_1"><a href="take-out.html">
                	<div class="main_2"><img src="/index/img/cp11.jpg" width="100%" height="auto"/></div>
                    <div class="indetext">食品超市</div></a>
                </td>
            </tr>
        </table>
    </div>
    
    <div id="activity">
    	<div class="title">优惠中心</div>
        <div class="content">
                <div class="text">网上订餐，每单任意消费后，加6元即可享受缤纷美味,加6元即可享受缤纷美味</div>
                <div class="jt">></div>
        </div>
        <div class="content">
                <div class="text">网上订餐，每单任意消费后，加6元即可享受缤纷美味,加6元即可享受缤纷美味</div>
                <div class="jt">></div>
        </div>
        <div class="content">
                <div class="text">网上订餐，每单任意消费后，加6元即可享受缤纷美味,加6元即可享受缤纷美味</div>
                <div class="jt">></div>
        </div>
        <div class="content">
                <div class="text">网上订餐，每单任意消费后，加6元即可享受缤纷美味,加6元即可享受缤纷美味</div>
                <div class="jt">></div>
        </div>
    </div>
        
    </div>
    @endsection
   	<!--/*底下导航*/-->
    {{--<table width="100%" border="0" cellspacing="0" class="nav">--}}
    	{{--<tr>--}}
        	{{--<td width="25" class="foot"><img src="/index/img/1.png" width="30%" height="auto"/><span><p>外卖</p></span></td>--}}
            {{--<td width="25" class="foot"><a href="{{url('classify')}}"><img src="/index/img/22.png" width="30%" height="auto"/><p>分类</p></a></td>--}}
            {{--<td width="25" class="foot"><a href="{{url('shop')}}"><img src="/index/img/33.png" width="30%" height="auto"/><p>购物车</p></a></td>--}}
            {{--<td width="25" class="foot"><a href="{{url('login')}}"><img src="/index/img/44.png" width="30%" height="auto"/><p>我的</p></a></td>--}}
        {{--</tr>--}}
        {{----}}
    {{--</table>--}}
    {{--<div class="kb"></div> --}}
{{--</body>--}}
{{--</html>--}}
