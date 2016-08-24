<?php
function json_resp($code,$msg,$obj){
	$data["code"]=$code;
	$data["msg"]=$msg;
	$data["obj"]=$obj;
	return $data;
}
function json_resp_succ($msg){
	$data["code"]="0";
	$data["msg"]=$msg;
	$data["obj"]="[]";
	return $data;
}
function json_resp_erro($msg){
	$data["code"]="-1";
	$data["msg"]=$msg;
	$data["obj"]="[]";
	return $data;
}
function json_resp_erro_params(){
	$data["code"]="-1";
	$data["msg"]="请求参数错误";
	$data["obj"]="[]";
	return $data;
}
/*错误反馈：您未登录或已超时,请重新登录后重试！*/
function json_resp_error_nologin(){
	$data["code"]="1000";
	$data["msg"]="您未登录或已超时,请重新登录后重试！";
	$data["obj"]="[]";
	return $data;
}
function json_resp_obj($msg,$obj)
{
	$data["code"]="0";
	$data["msg"]=$msg;
	$data["obj"]=$obj;
	return $data;
}

/**
 * @param $length 产生的随机数长度
 * @return string 随机数
 */
function randomkeys($length)
{
    $pattern='123567890';
    $key='';
    for($i=0;$i<$length;$i++)
    {
        $key .= $pattern{mt_rand(0,8)};    //生成php随机数
    }
    return $key;
}
/*生成ID*/
function createid()
{
    usleep(10);
    $s=microtime();
    $s1=str_replace("0.","",$s);
    $left=substr($s1,0,6);
    $right=substr($s1,9,10);
    return $right.$left.mt_rand(10,99);
}
/*生成orderID*/
function createorderid($first)
{
    usleep(10);
    $s=microtime();
    $s1=str_replace("0.","",$s);
    $left=substr($s1,0,6);
    $right=substr($s1,9,10);
    return $first.$right.$left.mt_rand(10,99);
}
/*生成密码*/
function Spwd($pwd)
{
    //e10adc3949ba59abbe56e057f20f883e
    //49ba59af20f883
    //$md5pwd=md5($pwd);
    //$left=substr($md5pwd, 8,7);
    //$right=substr($md5pwd, 24,7);
    //return $left.$right;
	return(md5(md5($pwd))); //123456 14e1b600b1fd579f47433b88e8d85291

}
/*判断手机号码格式*/
function checkMobile($mobile)
{
    if(strlen($mobile)!=11)
    {
        return false;
    }
    $mob=substr($mobile,0,2);
    if($mob=="13"||$mob=="15"||$mob=="18"||$mob=="14"||$mob=="17")
    {
        return true;
    }
    else
    {
        return false;
    }
}
/*判读手机号码号段*/
function checkMobileHD($mobile)
{
    if(substr($mobile,0,1)=="0")
    {
        return 'xlt';
    }
    else
    {
        $mob=substr($mobile,0,3);
        if($mob=="134"||$mob=="135"||$mob=="136"||$mob=="137"
            ||$mob=="138"||$mob=="139"||$mob=="147"
            ||$mob=="150"||$mob=="151"||$mob=="152"
            ||$mob=="157"||$mob=="158"||$mob=="159"
            ||$mob=="182"||$mob=="183"||$mob=="184"||$mob=="187"||$mob=="188")
        {
            return 'yd';
        }
        else if($mob=="130"||$mob=="131"||$mob=="132"
            ||$mob=="145"||$mob=="155"||$mob=="156"||$mob=="185"||$mob=="186")
        {
            return 'lt';
        }
        else if($mob=="133"||$mob=="153"||$mob=="180"||$mob=="181"||$mob=="189")
        {
            return 'cdma';
        }
        else
        {
            $mob=substr($mobile,0,4);
            if($mob=="1709")
            {
                return 'yd';
            }
            else if($mob=="1705")
            {
                return 'lt';
            }
            else if($mob=="1700")
            {
                return 'cdma';
            }
            else
            {
                return 'other';
            }
        }
    }
}
/*当前时间加分钟*/
function addDateTimeMinute($val)
{
    $newtime=date('Y-m-d H:i:s',strtotime('+'.$val.' minute'));
    return $newtime;
}
/*当前日期加*/
function addDateDays($val)
{
    $newdate=date('Y-m-d',strtotime('+'.$val.' days'));
    return $newdate;
}
/**
 * 校验日期格式是否正确
 * 
 * @param string $date 日期
 * @param string $formats 需要检验的格式数组
 * @return boolean
 */
function checkDateIsValid($date, $formats = array("Y-m-d", "Y/m/d")) {
    $unixTime = strtotime($date);
    if (!$unixTime) { //strtotime转换不对，日期格式显然不对。
        return false;
    }
    //校验日期的有效性，只要满足其中一个格式就OK
    foreach ($formats as $format) {
        if (date($format, $unixTime) == $date) {
            return true;
        }
    }

    return false;
}
/*发送短信*/
function SendSMS($mobile,$message)
{
    /*
     * http://api.smsbao.com/sms?u=USERNAME&p=PASSWORD&m=PHONE&c=CONTENT
USERNAME：在本短信平台注册的用户名
PASSWORD：平台登录密码MD5后的值(32位，不区分大小写)
PHONE：目标手机号码，多个手机号码用半角逗号分割
CONTENT：发送内容，采用UTF-8 URL ENCODE
返回 '0' 视为发送成功，其他内容为错误提示内容
     * */
    if(checkMobile($mobile)==false)
        return false;
    if($message=="")
        return false;
    //$content = urlencode($message);
    //$content=iconv("UTF-8","GB2312//IGNORE",$message);
    $account=C("SMS_ACCOUNT");
    $password=C("SMS_PASSWORD");
    $password=md5($password);
    $message="【菜盘子】".$message;
    $content=urlencode($message);
    $url=C("SMS_SERVER")."?u=".$account."&p=".$password."&m=".$mobile."&c=".$content;
    $timeout = 10;
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, $url );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
    $file_contents = curl_exec ( $ch );
    curl_close ( $ch );
    return $file_contents;
}
/*发送请求:Get*/
function http_get($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($curl);
    if (curl_errno($curl))
    {
        return false;
    }
    curl_close($curl);
    return $data;
}
/*向微信服务器发送请求:Post*/
function http_post($url,$data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $info = curl_exec($ch);
    if (curl_errno($ch)) {
        return false;
    }
    curl_close($ch);
    return $info;
}
/*生成用户校验码*/
function CreateUserSign($userid)
{
    $userid="user".$userid."cpz2016";
    $sign=md5(md5($userid)); //123456 14e1b600b1fd579f47433b88e8d85291
    return substr($sign,5,10);
}

?>