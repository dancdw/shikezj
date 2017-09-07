<?php /* Smarty version 3.1.27, created on 2017-08-20 02:05:48
         compiled from "D:\wamp\www\templates\template_002\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:11925998ee7cd8caa1_21568626%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82c30d380daac14da2e096e7b8f468c6d583d61a' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_002\\inc_head.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11925998ee7cd8caa1_21568626',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998ee7cd98e21_74306190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998ee7cd98e21_74306190')) {
function content_5998ee7cd98e21_74306190 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11925998ee7cd8caa1_21568626';
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css" rel="stylesheet"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/android.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery.prettyphoto.js" ><?php echo '</script'; ?>
>
<?php }
}
?>