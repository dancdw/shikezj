<?php /* Smarty version 3.1.27, created on 2017-08-20 04:43:19
         compiled from "D:\wamp\www\templates\mobile_105\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:3031559991367ed23b9_88200545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e955beee39edf447b4486506b0ff97370d0a3be3' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_105\\inc_foot.php',
      1 => 1500971544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3031559991367ed23b9_88200545',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
    'app_type_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5999136803a259_47700948',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5999136803a259_47700948')) {
function content_5999136803a259_47700948 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '3031559991367ed23b9_88200545';
?>
<div class="foot-bg">
    <footer class="foot">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array('row'=>3,'start'=>0)); $_block_repeat=true; echo smarty_block_navicat(array('row'=>3,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <dl <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0) {?>
        class="get-<?php echo $_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'];?>
"
        <?php } elseif (isset($_smarty_tpl->tpl_vars['app_type_id']->value) && $_smarty_tpl->tpl_vars['app_type_id']->value == $_smarty_tpl->tpl_vars['navicat']->value['navicat_m']) {?>
        class="get-<?php echo $_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'];?>
"
        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_info' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_info') {?>
        class="get-<?php echo $_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'];?>
"
        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_special' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_special') {?>
        class="get-<?php echo $_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'];?>
"
        <?php } else { ?>
        class=""
        <?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_id'] == 7) {?>
        <dt class="f-com f-index"><a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
" class="btn-a"></a></dt>
        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_id'] == 2) {?>
        <dt class="f-com f-ruanjian"><a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
" class="btn-a"></a></dt>
        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_id'] == 3) {?>
        <dt class="f-com f-game"><a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
" class="btn-a"></a></dt>
        <?php }?>
        <dd><a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</a></dd>
        </dl>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array('row'=>3,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array('row'=>1,'start'=>5)); $_block_repeat=true; echo smarty_block_navicat(array('row'=>1,'start'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <dl <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 6 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0) {?>
        class="get-8"
        <?php } else { ?>
        class=""
        <?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_id'] == 6) {?>
        <dt class="f-com f-range"><a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
" class="btn-a"></a></dt>
        <?php }?>
        <dd><a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</a></dd>
        </dl>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array('row'=>1,'start'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </footer>
</div><?php }
}
?>