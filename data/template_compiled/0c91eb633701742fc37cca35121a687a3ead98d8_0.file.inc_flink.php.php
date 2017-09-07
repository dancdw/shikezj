<?php /* Smarty version 3.1.27, created on 2017-09-02 03:57:47
         compiled from "D:\wamp\www\templates\template_001\inc_flink.php" */ ?>
<?php
/*%%SmartyHeaderCode:1376759aa2c3bea3089_57966182%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c91eb633701742fc37cca35121a687a3ead98d8' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_001\\inc_flink.php',
      1 => 1504321885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1376759aa2c3bea3089_57966182',
  'variables' => 
  array (
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa2c3bed1d47_39152643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa2c3bed1d47_39152643')) {
function content_59aa2c3bed1d47_39152643 ($_smarty_tpl) {
if (!is_callable('smarty_block_friendlink')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '1376759aa2c3bea3089_57966182';
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