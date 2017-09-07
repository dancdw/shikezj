<?php /* Smarty version 3.1.27, created on 2017-08-20 07:25:48
         compiled from "D:\wamp\www\templates\mobile_103\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:290985999397cb14238_71069611%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9166e928974ed8ef5ca6aaed0e02f8c63cefc6d' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_103\\index.php',
      1 => 1500969782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290985999397cb14238_71069611',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'recommend' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5999397cdc2e42_70095372',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5999397cdc2e42_70095372')) {
function content_5999397cdc2e42_70095372 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_countstar')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countstar.php';

$_smarty_tpl->properties['nocache_hash'] = '290985999397cb14238_71069611';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="cache-control" content="no-cache" />
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<div id="doc">
    <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <!---------banner------------>
    <div class="big-banner">
        <div id="slideBox" class="slideBox  mt80">
            <div class="bd">
                <div class="tempWrap" >
                    <ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>32)); $_block_repeat=true; echo smarty_block_ad(array('id'=>32), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
"></a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>32), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
            <div class="hdli">
                <ul>
                    <li class=""></li>
                    <li class="on"></li>
                    <li class=""></li>
                    <li class=""></li>
                </ul>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        TouchSlide({
            slideCell:"#slideBox",
            titCell:".hdli ul",
            mainCell:".bd ul",
            effect:"leftLoop",
            autoPage:true,
            autoPlay:true
        });
    <?php echo '</script'; ?>
>

    <div id="bd">
    <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!--------search----------->
        <div class="ly-search">
            <p>
                <input type="text" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value=''}" onBlur="if(value==''){value='请输入搜索内容'}" class="i-search" id="search-input" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
                <a href="javascript:;" id="search-btn"></a>
            </p>
        </div>

        <section class="section section-soft">
        <div class="le-tabview">
            <div class="g-title header">
                <h2 class="title">软件</h2>
                <ul class="le-tabs">
                    <li id="section_soft_hot_tab" class="active"><a href="javascript:void(0)">热门</a></li>
                    <li id="section_soft_rank1_tab"><a href="javascript:void(0)">精品</a></li>
                    <li id="section_soft_rank2_tab"><a href="javascript:void(0)">飙升</a></li>
                </ul>
            </div>
            <div class="views">
                <div id="hot_tab" class="view-item active">
                    <div class="soft_hot" id="section_hot">
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"45",'row'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"45",'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="120" height="120"/>

                                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                                </a>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">下载</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"45",'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <ul class="soft_list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"45",'row'=>8,'start'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"45",'row'=>8,'start'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

                                <div class="info">
                                    <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
                                </div>
                                <div class="detail">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

                                    <div class="stars_holder">
                                        <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
                                    </div>
                                </div>
                            </a> <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">
                                <span>下载</span> </a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"45",'row'=>8,'start'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                <div id="rank1_tab" class="view-item" style="display: none;">
                    <div class="soft_hot" id="section_rank1">
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"47",'row'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"47",'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="120" height="120"/>

                                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p></a>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">下载</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"47",'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <ul class="soft_list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"47",'row'=>8,'start'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"47",'row'=>8,'start'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

                                <div class="info">
                                    <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
                                </div>
                                <div class="detail">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

                                    <div class="stars_holder">
                                        <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
                                    </div>
                                </div>
                            </a> <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">
                                <span>下载</span>
                            </a>
                        </li>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"47",'row'=>8,'start'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                <div id="rank2_tab" class="view-item" style="display: none;">
                    <div class="soft_hot" id="section_rank2">
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"49",'row'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"49",'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="120" height="120"/>

                                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p></a>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">下载</a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"49",'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <ul class="soft_list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"49",'row'=>8,'start'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"49",'row'=>8,'start'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

                                <div class="info">
                                    <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
                                </div>
                                <div class="detail">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

                                    <div class="stars_holder">
                                        <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down"><span>下载</span> </a>
                        </li>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"49",'row'=>8,'start'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
        </div>

        <footer class="more">
            <a class="block-link" href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
">
                <span style="vertical-align:middle">进入软件频道首页</span><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/t01c3ae36e1480c0b30.png"/>
            </a>
        </footer>
    </section>
    <section class="section section-game">
        <div class="le-tabview">
            <div class="g-title header">
                <h2 class="title">游戏</h2>
                <ul class="le-tabs">
                    <li id="section_game_hot_tab" class="active"><a href="javascript:void(0)">热门</a></li>
                    <li id="section_game_rank1_tab"><a href="javascript:void(0)">精品</a></li>
                    <li id="section_game_rank2_tab"><a href="javascript:void(0)">飙升</a></li>
                </ul>
            </div>
            <div class="views">
                <div id="game_hot_tab" class="view-item active">
                    <div class="soft_hot" id="section_hot_game">
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"46",'row'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"46",'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="120" height="120"/>

                                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p></a>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">下载</a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"46",'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <ul class="soft_list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"46",'row'=>8,'start'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"46",'row'=>8,'start'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

                                <div class="info">
                                    <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
                                </div>
                                <div class="detail">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>
                                    <div class="stars_holder">
                                        <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down"><span>下载</span> </a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"46",'row'=>8,'start'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                <div id="game_rank1_tab" class="view-item" style="display: none;">
                    <div class="soft_hot">
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"48",'row'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"48",'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="120" height="120"/>

                                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p></a>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">下载</a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"48",'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <ul class="soft_list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"48",'row'=>8,'start'=>"4")); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"48",'row'=>8,'start'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

                                <div class="info">
                                    <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
                                </div>
                                <div class="detail">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

                                    <div class="stars_holder">
                                        <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
                                    </div>
                                </div>
                            </a> <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">
                                <span>下载</span> </a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"48",'row'=>8,'start'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                <div id="game_rank2_tab" class="view-item" style="display: none;">
                    <div class="soft_hot">
                        <ul>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"50",'row'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"50",'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="120" height="120"/>

                                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p></a>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">下载</a></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"50",'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <ul class="soft_list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"50",'row'=>8,'start'=>"4")); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"50",'row'=>8,'start'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

                                <div class="info">
                                    <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
                                </div>
                                <div class="detail">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

                                    <div class="stars_holder">
                                        <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
                                    </div>
                                </div>
                            </a> <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down">
                                <span>下载</span> </a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"50",'row'=>8,'start'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
        </div>
        <footer class="more">
            <a class="block-link" href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
">
                <span style="vertical-align:middle">进入游戏频道首页</span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/t01c3ae36e1480c0b30.png"/>
            </a>
        </footer>
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
</body>
</html><?php }
}
?>