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
    <style>
        .content-bg { width: 100%; height: 100%; background-color: #f7f7f7; background-image: url(/images/ios-wx-body-bg.gif); background-position: top right; background-repeat: no-repeat; background-size: contain; overflow: hidden; position: absolute; top: 0; }
        .load-notice { padding-top: 45px; padding-left: 18px; padding-bottom: 25px; padding-left: 10px; }
        .load-notice p { padding: 0; margin: 0; color: #dc570a; line-height: 24px; font-size: 14px; }
        .first-on { margin-top: 30px; margin-left: 15px; }
        .first-on span { background: #fff; border-radius: 40px; padding: 7px 8px; color: #282828; font-size: 12px; line-height: 24px; display: inline-block; border: 1px solid #0c0307; background-clip: padding-box; }
        .first-on img { width: 20px; height: 16px; display: inline-block; margin: 0px 3px; position: relative; top: 3px; }
        .first-on i { float: left; background: #ffba00; width: 24px; height: 24px; line-height: 24px; border-radius: 24px; color: #fff; font-size: 15px; margin-right: 4px; display: inline-block; text-align: center; font-style: normal; font-weight: bold; }
        .mt-lt10 i { margin-top: 13px; }
        .first-on b { float: left; font-weight: normal; }

        .grayback { width: 100%; height: 100%; background-color: #000000; opacity: 0.7; position: fixed; top: 0; left: 0; z-index: 99; }
        
    </style>
</head>

<body>

<!-- <div id="left_layer" style="position:fixed; top:190px; right:30px; text-align:center;">
<a href="https://engine.tuia.cn/index/activity?appKey=24YKCZ2CYtoSm6vqRhYyeLhva6ye&adslotId=905" target="_blank"><img src="http://swg.shouzhuanzhushou.com/images/tuia.gif" alt="红包" border="0"></a><br>
 <a href="javascript:;" onclick="javascript:document.getElementById('left_layer').style.display='none';">关闭</a>
</div>-->

<div class="wide">
<!--
<div class="statement hide">声明：本活动及礼品与苹果公司无关</div>


<section class="kf-icon">
    <a href="mqqwpa://im/chat?chat_type=wpa&uin=275528896&version=1&src_type=web&web_src=null">
        <em class="qq-icon">
            <img src="/images/qq-icon.png" />
        </em>
        <strong>客服</strong>
    </a>
</section>
-->

<section class="article-box">
    <section class="article">
        <h1 class="Rtitle"><!--{$app.app_title}--> - 兼职试玩平台</h1>
        <span class="time"><!--{$app.create_time}--><a href="/"><em>掌上试客</em></a> www.zhangshangshike.com</span>
        <span class="article-info">
               <p class="red">送1元</p>
               <p>支持系统：苹果iOS和安卓</p>
                <p class="red">3元提现</p>
                <p>单价1元起</p>
                <p>下载1501次</p>
                <p><a href="http://jq.qq.com/?_wv=1027&k=41C9meN" style="color:#FFFFFF" target="_blank">点击这里加群</a></p>
                <p>谷主微信：Yuri-le</p>
        </span>
    </section>

        <section class="down-btn">

            <a href="/go/4.html"><!--  class="urltip" -->
                    <i class="icon-xz" style="background-image: url(<!--{$tpl_path}-->images/icon-down.png);"></i>
                    开始赚钱
            </a>

        </section>  

    <section class="article-txt">
        <p><!--{$app.app_desc}--></p>
        <!--iMoney试玩平台截图开始-->
    <div id="jietu">
        <div class="scroll_detail">
            <div class="slide_02" id="slide_02">
                <div>
                    <div>
                        
            <!--{imagelist app_id=$app.app_id}-->
                        <div class="mod_02">
                            <img src="<!--{$imagelist.resource_url}-->" alt="iMoney试玩平台截图1" />
                        </div>
            <!--{/imagelist}-->
                        
                    </div>
                </div>
            </div>
            <div class="dotModule_2">
                <div id="slide_02_dot">
                    <span class="dotItem" title="第1页"></span>
                    <span class="dotItem" title="第2页"></span>
                    <span class="dotItem" title="第3页"></span>
                    <span class="selected" title="第4页"></span>
                </div>
            </div>
            <div id="sl_left"></div>
            <div id="sl_right"></div>
        </div>
    </div>
    <script type="text/javascript">
 if(document.getElementById("slide_02")){
      var slide_02 = new ScrollPic();
      slide_02.scrollContId   = "slide_02"; //内容容器ID
      slide_02.dotListId      = "slide_02_dot";//点列表ID
      slide_02.dotOnClassName = "selected";
      slide_02.arrLeftId      = "sl_left"; //左箭头ID
      slide_02.arrRightId     = "sl_right";//右箭头ID
      slide_02.frameWidth     = 226;
      slide_02.pageWidth      = 226;
      slide_02.upright        = false;
      slide_02.speed          = 10;
      slide_02.space          = 30; 
      slide_02.initialize(); //初始化
}

</script>
<!--iMoney试玩平台截图结束-->
        <!--<p><img src="/editor/upload/image/20160731/20160731085433773377.jpg" /><img src="/editor/upload/image/20160731/2016073108550196196.jpg" /><img src="/editor/upload/image/20160731/20160731085517711771.jpg" /><img src="/editor/upload/image/20160731/20160731085593339333.jpg" /></p>-->
    </section>

    <section class="ewm-img hide">
        
    </section>
    <!--<section class="more" style="padding-bottom:10px; text-align: right;"><a href="/"></a></section>-->
</section>

<div class="go-top"><a href="javascript: scrollTo(0, 1);">↑返回顶部</a></div>

<div class="copyright">
    Copyright &copy; 2017 掌上试客 版权所有
</div>

<div id="cover"></div>
<script>
  var isWeixin = /micromessenger/i.test(navigator.userAgent);
  if (isWeixin) {
    document.addEventListener('click', function (event) {
      if (event.target.classList.contains('urltip')) {
        document.getElementById('cover').style.display = 'block';
        event.preventDefault();
      } else if (event.target.id === 'cover') {
        event.target.style.display = 'none';
      }
    }, false);
  }
</script>


    <!--<section class="download-btn">
        <a href="/go/4.html" class="urltip">
           ↓ iMoney试玩平台官方下载
        </a>
    </section>-->
    <div id="weixinshareimg" class="share hide" style="position: fixed; right: 10px; top: 10px; z-index: 9999;">
        <img src="/images/android-share.png" width="210" height="140">
    </div>

    <div class="hide">
        <script src="https://s9.cnzz.com/z_stat.php?id=5662693&web_id=5662693" language="JavaScript"></script>
    </div>
    
    <div class="footer_float">
        <a class="a" href="/go/4.html">
            <div class="left">
                <img class="img" src="<!--{imageurl url =$app.app_logo}-->" alt="iMoney试玩平台" />
            </div>
            <div class="middle">
                <p class="one"><!--{imageurl url =$app.app_title}--></p>
               <p class="two">官方下载</p>
            </div>
            <p class="right">
                <span class="freedownload">立即下载</span>
            </p>
        </a>
    </div>
</div>  
</body>
</html>
