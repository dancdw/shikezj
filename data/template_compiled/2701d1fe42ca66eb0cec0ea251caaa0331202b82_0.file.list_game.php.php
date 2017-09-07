<?php /* Smarty version 3.1.27, created on 2017-08-24 05:25:12
         compiled from "D:\wamp\www\shikezj.cn\templates\template_001\list_game.php" */ ?>
<?php
/*%%SmartyHeaderCode:14256599e63385d7159_59295339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2701d1fe42ca66eb0cec0ea251caaa0331202b82' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\template_001\\list_game.php',
      1 => 1497861920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14256599e63385d7159_59295339',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'appnav' => 0,
    'page' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_599e633877ad10_72487964',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599e633877ad10_72487964')) {
function content_599e633877ad10_72487964 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_appnav')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_applist')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_pagebar')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '14256599e63385d7159_59295339';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <title><?php if ($_smarty_tpl->tpl_vars['row']->value['ctitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];
}?></title>
        <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['ckey']) {
echo $_smarty_tpl->tpl_vars['row']->value['ckey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>" />
        <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['cdesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>" />
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>3)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <title><?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seotitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];
}?></title>
        <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seokey']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>" />
        <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seodesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>" />
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>

<div class="apps PC">

    <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <!-- fl -->
        <span class="block-title">类别</span>
        <ul class="fl-item">
            <li>
                <a href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
">全部</a>
            </li>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>2)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>

                </a>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <!--/ fl -->

        <div class="app-box">
            <?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <span class="block-title"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } else { ?>
            <span class="block-title">全部游戏</span>
            <?php }?>
            <ul id="j-wc-rect" class="wc-rect clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'parent'=>2,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>15,'per_page'=>15)); $_block_repeat=true; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'parent'=>2,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>15,'per_page'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="card" >
                    <div class="icon-wrap">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" class="icon" />
                        </a>
                    </div>
                    <div class="app-desc">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" class="name">
                            <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>

                        </a>
                        <div class="meta">
                            <a class="tag-link" href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['applist']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['applist']->value['cname'];?>
</a>
                            <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_down'];?>
 人安装</span>
                            <span class="dot"></span>
                            <span title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['applist']->value['history_size'];?>
</span>
                        </div>
                        <div class="comment">
                            <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_desc'];?>

                        </div>
                    </div>
                    <a class="install-btn" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">下载</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'parent'=>2,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>15,'per_page'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <?php echo smarty_function_pagebar(array('name'=>'applist','page'=>$_smarty_tpl->tpl_vars['page']->value,'parent'=>2,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>15,'per_page'=>15),$_smarty_tpl);?>

        </div>
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</body>
</html><?php }
}
?>