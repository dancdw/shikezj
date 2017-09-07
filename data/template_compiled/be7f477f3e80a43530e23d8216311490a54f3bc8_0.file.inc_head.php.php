<?php /* Smarty version 3.1.27, created on 2017-09-02 10:41:04
         compiled from "D:\wamp\www\templates\mobile_105\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:1095659aa8ac0b51c81_59875862%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7f477f3e80a43530e23d8216311490a54f3bc8' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_105\\inc_head.php',
      1 => 1504321881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1095659aa8ac0b51c81_59875862',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa8ac0b61ff1_00919804',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa8ac0b61ff1_00919804')) {
function content_59aa8ac0b61ff1_00919804 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1095659aa8ac0b51c81_59875862';
?>
<!--申明当前页面的编码集-->
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<!--禁止自动识别电话号码-->
<meta name="format-detection" content="telephone=no" />
<!--uc字体问题-->
<meta name="wap-font-scale" content="no">
<!--禁止自动识别邮箱-->
<meta content="email=no" name="format-detection" />
<!--iphone中safari私有meta标签,允许全屏模式浏览,隐藏浏览器导航栏-->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!--iphone中safari顶端的状态条的样式black(黑色)-->
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="shortcut icon" type="image/png" href="/icon.png">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jietu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/Web.js"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/base.css" rel="stylesheet" /><?php }
}
?>