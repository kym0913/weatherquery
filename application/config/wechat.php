<?php
$config['wechat'] = array(
  'token'=>'weixin', //填写你设定的key
  'appid'=>'wx7cf2f38dcfb28d91', //填写高级调用功能的app id
  'appsecret'=>'3b67147276b813bf88a711e00fc17a57 ', //

  'partnerid'=>'', //财付通商户身份标识
  'partnerkey'=>'', //财付通商户权限密钥Key
  'paysignkey'=>'', //商户签名密钥Key
  'debug'=>true
);

$config['wechat_menu'] = array(
 "button"=>array(
     array(
      "name"=>"产品",
      "sub_button"=>
        array(
          array(
            "type"=>"view",
            "name"=>"怡雅游戏",
            "url"=>"http://9yin.woniu.com/main.html"
                ),
          array(
            "type"=>"view",
            "name"=>"九阴商城",
            "url"=>"http://mall.snail.com/shop/9yin"
                )
              )
          ),
          array(
           "name"=>"品牌",
           "sub_button"=>
             array(
               array(
                 "type"=>"view",
                 "name"=>"企业官网",
                 "url"=>"http://www.bestyzky.com/yeeya/"
                     ),
               array(
                 "type"=>"view",
                 "name"=>"关于我们",
                 "url"=>"http://www.bestyzky.com/yeeya/about-us.html"
                     )
                   )
               ),


           array(
            "name"=>"生活服务",
            "sub_button"=>
              array(
                array(
                  "type"=>"click",
                  "name"=>"实时天气查询",
                  "key"=>"searchweather"
                      ),
                array(
                  "type"=>"click",
                  "name"=>"未开放",
                  "key"=>"notopen"
                      )
                    )
                ),

  )
);
//上传图文消息，自行修改；

$config['articles'] = array(
  "articles"=>array(
      "title"=>"明天也由于",
     "thumb_media_id"=> "_XpB5wxUcy-0x8o1XWYCsownPznAItMypOGIH4Br3y4JndAAoQXQ-_tPh2QVgiTG",
     "author"=>"阿杜",
     "digest"=>"你特码在逗我吗",
     "show_cover_pic"=>'1',
     "content"=>'<p>近日,赵雅芝到敬老院慰问照片被曝出.</p>
     <p>网友表示感叹，同样都是60多岁的老人，如果你不努力，老了之后就会像两代人，
     这简直是老人慰问老人嘛。事实上，赵雅芝看望的老人看上去远大于60岁。</p>
     <img src="http://mmbiz.qpic.cn/mmbiz/vveSJA7L34fWrnMpYNWFMF5WEEkeGGjKVpIjibFYvgqecaeBLmPcbABUwBbWDvFVx7275wIrJDcYSPybQld9G4w/0"  alt="上海鲜花港 - 郁金香" />',
     "content_source_url"=>'www.baidu.com',
   )
  );































?>
