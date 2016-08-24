<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/16
 * Time: 11:16
 */

namespace Weixin\Controller;

use Think\Controller;
use Think\Model;

class PublicController extends Controller
{
    public function login()
    {
        if (isset($_SESSION["user_type"])){
            if ($_SESSION["user_type"]==1){
                $this->redirect("Student/index");
            }else if ($_SESSION["user_type"]==2){
                $this->redirect("Teacher/index");
            }
        }
        if (isset($_POST["t_mobile"])) {
            $mobile = I("post.t_mobile");
            $passwd = I("post.t_password");
            $chk_isremember = I("post.chk_isremember");
            $identify = I('post.identify');
            if (!checkMobile($mobile)) {
                echo "<script>alert('请输入正确的手机号码');window.history.go(-1);</script>";
                exit;
            } else if ($passwd == "") {
                echo "<script>alert('请输入密码');window.history.go(-1);</script>";
                exit;
            }
            $spasswd = "###" . md5(md5("UewBc27f4YZvbr0e6p" . $passwd));
            $model = new Model();
            if ($identify=="student") {
                $sql = "select * from 360class.class_student_users where mobile=ENCODE('$mobile','1!q2@w') and user_pass='$spasswd'";
                $query = $model->query($sql);
                if ($query != null && count($query) == 1) {
                    $nickname = $query[0]["user_nicename"];
                    session("user_type",$query[0]["user_type"]);
                    session("nickname", $nickname);
                    session("userid", $query[0]["id"]);
                    if (isset($_POST["chk_isremember"])) {
                        setcookie("loginid", $mobile, time() + 864000);//set 10d
                        setcookie("password", $passwd, time() + 864000);
                        setcookie("isremember", "1", time() + 864000);
                        $this->redirect('Student/index');
                    } else {
                        setcookie("loginid", "", time() - 3600);//clean
                        setcookie("password", "", time() - 3600);
                        setcookie("isremember", "", time() - 3600);
                        $this->redirect('Student/index');
                    }
                } else {
                    echo "<script>alert('手机号码或密码错误！');window.history.go(-1);</script>";
                    exit;
                }
            } elseif ($identify=="teacher") {
                $sql = "select * from 360class.class_teacher_users where mobile=ENCODE('$mobile','1!q2@w') and user_pass='$spasswd'";
                $query = $model->query($sql);
                if ($query != null && count($query) == 1) {
                    $nickname = $query[0]["user_nicename"];
                    session("user_type",$query[0]["user_type"]);
                    session("nickname", $nickname);
                    session("userid", $query[0]["id"]);
                    if (isset($_POST["chk_isremember"])) {
                        setcookie("loginid", $mobile, time() + 864000);//set 10d
                        setcookie("password", $passwd, time() + 864000);
                        setcookie("isremember", "1", time() + 864000);
                        $this->redirect('Teacher/index');
                    } else {
                        setcookie("loginid", "", time() - 3600);//clean
                        setcookie("password", "", time() - 3600);
                        setcookie("isremember", "", time() - 3600);
                        $this->redirect('Teacher/index');
                    }
                } else {
                    echo "<script>alert('手机号码或密码错误！');window.history.go(-1);</script>";
                    exit;
                }
            }else{
                echo "<script>alert('请选择身份');window.history.go(-1);</script>";
                exit;
            }
        }
        $this->display();
    }
    public function logout(){
       session_destroy();
        $this->redirect("Public/login");
    }
}