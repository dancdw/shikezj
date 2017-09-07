<?php /* Smarty version 3.1.27, created on 2017-08-20 04:42:43
         compiled from "D:\wamp\www\templates\mobile_101\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:2831159991343dd5533_22760579%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598927c749a965371e5c248ae50d6b1a28503217' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_101\\content_app.php',
      1 => 1500535122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2831159991343dd5533_22760579',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'row' => 0,
    'imagelist' => 0,
    'relevant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59991343eb5043_51633103',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59991343eb5043_51633103')) {
function content_59991343eb5043_51633103 ($_smarty_tpl) {
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_imagelist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_block_relevant')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.relevant.php';

$_smarty_tpl->properties['nocache_hash'] = '2831159991343dd5533_22760579';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <?php if ($_smarty_tpl->tpl_vars['app']->value['app_stitle']) {?>
    <title><?php echo $_smarty_tpl->tpl_vars['app']->value['app_stitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_seodesc'];?>
" />
    <?php } else { ?>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
" />
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<!--header-->
<div class="header">
    <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['wap_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
" height="55"/></a>
    <a class="back icon-ic_back1-01" href="javascript:history.back();"></a>
</div>


<div class="appAttr">
    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
">

    <h3><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</h3>

    <p class="yijuhua"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_seodesc'];?>
</p>

    <p class="biaoshi">
        <span><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
次下载</span>
    </p>
</div>
<ul class="dlDiv">

    <li>
        <p>
            <a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" class="jisu"><i class="icon-ic_down_fast-01"></i><span>极速下载</span></a>
        </p>
    </li>

</ul>
<ul class="appSize">
    <li>
        <span>版本：</span><i class="cssI"><?php echo $_smarty_tpl->tpl_vars['app']->value['history_version'];?>
</i>
    </li>
    <li>
        <span>大小：</span><i><?php echo round($_smarty_tpl->tpl_vars['app']->value['history_size']/1024/1024,2);?>
MB</i>
    </li>
    <li>
        <span>类型：</span><i><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['cname'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</i>
    </li>
    <li>
        <span>更新：</span><i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['app']->value['app_update_time'],"%Y-%m-%d");?>
</i>
    </li>
    <li>
        <span>开发者：</span><i><?php echo $_smarty_tpl->tpl_vars['app']->value['app_company'];?>
</i>
    </li>
</ul>
<div class="hd">
    <h2>
        游戏截图
    </h2>
</div>
<hr class="line2">
<div class="appImg clearf">
    <div class="img">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <img src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
"/>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<hr class="line">
<div class="hd">
    <h2>
        游戏介绍
    </h2>
</div>
<hr class="line2">
<div class="appInfo details-item-r-text">
    <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

</div>
<div class="controller">
    <span id="btn_open">展开</span>
</div>
<div class="hd">
    <h2>
        相似推荐
    </h2>
</div>
<hr class="line">
<hr class="line2">
<ul class="tuiApp">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>3,'order'=>'app_down desc')); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>3,'order'=>'app_down desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" >
            <img class="lazy" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
">
            <h3><?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
</h3>
        </a>
    </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>3,'order'=>'app_down desc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>
<!--footer-->

<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
    $(function(){
        $("#btn_open").toggle(function(){
            $(this).addClass("close");
            $(".details-item-r-text").addClass("current_detail");
        },function(){
            $(this).removeClass("close");
            $(".details-item-r-text").removeClass("current_detail");
        });//详情隐藏

    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>