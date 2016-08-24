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
<body style="background:#ececec">
<style>
    .a-1{
        color: #FF1515!important;}
</style>
<div class="header">
    <div class="left_t">
        <img src="/weixin/Public/Weixin/images/logo.png">
    </div>
    <div class="middle_t site_20">分类</div>
    <div class="right_t">
        <span class="rigth"></span>
    </div>
</div>
<nav style="margin-top: 0;margin-bottom: 55px">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="<?php echo U('Subpage/classify');?>"><img style="width:100%;height: 15rem;" src="/weixin/Public/Weixin/images/001.png"></a></div>
            <div class="swiper-slide"><a href="<?php echo U('Subpage/classify');?>"><img style="width:100%;height: 15rem;" src="/weixin/Public/Weixin/images/ph_1.png"></a></div>
            <div class="swiper-slide"><a href="<?php echo U('Subpage/classify');?>"><img style="width:100%;height: 15rem;" src="/weixin/Public/Weixin/images/ph_1.png"></a></div>
        </div>
    </div>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td width='50%'><a href="<?php echo U('index/zhibo');?>" class='img2'>直播课堂</a></td>
            <td width='50%'><a href="<?php echo U('index/spzy');?>" class='img3'>视频资源</a></td>
        </tr>
        <tr>
            <td width='50%'><a href="<?php echo U('index/qzhd');?>" class='img4'>亲子活动</a></td>
            <td width='50%'><a href="<?php echo U('index/jfzx');?>" class='img5'>家访在线</a></td>
        </tr>
        <tr>
            <td width='50%'><a href="<?php echo U('index/xlsd');?>" class='img6'>心理疏导</a></td>
        </tr>
    </table>
</nav>
<div class="bottom">
    <ul>
        <li><a href="<?php echo U('index/index');?>"><img src="/weixin/Public/Weixin/images/home.png"> 首页</a></li>
        <li><a class="a-1" href="<?php echo U('index/classify');?>"><img src="/weixin/Public/Weixin/images/cent_.png">分类</a></li>
        <li><a href="<?php echo U('index/about');?>"><img src="/weixin/Public/Weixin/images/contment.png">联系我们</a></li>
        <li><a href="<?php echo U('Public/login');?>"><img src="/weixin/Public/Weixin/images/1015.png">个人中心</a></li>
    </ul>
</div>
</body>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        autoplay: 2000,//可选选项，自动滑动
        autoplayDisableOnInteraction : false,
    })
</script>
</html>