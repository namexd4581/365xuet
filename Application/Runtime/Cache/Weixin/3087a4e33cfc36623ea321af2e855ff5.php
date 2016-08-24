<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>365学堂</title>
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

</head>
<!--<body style="background:#ececec">-->
<body style="background:#fff">
<div id="content_div">
    <div class="header">
        <div class="left_t">
            <a href="index.html" class="header_back"></a>
        </div>
        <div class="middle_t site_20">我的直播课</div>
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
    .popmenu .m1 ul li{border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;height: 40px;line-height: 40px;}
    .popmenu .m1 ul .select{background: #fff;border-right-width: 0px;}

    .popmenu .m2{
        width: 60%;
        float: left;
        height: 100%;
    }
    .popmenu .select{
        background: #fff;
    }
    .popmenu .m2 ul{list-style: none;margin:0px;padding:0px;}
    .popmenu .m2 ul li{height: 40px;line-height: 40px;}
</style>
<div id="pop_div" class="popmenu" style="display: none">
    <div class="m1">
        <ul id="m1-ul">
            <li value="">全部</li>
        </ul>
    </div>
    <div class="m2 select">
        <ul id="m2-ul">
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
    function popshow()
    {
        $("#content_div").hide();
        $("#pop_div").show();
    }
</script>