<?php /* Smarty version 3.1.27, created on 2017-08-20 07:25:48
         compiled from "D:\wamp\www\templates\mobile_103\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:238255999397cef94a4_66131587%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4e3eef522987d58897b31f73d3cc0ec2b988f27' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_103\\inc_menu.php',
      1 => 1500969782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238255999397cef94a4_66131587',
  'variables' => 
  array (
    'navicat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5999397d028049_13913524',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5999397d028049_13913524')) {
function content_5999397d028049_13913524 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '238255999397cef94a4_66131587';
?>
<section class="index-hotarea">

            <div class="bingo-wrapper">
                <ul class="pics" id="pics">
                </ul>
                <div class="msg">
                    <ul class="tabFn" id="tabFn"></ul>
                </div>
            </div>
            <div><span class="clear clearfix"></span></div>
            <ul class="index-tuiguang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array('row'=>4,'start'=>4)); $_block_repeat=true; echo smarty_block_navicat(array('row'=>4,'start'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li  <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1)) {?>
                        class="tuiguang-item tuiguang-bibei"
                     <?php } elseif (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 2)) {?>
                         class="tuiguang-item tuiguang-paihang"
                     <?php } elseif (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 3)) {?>
                        class="tuiguang-item tuiguang-zhuanti"
                     <?php } elseif (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 4)) {?>
                         class="tuiguang-item tuiguang-luntan"
                     <?php } else { ?>
                        class="tuiguang-item"
                     <?php }?>>

                    <a class="g-block" href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array('row'=>4,'start'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
                <div><span class="clear clearfix"></span></div>
                <ul class="index-tuiguang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array('row'=>4,'start'=>8)); $_block_repeat=true; echo smarty_block_navicat(array('row'=>4,'start'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li  <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1)) {?>
                    class="tuiguang-item tuiguang-luntan"
                     <?php } elseif (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 2)) {?>
                    class="tuiguang-item tuiguang-zhuanti"
                    <?php } elseif (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 3)) {?>
                    class="tuiguang-item tuiguang-paihang"
                     <?php } elseif (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 4)) {?>
                    class="tuiguang-item tuiguang-bibei"
                     <?php } else { ?>
                        class="tuiguang-item"
                     <?php }?>>

                    <a class="g-block" href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array('row'=>4,'start'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
</section>
<div><span class="clear clearfix"></span></div><?php }
}
?>