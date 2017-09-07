<?php /* Smarty version 3.1.27, created on 2017-08-29 12:24:38
         compiled from "D:\wamp\www\shikezj.cn\templates\template_001\inc_flink.php" */ ?>
<?php
/*%%SmartyHeaderCode:2340059a55d063abda3_77103420%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2589081507b53f312b10dff2941a2afcdd98534a' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\template_001\\inc_flink.php',
      1 => 1504009428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2340059a55d063abda3_77103420',
  'variables' => 
  array (
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a55d063dec50_37562025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a55d063dec50_37562025')) {
function content_59a55d063dec50_37562025 ($_smarty_tpl) {
if (!is_callable('smarty_block_friendlink')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '2340059a55d063abda3_77103420';
?>
<!-- f-link -->
<div class="f-link">
    <span>友情链接：</span>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>2)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</a>
    <?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">
        <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
" />
        <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>

    </a>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<!-- f-link --><?php }
}
?>