<?php /* Smarty version 3.1.27, created on 2017-08-20 07:25:48
         compiled from "D:\wamp\www\templates\mobile_103\inc_top.php" */ ?>
<?php
/*%%SmartyHeaderCode:310325999397ce4aaf9_68797194%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c6b74c1f724a2b0a708f3d8ca0394632ef39c9' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_103\\inc_top.php',
      1 => 1500969782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310325999397ce4aaf9_68797194',
  'variables' => 
  array (
    'setting' => 0,
    'navicat' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5999397cee7c05_92597955',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5999397cee7c05_92597955')) {
function content_5999397cee7c05_92597955 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '310325999397ce4aaf9_68797194';
?>

    <div class="nav nav-red" id="section_nav">
        <a href="/" class="logo"><img width="78" height="52" src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['wap_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
" /></a>
        <header class="nav-tabs nav-tabs-red">
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array('row'=>4,'start'=>0)); $_block_repeat=true; echo smarty_block_navicat(array('row'=>4,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li  <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0) {?>class="cur"<?php }?>>
                    <a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
">
                        <?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>

                    </a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array('row'=>4,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </header>
    </div><?php }
}
?>