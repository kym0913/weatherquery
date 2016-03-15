<?php
include APPPATH.'libraries/wechatex.php';
class MyWechat extends WechatEx {
  private $_ci;
  function __construct($options){
    parent::__construct($options);
    if (function_exists("get_instance") && defined("APPPATH")){
      $this->_ci =& get_instance();
      //$this->_ci->load->model('product_model', 'product');
      //$this->_ci->load->model('post_model', 'post');
                                                              }
                                 }
 protected function onSubscribe()
{
   $this->text('Hi,你终于来了~[Heart]感谢你关注怡雅，我们将为你带来怡雅最新的实时动态，行业前沿的热点剖析，努力为你创造全新的阅读平台，欢迎你与我们交流互动！')->reply();
}
 protected function onUnsubscribe()
{
   $this->text('悄悄地我走了，正如我悄悄地来。')->reply();
}




 protected function onText($textcontent){
   $str = mb_substr($textcontent,-2,2,"UTF-8");
   $str_key=mb_substr($textcontent,0,-2,"UTF-8");
   if($str == "天气"){
     $getreturn=$this->getweather($str_key);

     $getweathercity=$getreturn['result']['data']['realtime']['city_name'];
     $getweatherchuouptime=$getreturn['result']['data']['realtime']['dataUptime'];

     $getweatherinfo=$getreturn['result']['data']['realtime']['weather']['info'];
     $gettemperatureday=$getreturn['result']['data']['weather'][0]['info']['day']['2'];
     $gettemperaturenight=$getreturn['result']['data']['weather'][0]['info']['night']['2'];
     $getwinddir=$getreturn['result']['data']['weather'][0]['info']['day']['3'];
     $getwindpowlev=$getreturn['result']['data']['weather'][0]['info']['day']['4'];

     $getweatherkindlytipstatus=$getreturn['result']['data']['life']['info']['chuanyi'][0];
     $getweatherkindlytipmore=$getreturn['result']['data']['life']['info']['chuanyi'][1];

     $getweatheruptime=date("Y-m-d H", $getweatherchuouptime);


     $tom_weainfo=$getreturn['result']['data']['weather'][1]['info']['day']['1'];
     $tom_gettemperatureday=$getreturn['result']['data']['weather'][1]['info']['day']['2'];
     $tom_gettemperaturenight=$getreturn['result']['data']['weather'][1]['info']['night']['2'];
     $tom_getwinddir=$getreturn['result']['data']['weather'][1]['info']['day']['3'];
     $tome_getwindpowlev=$getreturn['result']['data']['weather'][1]['info']['day']['4'];

     $at_weainfo=$getreturn['result']['data']['weather'][2]['info']['day']['1'];
     $at_gettemperatureday=$getreturn['result']['data']['weather'][2]['info']['day']['2'];
     $at_gettemperaturenight=$getreturn['result']['data']['weather'][2]['info']['night']['2'];
     $at_getwinddir=$getreturn['result']['data']['weather'][2]['info']['day']['3'];
     $at_getwindpowlev=$getreturn['result']['data']['weather'][2]['info']['day']['4'];







     if(!empty($getreturn['result']))
     {
       $wearesult="【".$getweathercity."天气预报】\n".$getweatheruptime."时发布"
       ."\n\n实时天气\n".$getweatherinfo." ".$gettemperatureday.wechat::DEGREENS_CELSIUS." ~ ".$gettemperaturenight.wechat::DEGREENS_CELSIUS." ".$getwinddir
       ." ".$getwindpowlev
       ."\n\n温馨提示："."天气".$getweatherkindlytipstatus."\n".$getweatherkindlytipmore
       ."\n\n明天："
       ."\n".$tom_weainfo." ".$tom_gettemperatureday.wechat::DEGREENS_CELSIUS." ~ ".$tom_gettemperaturenight.wechat::DEGREENS_CELSIUS." ".$tom_getwinddir
       ." ".$tome_getwindpowlev
       ."\n\n后天："
       ."\n".$at_weainfo." ".$at_gettemperatureday.wechat::DEGREENS_CELSIUS." ~ ".$at_gettemperatureday.wechat::DEGREENS_CELSIUS." ".$at_getwinddir
       ." ".$at_getwindpowlev;
     }else
     {
       $wearesult=wechat::WEATHERTIP;
     }


   }else{
     $wearesult="您的消息我们将会留心，查询天气格式（城市+天气），例如：上海天气";
   }
   $this->text($wearesult)->reply();
 }
 protected function onImage(){
   $this->text("this's an image")->reply();
 }
 protected function onLocation()
{
   $info = $this->getRevGeo();
   $this->text("收到了位置消息：({$info['x']},{$info['y']})")->reply();
}
 protected function onLink()
{
   $info = $this->getRevLink();
   $url = $info['url'];
   $this->text("收到链接消息：({$info['url']},{$info['title']},{$info['description']})")->reply();
}
 protected function onVoice()
{
   $info = $this->getRevVoice();
   $this->text("收到链接消息：({$info['mediaid']},{$info['format']})")->reply();
}
protected function onUnknown()
{
  $this->text('收到未知消息')->reply();
}
//下面是cache的保存，微信服务器获取token次数有限


//真实微信号里只要有的事件，具体逻辑就可以写到这里。
}





?>
