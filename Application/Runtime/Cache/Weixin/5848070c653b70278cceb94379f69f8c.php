<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    
    <title>365学堂</title>
</head>
<body style="background:#ececec">
<style>
    /*.na_1{*/
    /*display: block;*/
    /*background-color: #f3f3f3;*/
    /*text-align: start;*/
    /*padding: 2% 5%;*/
    /*border-bottom: #dedede 1px solid;*/
    /*}*/
    .na_0{
        background-color: #FFFFFF;
        padding-bottom: 100px;
    }
    .na_0 ul{
        padding-top: 4%;
        margin-right: 1em;
    }
    .na_0 ul li{
        /*text-indent: 1em;*/

        text-align: start;
        line-height: 1.5em;
    }
    .text1{font-size: 1.5em !important;}
    .a-1{color:#FF1515!important;}
    .top1{
        bottom: 5em;
        position: fixed;
        right: 3em;
        width: 1em;
    }
    .top1 ul{
        padding: 0px;
        display: table;
    }
    .top1 ul li{
        float: left;
        margin: 0.5em;
        position: relative;
        border-radius: 1em;
        border: #FF1515 1px solid;
        padding: 1em 0.5em;
        background-color: #fff;
    }
</style>
<div class="header">
    <div class="left_t header_back" >
    </div>
    <div class="middle_t site_20">联系我们</div>
    <div class="right_t">
        <span class="glyphicon glyphicon-earphone text1"></span>
    </div>
</div>
<!--content部分-->
<div class="na_0">
    <div class="list-group">
        <h4 class="list-group-item">
            消费者保障
        </h4>
        <ul class="list-group">
            <li class="list-group-item">
                保障范围
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
            <li class="list-group-item">
                服务中心
                <img  src="/weixin/Public/Weixin/images/backh.png">
            </li>
            <li class="list-group-item">
                消费警示
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
            <li class="list-group-item">
                交易安全
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
        </ul>
        <h4 class="list-group-item">
            新手上路
        </h4>
        <ul class="list-group">
            <li class="list-group-item">
                特色服务
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
            <li class="list-group-item">
                新手专区
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
            <li class="list-group-item">
                平台流程
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
            <li class="list-group-item">
                老师入驻
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
        </ul>
        <h4 class="list-group-item">
            付款方式
        </h4>
        <ul class="list-group">
            <li class="list-group-item">
                退货退款流程
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
            <li class="list-group-item">
                支付宝付款
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
        </ul>
        <h4 class="list-group-item">
            帮助中心
        </h4>
        <ul class="list-group">
            <li class="list-group-item">
                老师如何使用
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
            <li class="list-group-item">
                学生如何使用
                <img src="/weixin/Public/Weixin/images/backh.png">
            </li>
        </ul>
    </div>
</div>
<div class="top1">
    <ul>
        <li>合作加盟</li>
        <li>智能客服</li>

    </ul>
</div>
<!--content部分结束-->
<div class="bottom">
    <ul>
        <li><a href="<?php echo U('index/index');?>"><img src="/weixin/Public/Weixin/images/home.png"> 首页</a></li>
        <li><a href="<?php echo U('index/classify');?>"><img src="/weixin/Public/Weixin/images/cent_.png">分类</a></li>
        <li><a class="a-1" href="<?php echo U('index/about');?>"><img src="/weixin/Public/Weixin/images/contment.png">联系我们</a></li>
        <li><a href="<?php echo U('index/person');?>"><img src="/weixin/Public/Weixin/images/1015.png">个人中心</a></li>
    </ul>
</div>

<!--content end-->
</body>
<script>
    $(".left_t").click( function() {
        window.history.back();
    });
    $(".list-group-item").click(function () {
        window.location.href="<?php echo U('Subpage/artical');?>";
    })

</script>
</html>