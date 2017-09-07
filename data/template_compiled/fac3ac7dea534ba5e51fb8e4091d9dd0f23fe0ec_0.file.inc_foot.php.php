<?php /* Smarty version 3.1.27, created on 2017-08-20 00:53:00
         compiled from "D:\wamp\www\templates\mobile_102\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:56725998dd6c7cf976_41863033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac3ac7dea534ba5e51fb8e4091d9dd0f23fe0ec' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\inc_foot.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56725998dd6c7cf976_41863033',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998dd6c7d2861_90485259',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998dd6c7d2861_90485259')) {
function content_5998dd6c7d2861_90485259 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56725998dd6c7cf976_41863033';
?>
<?php echo '<script'; ?>
>
    var height= $(window).height();
    $('#search').click(function(){
        $('#dialog').removeClass('hidden');
        $('#dialog').height(height);
    });
    $('#close').click(function(){
        $('#dialog').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    //banner
    var swiper = new Swiper('.swiper-container', {
        loop:true,
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>