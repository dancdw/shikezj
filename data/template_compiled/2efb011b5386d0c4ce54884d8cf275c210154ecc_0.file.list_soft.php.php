<?php /* Smarty version 3.1.27, created on 2017-08-20 04:33:37
         compiled from "D:\wamp\www\templates\mobile_102\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:1600459991121df1a71_73664782%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2efb011b5386d0c4ce54884d8cf275c210154ecc' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\list_soft.php',
      1 => 1500618718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1600459991121df1a71_73664782',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'keyword' => 0,
    'page' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59991121ecd352_27608475',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59991121ecd352_27608475')) {
function content_59991121ecd352_27608475 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_keyword')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_applist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '1600459991121df1a71_73664782';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['ckey'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];?>
"/>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>2)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];?>
"/>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<!--nav-->
<div class=" text-center nav-color elementwidth text-big padding-left padding-right" style="height: 40px">
    <div class="line">
        <div class="xl2 xs2 xm2 xb2 padding-small-top">
            <a href="/"><span class="icon-home text-white text-large"></span></a>
        </div>
        <div class="xl8 xs8 xm8 xb8" style="height: 20px;overflow:hidden;margin-top: 8px">
                    <span class="text-white text-big">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>2)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_name'];?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    </span>
        </div>
        <div class="xl2 xs2 xm2 xb2 padding-small-top">
            <a href="javascript:void(0)" id="search"><span class="icon-search text-white"
                                                           style="font-size: 20px"></span></a>
        </div>
    </div>
</div>
<div class="hidden" id="dialog"
     style="position:fixed;left:0;top:0;right:0;bottom:0;background:#FFFFFF;z-index:10;display:block;overflow-x:hidden;overflow-y:auto;">
    <div class="text-center elementwidth text-big padding-left padding-right bg-sub" style="height: 40px">
        <form method="post" action="#" class="form-inline">
            <div class="line">
                <div class="xl2 xs2 xm2 xb2 margin-small-top">
                    <span class="icon-angle-left text-large text-white" id="close"></span>
                </div>
                <div class="xl8 xs8 xm8 xb8 margin-small-top">
                    <input type="text" class="input" value="" data-url="/index.php?c=index&m=search" id="search-input"
                           onkeydown="if(event.keyCode == 13) search_app()" name="keyword" placeholder="精品应用、海量搜索"
                           style="height: 30px">
                </div>
                <div class="xl2 xs2 xm2 xb2 margin-small-top">
                    <button type="button" id="search-btn" onclick="search_app()" class="button button-small bg"><span
                            class="icon-search text-sub"></span></button>
                </div>
            </div>
        </form>
    </div>
    <div class="form-group">
        <div class="field">
            <div class="line">
                <p class="text-left">大家都在搜</p>
            </div>
            <ul class="list-inline height text-big">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>4)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li style=" height:40px"><a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>

                        <!--<span class="text-green icon-arrow-up"></span>--></a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
</div>
<!--banner-->


<div class="container padding-top padding-left padding-right">
    <div id="categary_hot_soft">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>12)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>12), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="line">
            <div class="xs9 xm9 xl9 xb9">
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
                    <div class="xs3 xm3 xl3 xb3">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                    </div>
                    <div class="xs9 xm9 xl9 xb9 padding-left">
                        <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</p>

                        <div class="line padding-bottom padding-top">
                            <span class="star bigstar50 text-left"></span>
                        </div>
                        <p class="text-left height-little margin-small-bottom text-small text-gray">
                            <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>

                            MB</p>
                    </div>
                </a>
            </div>
            <div class="xs3 xm3 xl3 xb3">
                <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"
                                                        class="button button-small border-sub">下载</a></div>
            </div>
        </div>
        <hr class="bg-line">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>12), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<div class="ajax_loading text-center" id="appMore">
    <span class="rotate"></span>
    <a>更多>></a>
</div>
<div class="line" style="height:75px; color:#cccccc;"></div>
<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo '<script'; ?>
>
    $(function () {
        var i = 2;
        $("#appMore").click(function () {
            $.ajax({
                type: "POST",
                url: "api.php?c=ajax&m=apps",
                data: {'page': i++, 'parent_id': 1},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var j = 15 * (msg.page - 1) + 1;
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += '<div class="line">';
                            html += '<div class="xs9 xm9 xl9 xb9">';
                            html += '<a href="' + v.app_url + '">';
                            html += '<div class="xs3 xm3 xl3 xb3">';
                            html += '<img src="' + image_url(v.app_logo) + '" class="radius-big float-left game-icon">';
                            html += '</div>';
                            html += '<div class="xs9 xm9 xl9 xb9 padding-left">';
                            html += '<p class="gamename">' + v.app_title + '</p>';
                            html += '<div class="line padding-bottom padding-top">';
                            html += '<span class="star bigstar50 text-left"></span>';
                            html += '</div>';
                            html += '<p class="text-left height-little margin-small-bottom text-small text-gray">' + num_down(v.app_down) + '下载<span>|</span>' + Math.round(v.history_size / 1024 / 1024 * 100) / 100 + 'MB</p>';
                            html += '</div>';
                            html += '</a>';
                            html += '</div>';
                            html += '<div class="xs3 xm3 xl3 xb3">';
                            html += '<div class="float-right padding-top"><a href="' + v.app_url + '" class="button button-small border-sub">下载</a></div>';
                            html += '</div>';
                            html += '</div>';
                            html += '<hr class="bg-line">';

                        });
                        $("#categary_hot_soft").append(html);
                    } else {
                        $("#appMore").css("display", "none");
                    }
                }
            });
        });

        function num_star(num) {
            var numm = parseInt(num);
            switch (numm) {
                case 1:
                    return 'style="width:20%"';
                    break;
                case 2:
                    return 'style="width:40%"';
                    break;
                case 3:
                    return 'style="width:60%"';
                    break;
                case 4:
                    return 'style="width:80%"';
                    break;
                case 5:
                    return 'style="width:100%"';
                    break;
                default:
                    return 'style="width:100%"';
                    break;
            }
        }

        function num_down(num) {
            var down_umm = parseInt(num);
            if (down_umm >= 10000000) {
                down_umm = Math.round(down_umm / 100000000 * 100) / 100 + '亿';
            }
            if (down_umm >= 10000 && down_umm < 10000000) {
                down_umm = Math.round(down_umm / 10000 * 100) / 100 + '万';
            }
            return down_umm;
        }

        function image_url(url) {

            if (url == '' || url == 'undefined' || url == 'http://cdn.711cms.net/') {
                return '/templates/cates/no_picture.png';
            }
            return url;
        }
    });


    function soft_hold() {
        $("#soft_holdrank").css('display', 'block');
        $("#soft_giftrank").css('display', 'none');
        $("#soft_soarrank").css('display', 'none');
    }
    function soft_gift() {
        $("#soft_giftrank").css('display', 'block');
        $("#soft_soarrank").css('display', 'none');
        $("#soft_holdrank").css('display', 'none');
    }
    function soft_soar() {
        $("#soft_soarrank").css('display', 'block');
        $("#soft_giftrank").css('display', 'none');
        $("#soft_holdrank").css('display', 'none');
    }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>