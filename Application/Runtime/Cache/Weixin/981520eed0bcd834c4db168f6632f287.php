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
    #tabbox{ width:100%; overflow:hidden; margin:0;}
    .tab_conbox{border: 1px solid white;border-top: none;}
    .tab_con{ display:none;}

    .tabs{height: 40px;margin: 0;padding-top: 55px;padding-left: 0px;width: 100%;}
    .tabs li{height:40px;line-height:40px;float:left;width:50%;margin-bottom: -1px;background: white;overflow: hidden;position: relative;}
    .tabs li a {display: block;padding: 0 20px;border: 1px solid #fff;outline: none;}
    .tabs li a:hover {background: #ccc;}
    .tabs .thistab,.tabs .thistab a:hover{background: #fff;border-bottom: 2px solid #ffd424;color:#ffd424 }

    .tab_con {padding:12px;font-size: 14px; line-height:175%;}
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
</style>
<body>
<div style="background: #ffffff">
    <div id="content_div">
        <div class="header">
            <div class="left_t">
                <a href="index.html" class="header_back"></a>
            </div>
            <div class="middle_t site_20">安全设置</div>
            <div class="right_t">
            </div>
        </div>
    </div>
    <div id="tabbox">
        <ul class="tabs" id="tabs">
            <li>密保设置</li>
            <li>手机绑定变更</li>
        </ul>
        <ul class="tab_conbox" id="tab_conbox">
            <li class="tab_con">
                <div style="margin-top: 0px;font-size: 15px; text-align: left; padding-top: 55px;">
                <div  class="weui_cell weui_cell_select">
                    <div class="weui_cell_hd ">
                        <span class="weui_label">问题</span></div>
                    <select class="weui_select" name="select1" style="padding: 0px">
                        <option value="0" selected="selected">选择密保问题</option>
                        <option value="1">你母亲的姓名是？</option>
                        <option value="2">你父亲的姓名是？</option>
                        <option value="3">你老师的姓名是？</option>
                        <option value="4">你的出生日期是？</option>
                    </select>
                </div>
                <div class="weui_cell" style="padding-left: 0px">
                    <div class="weui_cell_hd"><span class="weui_label">答案</span></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" placeholder="请输入答案" type="tel">
                    </div>
                </div>
                    <a href="javascript:;"  ><div class="chongzhi">确定</div></a>
                    </div>
            </li>

            <li class="tab_con">
                <div class="weui_cell" style="padding-left: 0px;text-align: left">
                    <div class="weui_cell_hd" style="width: 30%"><span  style="width: 100%" class="weui_label">手机号</span></div>
                    <div class="weui_cell_bd weui_cell_primary" style="border: 1px solid #eeeeee">
                        <input class="weui_input" >
                    </div>

                    </div>
                <div class="weui_cell" style="padding-left: 0px;text-align: left">
                    <div class="weui_cell_hd" style="width: 30%"><span  style="width: 100%" class="weui_label">验证码</span></div>
                    <div class="weui_cell_bd weui_cell_primary" style="border: 1px solid #eeeeee">
                        <input class="weui_input" >
                    </div>
                    <input type="button" value="验证" style="width: 20%;float:left;background: orange">
                </div>
                <a href="javascript:;" ><div class="chongzhi">确定</div></a>
            </li>

        </ul>
    </div>
</div>
<script>
    $(document).ready(function() {
        jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
            $(tab_conbox).find("li").hide();
            $(tabtit).find("li:first").addClass("thistab").show();
            $(tab_conbox).find("li:first").show();

            $(tabtit).find("li").bind(shijian,function(){
                $(this).addClass("thistab").siblings("li").removeClass("thistab");
                var activeindex = $(tabtit).find("li").index(this);
                $(tab_conbox).children().eq(activeindex).show().siblings().hide();
                return false;
            });

        };
        /*调用方法如下：*/
        $.jqtab("#tabs","#tab_conbox","click");
    });
</script>
</body>
</html>