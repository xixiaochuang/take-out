@extends('index\layouts')

@section('title', 'Enough to eat')

@section('sidebar')

<body>
    <div class="header">
    <table width="100%" border="0" cellspacing="0" class="header_nav">
    	<tr>
        	<td width="10%" class="nav_left1"><a  href='javascript:window.history.go(-1)'><</a></td>
            <td width="80%"class="nav_title">炸鸡</td>
            <td width="10%" class="nav_r"></td>
        </tr>
    </table>
    </div>
<input type="hidden" value="{{$ress->menu_id}}" id="menu_id">
    <!--/*主要部分*/-->
    <div class="takemain">
    	<div class="take">
        	<table width="100%" border="0" cellspacing="0">
            	<tr>
                	<td width="30" class="take_pic"><img src="{{$ress->menu_img}}" width="100%" height="auto"/></td>
                    <td width="50" class="take_text">
                    	<div take_text_1>{{$ress->menu_name}}</div>
                        <div>
                        	<div></div>
                            <div class="jj">￥:{{$ress->menu_price}}</div>
                        </div>
                        <div class="sj">外卖时间：8:00-23:00</div>
                        <div class="sj">介绍：{{$ress->menu_content}}</div>
                        <br><br>
                        <div class="sj">数量：<input type="button" value="减" id="min">&nbsp;&nbsp;<input type="text" value="1" id="num">&nbsp;&nbsp;<input type="button"  value="加" id="max"></div>
                        <br>
                        <span id="money">{{$ress->menu_price}}</span>
                        <br>
                        <input type="button" value="加入购物车" id="addcart" menu_id="{{$ress->menu_id}}">
                    </td>
                    <td width="20" class="take_phone">
                    	<div class="dh"><a href="tel:15854290371"><img src="/admin/img/bd.png" width="100%" height="auto"/></a></div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div>

    </div>
    <script>
        $(function () {
            
            $('#min').click(function () {
                var _this=$(this);
                var value=parseInt(_this.next().val());
                if(value!=1){
                    var num=value-1;
                    _this.next().val(num)
                }else{
                    var num=1;
                }
                _this.next().val(num);
                count_money(num)
            })
            
            $('#max').click(function () {
                var _this=$(this);
                var value=parseInt(_this.prev().val());
                if(value>=5){
                    var num=5
                }else{
                   var num=value+1;
                }
                _this.prev().val(num);
                count_money(num)
            })
            
            $('#num').blur(function () {
                var _this=$(this);
                var value=parseInt(_this.val());

                var preg=/^[0-9]+$/;
                if(preg.test(value)){
                    var num=value;
                    if(value>=5){
                        var num=5;

                    }
                    if(value<1){
                        var num=1;
                    }

                }else{
                    var num=1;
                }
                _this.val(num)
                count_money(num)
            })
            $('#addcart').click(function () {
                var _this=$(this);
                var menu_id=_this.attr('menu_id');
                var menu_num=$('#num').val();
                var status=false;
                $.ajax({
                    async:false,
                    url: "/checklogin",

                }).done(function (res) {
                    if(res==1){
                        status=true;
                    }else{
                        status=false;
                    }
                })
                if(status){
                    alert("请选登录");
                    location.href="/login";
                    return false;
                }
                $.post(
                    "/addshopcart",
                    {menu_id:menu_id,menu_num:menu_num},
                    function (res) {
                        if(res){
                            alert('成功');
                        }else{
                            alert('失败');
                        }
                    }

                );
            })
        })
        function count_money(value) {
            var id=$('#menu_id').val();
            $.post(
                "{{url('takemoney')}}",
                {menu_id:id,sales:value},
                function (res) {
                   $('#money').text(res);
                }
            )
        }
    </script>
@endsection('sidebar')
    

