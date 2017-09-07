<?php /* Smarty version 3.1.27, created on 2017-09-04 06:56:51
         compiled from "D:\wamp\www\shikezj.cn\templates\template_001\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:915359acf933a4d543_83446963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1d4d2acbb85bb292199c27221eede44eb84c4ab' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\template_001\\index.php',
      1 => 1504009430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '915359acf933a4d543_83446963',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'infolist' => 0,
    'row' => 0,
    'recommend' => 0,
    'special' => 0,
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59acf934115258_13914984',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59acf934115258_13914984')) {
function content_59acf934115258_13914984 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_infolist')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_special')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.special.php';
if (!is_callable('smarty_block_friendlink')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '915359acf933a4d543_83446963';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<div class="apps PC">
    <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container">
        <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!-- banner -->
        <div class="banner">
            <div class="banner-l">
                <div class="slide_container">
                    <ul class="rslides" id="slider">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
" />
                            </a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
            <div class="news-item">
                <div class="news-item-title">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>2,'row'=>1)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>2,'row'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="big-tit">
                        <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank">
                            <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>

                        </a>
                    </div>
                    <div class="big-art">
                        <p>
                            <?php if (count($_smarty_tpl->tpl_vars['infolist']->value['info_desc']) > 1) {?>
                            <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_desc'];?>

                            <?php } else { ?>
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['infolist']->value['info_body'],60,'...');?>

                            <?php }?>
                            <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank">[详细]</a>
                        </p>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>2,'row'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <div class="news-item-content">
                    <ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>4,'row'=>3)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>4,'row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="public-icon">
                            <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank">
                                <?php echo mb_substr($_smarty_tpl->tpl_vars['infolist']->value['info_title'],0,23,'utf-8');?>

                            </a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>4,'row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- banner -->
        <div><span class="clear clearfix"></span></div>
        <div class="app-box">
            <span class="block-title">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>40)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>40), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>40), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
            <ul class="wc-rect clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="card" >
                    <div class="icon-wrap">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" class="icon" />
                        </a>
                    </div>
                    <div class="app-desc">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" class="name">
                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                        </a>
                        <div class="meta">
                            <?php if ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 1) {?>
                            <a class="tag-link" target="_blank" href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 2) {?>
                            <a class="tag-link" target="_blank" href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php }?>
                            <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
 人安装</span>
                            <span class="dot"></span>
                            <span title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['history_size'];?>
</span>
                        </div>
                        <div class="comment">
                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_desc'];?>

                        </div>
                    </div>
                    <a class="install-btn" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">下载</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <span class="block-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>30)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
            <ul class="wc-rect clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>30,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>30,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="card" >
                    <div class="icon-wrap">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" class="icon" />
                        </a>
                    </div>
                    <div class="app-desc">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" class="name">
                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                        </a>
                        <div class="meta">
                            <?php if ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 1) {?>
                            <a class="tag-link" target="_blank" href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 2) {?>
                            <a class="tag-link" target="_blank" href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php }?>
                            <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
 人安装</span>
                            <span class="dot"></span>
                            <span title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['history_size'];?>
</span>
                        </div>
                        <div class="comment">
                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_desc'];?>

                        </div>
                    </div>
                    <a class="install-btn" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">下载</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>30,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <span class="block-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>31)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>31), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>31), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
            <ul class="wc-rect clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>31,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>31,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="card" >
                    <div class="icon-wrap">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" class="icon" />
                        </a>
                    </div>
                    <div class="app-desc">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" class="name">
                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                        </a>
                        <div class="meta">
                            <?php if ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 1) {?>
                            <a class="tag-link" target="_blank" href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 2) {?>
                            <a class="tag-link" target="_blank" href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php }?>
                            <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
 人安装</span>
                            <span class="dot"></span>
                            <span title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['history_size'];?>
</span>
                        </div>
                        <div class="comment">
                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_desc'];?>

                        </div>
                    </div>
                    <a class="install-btn" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">下载</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>31,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <a class="block-title" href="#">精品专题</a>
            <ul class="app-box clearfix">
                <li class="card special-card normal">
                    <div class="special-info">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'special','id'=>31)); $_block_repeat=true; echo smarty_block_row(array('name'=>'special','id'=>31), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="special-icon" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
" />
                        </a>
                        <div class="special-meta">
                            <span><?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
</span>
                            <a class="see-btn" target="_blank" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">查看</a>
                        </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'special','id'=>31), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                    <ul class="s-applist">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('special', array('id'=>31,'row'=>4)); $_block_repeat=true; echo smarty_block_special(array('id'=>31,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="special-three">
                            <div class="icon-wrap">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['special']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="icon" />
                                </a>
                            </div>
                            <div class="app-desc">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="name">
                                    <?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>

                                </a>
                                <div class="meta">
                                    <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['special']->value['app_down'];?>
 人安装</span>
                                    <span class="dot"></span>
                                    <span title="<?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
</span>
                                </div>
                            </div>
                            <a class="install-btn" style="display:block;" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" >下载</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_special(array('id'=>31,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </li>
                <li class="card special-card normal">
                    <div class="special-info">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'special','id'=>32)); $_block_repeat=true; echo smarty_block_row(array('name'=>'special','id'=>32), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="special-icon" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
" />
                        </a>
                        <div class="special-meta">
                            <span><?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
</span>
                            <a class="see-btn" target="_blank" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">查看</a>
                        </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'special','id'=>32), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                    <ul class="s-applist">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('special', array('id'=>32,'row'=>4)); $_block_repeat=true; echo smarty_block_special(array('id'=>32,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="special-three">
                            <div class="icon-wrap">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['special']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="icon" />
                                </a>
                            </div>
                            <div class="app-desc">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="name">
                                    <?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>

                                </a>
                                <div class="meta">
                                    <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['special']->value['app_down'];?>
 人安装</span>
                                    <span class="dot"></span>
                                    <span title="<?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
</span>
                                </div>
                            </div>
                            <a class="install-btn" style="display:block;" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" >下载</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_special(array('id'=>32,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </li>
                <li class="card special-card normal">
                    <div class="special-info">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'special','id'=>33)); $_block_repeat=true; echo smarty_block_row(array('name'=>'special','id'=>33), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="special-icon" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
" />
                        </a>
                        <div class="special-meta">
                            <span><?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
</span>
                            <a class="see-btn" target="_blank" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">查看</a>
                        </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'special','id'=>33), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                    <ul class="s-applist">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('special', array('id'=>33,'row'=>4)); $_block_repeat=true; echo smarty_block_special(array('id'=>33,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="special-three">
                            <div class="icon-wrap">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['special']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="icon" />
                                </a>
                            </div>
                            <div class="app-desc">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="name">
                                    <?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>

                                </a>
                                <div class="meta">
                                    <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['special']->value['app_down'];?>
 人安装</span>
                                    <span class="dot"></span>
                                    <span title="<?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
</span>
                                </div>
                            </div>
                            <a class="install-btn" style="display:block;" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" >下载</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_special(array('id'=>33,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- f-link -->
<div class="f-link">
    <span>友情链接：</span>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>1)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</a>
    <?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">
        <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
" />
        <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>

    </a>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<!-- f-link -->
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>