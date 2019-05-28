<!DOCTYPE html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>菜品添加页面</title>
    <script src="{{url('admin/js/jquery.min.js')}}"></script>
    <script src="{{url('admin/lib/layui/layui.js')}}" charset="utf-8"></script>
    <link rel="stylesheet" href="/admin/lib/layui/css/layui.css">
</head>
<body>
    <form class="layui-form" action="" enctype="multipart/form-data">
        <div class="layui-fluid">
            <div class="layui-form-item">
                <label class="layui-form-label">菜品的名称</label>
                <div class="layui-input-block">
                    <input type="text" name="menu_name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">菜品的价格</label>
                <div class="layui-input-block">
                    <input type="text" name="menu_price" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">菜品图片</label>
                <div class="layui-input-block">
                    <button type="button" class="layui-btn" id="test1">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                        <input type="hidden" name="menu_img" id="menu_img">
                    </button>
                </div>
            </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">菜单分类</label>
                    <div class="layui-input-block">
                        <select name="type_id" lay-verify="required">
                            <option value=""></option>
                            @foreach($re as $v)
                            <option value="{{$v->type_id}}">{{$v->type_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">是否展示：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="is_menu" value="是" title="是">
                        <input type="radio" name="is_menu" value="否" title="否" checked>
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">菜品介绍：</label>
                    <div class="layui-input-block">
                        <textarea name="menu_content" placeholder="请输入内容" class="layui-textarea"></textarea>
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

            layui.use(['form','upload'], function(){
                var form = layui.form;
                var upload = layui.upload;
                    upload.render({
                        elem: '#test1'
                        ,url: "{{url('admins/uploadimg')}}" //必填项
                        ,done: function(res){
                            if(res.code==0){
                                $("#menu_img").attr('value',res.data.src);
                                alert('上传成功');
                            }else{
                                alert('上传失败');
                            }

                        }
                        ,error: function(){
                            //请求异常回调
                        }
                    });

                //监听提交
                form.on('submit(formDemo)', function(data){
                    var data =  data.field;

                    $.post(
                        "{{url('admins/addmenu')}}",
                        data,
                        function(res){
                            if(res==1){
                                alert('添加成功');
                            }else{
                                alert('添加失败');
                            }
                        }
                    );
                    return false;
                });
            });
    </script>

</body>
</html>


