<?php
namespace Weixin\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    /**
     * 初始化时候默认执行函数
     */
    public function _initialize(){
    }
    public function createno()
    {

        echo "ok";
    }
    public function index()
    {
        $this->display();
    }

    public function zhibo()
    {
        if(session("userid")==null||session("userid")=="")
        {
            @header("Public/login.html");
        }
        $userid=session("userid");
        $model=new Model();
        $sql="select b.* from lesson_write.class_order a,lesson_write.class_live b where a.status in(0,1) and a.class_id=b.id and a.user_id='$userid' order by create_time desc";
        $list=$model->query($sql);
        foreach($list as $k=>$v)
        {
            $starttime=$v["class_start_time"];
            $classtime=$v["class_time"];
            $endtime=date('Y-m-d H:i',strtotime('+'.$classtime.' minute',strtotime($starttime)));//日期天数相加函数
            $st = strtotime($starttime);
            $et= strtotime($endtime);
            $now = strtotime(date('Y-m-d H:i'));
            if($st<$now&&$et>$now)
            {
                //正在直播
                $v["zbstate"]="start";
                $sub=ceil(($et-$now)/60);
                $v["zbsub"]=$sub;
            }
            else if($now>$et)
            {
                //直播结束
                $v["zbstate"]="end";
                $v["zbsub"]="";

            }
            else if($now<$st)
            {
                //未开始
                $v["zbstate"]="wait";
                $sub=ceil(($st-$now)/60/60);
                $v["zbsub"]=$this->time_tran($sub);
            }
            $list[$k]=$v;
        }
        $this->assign("list",$list);
        $this->display();
    }
    function time_tran($dur) {
        if ($dur < 60) {
            return $dur . '秒';
        } else {
            if ($dur < 3600) {
                return floor($dur / 60) . '分钟';
            } else {
                if ($dur < 86400) {
                    return floor($dur / 3600) . '小时';
                } else {
                    if ($dur < 259200) {//3天内
                        return floor($dur / 86400) . '天';
                    } else {
                        //return $the_time;
                        if($dur<2592000) //30天内
                        {
                            return floor($dur / 86400) . '天';
                        }
                        else
                        {
                            return floor($dur / 2592000) . '月';
                        }
                    }
                }
            }
        }
    }
    public function golive()
    {
        $id=I("get.classid");
        if(session("userid")==null||session("userid")=="")
        {
            @header("Public/login.html");
        }
        $userid=session("userid");
        $model=new Model();
        $sql="select * from lesson_write.class_order a,lesson_write.class_live b where a.status in(0,1) and a.class_id=b.id and a.user_id='$userid'  and a.class_id='$id' order by create_time desc";
        $list=$model->query($sql);
        if($list!=null&&count($list)>0)
        {
            //取课件信息
            $sdk_id=$list[0]["SDKID"];
            $url="http://360xiet.gensee.com/integration/site/training/room/info";
            $_data['loginName']='admin@360xiet.com';
            $_data['password']='360xiet';
            $_data['roomId']=$sdk_id;
            $ret=$this->http_post2($url,$_data);
            $retArray=json_decode($ret,true);
            if($retArray["code"]=="0")
            {
                $studentJoinUrl=$retArray['studentJoinUrl'];
                $studentToken=$retArray['studentToken'];
                $nickname=session("nickname");
                $uid=session('userid')+1000000000;
                $url=$studentJoinUrl."?nickname=".$nickname."&token=".$studentToken."&uid=".$uid;
                @header("Location:".$url);

            }
            else
            {
                echo "课程已经结束";
            }
        }
        else
        {
            echo "NO";
            //@header("Location:login.html");
        }
    }
    public function goplayback()
    {
        $id=I("get.classid");
        if(session("userid")==null||session("userid")=="")
        {
            @header("Public/login.html");
        }
        $userid=session("userid");
        $model=new Model();
        $sql="select * from lesson_write.class_order a,lesson_write.class_live b where a.status in(0,1) and a.class_id=b.id and a.user_id='$userid'  and a.class_id='$id' order by create_time desc";
        $list=$model->query($sql);
        if($list!=null&&count($list)>0)
        {
            //取课件信息
            $sdk_id=$list[0]["SDKID"];
            $url="http://360xiet.gensee.com/integration/site/training/courseware/syn";
            $_data['loginName']='admin@360xiet.com';
            $_data['password']='360xiet';
            $_data['roomId']=$sdk_id;
            $ret=$this->http_post2($url,$_data);
            $retArray=json_decode($ret,true);
            $url=$retArray['coursewares'][0]['url'];
            $token=$retArray['coursewares'][0]['token'];
            $nickname=session("nickname");
            $url=$url."?nickname=".$nickname."&token=".$token;
            @header("Location:".$url);
        }
        else
        {
            @header("Public/login.html");
        }

    }
    public function spzy()
    {
        if(session("userid")==null||session("userid")=="")
        {
            @header("Public/login.html");
        }
        $cid=I("get.cid");
        $userid=session("userid");
        $model=new Model();
        $tjstr="";
        if($cid!="")
            $tjstr=" where c_id='".$cid."'";
        $sql="select * from lesson_write.class_video ".$tjstr."  order by count desc limit 50";
        $list=$model->query($sql);
        $this->assign("list",$list);
        $this->display();
    }
    function object_array($array){

        return is_array($array) ? array_map('object_array', $array) : (is_object($array) ? (array)$array : $array);
    }
    function http_post2($url, $post_array = array(), $ctime = 3, $timeout = 4)
    {
        if (!is_array($post_array))
            return FALSE;

        $post_data = '';
        foreach ($post_array as $key => $var)
        {
            $post_data .= $key . '=' . urlencode($var) . '&';
        }
        $post_data = substr($post_data, 0, -1);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $ctime);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}
?>