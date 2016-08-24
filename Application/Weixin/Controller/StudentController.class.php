<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/11
 * Time: 14:53
 */

namespace Weixin\Controller;
use Think\Controller;
use Think\Model;

class StudentController extends Controller
{
    public function index(){
        $this->display();
    }
    public function mylesson(){
        $this->display();
    }
    public function jiafang(){
        $this->display();
    }
    public function studentlessons(){
        $this->display();
    }
    public function evaluate(){
        $this->display();
    }
    public function editevaluate(){
        $this->display();
    }
    public function money(){
        $this->display();
    }
    public function chongzhijilu(){
        $this->display();

    }
    public function tixian(){
        $this->display();
    }
    public function order(){
        $this->display();
    }
    public function personalset(){
        $form=M('class_teacher_users');
        $userid['id']=session("userid");
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $data['user_realname']=I('post.user_realname');
            $data['user_nicename']=I('post.user_nicename');
            $data['age']=I('post.age');
            $data['sex']=I('post.sex');
            $data['areacode']=I('post.areacode');
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array(
                'jpg',
                'png',
                'gif',
                'jpeg'
            );
            $upload->autoSub = true;
            $upload->subName = 'avatar';
            $upload->rootPath = './Upload/';
            $upload->savePath = '';
            $info = $upload->upload();
            if ($info){
                $data['avatar']= $info['image']['savename'];
            }
            $result=$form->where($userid)->save($data);
            if ($result){
                $this->show("<script>alert('保存成功');window.history.go(-1);</script>");
            }else{
                $this->show("<script>alert('保存失败');window.history.go(-1);</script>");
            }
        }else{
            $info=$form->where($userid)->select();
            $data['user_realname']=$info[0]['user_realname'];
            $data['user_nicename']=$info[0]['user_nicename'];
            $data['sex']=$info[0]['sex'];
            $data['teacher_summary']=$info[0]['teacher_summary'];
            $data['areacode']=$info[0]['areacode'];
            $data['avatar']= $info[0]['avatar'];
            $this->assign('data',$data);
            $this->display();
        }
    }
    public function setting(){
        $this->display();
    }
}