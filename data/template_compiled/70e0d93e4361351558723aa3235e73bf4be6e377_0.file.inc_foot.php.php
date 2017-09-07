<?php /* Smarty version 3.1.27, created on 2017-08-21 04:50:44
         compiled from "D:\wamp\www\shikezj\templates\template_001\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:20756599a66a4ce6870_63854915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e0d93e4361351558723aa3235e73bf4be6e377' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj\\templates\\template_001\\inc_foot.php',
      1 => 1497861920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20756599a66a4ce6870_63854915',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_599a66a4cf4198_43865103',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599a66a4cf4198_43865103')) {
function content_599a66a4cf4198_43865103 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'D:\\wamp\\www\\shikezj\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'D:\\wamp\\www\\shikezj\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '20756599a66a4ce6870_63854915';
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