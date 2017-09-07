<!DOCTYPE HTML>
<html>
<head>
    <!--网页标题-->
    <title><!--{$setting.seo_title}--></title>
    <meta name="keywords" content="<!--{$setting.seo_keywords}-->"/>
    <meta name="description" content="<!--{$setting.seo_description}-->"/>
    <style type="text/css">
        .make { background: #fff; padding: 0 10px; padding-bottom: 25px; }
        .make p { padding-top: 10px; font-size: 15px; line-height: 24px; }
        .make p img { margin: 0 auto; display: block; max-width: 100%; }
        .make .red { color: #f00; font-weight: bold; font-size: 16px; }
        .make p a { color: #0000ee; }
        .make p strong { font-weight: bold; }
    </style>
    <!--{include file="inc_head.php"}-->
</head>

<body>
<!--<div id="left_layer" style="position:fixed; bottom:50px; right:90px; text-align:center;">
<a href="https://engine.tuia.cn/index/activity?appKey=24YKCZ2CYtoSm6vqRhYyeLhva6ye&adslotId=905" target="_blank"><img src="http://swg.anzhuotui.com/images/tuia.gif" alt="红包" border="0"></a> <br>
 <a href="javascript:;" onclick="javascript:document.getElementById('left_layer').style.display='none';">关闭</a>
</div>-->
<div class="wide">
<!--
<div class="statement hide">声明：本活动及礼品与苹果公司无关</div>
-->

<!-- <div class="header">
    <div class="top"><a href="/" class="brand">掌上试客</a></div>
</div> -->

<!--<section class="kf-icon">
    <a href="mqqwpa://im/chat?chat_type=wpa&uin=275528896&version=1&src_type=web&web_src=null">
        <em class="qq-icon">
            <img src="/images/qq-icon.png" />
        </em>
        <strong>客服</strong>
    </a>
</section>-->

<!--焦点图-->
<script type="text/javascript" src="<!--{$tpl_path}-->js/touchSlide.1.1.js"></script>
<div class="focus" id="focus">
      <div class="hd">
        <ul></ul>
      </div>
      <div class="bd">
        <ul>
            <!--{ad id=32 }-->
            <li><a href="<!--{$ad.link}-->"><img src="<!--{$ad.image}-->" alt="<!--{$ad.alt}-->" /></a></li>
            <!--{/ad}-->
        </ul>
      </div>
</div>
<script>
TouchSlide({
slideCell:"#focus",
titCell:".hd ul",
mainCell:".bd ul",
effect:"leftLoop",
autoPage:true,
autoPlay:true
});
</script>

<section class="list-box">
    <section class="list-tl">
            <!--{navicat row=4}-->
            <span class="current"><a href="/new"><!--{$navicat.navicat_name}--></a></span>
            <!--{/navicat}-->
    </section>
</section>
<!--焦点图-->
<!-- <div style="height:30px; line-height:30px; text-align:center"><a href="http://swg.anzhuotui.com/vote/" style="color:#FF0000">---===== 投票兼职点这里 =====---</a></div> -->
        <section class="list-txt">
            <ul>
<!--{recommend id=45 row=15}-->
   <li class="pd72">
                        <a href="<!--{link m='app' app_id=$recommend.app_id}-->">
                            <img src="<!--{$recommend.app_logo}-->" />
                            <strong>
                                <!--{$recommend.app_title}--><span class="hot-icon">热</span>
                            </strong>
              <p><!--{$recommend.app_seokey}--></p>
                            <em>免费下载</em>
                        </a>
                    </li>
<!--{/recommend}-->
            </ul>
</section>
<!-- <div class="appcnt_bg" style="text-align:center;margin-top:10px">共43应用&nbsp;页次：<font color=red>1</font>/3&nbsp;&nbsp;
           &nbsp;
          <a href="/?page=2" style="color:#EB7601">下一页</a>&nbsp;  <a href="/?page=3" style="color:#EB7601">最后一页</a>


</div> -->

            <div class="loading"></div>
</section>
<div class="go-top"><a href="javascript: scrollTo(0, 1);">↑返回顶部</a></div>

<div class="copyright">
    Copyright &copy; 2017 掌上试客 版权所有 
</div>


    <div class="hide">
        <!-- <script src="https://s9.cnzz.com/z_stat.php?id=5662693&web_id=5662693" language="JavaScript"></script> -->
    </div>
</div>
</body>
</html>
