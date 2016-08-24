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
<div style="background: #ffffff">
    <div id="content_div">
        <div class="header"  style="z-index: 100;position: fixed;">
            <div class="left_t">
                <a href="<?php echo U('index');?>" class="header_back"></a>
            </div>
            <div class="middle_t site_20">个人设置</div>
            <div class="right_t">
                <button style="background: #66cc99;border:0px " id="sv" name="sv" onclick="javascript:;">完成</button>
            </div>
        </div>
    </div>
    <form id="personalinfo" name="personalinfo" enctype="multipart/form-data" action="<?php echo U('personalset');?>" method="post">
    <div style="margin-top: 0px;font-size: 15px; text-align: left; padding-top: 55px;" class="weui_cells weui_cells_form">
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">姓名</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" placeholder="请输入真实姓名" type="text" name="user_realname" value="<?php echo ($data['user_realname']); ?>">
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">个性标签</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" placeholder="请输入个人标签" type="text" name="label" value="<?php echo ($data['label']); ?>">
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">简介</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" placeholder="一句话简介" type="text" name="description" value="<?php echo ($data['description']); ?>">
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">教龄</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" placeholder="请输入教龄" type="text" name="age" value="<?php echo ($data['age']); ?>">
            </div>
        </div>
        <div style="padding-left: 15px;" class="weui_cell weui_cell_select">
            <div class="weui_cell_hd ">
                <label class="weui_label">性别</label></div>
            <select class="weui_select" name="sex" >
                <option value="0" selected="selected">请选择</option>
                <option value="1">男</option>
                <option value="2">女</option>
            </select>
        </div>
        <div style="" class="weui_cell">
            <div class="weui_cell_hd"><label  class="weui_label">地区</label></div>
            <div class="weui_cell_bd weui_cell_primary" >
                <input readonly="" class="weui_input" name="areacode" id="option" value="<?php echo ($data['areacode']); ?>" type="text">
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <div class="weui_uploader">
                    <div class="weui_uploader_hd weui_cell">
                        <div class="weui_cell_bd weui_cell_primary">头像上传</div>
                    </div>
                    <div class="weui_uploader_bd">
                        <ul class="weui_uploader_files">
                            <li class="weui_uploader_file" style="height: 75px;margin-top:10px;background-image:url(http://shp.qpic.cn/weixinsrc_pic/pScBR7sbqjOBJomcuvVJ6iacVrbMJaoJZkFUIq4nzQZUIqzTKziam7ibg/)"></li>
                        </ul>
                        <div class="weui_uploader_input_wrp">
                            <input class="weui_uploader_input" type="file" accept="image/*" multiple="" name="avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd" style="width: 30%;"><span class="weui_label">内容介绍</span></div>
            <div class="weui_cell_bd weui_cell_primary" style="width: 70%">
                <textarea class="form-control" rows="3" style="border: 0px" name="teacher_summary"></textarea>
            </div>
        </div>
        </div>
        </form>
        <br>
    </div>
<script src="/weixin/Public/Weui/js/jquery.min..js"></script>
<script src="/weixin/Public/Weui/js/jquery-weui.js"></script>
<script src="/weixin/Public/Weui/js/city-picker.js"></script>
<script>
    $("#option").cityPicker({
        title: "选择地区"
    });

    $("#sv").click(function () {
        $("#personalinfo").submit();
    });

</script>
</body>


</html>