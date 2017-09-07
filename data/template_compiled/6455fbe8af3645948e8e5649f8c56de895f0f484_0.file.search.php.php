<?php /* Smarty version 3.1.27, created on 2017-09-02 12:20:04
         compiled from "D:\wamp\www\templates\template_001\search.php" */ ?>
<?php
/*%%SmartyHeaderCode:3167759aaa1f414b9a3_11382225%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6455fbe8af3645948e8e5649f8c56de895f0f484' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_001\\search.php',
      1 => 1504321885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3167759aaa1f414b9a3_11382225',
  'variables' => 
  array (
    'setting' => 0,
    'keywords' => 0,
    'applist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aaa1f4271de3_60782945',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aaa1f4271de3_60782945')) {
function content_59aaa1f4271de3_60782945 ($_smarty_tpl) {
if (!is_callable('smarty_block_applist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';

$_smarty_tpl->properties['nocache_hash'] = '3167759aaa1f414b9a3_11382225';
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


        <div class="app-box">
            <span class="block-title">搜索列表</span>
            <ul id="j-wc-rect" class="wc-rect clearfix" data-keyword="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15)); $_block_repeat=true; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="card" >
                    <div class="icon-wrap">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" class="icon" />
                        </a>
                    </div>
                    <div class="app-desc">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" class="name">
                            <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>

                        </a>
                        <div class="meta">
                            <a class="tag-link" href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['applist']->value['cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['applist']->value['cname'];?>
</a>
                            <span class="install-count"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_down'];?>
 人安装</span>
                            <span class="dot"></span>
                            <span title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['history_size'];?>
"><?php echo $_smarty_tpl->tpl_vars['applist']->value['history_size'];?>
</span>
                        </div>
                        <div class="comment">
                            <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_desc'];?>

                        </div>
                    </div>
                    <a class="install-btn" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">下载</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="app-box" id="today_recommend" style="display: none;">
            <span class="block-title">
                    今日热门推荐<a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>29),$_smarty_tpl);?>
" class="ly-more">+更多</a>
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
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
>
    $(function(){
       var child_li = $("#j-wc-rect").children("li").index();
       var keyword = $("#j-wc-rect").attr("data-keyword");
       var html = '';
       if(child_li == -1){
           html = '<div class="ly-searchkou">';
           html += '<p>抱歉，没有找到符合条件的“<span>'+ keyword +'</span>”相关内容！</p>';
           html += '</div>';
           $("#j-wc-rect").append(html);
           $("#today_recommend").show();
       }
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>