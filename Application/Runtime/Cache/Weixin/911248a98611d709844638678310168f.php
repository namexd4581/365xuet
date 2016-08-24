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
<!--<body style="background:#ececec">-->
<body style="background:#fff">
<div id="content_div">
<div class="header">
    <div class="left_t">
        <a href="index.html" class="header_back"></a>
    </div>
    <div class="middle_t site_20">视频资源</div>
    <div class="right_t">
        <span class="right">
            <a href="javascript:popshow();">分类</a>
        </span>
    </div>
</div>
<div class="ma_top">
    <div class="jiaoshi">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["video_url"]); ?>" style="height: 230px;margin-bottom: 15px">
                <img src="http://www.365xuet.com/data/video/img/<?php echo ($vo["img_url"]); ?>">
                <div class="title" style="height: 60px;border-bottom-width: 0px;"><span><?php echo ($vo["title"]); ?></span></div>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
</div>
<style>
    .popmenu{width:100%;height: 100%;margin: 0px auto;padding:0px;height: 800px;}
    .popmenu .m1{
        width: 40%;
        float:left;
        height: 100%;
        background:#ececec;
    }
    .popmenu .m1 ul{list-style: none;margin:0px;padding:0px;}
    .popmenu .m1 ul li{padding: 5% 0;border-bottom: 1px solid #ccc;height: 40px;line-height: 40px;}
    .popmenu .m1 ul .select{background: #fff;border-right-width: 0px;}
    .m3{background-color: #fff}
    .popmenu .m2{
        width: 70%;
        float: left;
        height: 100%;
    }
    .popmenu .select{
        background: #fff;
    }
    .popmenu .m2 ul{list-style: none;margin:0px;padding:0px;padding-top: 5%;}
    /*.popmenu .m2 ul li{height: 40px;line-height: 40px;}*/
    .willing-p{display: table;width:100%;padding:0;;margin: 2px;background-color: #FFFFFF}
    .willing-p li{float: left; width: 48%;border: #dedede 1px solid;margin: 1%;float: left;}
    .willing-p img{width: 100%;height: 8.4em;padding:3%;padding-bottom: 0;}
    .c-1{text-align: start;padding-left: 3%;font-size: 0.8em;padding-bottom: 3%;}
    .c-1 span{padding: 2% 0; display: -webkit-inline-box;}
    .c-1 span:first-child{background-color: orange}
    .c-2{ float: right;padding-right: 5% !important;font-size: 1.2em;}
    .c-3{margin-top: 15%}
</style>
<div id="pop_div" class="popmenu" style="display: none">
    <div class="m1">
        <ul id="m1-ul">
            <li id="first" class="js-b m3 c-3">全部</li>
            <li class="js-b">小学</li>
            <li class="js-b">初/高中</li>
            <li class="js-b">家庭教育</li>
            <li class="js-b">综合技能</li>
            <li class="js-b">特色主题</li>
        </ul>
    </div>
    <div class="m2 select">
        <ul id="m2-ul" class="willing-p">
            <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
                <div class="c-1">
                    <span>高一</span>
                    <span class="c-2">语文</span>
                </div>
            </li>
            <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
                <div class="c-1">
                    <span>高一</span>
                    <span class="c-2">数学</span>
                </div>
            </li>
            <li><a href="<?php echo U('Subpage/course');?>"><img src='/weixin/Public/Weixin/images/kc.png'></a>
                <div class="c-1">
                    <span>高一</span>
                    <span class="c-2">物理</span>
                </div>
            </li>



        </ul>
    </div>
</div>
</body>
</html>
<script>
    $(function(){
        getlist("m1-ul","0");
        $("#m1-ul").append('<li value="" level="0"><a href="?cid=">关闭</a></li>');
    });
function getlist(_panel,_pid) {
    $.ajax({
        type: 'get', cache: false, async: false,
        url: '/index.php/ajax/getVideoMenuList',
        data: {pid:_pid},
        success: function (data) {
            if (data.code == "0") {
                $("#"+_panel+" li").remove();
                $.each(data.obj, function (index, item) {
                    if(item.level=="0")
                        html = '<li value="' + item.id + '" level="'+item.level+'">' + item.name + '</li>';
                    else
                        html = '<li value="' + item.id + '" level="'+item.level+'"><a href="?cid='+item.id+'">' + item.name + '</a></li>';
                    $("#"+_panel).append(html);
                });
                if(_pid=="0")
                {
                    //$("#m1-ul").append('<li value="" level="0"><a href="?cid=">关闭</a></li>');
                    //return;
                }
                $("#"+_panel+" li").click(function () {
                    $(this).parent().find("li").removeClass("select");
                    $(this).addClass("select");
                    _value=$(this).attr("value");
                    _level=$(this).attr("level");
                    if(_level==0) {
                        getlist("m2-ul", _value);
                    }
                });
            }
        },
        error: function () {
            msgAlert("发生系统错误,请与管理员联系！");
        }
    });
}
    $(".left_t").click( function() {
        window.history.back();
    });



    var str = $("#first");
    $(".js-b").click(function(){
        str.removeClass("m3");
        str = $(this);
        $(this).addClass("m3");
    });
    function popshow()
    {
        $("#content_div").hide();
        $("#pop_div").show();
    }
</script>