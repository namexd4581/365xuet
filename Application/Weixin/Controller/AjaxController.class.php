<?php
namespace Weixin\Controller;
use Think\Controller;
use Think\Model;

class AjaxController extends Controller {
    /*对ajax 返回的封装*/
    public function ajax_json_resp($code,$msg,$obj){
        $this->ajaxReturn(json_resp($code,$msg,$obj));
    }
    public function ajax_json_resp_succ($msg){
        $this->ajaxReturn(json_resp_succ($msg));
    }
    public function ajax_json_resp_erro($msg){
        $this->ajaxReturn(json_resp_erro($msg));
    }
    public function ajax_json_resp_erro_params(){
        $this->ajaxReturn(json_resp_erro_params());
    }
    public function ajax_json_resp_error_nologin(){
        $this->ajaxReturn(json_resp_error_nologin());
    }
    public function ajax_json_resp_obj($msg,$obj)
    {
        $this->ajaxReturn(json_resp_obj($msg,$obj));
    }
    /*结束*/

    public function getVideoMenuList()
    {
        $pid=I("get.pid");
        if($pid=="")
            $pid=0;
        $model=new Model();
        $sql="select id,pid,name,level from lesson_write.class_syllabus where is_del=0 and pid=".$pid;
        $list=$model->query($sql);
        $this->ajax_json_resp_obj("ok",$list);
    }
}
?>

