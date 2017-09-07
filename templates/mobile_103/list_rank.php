<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="cache-control" content="no-cache" />
    <title><!--{$setting.seo_title}--></title>
    <meta name="keywords" content="<!--{$setting.seo_keywords}-->"/>
    <meta name="description" content="<!--{$setting.seo_description}-->"/>

    <!--{include file="inc_head.php"}-->
</head>

<body>
<div id="doc">
    <header id="hds">
        <div class="titlebar" id="section_titlebar">
            <a class="g-block go-back" href="javascript:history.back();" ></a>
            <span class="sep"></span>
            <h2 class="g-ellipsis title">排行榜</h2>
            <a class="g-block go-home" href="/" id="link-go-home"></a>
        </div>
    </header>
    <!-- bd -->
    <ul class="cate" id="section_categorys">
        <li id="section_categorys_tab0" class="cur"><a href="#">软件排行</a> </li>
        <li id="section_categorys_tab1"><a href="#">游戏排行</a> </li>

    </ul>
    <div id="bd">
        <DIV class="soft_list" id="section_hot_soft" data-id="51">
            <ul  id="soft">
                <!--{recommend id="51" row=10}-->
                <li>
                    <a href="<!--{link m='app' app_id=$recommend.app_id}-->" class="con">
                        <img src="<!--{imageurl url = $recommend.app_logo}-->" class="photo" width="54" height="54"/>

                        <div class="info">
                            <span class="size"><!--{round($recommend.history_size/1024/1024,2)}-->MB <br/><!--{countdown down=$recommend.app_down}-->次下载 </span>
                        </div>
                        <div class="detail">
                            <h3><!--{$recommend.app_title}--></h3>
                            <div class="stars_holder">
                                <div class="stars" <!--{countstar star=$recommend.app_recomment}-->></div>
                        </div>
        </div>
        </a>
        <a href="<!--{link m='app' app_id=$recommend.app_id}-->" class="down"><span>下载</span></a>
        </li>
        <!--{/recommend}-->
        </ul>
        <div class="more mb50">
            <p><a href="#" class="list-W"><<加载更多</a></p>
        </div>
    </DIV>

    <DIV class="soft_list" id="section_hot_game" style="display: none;" data-id="52">
        <ul id="game">
            <!--{recommend id="52" row=10}-->
            <li>
                <a href="<!--{link m='app' app_id=$recommend.app_id}-->" class="con">
                    <img src="<!--{imageurl url = $recommend.app_logo}-->" class="photo" width="54" height="54"/>

                    <div class="info">
                        <span class="size"><!--{round($recommend.history_size/1024/1024,2)}-->MB <br/><!--{countdown down=$recommend.app_down}-->次下载 </span>
                    </div>
                    <div class="detail">
                        <h3><!--{$recommend.app_title}--></h3>

                        <div class="stars_holder">
                            <div class="stars" <!--{countstar star=$recommend.app_recomment}-->></div>
                    </div>
    </div>
    </a> <a href="<!--{link m='app' app_id=$recommend.app_id}-->" class="down"> <span>下载</span>
    </a>
    </li>
    <!--{/recommend}-->
    </ul>
    <div class="more mb50">
        <p><a href="#" class="list-S"><<加载更多</a></p>
    </div>
</DIV>
        <ul id="section_hot_rank" style="display: none;" class="soft_list">
        </ul>
        <ul id="section_hot_category" style="display: none;"  class="soft_list2">
        </ul>

    </div>
    <!--{include file="inc_foot.php"}-->
</div>
</body>
</html>