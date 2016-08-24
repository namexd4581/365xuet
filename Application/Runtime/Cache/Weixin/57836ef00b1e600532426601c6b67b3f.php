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
<style>
    .tabs_listleft{padding-top:10px;text-align: left;font-size: 0.7em;  height: 80px;border-bottom: 1px solid #eeeeee;width: 80%;float: left}
    .tabs_listright{padding-right: 2px;padding-top:10px;text-align: left;float: left;width: 20%;height:80px;font-size: 0.7em;text-align: right;border-bottom: 1px solid #eeeeee}
    .tabs_listrighta{padding:6px;border-top-left-radius: 3px;border-top-right-radius: 3px;border-bottom-left-radius: 3px;border-bottom-right-radius:3px;font-size:1em;color: #ffffff;background: orange}
</style>
<body>
<div style="background: #ffffff">
    <div id="content_div">
        <div class="header"  style="z-index: 100;position: fixed;">
            <div class="left_t">
                <a href="index.html" class="header_back"></a>
            </div>
            <div class="middle_t site_20">我的视频课</div>
            <div class="right_t">
            </div>
        </div>
    </div>
    <div style="border: 1px solid #eeeeee;width: 100%;padding-top: 55px">
                <div class="tabs_listleft">
                    <img src="/weixin/Public/Weixin/images/img_photo.png" style="float: left" alt="" height="65px" width="65px">
                    <span style="font-size: 1.5em">视频课标题</span><br><br><br>
                    <span>2016-08-08 08:08:08</span><br>
                </div>
                <div class="tabs_listright">
                    <a style="color: #737373" href="">编号12</a><br><br><br>
                    <a class="tabs_listrighta" onclick="delet()">删除</a>
                </div>
    </div>
</div>
<script>
    function delet() {
        confirm('确定要删除吗');
    }
</script>
</body>
</html>