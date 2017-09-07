<?php /* Smarty version 3.1.27, created on 2017-08-20 00:52:59
         compiled from "D:\wamp\www\templates\mobile_102\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:46685998dd6b4197c6_49463696%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '443b11ed3937b8da8cc6a8a0aec14498661461f7' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\inc_head.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46685998dd6b4197c6_49463696',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998dd6b427ad5_60311435',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998dd6b427ad5_60311435')) {
function content_5998dd6b427ad5_60311435 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46685998dd6b4197c6_49463696';
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/swiper.3.1.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function build_url_js(c, m, arg, d, rewrite) {
        var c = c.toLowerCase();
        var url = {};
        var build = '';
        var query = '';
        if (rewrite == 1) {
            var keywords = arg.keywords;
            return "/search/?keywords=" + encodeURI(keywords);
        }
        if (d != undefined) {
            $.extend(url, {"d": d});
        }
        if (c != undefined) {
            $.extend(url, {"c": c});
        }
        if (m != undefined) {
            $.extend(url, {"m": m});
        }
        if (typeof arg == 'object') {
            $.extend(url, arg);
        }
        query = $.param(url);
        if (query.length > 0) {
            query = '?' + query;
        }
        build = "/index.php" + query;
        return build;
    }
    function search_app(){
        if ($('#search-input').val() != '') {
            window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
            // window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
        }
    }
<?php echo '</script'; ?>
>
<?php }
}
?>