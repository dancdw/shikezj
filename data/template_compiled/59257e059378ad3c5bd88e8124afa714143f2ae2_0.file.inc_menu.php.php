<?php /* Smarty version 3.1.27, created on 2017-09-02 03:16:44
         compiled from "D:\wamp\www\templates\template_001\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:1510159aa229c45c242_33758012%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59257e059378ad3c5bd88e8124afa714143f2ae2' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_001\\inc_menu.php',
      1 => 1504321886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510159aa229c45c242_33758012',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa229c493268_01232734',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa229c493268_01232734')) {
function content_59aa229c493268_01232734 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '1510159aa229c45c242_33758012';
?>
<div id="j-head-menu" class="menu-list pc-main-menu">
    <ul class="parent-menu">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class=<?php if (($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == $_smarty_tpl->tpl_vars['current_page']->value)) {?>"nav-item2"<?php } else { ?>"nav-item"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_blank'] == 1) {?>
            <a class="first-link" href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
" target="_blank">
                <span><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</span>
            </a>
            <?php } else { ?>
            <a class="first-link" href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
">
                <span><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</span>
            </a>
            <?php }?>
        </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>
<div class="mask" id="j-mask"></div>
<?php }
}
?>