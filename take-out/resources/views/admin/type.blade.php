<!DOCTYPE html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>分类添加页面</title>
    <script src="{{url('admin/js/jquery.min.js')}}"></script>
    <script src="{{url('admin/lib/layui/layui.js')}}" charset="utf-8"></script>
    <link rel="stylesheet" href="/admin/lib/layui/css/layui.css">
</head>
<body>
<form class="layui-form" action="">
    <div class="layui-fluid">
        <div class="layui-form-item">
            <label class="layui-form-label">分类添加名称</label>
            <div class="layui-input-block">
                <input type="text" name="type_name" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(formDemo)', function(data){
            var data=data.field;
            $.post(
                "{{url('admins/addtype')}}",
                data,
                function(res){
                    if(res==1){
                        alert("添加成功");
                    }else{
                        alert("添加失败");
                    }
                }
            );
            return false;
        });
    });
</script>
</body>
</html>


