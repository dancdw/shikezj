<?php /* Smarty version 3.1.27, created on 2017-09-02 03:16:44
         compiled from "D:\wamp\www\templates\template_001\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:2320759aa229c404c47_67851367%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d7b95357d919a52233b7580d371134c041c4daf' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_001\\inc_head.php',
      1 => 1504321885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2320759aa229c404c47_67851367',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa229c413474_82698155',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa229c413474_82698155')) {
function content_59aa229c413474_82698155 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2320759aa229c404c47_67851367';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
<meta name="robots" content="all" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/responsiveslides.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/slide.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $("#j-nav-btn").click(function(){
            $("#j-head-menu").show();
            $(".mask").show();
        });
    });
    $(function(){
        $(".mask").click(function(){
            $(this).hide();
            $("#j-head-menu").hide();
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
> 
   (function() {
     if (!/*@cc_on!@*/0) return;
     var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');
     var i= e.length;
     while (i--){
         document.createElement(e[i])
     } 
})() 
<?php echo '</script'; ?>
>
<?php }
}
?>