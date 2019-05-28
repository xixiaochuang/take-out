<!DOCTYPE html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>菜品展示页面</title>
    <script src="{{url('admin/js/jquery.min.js')}}"></script>
    <script src="{{url('admin/lib/layui/layui.js')}}" charset="utf-8"></script>
    <link rel="stylesheet" href="/admin/lib/layui/css/layui.css">
</head>
<br/>
<form action="">
    <input type="text" name="keyname">
    <input type="button" value="搜索" id="search">
</form>

<br/>
<br/>
<div id="replace">
    <table border="1">
        <thead>
            <tr>
                <td>id</td>
                <td>菜品的名称</td>
                <td>菜品的图片</td>
                <td>菜品的价格</td>
                <td>菜品的销量</td>
                <td>菜品的详情</td>
                <td>菜单的分类</td>
                <td>操作</td>
            </tr>
        </thead>

        <tbody>
        @foreach($re as $v)
            <tr>
                <td>{{$v->menu_id}}</td>
                <td>{{$v->menu_name}}</td>
                <td>
                    <img src="{{$v->menu_img}}"  width="50px" height="50px" alt="">
                </td>
                <td>{{$v->menu_price}}</td>
                <td>{{$v->menu_sales}}</td>
                <td>{{$v->menu_content}}</td>
                <td>{{$v->type_name}}</td>
                <td>
                    <a  menu_id="{{$v->menu_id}}" class="del">删除</a>
                    <a menu_id="{{$v->menu_id}}" href="upmenu?menu_id={{$v->menu_id}}" menu_id="{{$v->menu_id}}" class="update">修改</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>
</html>
<script>
    $(function(){
        $('.del').click(function(){
            var menu_id = $(this).attr('menu_id');
            $.get(
                "{{url('admins/delmenu')}}",
                {menu_id:menu_id},
                function(res){
                    if(res==1){
                        alert('删除成功');
                    }else{
                        alert('删除失败');
                    }
                }
            );

        })


        $("#search").click(function(){
            var keyname=$(this).prev().val();
            $.post(
                "{{url('admins/search')}}",
                {keyname:keyname},
                function(res){
                    $("#replace").html(res);
            }
        );
        })
    })
</script>


