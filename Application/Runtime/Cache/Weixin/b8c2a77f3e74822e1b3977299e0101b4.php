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
<div class="header h-p">
    <div class="left_t" >
        <img style="" src="/weixin/Public/Weixin/images/logo.png">
    </div>
    <div class="middle_t site_20">主页</div>
    <div class="right_t">
        <span class="rigth">公告</span>
    </div>
</div>
<!--content部分-->
<style type="text/css">
    .mxzx,.zxhd,.mstj,.willing{text-align: start;padding: 2%;background-color: #66cc99; width:100%; border-bottom: #e6e7e8 1px solid;border-left: #ff5500 10px solid;  }
    .a-href{color:#fff}
    .w-c{padding-top: 55px;padding-bottom: 60px;}
    .h-p{position: fixed;z-index: 100}
    .mxzx-p,.mstj-p,.willing-p{display: table;width:100%;padding:0;;margin: 2px;background-color: #FFFFFF}
    .mxzx-p img{width: 100%;height: 100%;}
    .mxzx-p li{float: left;width: 33.33%;height: 10em;}
    .mstj-p img{width: 100%;height: 13em;padding:3%;}
    .mstj-p li,.willing-p li{float: left; width: 48%;border: #dedede 1px solid;margin: 1%;float: left;}
    .willing-p img{width: 100%;height: 8.4em;padding:3%;padding-bottom: 0;}
    .de{text-align: start;padding-left: 5%;font-size: 0.8em;}
    .t-1{font-size: 1em;}
    .c-0{padding-bottom: 5%;}
    .c-1{text-align: start;padding-left: 3%;font-size: 0.8em;padding-bottom: 3%;}
    .c-1 span{padding: 2% 0; display: -webkit-inline-box;}
    .c-2{padding: 1% 2%;float: left;background-color: #f50;color: #FFFFFF}
    .c-3{margin-bottom:3%;padding: 1% 2%;float: left;width:80%;background-color: #414141;color: #FFFFFF;text-align: center;  }
    .c-4{float: right;padding-right: 5% !important;}
    .swiper-slide a img{padding-bottom: 1%;width:100%;height: 15em}
    .a-1{
        color: #FF1515!important;}
</style>
<div class="w-c">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="<?php echo U('Subpage/classify');?>"><img src="/weixin/Public/Weixin/images/001.png"></a></div>
            <div class="swiper-slide"><a href="<?php echo U('Subpage/classify');?>"><img src="/weixin/Public/Weixin/images/ph_1.png"></a></div>
            <div class="swiper-slide"><a href="<?php echo U('Subpage/classify');?>"><img src="/weixin/Public/Weixin/images/ph_1.png"></a></div>
        </div>
    </div>
    <div class="willing"><a href='#' class='a-href'>即将开课</a></div>
    <ul class="willing-p"><!--将图片内容用h5及css画出来-->
        <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
            <div class="c-1">
                <div class="c-2">高一</div>
                <div class="c-3">2016-08-30</div>
                <span>高一语文</span>
                <span>（林黛玉进贾府）</span>
            </div>
        </li>
        <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
            <div class="c-1">
                <div class="c-2">高一</div>
                <div class="c-3">2016-08-30</div>
                <span>高一语文</span>
                <span>（林黛玉进贾府）</span>
            </div>
        </li>
        <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
            <div class="c-1">
                <div class="c-2">高一</div>
                <div class="c-3">2016-08-30</div>
                <span>高一语文</span>
                <span>（林黛玉进贾府）</span>
            </div>
        </li>
        <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
            <div class="c-1">
                <div class="c-2">高一</div>
                <div class="c-3">2016-08-30</div>
                <span>高一语文</span>
                <span>（林黛玉进贾府）</span>
            </div>
        </li>
    </ul>
    <div class="willing"><a href='#' class='a-href'>热门课程</a></div>
    <ul class="willing-p"><!--将图片内容用h5及css画出来-->
        <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
            <div class="c-1">
                <div class="c-2">高一</div>
                <div class="c-3">特级教师【张老师】</div>
                <span>数学高中必修3</span>
                <span>（随机抽样(一)）</span>
                <span>￥10</span>
                <span class="c-4">10人已学习</span>
            </div>
        </li>
        <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
            <div class="c-1">
                <div class="c-2">高一</div>
                <div class="c-3">特级教师【张老师】</div>
                <span>数学高中必修3</span>
                <span>（随机抽样(一)）</span>
                <span>￥10</span>
                <span class="c-4">10人已学习</span>
            </div>
        </li>
        <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
            <div class="c-1">
                <div class="c-2">高一</div>
                <div class="c-3">特级教师【张老师】</div>
                <span>数学高中必修3</span>
                <span>（随机抽样(一)）</span>
                <span>￥10</span>
                <span class="c-4">10人已学习</span>
            </div>
        </li>
        <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
            <div class="c-1">
                <div class="c-2">高一</div>
                <div class="c-3">特级教师【张老师】</div>
                <span>数学高中必修3</span>
                <span>（随机抽样(一)）</span>
                <span>￥10</span>
                <span class="c-4">10人已学习</span>
            </div>
        </li>
    </ul>
    <div class="mxzx" ><a href='#' class="a-href" >名校在线</a></div>
    <ul class="mxzx-p"><!--将图片内容用h5及css画出来-->
        <li><a href="<?php echo U('Subpage/school');?>"><img src='/weixin/Public/Weixin/images/mingx.png'></a></li>
        <li><a href="<?php echo U('Subpage/school');?>"><img src='/weixin/Public/Weixin/images/mingx.png'></a></li>
        <li><a href="<?php echo U('Subpage/school');?>"><img src='/weixin/Public/Weixin/images/mingx.png'></a></li>
    </ul>
    <div class="mstj"><a href='#' class='a-href'>名师推荐</a></div>
    <ul class="mstj-p"><!--将图片内容用h5及css画出来-->
        <li>
            <div style="padding-bottom:3%">
                <a href="<?php echo U('Subpage/teacher');?>"><img src='/weixin/Public/Weixin/images/img_t01.png'></a>
            </div>
            <div class="de t-1">赫拉老师</div>
            <div class="de">教龄：7年</div>
            <div class="de c-0">数学/小学/初中</div>
        </li>
        <li>
            <div style="padding-bottom:3%">
                <a href="<?php echo U('Subpage/teacher');?>"><img src='/weixin/Public/Weixin/images/img_t01.png'></a>
            </div>
            <div class="de t-1">赫拉老师</div>
            <div class="de">教龄：7年</div>
            <div class="de c-0">数学/小学/初中</div>
        </li>
        <li >
            <div style="padding-bottom:3%">
                <a href="<?php echo U('Subpage/teacher');?>"><img src='/weixin/Public/Weixin/images/img_t01.png'></a>
            </div>
            <div class="de t-1">赫拉老师</div>
            <div class="de">教龄：7年</div>
            <div class="de c-0">数学/小学/初中</div>
        </li>
        <li >
            <div style="padding-bottom:3%">
                <a href="<?php echo U('Subpage/teacher');?>"><img src='/weixin/Public/Weixin/images/img_t01.png'></a>
            </div>
            <div class="de t-1">赫拉老师</div>
            <div class="de">教龄：7年</div>
            <div class="de c-0">数学/小学/初中</div>
        </li>
    </ul>
    <div class="zxhd"><a href='#' class='a-href'>最新活动</a></div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img style="width:100%;height: 10rem;" src="/weixin/Public/Weixin/images/ph_1.png"></div>
            <div class="swiper-slide"><img style="width:100%;height: 10rem;" src="/weixin/Public/Weixin/images/ph_1.png"></div>
            <div class="swiper-slide"><img style="width:100%;height: 10rem;" src="/weixin/Public/Weixin/images/ph_1.png"></div>
        </div>
    </div>
</div>
<!--content部分结束-->
<div class="bottom">
    <ul>
        <li><a class="a-1" href="<?php echo U('index/index');?>"><img src="/weixin/Public/Weixin/images/home.png"> 首页</a></li>
        <li><a href="<?php echo U('index/classify');?>"><img src="/weixin/Public/Weixin/images/cent_.png">分类</a></li>
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
    $(".rigth").click( function() {
        window.location.href="<?php echo U('Subpage/notice');?>";
    });
</script>
</html>