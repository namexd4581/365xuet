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
    .tixian {
        margin-top: 10px;
        margin-left: 2.5%;
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

    .chongzhi {
        margin-top: 10px;
        margin-left: 2.5%;
        text-align: center;
        height: 40px;
        line-height: 40px;
        color: white;
        background: #0c80ba;
        width: 95%;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px
    }

    .mingxi {
        margin-top: 10px;
        margin-left: 2.5%;
        text-align: center;
        height: 40px;
        line-height: 40px;
        color: orange;
        border: 1px solid orange;
        width: 95%;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px
    }

    a {
        color: #FFFFFF
    }
</style>
<body>

<div>
    <div class="header" style="z-index: 100;position: fixed;">
        <div class="left_t">
            <a href="index.html" class="header_back"></a>
        </div>
        <div class="middle_t site_20">我的余额</div>
        <div class="right_t">
        </div>
    </div>
    <div style="width: 100%;height: 200px;padding-top: 55px">
        <ul style="margin-top: 20px;padding: 0px">
            <li>
                <img src="/weixin/Public/weixin/images/logo.png" alt=""
                     style="width: 60px;border-radius:5px;height:60px;text-align: center;line-height: 70px">
                <br>
            </li>
            <li>
                <span>账户余额:0</span><br>
            </li>
            <li>
                <span>冻结资金:0</span><br>
            </li>
        </ul>
    </div>
    </div>
    <div class='demos-content-padded'>
        <a href="javascript:;" id='show-custom' ><div class="chongzhi">充值</div></a>
        <a href="<?php echo U('Student/tixian');?>"  ><div class="tixian">提现</div></a>
        <a href="<?php echo U('Student/chongzhijilu');?>"  ><div class="mingxi">充值记录</div></a>

    </div>
    <script src="/weixin/Public/Weui/js/jquery.min..js"></script>
    <script src="/weixin/Public/Weui/js/jquery-weui.js"></script>

    <script>

        $(document).on("click", "#show-custom", function() {
            $.modal({
                title: "充值",
                text: "请选择支付方式",
                buttons: [
                    { text: "支付宝", onClick: function(){ $.alert("你选择了支付宝"); } },
                    { text: "微信支付", onClick: function(){ $.alert("你选择了微信支付"); } },
                    { text: "取消", className: "default"},
                ]
            });
        });
    </script>
</body>
</html>