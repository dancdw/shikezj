<?php /* Smarty version 3.1.27, created on 2017-08-20 04:42:43
         compiled from "D:\wamp\www\templates\mobile_101\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:1856459991343ec24a0_72011319%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd512a8bb6ab328c0054e1e57e67e5d61a3eea8b' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_101\\inc_head.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1856459991343ec24a0_72011319',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59991343ecd828_10575646',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59991343ecd828_10575646')) {
function content_59991343ecd828_10575646 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1856459991343ec24a0_72011319';
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/TouchSlide.1.1.js"><?php echo '</script'; ?>
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
    $(function(){
        $('#search-btn').click(function(){
            window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
            // window.location = $('#search-form').attr('action') + "&keywords=" + $('#search-input').val();
        });
    });
<?php echo '</script'; ?>
>



<?php }
}
?>