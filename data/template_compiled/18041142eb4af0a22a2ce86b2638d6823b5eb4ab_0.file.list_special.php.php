<?php /* Smarty version 3.1.27, created on 2017-08-24 05:24:59
         compiled from "D:\wamp\www\shikezj.cn\templates\template_001\list_special.php" */ ?>
<?php
/*%%SmartyHeaderCode:22764599e632b647122_37966655%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18041142eb4af0a22a2ce86b2638d6823b5eb4ab' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\template_001\\list_special.php',
      1 => 1497861920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22764599e632b647122_37966655',
  'variables' => 
  array (
    'row' => 0,
    'setting' => 0,
    'list' => 0,
    'special' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_599e632b772d92_60506314',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599e632b772d92_60506314')) {
function content_599e632b772d92_60506314 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_special')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.special.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '22764599e632b647122_37966655';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>6)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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


        <!-- special-item -->
        <ul class="app-box clearfix">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'special')); $_block_repeat=true; echo smarty_block_list(array('name'=>'special'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="card special-card normal">
                <div class="special-info">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a class="special-icon" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
" />
                    </a>
                    <div class="special-meta">
                        <span><?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
</span>
                        <a class="see-btn" target="_blank" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">查看</a>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <ul class="s-applist">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('special', array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'],'row'=>6)); $_block_repeat=true; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'],'row'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li class="special-three">
                        <div class="icon-wrap">
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['special']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="icon" />
                            </a>
                        </div>
                        <div class="app-desc">
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="name">
                                <?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>

                            </a>
                            <div class="meta">
                                <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['special']->value['app_down'];?>
 人安装</span>
                                <span class="dot"></span>
                                <span title="<?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
</span>
                            </div>
                        </div>
                        <a class="install-btn" style="display:block;" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" >下载</a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'],'row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'special'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <!--/ special-item -->
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