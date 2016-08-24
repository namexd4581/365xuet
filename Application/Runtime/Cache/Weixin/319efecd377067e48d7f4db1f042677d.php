<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>登录</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
<!--   <link rel="shortcut icon" href="favicon.ico"  />
  <link rel="Bookmark" href="favicon.ico"  />-->

<!-- Standard iPhone -->
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<!-- Retina iPhone -->
<link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-120x120.png" />
<!-- Standard iPad -->
<link rel="apple-touch-icon" sizes="76x76" href="touch-icon-iphone-76x76.png" />
<!-- Retina iPad -->
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-152x152.png" />
<link rel="stylesheet" href="/Public/Weixin/css/bootstrap.css">
<link rel="stylesheet" href="/Public/Weixin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/Public/Weixin/css/style.css">
<script type="application/javascript" src="/Public/Weixin/js/jquery-1.8.3.min.js"></script>
<script type="application/javascript" src="/Public/Weixin/js/jquery.cookie.js"></script>
<script type="application/javascript" src="/Public/Weixin/js/jquery.form.js"></script>
<script type="application/javascript" src="/Public/Weixin/js/commjslib.js"></script>
<script type="application/javascript" src="/Public/Weixin/js/layer.m/layer.m.js"></script>
<script type="application/javascript" src="/Public/Weixin/js/h5.js"></script>
<script type="application/javascript" src="/Public/Weixin/js/jquery.cookie.js"></script>

</head>
<body>
<div class="login"><img src="/Public/Weixin/images/logo.png"></div>
<div class="login_1">
    <form name="form1" id="form1" method="post">
        <ul>

            <li class="login_line"><img src="/Public/Weixin/images/member.png">
                <input name="t_mobile" id="t_mobile" type="tel" class="login_input" value="" placeholder="手机号码" maxlength="11" style="color:#666;"></li>
            <li class="login_line"><img src="/Public/Weixin/images/passwords.png">
                <input name="t_password" id="t_password" type="password" class="login_input" value="" placeholder="密码" maxlength="20" style="color:#666;"></li>
            <li>
                <div class="login_left"><input type="checkbox"  class="login_checkbox"  name="chk_isremember" value="1" id="chk_isremember" checked>
                    <label for="chk_isremember">记住账号</label></div>
                <div class="login_right"><a href="zhmm"></a></div>
            </li>

        </ul>
        <button class="login_but" type="button" name="btn_login" onclick="login();">登录</button>
    </form>
</div>
</body>
</html>
<script>
    $(function(){
        if($.cookie("isremember")!=null&&$.cookie("isremember")!="")
        {
            var mobile=$.cookie("loginid");
            var password=$.cookie("password");
            if(mobile!=null&&mobile!="")
                $("#t_mobile").val(mobile);
            if(password!=null&&password!="")
                $("#t_password").val(password);
            $("#chk_isremember").attr("checked","checked");
        }
    });
    function login()
    {
        var mobile=$("#t_mobile").val();
        var password=$("#t_password").val();
        if(!isMobile(mobile))
        {
            myAlert("请输入正确的手机号码");
            return false;
        }
        else if(password.length<4||password.length>20)
        {
            myAlert("请输入规范的密码");
            return false;
        }
        $("#form1").submit();
    }
</script>