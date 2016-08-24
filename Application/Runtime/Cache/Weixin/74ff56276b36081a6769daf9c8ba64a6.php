<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
<!--   <link rel="shortcut icon" href="favicon.ico"  />
  <link rel="Bookmark" href="favicon.ico"  />-->
<!--jQuery weui-->
<link rel="stylesheet" href="/weixin/Public/Weui/css/weui.min.css">
<link rel="stylesheet" href="/weixin/Public/Weui/css/jquery-weui.min.css">
<link rel="stylesheet" href="/weixin/Public/Weui/css/weui.css">
<link rel="stylesheet" href="/weixin/Public/Weui/css/jquery-weui.css">
<script type="application/javascript" src="/weixin/Public/Weui/js/jquery-2.1.4.js"></script>
<script type="application/javascript" src="/weixin/Public/Weui/js/jquery-weui.js"></script>
<script type="application/javascript" src="/weixin/Public/Weui/js/jquery-weui.min.js"></script>
<script type="application/javascript" src="/weixin/Public/Weui/js/jquery.min..js"></script>
<script type="application/javascript" src="/weixin/Public/Weui/js/city-picker.js"></script>
<script type="application/javascript" src="/weixin/Public/Weui/js/city-picker.min.js"></script>
<script type="application/javascript" src="/weixin/Public/Weui/js/swiper.js"></script>
<script type="application/javascript" src="/weixin/Public/Weui/js/swiper.min.js"></script>
<script type="application/javascript" src="/weixin/Public/Weui/js/zepto.js"></script>
<!-- Standard iPhone -->
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<!-- Retina iPhone -->
<link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-120x120.png" />
<!-- Standard iPad -->
<link rel="apple-touch-icon" sizes="76x76" href="touch-icon-iphone-76x76.png" />
<!-- Retina iPad -->
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-152x152.png" />
<link rel="stylesheet" href="/weixin/Public/Weixin/css/bootstrap.css">
<link rel="stylesheet" href="/weixin/Public/Weixin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/weixin/Public/Weixin/css/style.css">
<script type="application/javascript" src="/weixin/Public/Weixin/js/jquery-1.8.3.min.js"></script>
<script type="application/javascript" src="/weixin/Public/Weixin/js/jquery.cookie.js"></script>
<script type="application/javascript" src="/weixin/Public/Weixin/js/jquery.form.js"></script>
<script type="application/javascript" src="/weixin/Public/Weixin/js/commjslib.js"></script>
<script type="application/javascript" src="/weixin/Public/Weixin/js/layer.m/layer.m.js"></script>
<script type="application/javascript" src="/weixin/Public/Weixin/js/h5.js"></script>
<script type="application/javascript" src="/weixin/Public/Weixin/js/jquery.cookie.js"></script>
    <title>365学堂</title>
</head>
<body>
<style>
    .mylesson{
        height: 80px;
    }
    .mylesson ul{
        width: 100%;height: 50px;background: white;padding-left: 0px;text-align: left
    }
    .mylesson ul li{
        float: left;background: white;margin-top: -1px;height: 40px;width: 25%;text-align:center;border: 1px solid #ececec;line-height:40px;font-size: 0.8em
    }
    .money{
        height:80px;;margin-top: 10px
    }
    .money ul{
        width: 100%;height: 50px;background: white;padding-left: 0px;text-align: left
    }
    .money ul li{
        float: left;background: white;height: 40px;width: 50%;text-align:center;border: 1px solid #ececec;line-height:40px;font-size: 0.8em
    }
    .setting{
        height: 120px;margin-top:10px
    }
    .setting ul{
        width: 100%;height: 50px;background: white;padding-left: 0px;text-align: left
    }
    .setting ul li{
       background: white;padding-left: 15px;margin-top:-1px;height: 40px;width: 100%;text-align:left;border: 1px solid #ececec;line-height:40px;font-size: 0.8em

    }
    a{
        color: #6f6f6f;
    }
</style>
<!--头部-->
<div class="header">
    <div class="left_t">
        &nbsp;&nbsp;
    </div>
    <div class="middle_t site_20">个人中心</div>
    <div class="right_t">
        <span class="rigth"></span>
    </div>
</div>
<!--中间部分-->
<div style="padding-top: 50px;background: #ececec; width:100% ;height:550px">
    <div style="background: orange;width: 100%;height: 90px;">
        <div style="text-align: left;padding-left: 0px;padding-top: 10px;float: left">
            <ul style="padding-left: 5px">
                <li>
                    <?php if(empty($data["avatar"])): ?><img src="/weixin/Public/Weixin/images/img_photo.png" height="50px" width="50px" alt="" class="img-circle">
                    <?php else: ?>
                      <img src="/weixin/Public/Weixin/images/<?php echo ($data["avatar"]); ?>" height="50px" width="50px" alt="" class="img-circle"><?php endif; ?>
                </li>
                <li style="font-size: 0.7em;color: white"><?php echo ($data["nickname"]); ?></li>
            </ul>
        </div>
        <div style="float: left;padding-top: 35px;text-align: left">
            <ul style="padding-left: 5px">
                <li style="font-size: 0.7em;color: white">账户余额：<?php echo ($data["money"]); ?></li>
            </ul>
        </div>
    </div>

    <div class="mylesson">
        <ul >
            <li style="border:1px solid #ececec;width: 100%;text-align: left;font-size: 1em;padding-left: 5px;height: 40px" >我的课程</li>
            <li><a href="<?php echo U('Teacher/mylesson');?>">我的直播课</a></li>
            <li><a href="<?php echo U('Teacher/myvideo');?>">我的视频课</a></li>
            <li><a href="<?php echo U('Teacher/underline');?>">我的线下课</a></li>
            <li><a href="<?php echo U('Teacher/mystudent');?>">我的学生</a></li>
        </ul>

    </div>
    <div class="money">
        <ul>
            <li style="border:1px solid #ececec;font-size: 1em;width: 100%;padding-left: 5px;text-align: left" >钱包管理</li>
            <li><a href="<?php echo U('Teacher/money');?>">账户余额</a></li>
            <li><a href="<?php echo U('Teacher/order');?>">我的订单</a></li>
        </ul>

    </div>

    <div class="setting">
        <ul>
            <li style="border:1px solid #ececec;width: 100%;font-size: 1em;padding-left: 5px;text-align: left">帐号设置</li>
            <a href="<?php echo U('Teacher/personalset');?>"><li>个人设置</li></a>
            <a href="<?php echo U('Teacher/setting');?>"><li>安全设置</li></a>
        </ul>

    </div>
    <div style="text-align: center;margin-top: 10px">
        <a class="btn btn-danger" style="width: 90%" href="<?php echo U('Public/logout');?>">退出登录</a></div>
</div>
<!--底部-->
<div class="bottom">
    <ul>
        <li><a class="a-1" href="<?php echo U('index/index');?>"><img src="/weixin/Public/Weixin/images/home.png"> 首页</a></li>
        <li><a href="<?php echo U('index/classify');?>"><img src="/weixin/Public/Weixin/images/cent_.png">分类</a></li>
        <li><a href="<?php echo U('index/about');?>"><img src="/weixin/Public/Weixin/images/contment.png">联系我们</a></li>
        <li><a  style="color: red" href="<?php echo U('Public/login');?>"><img src="/weixin/Public/Weixin/images/1015.png">个人中心</a></li>
    </ul>
</div>

</body>
</html>