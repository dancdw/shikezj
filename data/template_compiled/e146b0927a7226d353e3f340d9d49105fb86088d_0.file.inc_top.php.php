<?php /* Smarty version 3.1.27, created on 2017-08-20 00:53:00
         compiled from "D:\wamp\www\templates\mobile_102\inc_top.php" */ ?>
<?php
/*%%SmartyHeaderCode:105225998dd6c2bcfd1_31555949%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e146b0927a7226d353e3f340d9d49105fb86088d' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\inc_top.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105225998dd6c2bcfd1_31555949',
  'variables' => 
  array (
    'setting' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998dd6c2e36d6_30563599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998dd6c2e36d6_30563599')) {
function content_5998dd6c2e36d6_30563599 ($_smarty_tpl) {
if (!is_callable('smarty_block_keyword')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '105225998dd6c2bcfd1_31555949';
?>
<!--nav-->
<div class=" text-center nav-color elementwidth text-big padding-left padding-right" style="height: 40px">
    <div class="line">
        <div class="xl2 xs2 xm2 xb2 padding-small-top">
            <a href="/"><span class="icon-home text-white text-large"></span></a>
        </div>
        <div class="xl8 xs8 xm8 xb8 padding-small-top">
            <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['wap_logo'];?>
" style="width:80px;height:31px;"></a>
        </div>
        <div class="xl2 xs2 xm2 xb2 padding-small-top">
            <a href="javascript:void(0)" id="search"><span class="icon-search text-white" style="font-size: 20px"></span></a>
        </div>
    </div>
</div>
<div class="hidden" id="dialog" style="position:fixed;left:0;top:0;right:0;bottom:0;background:#FFFFFF;z-index:10;display:block;overflow-x:hidden;overflow-y:auto;">
    <div class="text-center elementwidth text-big padding-left padding-right bg-sub" style="height: 40px">
        <form id="search-form"   class="form-inline">
            <div class="line">
                <div class="xl2 xs2 xm2 xb2 margin-small-top">
                    <span class="icon-angle-left text-large text-white" id="close"></span>
                </div>
                <div class="xl8 xs8 xm8 xb8 margin-small-top">
                    <input type="text" class="input" value=""  data-url="/index.php?c=index&m=search" id="search-input" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" onkeydown="if(event.keyCode == 13) search_app()" name="keyword" placeholder="精品应用、海量搜索"  style="height: 30px">
                </div>
                <div class="xl2 xs2 xm2 xb2 margin-small-top">
                    <button type="button" id="search-btn" onclick="search_app()" class="button button-small bg"><span class="icon-search text-sub"></span></button>
                </div>
            </div>
        </form>
    </div>
    <div class="form-group">
        <div class="field">
            <div class="line">
                <p class="text-left">大家都在搜</p>
            </div>
            <ul class="list-inline height text-big">


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>4)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li style=" height:40px"><a  href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
<!--<span class="text-green icon-arrow-up"></span>--></a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
</div>
<!--banner--><?php }
}
?>