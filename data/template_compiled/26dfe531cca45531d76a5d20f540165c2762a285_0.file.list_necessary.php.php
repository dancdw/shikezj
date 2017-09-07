<?php /* Smarty version 3.1.27, created on 2017-09-02 12:14:04
         compiled from "D:\wamp\www\templates\template_001\list_necessary.php" */ ?>
<?php
/*%%SmartyHeaderCode:1161759aaa08c02aaf6_51671553%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26dfe531cca45531d76a5d20f540165c2762a285' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_001\\list_necessary.php',
      1 => 1504321885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161759aaa08c02aaf6_51671553',
  'variables' => 
  array (
    'row' => 0,
    'setting' => 0,
    'necessary_type' => 0,
    'list' => 0,
    'page' => 0,
    'necessary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aaa08c13ee60_11146175',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aaa08c13ee60_11146175')) {
function content_59aaa08c13ee60_11146175 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_necessary')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.necessary.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_pagebar')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '1161759aaa08c02aaf6_51671553';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>4)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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


        <!-- necessary-item -->
        <div class="app-box">
            <ul class="switch-tab">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary')); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li <?php if ((isset($_smarty_tpl->tpl_vars['necessary_type']->value) && $_smarty_tpl->tpl_vars['necessary_type']->value == $_smarty_tpl->tpl_vars['list']->value['necessary_type']) || ($_smarty_tpl->tpl_vars['necessary_type']->value == 0 && $_smarty_tpl->tpl_vars['list']->value['special_sort_show'] == 1)) {?> class="current"<?php }?>id="type_game"><a href="<?php echo smarty_function_link(array('m'=>'necessaries','necessary_type'=>$_smarty_tpl->tpl_vars['list']->value['necessary_type']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['necessary_title'];?>
</a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>

            <div class="switch-div" id="switch-div-soft">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value)); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="app-essential clearfix">
                    <span class="block-title"><?php echo $_smarty_tpl->tpl_vars['list']->value['necessary_title'];?>
</span>
                    <ul class="app-essential clearfix">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('necessary', array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>21)); $_block_repeat=true; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>21), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="small card">
                            <div class="icon-wrap">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['necessary']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68" alt="<?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
" class="icon" />
                                </a>
                            </div>
                            <div class="app-desc">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
" class="name">
                                    <?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>

                                </a>
                                <div class="meta">
                                    <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_down'];?>
 人下载</span>
                                    <span class="dot"> </span>
                                    <span title="<?php echo $_smarty_tpl->tpl_vars['necessary']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['necessary']->value['history_size'];?>
</span>
                                </div>
                            </div>
                            <a class="install-btn" rel="nofollow" style="display:block;" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
">下载</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>21), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                    <?php echo smarty_function_pagebar(array('name'=>'necessary_list','id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'type'=>$_smarty_tpl->tpl_vars['necessary_type']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>21),$_smarty_tpl);?>

                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

        </div>
        <!--/ necessary-item -->
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