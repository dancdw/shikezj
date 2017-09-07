<!DOCTYPE HTML>
<html>
<head>
    <!--{if $app.app_stitle}-->
    <title><!--{$app.app_stitle}--></title>
    <meta name="keywords" content="<!--{$app.app_seokey}-->" />
    <meta name="description" content="<!--{$app.app_seodesc}-->" />
    <!--{else}-->
    <title><!--{$setting.seo_title}--></title>
    <meta name="keywords" content="<!--{$setting.seo_keywords}-->" />
    <meta name="description" content="<!--{$setting.seo_description}-->" />
    <!--{/if}-->
    <!--{include file="inc_head.php"}-->
    <link rel="icon" href="<!--{$app.app_logo}-->">
    <link type="text/css" rel="stylesheet" href="<!--{$tpl_path}-->css/content1.css">
    <link type="text/css" rel="stylesheet" href="<!--{$tpl_path}-->css/jquery.fancybox.min.css">

    <script type="text/javascript" src="<!--{$tpl_path}-->js/jquery-1.7.2.min.js"></script>
    <script src="<!--{$tpl_path}-->js/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="<!--{$tpl_path}-->js/bscroll.min.js" type="text/javascript"></script>
    <script src="<!--{$tpl_path}-->js/qrcode.min.js" type="text/javascript"></script>
    <style type="text/css">
    body {
        margin: 0;
        background-color: #efefef;
        font-family: "冬青";
    }
    blockquote {
        border-left: 0px;
    }
    .appImg {
        height: 314px;
        margin: 10px;
        position: relative;
        overflow-x: scroll;
        overflow-x: hidden;
    }
    .appImg .img {
        position: absolute;
        left: 0;
        top: 4px;
        overflow: hidden;
        white-space: nowrap;
        height: 306px;
    }
    .appImg .img img {
        display: inline-block;
        height: 306px;
        margin-right: 7px;
    }
    .article-txt p {
        line-height: 26px;
        margin: 12px 10px 0px 10px;
        padding-bottom: 12px;
    }

    .down-btn { width: 95%; overflow: hidden; padding-top: 14px; margin: 0 auto; }
    .down-btn a { width: 100%; height: 46px; line-height: 46px; float: left; text-align: center; font-size: 15px; color: #fff; background: #0065eb; border-radius: 4px; }
    .down-btn a i.icon-xz, .download-btn a .icon-xz { width: 20px; height: 20px; position: relative; background-image: url(/images/icon-down.png); display: inline-block; background-size: 20px 20px; margin-right: 2px; top: 4px; }
    .down-btn a i.icon-activity { width: 20px; height: 20px; position: relative; background-image: url(/images/icon-activity.png); display: inline-block; background-size: 20px 20px; margin-right: 2px; top: 6px; }

    .footer_float { z-index: 9; position: fixed; bottom: 0; left: 0; width: 100%; height: 56px; background: rgba(0,0,0, .8); }
    .footer_float .a { box-sizing: border-box; position: absolute; z-index: 11; width: 100%; height: 56px; padding: 0 15px; display: table; text-align: center;}
    .footer_float .left { width: 48px; height: 48px; display:table-cell; vertical-align:middle; }
    .footer_float .left .img { width: 48px; height: 48px; }
    .footer_float .middle { display:table-cell; vertical-align:middle; padding-left: 10px; text-align: left; color: #fff; }
    .footer_float .middle .one { font-size: 16px; font-weight: bold;  margin:0;}
    .footer_float .middle .two { margin: 5px 0 0; font-size: 14px; color: #d3d3d3; }
    .footer_float .right {  display:table-cell; height: 56px; vertical-align:middle; width:80px;  }
    .footer_float .right .freedownload { display: block;  width:80px; height: 26px; line-height: 26px; font-size: 14px; color: #fff; border-radius: 4px;  background: #0065eb; }
    
    .copyright { width: 100%;color: #3d3d3d; line-height: 26px; text-align: center; padding: 10px 0px; border-top: 1px solid #e5e5e5; margin-top:10px;}

    </style>
</head>


<body>
<div class="content">
  <div>
    <div> <img src="<!--{$tpl_path}-->images/bj.jpg" class="background-image"></div>
    <div class="word-processing">
      <!-- <div class="word-processing" style="color: #fff">零投入 纯赚钱 </div> -->
    </div>
    <div><img src="<!--{$app.app_logo}-->" class="head-portrait"> </div>
    <div style="margin-left: 30%;">
      <div class="title" style="padding-top: 25%"><!--{$app.app_title}-->-试玩平台</div>
      <br>
      <div class="character" style="color: #fff">已加入：<!--{countdown down=$app.app_down}-->人</div>
    </div>
  </div>
  <div>
    <div class="icon-frame" style="float:left;margin-top: 43%;"><img src="<!--{$tpl_path}-->images/wx.png" class="a1" style="width: 15%;margin-left: 15px; ">
      <div style="float:right;text-align: left;width: 73%">支持微信提现 </div>
    </div>
    <div class=" icon-frame" style="margin-top: 43%;"> <img src="<!--{$tpl_path}-->images/zfb.png" style="width: 12%;margin-left: 15px; ">
      <div style="float:right;text-align: left;width: 73%">支持支付宝提现</div>
    </div>
    <div class=" icon-frame" style="float:left;"> <img src="<!--{$tpl_path}-->images/sj.png" style="width: 12%;margin-left: 15px;">
      <div style="float:right;text-align: left;width: 73%">
      支持
      <!--{if $app.app_type eq 1}-->
      IOS,Android
      <!--{elseif $app.app_type eq 2}-->
      IOS
      <!--{elseif $app.app_type eq 3}-->
      Android
      <!--{/if}-->
      </div>
    </div>
    <div class="icon-frame"> <img src="<!--{$tpl_path}-->images/hg.png" style="width: 12%;margin-left: 15px;margin-bottom: 3px; ">
      <div style="float:right;text-align: left;width: 73%">最佳平台,10元提现</div>
    </div>
  </div>


  <!--{if $app.app_desc eq ''}-->
  <!--{else}-->
  <div style="clear: both;"></div>
  <div class="word-spacing">介绍</div>
  <div style="background-color: #fff;" class="article-txt">
    <section class="down-btn">
           <a href="<!--{link m='download' app_id=$app.app_id}-->">
                <i class="icon-xz" style="background-image: url(<!--{$tpl_path}-->images/icon-down.png);"></i>
                开始赚钱
          </a>
    </section>  
    <!--{$app.app_desc}-->
  </div>
  <!--{/if}-->

  <!--{if $app.app_video_url eq ''}-->
  <!--{else}-->
    <div style="clear: both;"></div>
    <div class="word-spacing">视频教程</div>
    <div style="background-color: #fff; padding:10px 0;" class="article-txt">
      <span style="text-align: center; display:block; padding: 0px; margin: 0px auto; font-family: 微软雅黑; color: rgb(229, 51, 51); font-size: 18px;">
        <strong style="padding: 0px; margin: 0px;"><u style="padding: 0px; margin: 0px;">做任务之前必须先看新手视频</u></strong>
      </span>
    </div>
    <div style="background-color: #fff;" class="article-txt">
      <!-- <iframe allowfullscreen="" frameborder="0" height="200" scrolling="no" src="http://v.qq.com/iframe/player.html?vid=m0391a9etur&auto=0" width="100%"></iframe> -->
      <iframe allowfullscreen="" frameborder="0" height="200" scrolling="no" src="<!--{$app.app_video_url }-->" width="100%"></iframe>
    </div>
  <!--{/if}-->

<div style="clear: both;"></div>
  <div class="word-spacing" style="position: relative;top:5px;">手机截图</div>
  <div style="background-color: #fff">
    <div class="appImg clearf">
        <div class="img">
            <!--{imagelist app_id=$app.app_id}-->
                <a href="<!--{$imagelist.resource_url}-->" data-fancybox="group" data-caption="Caption #1">
                    <img src="<!--{$imagelist.resource_url}-->">
                </a>
            <!--{/imagelist}-->
        </div>
    </div>
  </div>

  <!-- <div class="word-spacing" style="line-height: 12px;margin-bottom: 10px;">小提示</div> -->
  <div class="caption">
    <div style="height: 20px;"></div>
    <!-- <div style='display:'><p style="text-align: center;"> <span style="font-size:16px;">【长按识别二维码加入试玩】</span></p>
    <div style="text-align: center;">
        <img src="{link m='qrcode' url=$app.app_recomment_url }" id="qrcode" style="width: 200px; height: 200px;" />
    </div>
  </div>
    <div class="caption">
<div class="word-spacing">
    1.iPad用户App Store中下载App请选择仅iPhone下载</div>
<div class="word-spacing">
    2.试玩成功在此平台&ldquo;我的信息&rdquo;-&ldquo;收入查询&rdquo;中申请提现</div>
<div class="word-spacing">
    3.每天15:00-18:00任务更新较多,16:00任务会集中上线,请大家留意。其他时间也会更新,有空就来打开看看,也会有惊喜哦。</div>
<div class="word-spacing">
    4.其他问题请联系公众号在线客服！</div>
</div> -->
    <div class="copyright">
    Copyright &copy; 2017 试客专家 版权所有 
    </div>

    <div style="height:56px;"></div>
  <!-- <div class="col-xs-12 button-box"> <a href="#">
    <div class="text-box ">
      <div>加入任务</div>
    </div>
    </a> </div> -->
</div>


<div class="footer_float">
    <a class="a" href="<!--{link m='download' app_id=$app.app_id}-->">
        <div class="left">
            <img class="img" src="<!--{$app.app_logo}-->" alt="<!--{$app.app_title}-->">
        </div>
        <div class="middle">
            <p class="one"><!--{$app.app_title}--></p>
           <p class="two">官方下载</p>
        </div>
        <p class="right">
            <span class="freedownload">立即下载</span>
        </p>
    </a>
</div>

<script type="text/javascript">
  // $("[data-fancybox]").fancybox({
  //   baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1">' +
  //           '<div class="fancybox-bg"></div>' +
  //           '<div class="fancybox-inner">' +
  //           '<div class="fancybox-toolbar">' +
  //           "{{BUTTONS}}" +
  //           "</div>" +
  //           '<div class="fancybox-stage" style="margin:0 20px;"></div>' +
  //           '<div class="fancybox-caption-wrap">' +
  //           "</div>" +
  //           "</div>" +
  //           "</div>"
  // });

  // 设置滚动条
  // var scroll = new window.BScroll(
  //   document.querySelector(".appImg"),
  //   {
  //     probeType: 3,
  //     scrollX: true,
  //     click: true,
  //     bounce: false
  //   }
  // );

  // var qrcode = new QRCode(document.getElementById("qrcode"), {
  //   text: <!--{$app.app_recomment_url}-->,
  //   width: 110,
  //   height: 110,
  // });
</script>
<!-- /footer -->
<!--{include file="inc_foot.php"}-->
</body>

</html>