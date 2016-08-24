<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
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

    <title>学生个人中心</title>
</head>
<style>
    #tabbox{ width:100%; overflow:hidden; margin:0;}
    .tab_conbox{border: 1px solid white;border-top: none;}
    .tab_con{ display:none;}

    .tabs{height: 40px;margin: 0;padding-top: 55px;padding-left: 0px;width: 100%;}
    .tabs li{height:40px;line-height:40px;float:left;width:33.3%;margin-bottom: -1px;background: white;overflow: hidden;position: relative;}
    .tabs li a {display: block;padding: 0 20px;border: 1px solid #fff;outline: none;}
    .tabs li a:hover {background: #ccc;}
    .tabs .thistab,.tabs .thistab a:hover{background: #fff;border-bottom: 2px solid #ffd424;color:#ffd424 }

    .tab_con {padding:12px;font-size: 14px; line-height:175%;}

    .kechengxuan {
        width: 33%;
        height: 40px;
        line-height: 40px;
        border-bottom: 2px solid #ffd424;
        float: left;
        margin-top: 60px;
    }

    .kecheng {
        width: 33%;
        height: 40px;
        float: left;
        line-height: 40px;
        margin-top: 60px;
    }
</style>
<body>
<div style="background: #ffffff">
    <div id="content_div">
        <div class="header">
            <div class="left_t">
                <a href="index.html" class="header_back"></a>
            </div>
            <div class="middle_t site_20">我的课程表</div>
            <div class="right_t">
            </div>
        </div>
    </div>
    <div id="tabbox">
        <ul class="tabs" id="tabs">
            <li>课程日历</li>
            <li>待上课</li>
            <li>已上课</li>
        </ul>
        <ul class="tab_conbox" id="tab_conbox">
            <li class="tab_con">
                <p><span>课程日历</span></p>
            </li>

            <li class="tab_con">
                   <p> <span>暂无课程</span></p>
            </li>

            <li class="tab_con">
                    <p><span>暂无课程</span></p>
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