<?php /* Smarty version 3.1.27, created on 2017-09-04 06:56:54
         compiled from "D:\wamp\www\shikezj.cn\templates\template_001\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:1510159acf936b562b9_97916314%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7184a5c5b848473a48c9202da58b00f4aa3f9892' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\template_001\\inc_foot.php',
      1 => 1504009430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510159acf936b562b9_97916314',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59acf936b79166_48550015',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59acf936b79166_48550015')) {
function content_59acf936b79166_48550015 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '1510159acf936b562b9_97916314';
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