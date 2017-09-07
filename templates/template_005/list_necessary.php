<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--{row name='navicat' id=4}-->
    <title><!--{if $row.navicat_seotitle}--><!--{$row.navicat_seotitle}--><!--{else}--><!--{$setting.seo_title}--><!--{/if}--></title>
    <meta name="keywords" content="<!--{if $row.navicat_seokey}--><!--{$row.navicat_seokey}--><!--{else}--><!--{$setting.seo_keywords}--><!--{/if}-->" />
    <meta name="description" content="<!--{if $row.navicat_seodesc}--><!--{$row.navicat_seodesc}--><!--{else}--><!--{$setting.seo_description}--><!--{/if}-->" />
    <!--{/row}-->

    <!--{include file="inc_head.php"}-->
</head>

<body>
<div class="wrapper">
    <!--{include file="inc_top.php"}-->
    <!--{include file="inc_menu.php"}-->

<!--main-->
<div class="main">
    <div class="wp">
        <div class="grid-1 sect-1 clearfix mt10 gx-sec-1">
            <div class="hd-hot clearfix">
                <h2>装机必备</h2>

                <div class="gx-tab-title">
                    <!--{list name='necessary'}-->
                    <a href="<!--{link m='necessaries' necessary_type=$list.necessary_type}-->">
                        <li <!--{if (isset($necessary_type) && $necessary_type ==$list.necessary_type) || ($necessary_type ==0 && $list.special_sort_show==1)  }--> class="current"<!--{/if}-->>
                        <!--{$list.necessary_title}-->
                        </li>
                    </a>
                    <!--{/list}-->
                </div>
            </div>
            <div class="articles">
                <div class="mod-list-app mod-list-apps gx-tab-content gx-content">
                    <!--{list name='necessary' type=$necessary_type}-->
                    <ul class="clearfix gx-text" style="display: block;">
                        <!--{necessary id=$list.necessary_id page=$page per_page=50}-->
                        <li>
                            <a class="pic" href="<!--{link m='app' app_id=$necessary.app_id}-->"
                               target="_blank">
                                <img src="<!--{imageurl url =$necessary.app_logo}-->" width="48" height="48">
                            </a>
                            <h4>
                                <a href="<!--{link m='app' app_id=$necessary.app_id}-->"
                                   title="<!--{$necessary.app_title}-->" target="_blank">
                                    <!--{mb_substr($necessary.app_title,0,7,'utf-8')}--></a>
                            </h4>
                            <a class="bt-install setup" href="<!--{link m='app' app_id=$necessary.app_id}-->"
                               target="_blank" data-tab="0">安装</a>
                        </li>
                        <!--{/necessary}-->
                    </ul>
                    <!--{/list}-->
                </div>
                <div class="page" style="text-align: center;">
                    <!--{pagebar name='necessary_list' type=$necessary_type page=$page per_page=50}-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-->
</div>
<!--{include file='inc_foot.php'}-->
</body>
</html>

