<?php /* Smarty version 3.1.27, created on 2017-08-20 04:59:42
         compiled from "D:\wamp\www\templates\mobile_104\list_recommend.php" */ ?>
<?php
/*%%SmartyHeaderCode:8815999173e2fdb22_29687926%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f4692502f32fb4c53f26b700a6b478864471bb' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_104\\list_recommend.php',
      1 => 1500971544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8815999173e2fdb22_29687926',
  'variables' => 
  array (
    'row' => 0,
    'setting' => 0,
    'tpl_path' => 0,
    'id' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5999173e3d2781_82145074',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5999173e3d2781_82145074')) {
function content_5999173e3d2781_82145074 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '8815999173e2fdb22_29687926';
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>4)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seotitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];
}?></title>
    <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seokey']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>" />
    <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seodesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>

<div class="container">
    <!--head-->
    <div class="search-head-bg">
        <header class="search-head">
            <h2>
                <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/fanhui.png" class="w7"></a>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>$_smarty_tpl->tpl_vars['id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>$_smarty_tpl->tpl_vars['id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a  class="fs24 col-fff"><?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
</a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>$_smarty_tpl->tpl_vars['id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <input type="hidden" id="search-input" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='#333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
                <a href="javascript:;" id="search-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/white-search.png" class="w14"></a>
            </h2>
        </header>
    </div>

    <div class="grayline mt50"></div>
    <div id="rankS" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>$_smarty_tpl->tpl_vars['id']->value,'row'=>10,'start'=>0)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>$_smarty_tpl->tpl_vars['id']->value,'row'=>10,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="game">
            <div class="game-pic">
                <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="72"/></a></div>
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                <ul>
                    <li class="fs14 col-333 g-title"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</li>
                    <li class="fs12 col-999"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载<span class="m-none"> | <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M</span></li>
                    <li class="fs12 col-666"><span class="btn-s col-999"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</span></li>
                </ul>
                </a>
                <p class="fs14 fr load"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="col-4FB0E4 btn-a">立即下载</a></p>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>$_smarty_tpl->tpl_vars['id']->value,'row'=>10,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <div class="more mb20">
        <p><a href="javascript:;" class="list-S"><<加载更多</a></p>
    </div>
</div>


<?php }
}
?>