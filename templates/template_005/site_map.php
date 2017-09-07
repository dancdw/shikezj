<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><!--{$setting.seo_title}--></title>
    <meta name="keywords" content="<!--{$setting.seo_keywords}-->"/>
    <meta name="description" content="<!--{$setting.seo_description}-->"/>
    <!--{include file="inc_head.php"}-->
</head>
<body>
<body>

<body>

<!--{include file="inc_top.php"}-->

<div class="wrapper">
    <!--------content------------>
    <div class="ly-content-bg">
        <div class="ly-content">
            <h1 class="ly-h1">网站地图</h1>

            <div class="ly-map">
                <h2><a target="_blank" href="<!--{link m='index'}-->">首页</a></h2>
                <ul>
                    <!--{navicat}-->
                    <li><a target="_blank" href="<!--{link m=$navicat.navicat_m}-->"><!--{$navicat.navicat_name}--></a></li>
                    <!--{/navicat}-->
                </ul>

                <h2><a target="_blank" href="<!--{link m='softs'}-->">安卓软件</a></h2>
                <ul>
                    <!--{appnav parent=1}-->
                    <li>
                        <a target="_blank" href="<!--{link m='softs' cate_id=$appnav.cate_id}-->">
                            <!--{$appnav.cname}-->
                        </a>
                    </li>
                    <!--{/appnav}-->
                </ul>

                <h2><a target="_blank" href="<!--{link m='games'}-->">安卓游戏</a></h2>
                <ul>
                    <!--{appnav parent=2}-->
                    <li>
                        <a target="_blank" href="<!--{link m='games' cate_id=$appnav.cate_id}-->">
                            <!--{$appnav.cname}-->
                        </a>
                    </li>
                    <!--{/appnav}-->
                </ul>

                <h2><a target="_blank" href="<!--{link m='infos'}-->">资讯</a></h2>
                <ul>
                    <!--{infonav}-->

                    <li>
                        <a target="_blank" href="<!--{link m='infos' last_cate_id=$infonav.cate_id}-->">
                            <!--{$infonav.cname}-->
                        </a>
                    </li>
                    <!--{/infonav}-->
                </ul>

                <h2><a target="_blank" href="<!--{link m='necessaries'}-->">装机必备</a></h2>
                <ul>
                    <!--{list name='necessary'}-->

                    <li>
                        <a target="_blank" href="<!--{link m='necessaries' necessary_type=$list.necessary_type}-->">
                            <!--{$list.necessary_title}-->
                        </a>
                    </li>

                    <!--{/list}-->
                </ul>

                <h2><a target="_blank" href="<!--{link m='specials'}-->">专题</a></h2>
                <ul>
                    <!--{list name='special'}-->
                    <!--{row name='special' id=$list.area_id}-->
                    <li>
                        <a target="_blank" href="<!--{link m='special' special_id=$row.area_id}-->">
                            <!--{$row.area_title}-->
                        </a>
                    </li>
                    <!--{/row}-->
                    <!--{/list}-->
                </ul>
            </div>
        </div>
        <!--友情链接 start-->
        <div class="links_box" style="width: 1000px; margin: 40px auto 0 auto;">
            <div class="links_hd">
                <div class="links_tab">
                    <a class="current" id="yqlj">友情链接</a>
                </div>
            </div>
            <div class="links_bd">
                <div class="links_fren" id="yqlj_mod" style="display: block;">
                    <!--{friendlink type=2}-->
                    <!--{if !$friendlink.flink_img}-->
                    <a href="<!--{$friendlink.flink_url}-->" target="_blank" title="<!--{$friendlink.flink_name}-->"><!--{$friendlink.flink_name}--></a>
                    <!--{else}-->
                    <a href="<!--{$friendlink.flink_url}-->" target="_blank" title="<!--{$friendlink.flink_name}-->">
                        <img width="20" height="20" src="<!--{$friendlink.flink_img}-->" />
                        <!--{$friendlink.flink_name}-->
                    </a>
                    <!--{/if}-->
                    <!--{/friendlink}-->
                </div>
            </div>
        </div>
    </div>
    <!-- /ranking -->
</div>
<!--{include file="inc_foot.php"}-->
</body>
</html>
