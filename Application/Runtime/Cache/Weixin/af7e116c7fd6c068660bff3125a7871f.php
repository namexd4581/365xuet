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
.tixian {
margin-top: 10px;
text-align: center;
height: 40px;
line-height: 40px;
color: white;
background: orange;
width: 95%;
border-bottom-right-radius: 5px;
border-bottom-left-radius: 5px;
border-top-left-radius: 5px;
border-top-right-radius: 5px
}
</style>
<div style="background: #eeeeee">
    <div id="content_div">
        <div class="header"  style="z-index: 100;position: fixed;">
            <div class="left_t">
                <a href="money.html" class="header_back"></a>
            </div>
            <div class="middle_t site_20">余额提现</div>
            <div class="right_t">
            </div>
        </div>
    </div>
    <header class="demos-header" style="padding-top: 85px; text-align: left; margin-left: 10px; font-size: 0.8em;">
        <span>可提现余额</span><span style="color: orange">100元</span>
    </header>

    <div class="weui_cells weui_cells_form" style="margin-top: 10px">
        <div class="weui_cell" >
            <div class="weui_cell_hd">金额</div>
            <div class="weui_cell_bd weui_cell_primary" style="margin-left: 20px">
                <input class="weui_input" type="text" placeholder="请输入提现金额">
            </div>
        </div>
        <div class="weui_cell weui_cell_select" >
                <div class="weui_cell_hd" style="text-align: left;padding-left: 15px">
                    <span class="weui_label" >银行卡</span></div>
                <select class="weui_select" name="select1">
                    <option selected="" value="0">选择银行卡</option>
                    <option value="1">工商银行</option>
                    <option value="2">农业银行</option>
                    <option value="3">邮政储蓄</option>
                </select>
                </div>
        </div>
    </div>
          <input type="button" class="tixian" value="确认提现"/>
    </div>
</body>
</html>