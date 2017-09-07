<?php /* Smarty version 3.1.27, created on 2017-08-20 00:53:00
         compiled from "D:\wamp\www\templates\mobile_102\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:72435998dd6c77ea14_27378357%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805545063f13e22e3bc1d0c9eca004682b095773' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\inc_menu.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72435998dd6c77ea14_27378357',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998dd6c7bf150_40324331',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998dd6c7bf150_40324331')) {
function content_5998dd6c7bf150_40324331 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '72435998dd6c77ea14_27378357';
?>
<div class="text-center bg-white elementwidth foot-title padding-small-top border-top border-gray" style="position:fixed;bottom:0;z-index: 11;" id="foot">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array('row'=>4,'start'=>0)); $_block_repeat=true; echo smarty_block_navicat(array('row'=>4,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="xl3 xs3 xm3 xb3">
        <a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
">
            <div <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || (strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0 && substr($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],0,4) != 'http')) {?>
            class="icon-color"
            <?php }?> >
                <i class="nav-icon nav-<?php echo $_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'];?>
"></i>
                <p class="height-little margin-small-bottom text-small">
                    <?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>

                    <span></span>
                </p>
            </div>

        </a>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array('row'=>4,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }
}
?>