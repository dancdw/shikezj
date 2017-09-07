<?php /* Smarty version 3.1.27, created on 2017-08-20 04:33:33
         compiled from "D:\wamp\www\templates\mobile_102\list_info.php" */ ?>
<?php
/*%%SmartyHeaderCode:274145999111d1a63b2_58054864%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e680c4562a1c668a4b437fcc7bc277795cdbee9' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\list_info.php',
      1 => 1500538774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274145999111d1a63b2_58054864',
  'variables' => 
  array (
    'last_cate_id' => 0,
    'row' => 0,
    'keyword' => 0,
    'infolist' => 0,
    'infonav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5999111d26c755_40575099',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5999111d26c755_40575099')) {
function content_5999111d26c755_40575099 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_keyword')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_infolist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_block_infonav')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.infonav.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '274145999111d1a63b2_58054864';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <?php if ($_smarty_tpl->tpl_vars['last_cate_id']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['ckey'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];?>
"/>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>5)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];?>
"/>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<!--nav-->
<div class=" text-center nav-color elementwidth text-big padding-left padding-right" style="height: 40px">
    <div class="line">
        <div class="xl2 xs2 xm2 xb2">
            <a class="icon-angle-left text-large ellipsis" href="Javascript:history.go(-1);void(0);"></a>
        </div>
        <div class="xl8 xs8 xm8 xb8" style="height: 20px;overflow:hidden;margin-top: 8px">
            <span class="text-white text-big">资讯</span>
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
                    <input type="text" class="input" value="" name="keyword" placeholder="精品应用、海量搜索"
                           style="height: 30px" data-url="/index.php?c=index&m=search" id="search-input"
                           onkeydown="if(event.keyCode == 13) search_app()">
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


<!-- inner -->

<div class="container padding-left padding-right  padding-top  ">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="line padding-bottom">
        <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
">
            <div class="view-body">
                <div class="list-group">
                    <li class=" text-center">
                        <p class="text-big" style="height: 25px;overflow:hidden"> <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</p>
                    </li>
                    <li><p class="text-indent text-left text-small text-gray" style="height: 72px;overflow:hidden">
                            <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_desc'];?>
</p></li>
                    <li class=" text-center text-small text-gray">
                        <span><?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array()); $_block_repeat=true; echo smarty_block_infonav(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php if ($_smarty_tpl->tpl_vars['infolist']->value['last_cate_id'] == $_smarty_tpl->tpl_vars['infonav']->value['cate_id']) {
echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];
}?> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><span
                            class="text-gray">&nbsp;&nbsp;|&nbsp;&nbsp;</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['infolist']->value['info_update_time'],"%Y-%m-%d");?>
<span
                            class="text-gray">&nbsp;&nbsp;</span>
                    </li>
                    <li
                </div>
            </div>
        </a>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>


<!-- inner -->

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>