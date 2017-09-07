<?php /* Smarty version 3.1.27, created on 2017-08-29 12:24:37
         compiled from "D:\wamp\www\shikezj.cn\templates\template_001\content_info.php" */ ?>
<?php
/*%%SmartyHeaderCode:1191559a55d0519d684_58272504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '447d45f4038258ae0082905445471fe73c1bdd5f' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\template_001\\content_info.php',
      1 => 1504009428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1191559a55d0519d684_58272504',
  'variables' => 
  array (
    'info' => 0,
    'setting' => 0,
    'comment_code' => 0,
    'last_cate_id' => 0,
    'infolist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a55d052f9a82_87129308',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a55d052f9a82_87129308')) {
function content_59a55d052f9a82_87129308 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_commentcode')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.commentcode.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_infolist')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '1191559a55d0519d684_58272504';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php if ($_smarty_tpl->tpl_vars['info']->value['info_title']) {?>
    <title><?php echo $_smarty_tpl->tpl_vars['info']->value['info_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['info']->value['info_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['info']->value['info_seodesc'];?>
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

<div class="apps PC">

    <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <div class="news-box">
            <!-- left -->
            <div class="left">
                <div class="all-detail-item mb10">
                    <div class="all-detail-item-title">
                        <h1 class="top-title"><?php echo $_smarty_tpl->tpl_vars['info']->value['info_title'];?>
</h1>
                        <div class="top-others">
                            <span>时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['info_update_time'],"%Y-%m-%d");?>
</span>
                            <span>作者：<?php echo $_smarty_tpl->tpl_vars['info']->value['info_author'];?>
</span>
                            <span>来源：<?php echo $_smarty_tpl->tpl_vars['info']->value['info_from'];?>
</span>
                            <span>浏览量：<?php echo $_smarty_tpl->tpl_vars['info']->value['info_visitors'];?>
</span>
                        </div>
                    </div>
                    <div class="all-detail-item-content">
                        <?php echo $_smarty_tpl->tpl_vars['info']->value['info_body'];?>

                    </div>
                    <div class="next-prev-item">
                        <a href="#" class="fl"></a>
                        <a href="#" class="fr"></a>
                    </div>
                </div>
                <!--相关评论-->
                <?php if (!empty($_smarty_tpl->tpl_vars['comment_code']->value)) {?>
                <div class="comments">
                    <div>
                        <h2 class="block-title">评论</h2>
                    </div>
                    <?php echo smarty_function_commentcode(array(),$_smarty_tpl);?>

                </div>
                <?php }?>
                <!--相关文章-->
                <div class="ly-art">
                    <h2 class="fs16">相关文章<a href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value),$_smarty_tpl);?>
" class="fr">+更多</a></h2>
                    <ul class="fs12">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>5)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['infolist']->value['info_url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_url'];?>
" target="_blank"><?php } else { ?>
                                <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
"><?php }
echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a>
                                <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['infolist']->value['info_update_time'],"%Y-%m-%d");?>
</span>
                            </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
            <!-- left -->

            <!-- right -->
            <div class="col-right">
                <div class="infos">
                    <h2 class="block-title">今日推荐</h2>
                    <ul class="side-list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>5)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
下载" />
                            </a>
                            <p>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                                </a>
                                <br />
                                <span>下载：<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
 次</span>
                            </p>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="install-btn">下载</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                    <div class="clearfix" style="height:25px"></div>

                    <h2 class="block-title">装机必备</h2>
                    <ul class="side-list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>31,'row'=>5)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>31,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
下载" />
                            </a>
                            <p>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                                </a>
                                <br />
                                <span>下载：<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
 次</span>
                            </p>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="install-btn">下载</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>31,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
            <!--/ right -->
        </div>
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</body>
</html><?php }
}
?>