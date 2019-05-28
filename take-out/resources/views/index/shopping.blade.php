<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
@extends('index\layouts')

@section('title', '购物车')

@section('sidebar')
<body>
	<div class="header">
    <table width="100%" border="0" cellspacing="0" class="header_nav">
    	<tr>
        	<td width="10%" class="nav_left1"><a  href='javascript:window.history.go(-1)'><</a></td>
            <td width="80%"class="nav_title">我的购物车</td>
            <td width="10%" class="nav_r"></td>
        </tr>
    </table>
    </div>
    <div class="bodymain">
        @foreach($res as $v)
    	<div class="bbb">
            <table width="100%" border="0" cellpadding="0" class="shop">
                <tr>
                    <td class="d2">删除</td>
                </tr>
            </table>
            <table width="95%" border="0" cellpadding="0">
                <tr>
                    <td rowspan="2"><input type='checkbox' class="xuan" menu_id="{{$v['menu_id']}}"></td>
                    <td rowspan="2" class="shop_pic"><img src="{{$v['menu_img']}}" width="100%" height="auto"/></td>
                    <td class="ddd">{{$v['menu_name']}}</td>
                </tr>
                <tr>
                    <td class="ddd">{{$v['menu_content']}}</td>
                </tr>
            </table>
            <table width="95%" border="0" cellpadding="0" class="shop_text">
                <tr>
                    <td class="d3">共{{$v['menu_num']}}件商品</td>
                    <td class="d3"><span>￥{{$v['menu_price']}}元</span> x{{$v['menu_num']}}</td>
                </tr>
            </table>
    	</div>
            @endforeach
    </div>
    <div class="js">
    <div class="jss"></div>
    	<table width="100%" border="0" cellpadding="0" style=" ">
        	<tr>
            	<td class="d3"><input type='checkbox' id="quan">全选</td>
                <td class="d3" style="text-align:left; padding-left:10px;">合计：<span id="money">￥0</span>（不含运费）</td>
                <td class="jj"><input type="button" value="结算" class="jsjs" /></td>
            </tr>
        </table>
    </div>
    <script>
        $(function () {
            $('#quan').click(function () {
                var _this=$(this);
                var status=_this.prop('checked');
                $('.xuan').prop('checked',status);
                if(status==true){
                    var menu_id="";
                    $('.xuan').each(function () {
                        menu_id+=$(this).attr('menu_id')+','
                    })
                   var length=menu_id.length;
                    var menu_ids=menu_id.substring(0,length-1);
                    money(menu_ids)
                }else{
                    $('#money').text('￥0');
                }


            })

            $('.xuan').click(function () {
                var length=$('.xuan').length;
                var num=0;
                var menu_id="";
                $('.xuan').each(function () {
                    if($(this).prop('checked')){
                        num+=1
                        menu_id+=$(this).attr('menu_id')+',';
                    }
                });
                var lemgths=menu_id.length;
                var meunu_id=menu_id.substring(0,lemgths-1);
               if(num==length){
                   $('#quan').prop('checked',true)
               }else{
                   $('#quan').prop('checked',false)
               }
               if(meunu_id!=""){
                   money(meunu_id)
               }
            })

            $('.jsjs').click(function () {
                var num=0;
                var menu_id="";
                $('.xuan').each(function () {
                    if($(this).prop('checked')){
                        num+=1
                        menu_id+=$(this).attr('menu_id')+',';
                    }
                });
                if(num==0){
                    alert('请选择你要结算的商品');
                    return false;
                }
              location.href
            });

            $('.d2').click(function () {
                var con=confirm('是否删除');
            });
        })

        function money(menu_id){
            $.post(
                "/takemoney",
                {menu_id:menu_id},
                function (res) {
                    $('#money').text('￥'+res);
                }
            );
        }

    </script>
    @endsection('sidebar')
   	<!--/*底下导航*/-->
