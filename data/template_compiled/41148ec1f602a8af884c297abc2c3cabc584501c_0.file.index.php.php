<?php /* Smarty version 3.1.27, created on 2017-08-20 04:42:45
         compiled from "D:\wamp\www\templates\mobile_101\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:3317599913454bb0f0_88506097%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41148ec1f602a8af884c297abc2c3cabc584501c' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_101\\index.php',
      1 => 1500461692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3317599913454bb0f0_88506097',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'keyword' => 0,
    'infolist' => 0,
    'recommend' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5999134576c865_36866294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5999134576c865_36866294')) {
function content_5999134576c865_36866294 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_keyword')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_infolist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.list.php';

$_smarty_tpl->properties['nocache_hash'] = '3317599913454bb0f0_88506097';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>

<div class="header">
    <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['wap_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
" height="55"/></a>
</div>
<div class="big-banner">
    <div id="slideBox" class="slideBox">
        <div class="bd">
            <div class="tempWrap">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>32)); $_block_repeat=true; echo smarty_block_ad(array('id'=>32), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
"></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>32), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="hdli">
            <ul>
                <li class=""></li>
                <li class="on"></li>
                <li class=""></li>
            </ul>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    TouchSlide({
        slideCell: "#slideBox",
        titCell: ".hdli ul",
        mainCell: ".bd ul",
        effect: "leftLoop",
        autoPage: true,
        autoPlay: true
    });

<?php echo '</script'; ?>
>
<!--menu-->
<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<hr class="line3">
<!--search-->
<div class="searchDiv">
    <table class="search" border="0" cellspacing="0" cellpadding="0">
        <form id="search-form" action="/index.php?c=index&m=search">
            <tr>
                <td class="input">
                    <input type="text" placeholder="精品应用、海量搜索" id="search-input" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
"
                           name="keyword"/>
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
<div class="hotWord">
    <strong>热词</strong>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>4)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
</a>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<hr class='line2'>
<!--都在玩-->
<div class="allWanDiv">

    <ul class="allWan">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>2,'row'=>5)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>2,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li>
            <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a>
        </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>2,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>
<hr class="line"/>
<!--周精品-->
<div class="hd">
    <h2>
        精品推荐
    </h2>
    <a href="" title="" class="more icon-ic_back2-01"></a>
</div>
<hr class='line2'>
<ul class="app none1">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>67,'row'=>9)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>67,'row'=>9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class='link'>
            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/>

            <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

            <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
 <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M</p>
        </a>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="download">下载</a>
    </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>67,'row'=>9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>
<hr class="line3"/>
<!--网游-->
<div class="hd">
    <h2>
        下载排行
    </h2>
    <a href="/olgame/" class="more icon-ic_back2-01"></a>
</div>
<hr class='line2'>
<div class="tui">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>68,'row'=>1,'start'=>0)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>68,'row'=>1,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class='link'>
        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/>

        <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

        <p><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M  <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载</p>

        <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_seodesc'];?>
</p>
    </a>
    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="download">下载</a>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>68,'row'=>1,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div>
<hr class='line2'>
<ul class="app sma none2">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>68,'row'=>9,'start'=>1)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>68,'row'=>9,'start'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class='link'>
            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/>

            <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

            <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
 <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M</p>
        </a>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="download">下载</a>
    </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>68,'row'=>9,'start'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>
<hr class="line3"/>
<div class="hd">
    <h2>
        上升最快
    </h2>
    <a href="/olgame/" class="more icon-ic_back2-01"></a>
</div>
<hr class='line2'>
<div class="tui">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>69,'row'=>1,'start'=>0)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>69,'row'=>1,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class='link'>
        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/>

        <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

        <p><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M  <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载</p>

        <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_seodesc'];?>
</p>
    </a>
    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="download">下载</a>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>69,'row'=>1,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<hr class='line2'>
<ul class="app sma none2">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>69,'row'=>9)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>69,'row'=>9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class='link'>
            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/>

            <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

            <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
 <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M</p>
        </a>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="download">下载</a>
    </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>69,'row'=>9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</ul>
<hr class="line3"/>
<div class="hd">
    <h2>
        最受欢迎
    </h2>
    <a href="#" class="more icon-ic_back2-01"></a>
</div>
<hr class='line2'>
<div class="tui">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>53,'row'=>1,'start'=>0)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>53,'row'=>1,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class='link'>
        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/>

        <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

        <p><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M  <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载</p>

        <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_seodesc'];?>
</p>
    </a>
    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="download">下载</a>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>53,'row'=>1,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div>
<hr class='line2'>
<ul class="app sma none2">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>53,'row'=>9)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>53,'row'=>9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class='link'>
            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/>

            <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

            <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
 <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M</p>
        </a>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="download">下载</a>
    </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>53,'row'=>9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>
<hr class="line3"/>
<!--精彩专题-->
<div class="hd">
    <h2>
        精彩专题
    </h2>
    <a href="" class="more icon-ic_back2-01"></a>
</div>
<hr class='line2'>
<div class="spe-div">
    <ul class="spe none3">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'special')); $_block_repeat=true; echo smarty_block_list(array('name'=>'special'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li>
            <a href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']),$_smarty_tpl);?>
" title="">
                <div class='spe-img'>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
"/>
                </div>
                <h3><?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
</h3>
            </a>
        </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'special'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>
<hr class="line3"/>
<!--特色分类-->

<hr class="line3"/>
<!--footer-->

<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</body>
</html><?php }
}
?>