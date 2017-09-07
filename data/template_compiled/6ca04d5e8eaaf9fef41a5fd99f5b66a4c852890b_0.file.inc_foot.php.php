<?php /* Smarty version 3.1.27, created on 2017-08-20 02:05:49
         compiled from "D:\wamp\www\templates\template_002\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:211595998ee7d2cba87_58813827%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ca04d5e8eaaf9fef41a5fd99f5b66a4c852890b' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_002\\inc_foot.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211595998ee7d2cba87_58813827',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998ee7d2dc5d8_32683714',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998ee7d2dc5d8_32683714')) {
function content_5998ee7d2dc5d8_32683714 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '211595998ee7d2cba87_58813827';
?>
<div id="footer">
    <div class="f_content">
        <div class="f_nav">
            <p class="f_copyright">
                <?php echo smarty_function_footer(array(),$_smarty_tpl);?>

                <a href="<?php echo smarty_function_link(array('m'=>'site_map'),$_smarty_tpl);?>
" class="ly-amap">网站地图</a>
            </p>
        </div>
    </div>
</div>
<?php echo smarty_function_countcode(array(),$_smarty_tpl);?>


</body>
</html>
<?php }
}
?>