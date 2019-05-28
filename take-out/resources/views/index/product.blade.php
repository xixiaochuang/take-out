 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link type="text/css" href="{{url('/index/css/css.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{url('/index/css/style.css')}}" rel="stylesheet" />
    <script src="/js/jquery.js"></script>
    <title>产品详情</title>
</head>
<body>
	<div class="header">
    <table width="100%" border="0" cellspacing="0" class="header_nav">
    	<tr>
        	<td width="10%" class="nav_left1"><a  href='javascript:window.history.go(-1)'><</a></td>
            <td width="80%"class="nav_title">产品详情</td>
            <td width="10%" class="nav_r"></td>
        </tr>
    </table>
    </div>
    <!--/*主要部分*/-->
    @foreach($takeinfo as $v)
    <div class="bodymain">
        <div class="cp">
            <img src="{{$v->menu_img}}" width="30%" height="auto"/>
        	<div class="cp_left">
            	<div>{{$v->menu_name}}</div>
                <div><h5>{{$v->sprice}}</h5></div>
            </div>
            <div class="cp_right">39.00</div>
        </div>
        <div class="dz">
        	<div class="dz_left">
            	<div>味道：5 速度：5</div>
                <div>{{$v->menu_content}}</div>
            </div>
            <div class="dz_right">
               <input type="button" menu_id="{{$v->menu_id}}" value="加入购物车" class="addcart">
                <br>
                <br>
               <input type="button" value="立即购买" >
            </div>
        </div>
    </div>
    <br>
    <br>
    @endforeach
    <div class="kb"></div>
</body>
<script>
    $(function () {
        $('.addcart').click(function () {
           var _this=$(this);
           var menu_id=_this.attr('menu_id');
           var menu_num=1;
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
</script>

