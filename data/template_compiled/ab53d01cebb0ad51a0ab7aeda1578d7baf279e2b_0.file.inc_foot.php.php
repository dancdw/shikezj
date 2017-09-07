<?php /* Smarty version 3.1.27, created on 2017-09-02 03:16:44
         compiled from "D:\wamp\www\templates\template_001\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:2558659aa229c54f0b3_30901865%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab53d01cebb0ad51a0ab7aeda1578d7baf279e2b' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_001\\inc_foot.php',
      1 => 1504321885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558659aa229c54f0b3_30901865',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa229c55c573_74579641',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa229c55c573_74579641')) {
function content_59aa229c55c573_74579641 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '2558659aa229c54f0b3_30901865';
?>
<div class="footer">
    <div class="copyright">
        <?php echo smarty_function_footer(array(),$_smarty_tpl);?>

        <a href="<?php echo smarty_function_link(array('m'=>'map'),$_smarty_tpl);?>
" class="ly-amap">网站地图</a>
    </div>
</div>
<?php echo smarty_function_countcode(array(),$_smarty_tpl);

}
}
?>