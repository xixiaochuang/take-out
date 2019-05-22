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
    	<div class="bbb">
            <table width="100%" border="0" cellpadding="0" class="shop">
                <tr>
                    <td class="d2">删除</td>
                </tr>
            </table>
            <table width="95%" border="0" cellpadding="0">
                <tr>
                    <td rowspan="2"><input type='checkbox'></td>
                    <td rowspan="2" class="shop_pic"><img src="img/cp.jpg" width="100%" height="auto"/></td>
                    <td class="ddd">大方炸鸡</td>
                </tr>
                <tr>
                    <td class="ddd">内容内容内容</td>
                </tr>
            </table>
            <table width="95%" border="0" cellpadding="0" class="shop_text">
                <tr>
                    <td class="d3">共1件商品</td>
                    <td class="d3"><span>￥199.00元</span> x1</td>
                </tr>
            </table>
    	</div>
        <div class="bbb">
            <table width="100%" border="0" cellpadding="0">
                <tr>
                    <td class="d2">删除</td>
                </tr>
            </table>
            <table width="95%" border="0" cellpadding="0">
                <tr>
                    <td rowspan="2"><input type='checkbox'></td>
                    <td rowspan="2" class="shop_pic"><img src="img/cp.jpg" width="100%" height="auto"/></td>
                    <td class="ddd">大方炸鸡</td>
                </tr>
                <tr>
                    <td class="ddd">内容内容内容</td>
                </tr>
            </table>
            <table width="95%" border="0" cellpadding="0" class="shop_text">
                <tr>
                    <td class="d3">共1件商品</td>
                    <td class="d3"><span>￥199.00元</span> x1</td>
                </tr>
            </table>
    	</div>
    </div>
    <div class="js">
    <div class="jss"></div>
    	<table width="100%" border="0" cellpadding="0" style=" ">
        	<tr>
            	<td class="d3"><input type='checkbox'>全选</td>
                <td class="d3" style="text-align:left; padding-left:10px;">合计：<span>￥199.00</span>（不含运费）</td>
                <td class="jj"><input type="submit" value="结算" class="jsjs" /></td>
            </tr>
        </table>
    </div>
    @endsection('sidebar')
   	<!--/*底下导航*/-->
