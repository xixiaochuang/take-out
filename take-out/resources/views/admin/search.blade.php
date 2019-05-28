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
                <a menu_id="{{$v->menu_id}}" class="update">修改</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>