<?php /* Smarty version 3.1.27, created on 2017-08-20 08:13:12
         compiled from "D:\wamp\www\templates\mobile_104\search.php" */ ?>
<?php
/*%%SmartyHeaderCode:2743359994498d95392_47149599%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd2b6add499c37c2f5aba619e671bc1332b722d9' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_104\\search.php',
      1 => 1500971544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2743359994498d95392_47149599',
  'variables' => 
  array (
    'setting' => 0,
    'keywords' => 0,
    'tpl_path' => 0,
    'keyword' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59994498f182e5_08390949',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59994498f182e5_08390949')) {
function content_59994498f182e5_08390949 ($_smarty_tpl) {
if (!is_callable('smarty_block_keyword')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_applist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '2743359994498d95392_47149599';
?>
<!DOCTYPE HTML>
<html>
<head>
    <!--网页标题-->
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
<div class="container">
    <!--head-->
    <div class="gray-head-bg">
        <header class="search-input">
                <p>
                    <a href="/" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['wap_logo'];?>
" ></a>
                </p>
                <p class="search-bg">
                    <input type="text" id="search-input" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='#333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
                    <a href="javascript:;" id="search-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/search.png"></a>
                </p>
        </header>
    </div>
    <!--------search----------->


    <!--grayline-->
    <div class="grayline  mt50"></div>
    <div class="title2 title-gre">
        <h2 class="fs16">大家都在搜：</h2>
    </div>
    <div class="all-search">
        <ul>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>4)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li style=" height:30px"><a  href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
<!--<span class="text-green icon-arrow-up"></span>--></a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div><span class="clear clearfix" ></span></div>
    </div>
    <div class="grayline"></div>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('search'=>$_smarty_tpl->tpl_vars['keywords']->value)); $_block_repeat=true; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="game">
        <div class="game-pic">
            <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" style="width: 72px;"/></a></div>
            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
            <ul>
                <li class="fs16 col-333"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</li>
                <li class="fs12 col-999"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
次下载<span class="m-none"> | <?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
M</span></li>
                <li class="fs12 col-666">
                    <span class="btn-s col-999"><?php echo $_smarty_tpl->tpl_vars['applist']->value['cname'];?>
</span>
                </li>
            </ul>
            </a>
            <p class="fs14 fr load"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="col-4FB0E4 btn-a">立即下载</a></p>
        </div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--whiteline-->
    <div class="white-line h50"></div>
    <!--foot-->
    <?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
</body>
</html>
<?php }
}
?>