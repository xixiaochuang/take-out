
@extends('index\layouts')

@section('title', 'Enough to eat')

@section('sidebar')
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
            <td class="nav_right"><input type="text" placeholder="输入关键词搜索菜名" autofocus x-webkit-speech class="searc">
            </td>
            <td class="nav_ss"><input type="button"  value="搜索" class="sss add"></td>
        </tr>
    </table>
    </div>
<div id="body">
    <div style="margin-top:40px;"><img src="/index/img/000.jpg" width="100%" height="auto"/></div>
    <div class="xx">
        <div class="xx_1"><img src="/index/img/ts.png" width="40%" height="auto"/></div>
        <div class="xx_2">外卖：30分钟前A用户联系到大方外卖：30分钟前A用户联系到大方炸鸡炸鸡</div>
    </div>
    <div class="indexmain">
        @for($i=0;$i<$counts;$i++)
            <table width="100%" border="0" cellspacing="0" class="indexmain_1">

                <tr>
                    @foreach($res[$i] as $v)
                        <td class="main_1"><a href="take?menu_id={{$v['menu_id']}}">
                                <div class="main_2"><img src="{{$v['menu_img']}}" width="100%" height="auto"/></div>
                                <div class="indetext">{{$v['menu_name']}}</div></a>
                        </td>
                    @endforeach
                </tr>

            </table>
        @endfor
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

    
    <!--/*主要部分*/-->

    <script>
        $(function () {
           $('.add').click(function () {
             var _this=$(this);
             var value=_this.parent().prev().children().val();
                $.get(
                    '/search',
                    {value:value},
                    function (res) {
                      $('#body').html(res);
                    }
                )
           })
        })
    </script>
    @endsection

