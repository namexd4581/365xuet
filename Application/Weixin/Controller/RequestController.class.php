<?php
namespace Weixin\Controller;
use Think\Controller;
use Think\Model;
class RequestController extends Controller {
    /*
    https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb2604be2fd82a0b4&redirect_uri=http://wx.365xuet.com/index.php/weixin/request/Wxpage&response_type=code&scope=snsapi_base&state=userlogin#wechat_redirect
    */
    private $appid="wxb2604be2fd82a0b4";
    private $appsecret="6179b6dc8f8745db1d9b32d1c8c4df79";
    public function Wxpage()
    {
        $code=$_GET["code"];
        $wx_pagename=$_GET["state"];

        $pagename=$wx_pagename;
        //获取用户基本信息 oauth2验证
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$this->appid."&secret=".$this->appsecret."&code=".$code."&grant_type=authorization_code";
        $retinfo=http_get($url);
        if($retinfo!=null&&$retinfo!="")
        {
            $rarray=json_decode($retinfo,true);
            $auth_access_token=$rarray["access_token"];
            $auth_expires_in=$rarray["expires_in"];
            $auth_refresh_token=$rarray["refresh_token"];
            $auth_openid=$rarray["openid"];
            $auth_scope=$rarray["scope"];
            //echo $auth_openid;
            //echo $auth_access_token;
            //$requrl="/H5/User/".$pagename."?appid=".$appid."&openid=".$auth_openid;
            //@header("Location:".$requrl);
//            $userbll=new UserModel();
//            $ret=$userbll->check_user_extand("weixin",$auth_openid);
//            if($ret===false)
//            {
//                //微信账号和系统未进行账号绑定录
//            }
//            else
//            {
//                $query=$userbll->get_user_info($ret);
//                session("userid",$query[0]["user_id"]);
//                session("loginid",$query[0]["login_id"]);
//                session("username",$query[0]["user_name"]);
//                session("mobile",$query[0]["mobile"]);
//                session("account",$query[0]["account"]);
//                session("sex",$query[0]["sex"]);
//                session("buildingcode",$query[0]["building_code"]);
//            }
//            session("wxopenid",$auth_openid);
//            if($pagename=="share") {
//                @header("Location:/H5/User/share");
//            }
//            else {
//                @header("Location:/H5");
//            }
            @header("Location:/index.php/weixin/index");

        }
        else
        {
            @header("Location:/index.php/weixin/index");
        }
    }
}
?>