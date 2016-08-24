<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>365学堂</title>
    <!DOCTYPE html>
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
</head>
<body style="background:#ececec">
<div class="header">
    <div class="left_t">
        <a href="index.html" class="header_back"></a>
    </div>
    <div class="middle_t site_20">我的直播</div>
    <div class="right_t">
        <span class="rigth"></span>
    </div>
</div>
<div class="ma_top">
    <div class="jiaoshi">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#" style="height: 230px;margin-bottom: 15px">
        <img src="http://www.360xuet.com<?php echo ($vo["class_pic"]); ?>">
        <div class="title" style="height: 60px;"><span><?php echo ($vo["class_name"]); ?></span></div>
        <?php if($vo["zbstate"] == 'start'): ?><div class="title1" style="width: 96%;background:#ff6600;border-color:#ff6600;color:#fff;" onclick="window.location.href='golive/classid/<?php echo ($vo["id"]); ?>';">正在直播</div>
            <?php elseif($vo["zbstate"] == 'end'): ?>
            <div class="title1" style="width: 96%;background:#ccc;border-color:#ccc;color:#666;" onclick="window.location.href='goplayback/classid/<?php echo ($vo["id"]); ?>';">已结束|观看回放
            </div>
            <?php elseif($vo["zbstate"] == 'wait'): ?>
            <div class="title1" style="width: 96%;" onclick="window.location.href='golive/classid/<?php echo ($vo["id"]); ?>';">离直播还有<?php echo ($vo["zbsub"]); ?></div><?php endif; ?>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
</body>
</html>
<script>
    $(".left_t").click( function() {
        window.history.back();
    });
</script>