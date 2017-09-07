<?php /* Smarty version 3.1.27, created on 2017-08-20 02:26:34
         compiled from "D:\wamp\www\templates\template_002\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:152225998f35a5e46a3_76177501%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbbc32ee15e3df3a4fcb16d084bc16b8bbf03e83' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_002\\inc_menu.php',
      1 => 1503195783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152225998f35a5e46a3_76177501',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
    'app_type_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998f35a749721_88368903',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998f35a749721_88368903')) {
function content_5998f35a749721_88368903 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '152225998f35a5e46a3_76177501';
?>
<div class="layout">
   

    <ul class="erjinavbox clearfix">

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <li>
            <a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
"
            <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0) {?>
            class="sydangqian"
            <?php } elseif (isset($_smarty_tpl->tpl_vars['app_type_id']->value) && $_smarty_tpl->tpl_vars['app_type_id']->value == $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_packs') {?>
            class="sydangqian"
            <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_info' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_info') {?>
            class="sydangqian"
            <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value == 'open_service') {?>
            class="sydangqian"
            <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value == 'open_packs') {?>
            class="sydangqian"
            <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_special' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_special') {?>
            class="sydangqian"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_blank'] == 1) {?>
            target="_blank"
            <?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>

            </a>
        </li>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

</div><?php }
}
?>