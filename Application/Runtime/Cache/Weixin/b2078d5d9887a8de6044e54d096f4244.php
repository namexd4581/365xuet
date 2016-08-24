<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
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

    <title>365学堂</title>

</head>
<body>
<style>
    /*.mylesson{*/
        /*height: 115px;*/
    /*}*/
    /*.mylesson ul{*/
        /*width: 100%;height: 50px;background: white;padding-left: 0px;text-align: left*/
    /*}*/
    /*.mylesson ul li{*/
        /*float: left;background: white;margin-top: -1px;height: 40px;width: 25%;text-align:center;border: 0.025px solid #ececec;line-height:40px;font-size: 0.8em*/
    /*}*/
    .mystudy{
        height: 80px;
    }
    .mystudy ul{
        width: 100%;height: 50px;background: white;padding-left: 0px;text-align: left
    }
    .mystudy ul li{
        float: left;background: white;margin-top: -1px;height: 40px;width: 25%;text-align:center;border: 0.05px solid #ececec;line-height:40px;font-size: 0.8em
    }
    .mystudy ul li a{
        color: #6f6f6f;
    }
    .money{
        height:80px;;margin-top: 10px
    }
    .money ul{
        width: 100%;height: 50px;background: white;padding-left: 0px;text-align: left
    }
    .money ul li{
        float: left;background: white;height: 40px;width: 50%;text-align:center;border: 0.05px solid #ececec;line-height:40px;font-size: 0.8em
    }
    .money ul li a{
        color: #6f6f6f;
    }
    .setting{
        height: 80px;margin-top:10px
    }
    .setting ul{
        width: 100%;height: 50px;background: white;padding-left: 0px;text-align: left
    }
    .setting ul li{
       background: white;padding-left: 15px;margin-top:-1px;height: 40px;width: 100%;text-align:left;border: 0.05px solid #ececec;line-height:40px;font-size: 0.8em

    }
    .setting ul li a{
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
<div style="padding-top: 50px;background: #ececec; width:100% ;height:500px">
    <div style="background: orange;width: 100%;height: 90px;">
        <div style="text-align: left;padding-left: 0px;padding-top: 10px;float: left">
            <ul style="padding-left: 5px">
                <li><img src="/Public/Weixin/images/1015.png" height="50px"  alt=""></li>
                <li style="font-size: 0.7em;color: white">xxx|学生</li>
            </ul>
        </div>
        <div style="float: left;padding-top: 35px;text-align: left">
            <ul style="padding-left: 0px">
                <li style="font-size: 0.7em;color: white">账户余额：￥50.00</li>
                <li style="font-size: 0.7em;color: white">冻结资金：￥0</li>
            </ul>
        </div>
    </div>
    <!--<div class="mylesson">-->
        <!--<ul >-->
            <!--<li style="border:0px solid #ececec;width: 100%;font-size:1em;text-align: left;padding-left: 5px;height: 40px" >我的课程</li>-->
            <!--<li>我的直播课</li>-->
            <!--<li>线下补习课</li>-->
            <!--<li>线下开班课</li>-->
            <!--<li>进入微校</li>-->
            <!--<li>学生家访</li>-->
            <!--<li style="width: 75%"></li>-->
        <!--</ul>-->

    <!--</div>-->
    <div class="mystudy">
        <ul >
            <li style="border:0.05px solid #ececec;width: 100%;text-align: left;font-size: 1em;padding-left: 5px;height: 40px" >我的学习</li>
            <li><a href="/index.php/weixin/personal/mylesson">我的课程表</a></li>
            <li><a href="/index.php/weixin/personal/mylesson">入驻家访</a></li>
            <li><a href="/index.php/weixin/personal/mylesson">我的评价</a></li>
            <li><a href="/index.php/weixin/personal/mylesson">我的收藏</a></li>
        </ul>

    </div>
    <div class="money">
        <ul>
            <li style="border:0.05px solid #ececec;font-size: 1em;width: 100%;padding-left: 5px;text-align: left" >钱包管理</li>
            <li>账户余额</li>
            <li>我的订单</li>
        </ul>

    </div>

    <div class="setting">
        <ul>
            <li style="border:0.05px solid #ececec;width: 100%;font-size: 1em;padding-left: 5px;text-align: left">帐号设置</li>
            <li>个人设置</li>
            <li>安全设置</li>
        </ul>

    </div>

</div>
<!--底部-->
<div class="bottom">
    <ul>
        <li><a href=""><img src="/Public/Weixin/images/1009.png">首页</a></li>
        <li><a href=""><img src="/Public/Weixin/images/1012.png">分类</a></li>
        <li><a href="/index.php/weixin/personal/index"><img src="/Public/Weixin/images/1015.png">个人中心</a></li>
    </ul>
</div>
</body>
</html>