<?php /* Smarty version 3.1.27, created on 2017-08-29 12:24:44
         compiled from "D:\wamp\www\shikezj.cn\templates\template_001\list_info.php" */ ?>
<?php
/*%%SmartyHeaderCode:2949559a55d0c6c3384_15445988%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a52932f0f69f302e01797427c2c7d7d455966017' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\template_001\\list_info.php',
      1 => 1504009428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2949559a55d0c6c3384_15445988',
  'variables' => 
  array (
    'last_cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'infonav' => 0,
    'page' => 0,
    'infolist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a55d0c8b4c77_04492339',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a55d0c8b4c77_04492339')) {
function content_59a55d0c8b4c77_04492339 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_infonav')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.infonav.php';
if (!is_callable('smarty_block_infolist')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_pagebar')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.pagebar.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '2949559a55d0c6c3384_15445988';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php if ($_smarty_tpl->tpl_vars['last_cate_id']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>5)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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


        <div class="news-box">

            <!-- left -->
            <div class="left">
                <div class="left-title">
                    <h3 class="fl">资讯列表</h3>
                    <p class="fr">
                        <?php if (!$_smarty_tpl->tpl_vars['last_cate_id']->value) {?>
                        <a href="<?php echo smarty_function_link(array('m'=>'infos'),$_smarty_tpl);?>
" class="current">综合</a>
                        <?php } else { ?>
                        <a href="<?php echo smarty_function_link(array('m'=>'infos'),$_smarty_tpl);?>
">综合</a>
                        <?php }?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array()); $_block_repeat=true; echo smarty_block_infonav(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['last_cate_id']->value == $_smarty_tpl->tpl_vars['infonav']->value['cate_id']) {?>
                        <a href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>$_smarty_tpl->tpl_vars['infonav']->value['cate_id']),$_smarty_tpl);?>
" class="current"><?php echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];?>
</a>
                        <?php } else { ?>
                        <a href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>$_smarty_tpl->tpl_vars['infonav']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];?>
</a>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </p>
                </div>
                <div class="left-content">
                    <div class="news-top-detail">
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li>
                                <h2><?php if ($_smarty_tpl->tpl_vars['infolist']->value['info_url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_url'];?>
" target="_blank"><?php } else { ?><a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
"><?php }
echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a></h2>
                                <p><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_desc'];?>
</p>
                                <div class="">
                                    <?php if ($_smarty_tpl->tpl_vars['infolist']->value['info_url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_url'];?>
" target="_blank"><?php } else { ?><a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" class="read-more"><?php }?>
                                    [阅读全文]</a>
                                    <span>发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['infolist']->value['info_update_time'],"%Y-%m-%d");?>
</span>
                                </div>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <?php echo smarty_function_pagebar(array('name'=>'infolist','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10),$_smarty_tpl);?>

                </div>
                
            </div>
            <!-- left -->


            <!-- right -->
            <div class="col-right">
                <div class="infos">
                    <h2 class="block-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>40)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>40), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>40), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
                    <ul class="side-list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>5)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
下载" />
                            </a>
                            <p>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                                </a>
                                <br />
                                <span>下载：<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
 次</span>
                            </p>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="install-btn">下载</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                    <div class="clearfix" style="height:25px"></div>
                    <h2 class="block-title">装机必备</h2>
                    <ul class="side-list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>31,'row'=>5)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>31,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
下载" />
                            </a>
                            <p>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                                </a>
                                <br />
                                <span>下载：<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
 次</span>
                            </p>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="install-btn">下载</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>31,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
            <!--/ right -->

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