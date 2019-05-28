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
            <td class="nav_right"><input type="text" placeholder="输入关键词搜索菜名" autofocus x-webkit-speech class="searc">
            </td>
            <td class="nav_ss"><input type="button"  value="搜索" class="sss add"></td>
        </tr>
    </table>
    </div>
    
    <!--/*主要部分*/-->
    <div id="body">
        <div class="classmain">
            <table width="95%" border="0" cellspacing="0" class="class_main">
                @foreach($info as $v)
                    <tr>
                        @for($i=0;$i<count($v);$i++)
                            <td class="class_main_1"><a href="classifytake?menu_id={{$v[$i]['type_id']}}">
                                    <div class="class_pic"><img src="/index/img/00.png" width="50%" height="auto"/></div>
                                    <div class="class_text"><p>{{$v[$i]['type_name']}}</p></div></a>
                            </td>
                        @endfor
                    </tr>
                @endforeach
            </table>


        </div>
    </div>

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

