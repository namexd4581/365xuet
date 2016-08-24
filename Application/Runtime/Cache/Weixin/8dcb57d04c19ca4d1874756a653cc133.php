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
    .tab_conbox{border: 1px solid white;border-top: none;padding-left: 0px;text-align: left}
    .tab_con{ display:none;}

    .tabs{height: 40px;padding-left: 0px;width: 100%;}
    .tabs li{height:40px;line-height:40px;float:left;width:33.3%;margin-bottom: -1px;background: white;overflow: hidden;position: relative;}
    .tabs li a {display: block;padding: 0 20px;border: 1px solid #fff;outline: none;}
    .tabs li a:hover {background: #ccc;}
    .tabs .thistab,.tabs .thistab a:hover{background: #fff;border-bottom: 2px solid #ffd424;color:#ffd424 }

    .tab_con {padding:12px;font-size: 14px; line-height:175%;}
    .tabs_listleft{font-size: 0.7em;  height: 80px;border-bottom: 1px solid #eeeeee;width: 80%;float: left}
    .tabs_listright{float: left;width: 20%;height:80px;font-size: 0.7em;text-align: right;border-bottom: 1px solid #eeeeee}
    .tabs_listrighta{padding:3px;border-top-left-radius: 3px;border-top-right-radius: 3px;border-bottom-left-radius: 3px;border-bottom-right-radius:3px;font-size:1em;color: #ffffff;background: orange}
</style>
<body>
<div style="background: #ffffff">
    <div id="content_div">
        <div class="header"  style="z-index: 100;position: fixed;">
            <div class="left_t">
                <a href="<?php echo U('index');?>" class="header_back"></a>
            </div>
            <div class="middle_t site_20">我的直播课</div>
            <div class="right_t">
            </div>
        </div>
    </div>
    <div id="tabbox" style="padding-top: 55px;">
        <ul class="tabs" id="tabs" style="z-index: 100;position: fixed;">
            <li>全部课程</li>
            <li>待上课</li>
            <li>已上课</li>
        </ul>
        <ul class="tab_conbox" id="tab_conbox" style="padding-top: 40px">
            <li class="tab_con">
                <div class="tabs_listleft">
                    <img src="/weixin/Public/Weixin/images/img_photo.png" style="float: left" alt="" height="65px" width="65px">
                    <span>[小升初]数学进阶</span><br>
                    <span>创建时间：2016-08-08 08:08</span><br>
                    <span>开始时间：2016-08-09 08:08</span>
                </div>
                <div class="tabs_listright">
                    <span style="color: orange">￥5</span><br><br>
                    <a class="tabs_listrighta" href="">已结束</a>
                </div>
            </li>


            <li class="tab_con">
                <div class="tabs_listleft">
                    <img src="/weixin/Public/Weixin/images/img_photo.png" style="float: left" alt="" height="65px" width="65px">
                    <span>[小升初]数学进阶</span><br>
                    <span>创建时间：2016-08-08 08:08</span><br>
                    <span>开始时间：2016-08-09 08:08</span>
                </div>
                <div class="tabs_listright">
                    <span style="color: orange">￥5</span><br><br>
                    <a class="tabs_listrighta" href="">尚未开课</a>
                </div>
            </li>

            <li class="tab_con">
                <div class="tabs_listleft">
                    <img src="/weixin/Public/Weixin/images/img_photo.png" style="float: left" alt="" height="65px" width="65px">
                    <span>[小升初]数学进阶</span><br>
                    <span>创建时间：2016-08-08 08:08</span><br>
                    <span>开始时间：2016-08-09 08:08</span>
                </div>
                <div class="tabs_listright">
                    <span style="color: orange">￥5</span><br><br>
                    <a class="tabs_listrighta" href="">已结束</a>
                </div>
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