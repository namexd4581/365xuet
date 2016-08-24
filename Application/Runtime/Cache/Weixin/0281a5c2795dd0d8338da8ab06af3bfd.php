<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
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
<style>
    .tijiao{padding:5px;width:25%;border-top-left-radius: 5px;border-top-right-radius:5px;border-bottom-left-radius: 5px;border-bottom-right-radius:5px;font-size:1em;color: #ffffff;background: orange}
</style>
<body>
<div id="content_div">
    <div class="header"  style="z-index: 100;position: fixed;">
        <div class="left_t">
            <a href="evaluate.html" class="header_back"></a>
        </div>
        <div class="middle_t site_20">修改评价</div>
        <div class="right_t">
        </div>
    </div>
    <div style="width: 100%;padding-top: 60px">
        <div style="border-left: 3px solid orange;margin-left: 10px;text-align: left">
            <span style="margin-left: 5px">[课程类型]课程名</span></div>
    </div>
    <br>
    <form>
    <input name="pingjia" value="1" type="radio" checked="checked">好评</input>
    <input name="pingjia" value="2" type="radio">中评</input>
    <input name="pingjia" value="3" type="radio">差评</input>
    <br><br>
    <textarea name="msg" style="width: 90%;height: 100px"></textarea><br>
        <input class="tijiao" type="submit" value="提交">
    </form>
</div>
</body>
</html>