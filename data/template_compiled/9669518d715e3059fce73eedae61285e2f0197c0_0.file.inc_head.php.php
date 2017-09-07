<?php /* Smarty version 3.1.27, created on 2017-08-21 04:50:44
         compiled from "D:\wamp\www\shikezj\templates\template_001\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:2689599a66a4acaa03_65825338%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9669518d715e3059fce73eedae61285e2f0197c0' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj\\templates\\template_001\\inc_head.php',
      1 => 1497605184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2689599a66a4acaa03_65825338',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_599a66a4ad6cd5_78464065',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599a66a4ad6cd5_78464065')) {
function content_599a66a4ad6cd5_78464065 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2689599a66a4acaa03_65825338';
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