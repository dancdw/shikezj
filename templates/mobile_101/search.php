<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <title><!--{$setting.seo_title}--></title>
    <meta name="keywords" content="<!--{$setting.seo_keywords}-->"/>
    <meta name="description" content="<!--{$setting.seo_description}-->"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--{include file="inc_head.php"}-->
</head>
<body>
<div class="header">
    <h2><font style="max-width:68%" class="overcut">搜索列表</font></h2>
    <a class="back icon-ic_back1-01" href="javascript:history.back();"></a>
</div>
<div class="searchDiv bgGray">
    <table class="search" border="0" cellspacing="0" cellpadding="0">
        <form id="search-form" action="<!--{link m='search'}-->">
            <tr>
                <td class="input">
                    <input type="text" placeholder="精品应用、海量搜索" id="search-input" data-rewrite="<!--{$setting.is_site_rewrite}-->" name="keyword"/>
                    <span class="delTxt icon-ic_dele-01"></span>
                </td>
                <td class="sear-btn">
                    <span class="icon-ic_search-01"></span>
                    <input type="button" value="" id="search-btn"/>
                </td>
            </tr>
        </form>
    </table>
</div>
<div class="rank-box-div block list-box">
    <!--列表-->
    <div class="rank-list">
        <ul class="speApp">
            <!--{applist search=$keywords row=15}-->
            <li>
                <span class="num"><!--{$show_sort_id++}--></span>
                <a href="<!--{link m='app' app_id=$applist.app_id}-->"  class="link">
                    <img src="<!--{imageurl url =$applist.app_logo}-->" style="display: block;">

                    <h3><font style="max-width:60%" class="overcut"><!--{$applist.app_title}--></font></h3>

                    <p><!--{round($applist.history_size/1024/1024,2)}-->M <!--{countdown down=$applist.app_down}-->+次下载</p>

                    <p><!--{$applist.app_seodesc}--></p>
                </a>
                <a href="<!--{link m='app' app_id=$applist.app_id}-->"  class="download">下载</a>
            </li>
            <!--{/applist}-->
        </ul>

    </div>
</div>

<!--{include file="inc_foot.php"}-->

</body>
</html>