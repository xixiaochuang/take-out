@extends('index\layouts')

@section('title', '分类')

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
    
    <!--/*主要部分*/-->
    <div class="classmain">
    	<table width="95%" border="0" cellspacing="0" class="class_main">
        	<tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/00.png" width="100%" height="auto"/></div>
                    <div class="class_text">KTV<p>酒吧</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/014.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">日用<p>办公用品</p></div></a>
                </td>
            </tr>
            <tr height="5"></tr>
            <tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/001.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">洗浴<p>SPA</p><p>按摩</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/002.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">观光<p>订票</p><p>住宿</p></div></a>
                </td>
            </tr>
            <tr height="5"></tr>
            <tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/003.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">美容<p>美甲</p><p>美发</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/004.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">电器<p>厨房</p><p>化妆品</p></div></a>
                </td>
            </tr>
            <tr height="5"></tr>
            <tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/004.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">体育<p>高尔夫</p><p>休闲</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/005.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">服装<p>箱包</p><p>眼镜</p></div></a>
                </td>
            </tr>
            <tr height="5"></tr>
            <tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/006.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">婚庆<p>鲜花</p><p>饰品</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/007.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">保健品<p>酒</p></div></a>
                </td>
            </tr>
        <tr height="5"></tr>
            <tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/008.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">茶叶<p>茶具</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/009.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">医院<p>培训</p></div></a>
                </td>
            </tr>
            <tr height="5"></tr>
            <tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/010.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">装修<p>家具</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/011.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">代驾<p>车租凭</p></div></a>
                </td>
            </tr>
            <tr height="5"></tr>
            <tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/012.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">学校<p>团体机构</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/013.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">物流<p>通讯</p></div></a>
                </td>
            </tr>
            <tr height="5"></tr>
            <tr>
            	<td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/015.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">加盟<p>贸易</p><p>机械</p></div></a>
                </td>
                <td width="10"></td>
                <td class="class_main_1"><a href="dianqi.html">
                	<div class="class_pic"><img src="/index/img/016.jpg" width="100%" height="auto"/></div>
                    <div class="class_text">净水器<p>空气净化</p></div></a>
                </td>
            </tr>
        </table>
        
        
    </div>

    @endsection
   	<!--/*底下导航*/-->
    {{--<table width="100%" border="0" cellspacing="0" class="nav">--}}
    	{{--<tr>--}}
        	{{--<td width="25" class="foot"><a href="{{url('/')}}"><img src="/index/img/11.png" width="40%" height="auto"/><p>外卖</p></a></td>--}}
            {{--<td width="25" class="foot"><a href="{{url('classify')}}"><img src="/index/img/2.png" width="40%" height="auto"/><p><span>分类</span></p></a></td>--}}
            {{--<td width="25" class="foot"><a href="{{url('shop')}}"><img src="/index/img/33.png" width="40%" height="auto"/><p>购物车</p></a></td>--}}
            {{--<td width="25" class="foot"><a href="{{url('member')}}"><img src="/index/img/44.png" width="40%" height="auto"/><p>我的</p></a></td>--}}
        {{--</tr>--}}
        {{----}}
    {{--</table>--}}
    {{--<div class="kb"></div> --}}
{{--</body>--}}
{{--</html>--}}
