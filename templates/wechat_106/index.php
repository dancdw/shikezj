<!DOCTYPE HTML>
<html>
<head>
    <!--网页标题-->
    <title><!--{$setting.seo_title}--></title>
    <meta name="keywords" content="<!--{$setting.seo_keywords}-->"/>
    <meta name="description" content="<!--{$setting.seo_description}-->"/>
    <!--{include file="inc_head.php"}-->

    <link href="<!--{$tpl_path}-->css/huadong.css" rel="stylesheet" type="text/css">
    <link href="<!--{$tpl_path}-->css/huadong2.css" rel="stylesheet" type="text/css">
    <link href="<!--{$tpl_path}-->css/tags-ranking.css" rel="stylesheet" type="text/css" >
    
    <script type="text/javascript" src="<!--{$tpl_path}-->js/jquery-1.7.2.min.js"></script>
    <script src="<!--{$tpl_path}-->js/huadong.js" type="text/javascript"></script>
<style type="text/css">
body {
    margin: 0;
    font-family: "微软雅黑", Arial, Helvetica, sans-serif;
    width: 100%;
}
a:hover {
    text-decoration: none;
}
a {
    color: #505050;
    text-decoration: none;
}
.dian {
    width: 100px;
    height: 10px;
    position: absolute;
    z-index: 3;
    margin-top: 32%;
    margin-left: 40.5%;
}
.cover {
    opacity: 0.5;
    background: #000;
    z-index: 1000;
    position: fixed;
    width: 100%;
    height: 100%;
}

span.hot-icon { width: 16px; height: 16px; line-height: 16px; margin-left: 5px; display: inline-block; background: #e40000; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; text-align: center; font-size: 12px; color: #fff; }

</style>
<script type="text/javascript">
            var myScroll;

            function loaded() {
                myScroll = new iScroll('wrapper', {
                    snap: true,
                    momentum: false,
                    hScrollbar: false
                });

            }
            document.addEventListener('DOMContentLoaded', loaded, false);
        </script>
</head>

<body>
<div class="content" style="position: absolute;width: 100%; height: 100%;"  id="yg_wuhen">
  <div id="wrapper" style="overflow: hidden;">
    <div id="scroller" style="width: 1500px; -webkit-transition-property: -webkit-transform; transition-property: -webkit-transform; -webkit-transform-origin: 0px 0px 0px; -webkit-transform: translate3d(-1125px, 0px, 0px) scale(1);">
      <ul id="thelist">
            <!--{ad id=32 }-->
            <li><a href="<!--{$ad.link}-->"><img src="<!--{$ad.image}-->" alt="<!--{$ad.alt}-->"  style="width: 375px; height:114px"/></a></li>
            <!--{/ad}-->
      </ul>
    </div>
  </div>
  <!-- <div class="dian">
    <div id="prev" onclick="myScroll.scrollToPage('prev', 0, 400, 3);return false">← prev</div>
    <ul id="indicator">
      <li class="active">1</li>
      <li class="">3</li>
    </ul>
    <div id="next" onclick="myScroll.scrollToPage('next', 0);
                        return false">next →</div>
  </div> -->
  <div class="clr"></div>
  <div id="insert1"></div>
  <marquee direction="left" align="bottom" height="25" width="100%" scrollamount="2" scrolldelay="1" style="height:25px; line-height:25px;white-space: nowrap;">
  <font color="#FF0000">所有平台都是独立的，多平台试玩收入更多。每日15-18点刷新大量任务！</font>
  </marquee>
  <div class="hotspot_ranking" id="a1" style="display: block;">
    <!-- <div class="recommend-title">
      <div class="recommend-title-border">
        <div class="recommend"> 热门排行 </div>
        <div id="p1" class="recommend1"> 推荐平台 </div>
      </div>
    </div> -->

    

    <!--{recommend id=45 row=100}-->
    <a href="<!--{link m='app' app_id=$recommend.app_id}-->">
    <div class="box-1 clearfix">
      <div class="ranking-list float">
        <div class="ranking-headline float"> </div>
        <div class="float ranking-picture"> <img src="<!--{$recommend.app_logo}-->" width="50px" height="50px"> </div>
        <div class="float ranking-text-list">
          <div class="ranking-text1"><!--{$recommend.app_title}--></div>
          <div class="ranking-text2"><!--{$recommend.app_tags}--></div>
          <div class="ranking-text3"><!--{countdown down=$recommend.app_down}-->人加入</div>
        </div>
        <div class="float ranking-text4"> 下载 </div>
      </div>
    </div>
    </a>
<!--{/recommend}-->
</div>


  <div class="terrace_recommend" id="a2" style="display: none;">
    <div class="recommend-title1">
      <div class="recommend-title-border">
        <div id="p2" class="recommend1"> 热门排行 </div>
        <div class="recommend"> 推荐平台 </div>
        <!--                        <div class="recommend-box-1">
                            根据平台活动进行推荐
                        </div>--> 
      </div>
    </div>
   
   
  <a href="/html/pingtai/2017/0427/3.html">
    <div class="box-1 clearfix">
      <div class="ranking-list float">
        <div class="ranking-headline float"> </div>
        <div class="float ranking-picture"> <img src="/uploads/170428/1-1F42Q01IR56.png" width="50px" height="50px"> </div>
        <div class="float ranking-text-list">
          <div class="ranking-text1">任务平台1【必做】</div>
          <div class="ranking-text2">试玩每单可以收入1.0到3.0元</div>
          <div class="ranking-text3">33504人加入</div>
        </div>
        <div class="float ranking-text4"> 进入 </div>
      </div>
    </div>
    </a>
 
</div>
</div>
<div class="cover clear" id="wuhen1" style="display: none;"></div>
<div id="wuhen2" style="width: 100%;margin: 0 auto;text-align: center; border-radius:8px; position: fixed;display: none;z-index: 10003;"> <img src="/image/wuhen.png" style="width: 100%;"> </div>
<script type="text/javascript">
$(function () {
            $('#p1').on("click", function () {
                var strCookie = writeCookie('dis', '1')

                document.getElementById('a1').style.display = 'none';
                document.getElementById('a2').style.display = 'block';;
            }); 
            $('#p2').on("click", function () {
                var strCookie = writeCookie('dis', '2')


                document.getElementById('a1').style.display = 'block';
                document.getElementById('a2').style.display = 'none';
            });
        });
    </script> 
<script>
        var count = document.getElementById("thelist").getElementsByTagName("img").length;  
        for (i = 0; i < count; i++) {
            document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:" + document.body.clientWidth + "px"; 
        } 
        document.getElementById("scroller").style.cssText = " width:" + document.body.clientWidth * count + "px"; 
        setInterval(function () {
            myScroll.scrollToPage('next', 0, 400, count);
        }, 3000); 
        window.onresize = function () {
            for (i = 0; i < count; i++) {
                document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:" + document.body.clientWidth + "px"; 
            } 
            document.getElementById("scroller").style.cssText = " width:" + document.body.clientWidth * count + "px";
        }
    </script>
<div id="insert2"></div>
<div style="display:none"> </div>
<script>
        function displayit(n) {
            for (i = 0; i < 4; i++) {
                if (i == n) {
                    var id = 'menu_list' + n;
                    if (document.getElementById(id).style.display == 'none') {
                        document.getElementById(id).style.display = '';
                        document.getElementById("plug-wrap").style.display = '';
                    } else {
                        document.getElementById(id).style.display = 'none';
                        document.getElementById("plug-wrap").style.display = 'none';
                    }
                } else {
                    if ($('#menu_list' + i)) {
                        $('#menu_list' + i).css('display', 'none');
                    }
                }
            }
        } 
        function closeall() {
            var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
            for (i = 0; i < count; i++) {
                document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display = 'none';
            }
            document.getElementById("plug-wrap").style.display = 'none';
        } 
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            WeixinJSBridge.call('hideToolbar');
        });
    </script> 
<script type="text/javascript">

        try {
            window.localStorage.foobar ="foobar";



        } catch(_) {
            document.getElementById('wuhen1').style.display = 'block';
            document.getElementById('wuhen2').style.display = 'block';
            document.getElementById('yg_wuhen').style.overflow = 'hidden';


        }

    </script> 
<script type="text/javascript">
        function getCookie(Name) {
            var search = Name + "=";

            if (document.cookie.length > 0) {
                offset = document.cookie.indexOf(search)
                if (offset != -1) {
                    offset += search.length
                    end = document.cookie.indexOf(";", offset)
                    if (end == -1) end = document.cookie.length
                    return unescape(document.cookie.substring(offset, end))
                } else return "";
            }
        }

        function writeCookie(name, value) {

            document.cookie = name + "=" + escape(value) ;
        }
        function myfun() {
            var strCookie1 = getCookie('dis');

            if (strCookie1 == 2) {
                document.getElementById('a1').style.display = 'block';
                document.getElementById('a2').style.display = 'none';
            } if (strCookie1 == 1){
                document.getElementById('a1').style.display = 'none';
                document.getElementById('a2').style.display = 'block';
            }
        }　　 /*用window.onload调用myfun()*/
        window.onload = myfun; //不要括号
    </script>
﻿
<!-- /footer -->
<!--{include file="inc_foot.php"}-->
</body>

</html>
