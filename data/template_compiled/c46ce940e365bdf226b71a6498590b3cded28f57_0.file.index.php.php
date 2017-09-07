<?php /* Smarty version 3.1.27, created on 2017-08-20 02:05:48
         compiled from "D:\wamp\www\templates\template_002\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:135155998ee7c960211_69560575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c46ce940e365bdf226b71a6498590b3cded28f57' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_002\\index.php',
      1 => 1500461692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135155998ee7c960211_69560575',
  'variables' => 
  array (
    'setting' => 0,
    'row' => 0,
    'recommend' => 0,
    'ad' => 0,
    'infolist' => 0,
    'list' => 0,
    'navicat' => 0,
    'seolist' => 0,
    'tpl_path' => 0,
    'openlist' => 0,
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998ee7cd39021_28077199',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998ee7cd39021_28077199')) {
function content_5998ee7cd39021_28077199 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_ad')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_infolist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_block_seolist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.seolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_openlist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.openlist.php';
if (!is_callable('smarty_block_friendlink')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '135155998ee7c960211_69560575';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<div id="header">
    <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="erjinav clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</div>

<div id="main" class="layout">
    <div class="box">
        <div class="itoptui">
            <div class="itoptui_tit"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>33)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>33), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>33), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
            <ul class="clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>8)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="app_90" target="_blank">
                        <i class="app_img_90"></i>
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                    </a>

                    <p class="app_tit_90_new"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="adtu">

            <!-- banner -->
            <div class="banner public-bg">
                <div id="pic-box">
                    <ul id="show-pic" style="left:0;">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" width="508"
                                                                             height="296" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
"/></a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                    <ul id="icon-num">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['ad']->value['sort_show'] == 1) {?>
                        <li class="active"></li>
                        <?php } else { ?>
                        <li></li>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
            <!--/ banner -->
        </div>

        <div class="inews">
            <div class="itit"><a href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>2),$_smarty_tpl);?>
" class="more">更多</a>新闻资讯</div>

            <div class="inewscon">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>2,'row'=>1)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>2,'row'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <h2><a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank"
                       title=" <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
"> <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a></h2>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>2,'row'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <p class="inewscon_tui clearfix">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>2,'row'=>2,'start'=>1)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>2,'row'=>2,'start'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                    <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank">
                        <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>2,'row'=>2,'start'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>3,'row'=>4)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>3,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><span class="time"> <?php echo date('m-d',$_smarty_tpl->tpl_vars['infolist']->value['create_time']);?>
</span><a
                            href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank">
                            <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>3,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </ul>

            </div>
        </div>

        <div class="box">
            <div class="itit"><a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>42),$_smarty_tpl);?>
" class="more" target="_blank"
                                 id="hod">更多</a>
                <a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>29),$_smarty_tpl);?>
" class="more" target="_blank" style="display:none;"
                   id="newapp">更多</a>
                <a href="javascript:showititbox('ihot');" id="dq_rmyy" class="itita" onclick="hod()"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>42)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>42), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>42), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                <a href="javascript:showititbox('izuixin');" id="dq_zxyy" class="" onclick="newapp()"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>40)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>40), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>40), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></div>
            <ul class="ihot">

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>42,'row'=>14)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>42,'row'=>14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="ihot_list"><a>
                        </a><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="app_100">
                            <i class="app_img_100"></i>
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                        </a>

                        <p class="app_tit_100"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                  target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></p>

                        <p class="app_info"><a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
"
                                               target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a> ·
                            <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB</p>

                        <div class="iremen_dwon"><a
                                href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">立即下载</a></div>
                    </div>
                </li>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>14), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <ul class="izuixin" style="display:none">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>14)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="ihot_list"><a>
                        </a><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="app_100">
                            <i class="app_img_100"></i>
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                        </a>

                        <p class="app_tit_100"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                  target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></p>

                        <p class="app_info"><a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
"
                                               target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a> ·
                            <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB</p>

                        <div class="iremen_dwon"><a
                                href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">立即下载</a></div>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>14), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>

        <div class="anyx_zhuanti clearfix">
            <h2><a href="<?php echo smarty_function_link(array('m'=>'specials'),$_smarty_tpl);?>
" target="_blank">更多</a>精品专题</h2>
            <ul class="clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'special','row'=>4)); $_block_repeat=true; echo smarty_block_list(array('name'=>'special','row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <li><a href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']),$_smarty_tpl);?>
" target="_blank"><img
                            src="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_logo'];?>
" data-pinit="registered"></a>

                    <p><a href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']),$_smarty_tpl);?>
" target="_blank">
                            <?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
</a></p></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'special','row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>


        <div class="box">
            <div class="itit"><a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>30),$_smarty_tpl);?>
" class="more" target="_blank">更多</a><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>30)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <ul class="ifenlei clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>30,'row'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>30,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="ifenlei_list clearfix">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="app_90">
                            <i class="app_img_90"></i>
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                        </a>

                        <p class="app_tit_90"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                 target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></p>

                        <div class="app_intro"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
 人安装 ·
                            <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB
                        </div>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>30,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="box">
            <div class="itit"><a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>42),$_smarty_tpl);?>
" class="more" target="_blank">更多</a><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>68)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>68), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>68), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <ul class="ifenlei clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>42,'row'=>4)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>42,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="ifenlei_list clearfix">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="app_90">
                            <i class="app_img_90"></i>
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                        </a>

                        <p class="app_tit_90"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                 target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></p>

                        <div class="app_intro"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
人安装 ·
                            <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB
                        </div>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>

        <div class="box">
            <div class="itit"><a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>44),$_smarty_tpl);?>
" class="more" target="_blank">更多</a><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>61)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>61), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>61), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <ul class="ifenlei clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>44,'row'=>8)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>44,'row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="ifenlei_list clearfix">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="app_90">
                            <i class="app_img_90"></i>
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                        </a>

                        <p class="app_tit_90"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                 target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></p>

                        <div class="app_intro"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
人安装 ·
                            <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB
                        </div>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>44,'row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>

        <!--游戏开服-->
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_enabled'] == '1')) {?>
            <div class="kf-box box">
                <div class="fl w500">
                    <span class="block-title">游戏开服</span>
                    <div class="table-box">
                        <table class="lk-table">
                            <tbody>
                            <tr>
                                <td width=150>手机网游</td>
                                <td width=80>开服时间</td>
                                <td width=200>服务区名</td>
                                <td width=80>领取礼包</td>
                                <td width=80>游戏下载</td>
                            </tr>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('seolist', array('row'=>8)); $_block_repeat=true; echo smarty_block_seolist(array('row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['seolist']->value['o_status'] == 2) {?>
                            <tr>
                                <td width=150><?php echo $_smarty_tpl->tpl_vars['seolist']->value['o_apptitle'];?>
</td>
                                <td width=80>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seolist']->value['o_start_time'],"m-d");?>
<br/>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seolist']->value['o_start_time'],"H:i");?>

                                </td>
                                <td width=200><?php echo $_smarty_tpl->tpl_vars['seolist']->value['o_region'];?>
</td>
                                <td width=80>
                                    <a href="<?php echo smarty_function_link(array('m'=>'open_service','app_id'=>$_smarty_tpl->tpl_vars['seolist']->value['o_app_id'],'open_name'=>$_smarty_tpl->tpl_vars['seolist']->value['o_region']),$_smarty_tpl);?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/li_bao.jpg">
                                    </a>
                                </td>
                                <td width=80><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['seolist']->value['o_app_id']),$_smarty_tpl);?>
" class="kf-btn">下载</a></td>
                            </tr>
                            <?php }?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_seolist(array('row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="fr w500">
                    <span class="block-title">疯抢礼包</span>
                    <div class="table-box">
                        <table class="lk-table">
                            <tbody>
                            <tr>
                                <td width=180>手机网游</td>
                                <td width=100>有效时间</td>
                                <td width=80>领取礼包</td>
                                <td width=80>游戏下载</td>
                            </tr>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('openlist', array('row'=>8)); $_block_repeat=true; echo smarty_block_openlist(array('row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['openlist']->value['o_end_time']-time() > 0 && $_smarty_tpl->tpl_vars['openlist']->value['o_status'] == 2 && $_smarty_tpl->tpl_vars['openlist']->value['open_name'] == $_smarty_tpl->tpl_vars['openlist']->value['o_region']) {?>
                            <tr>
                                <td width=180><?php echo $_smarty_tpl->tpl_vars['openlist']->value['o_apptitle'];?>
<br/>【<?php echo $_smarty_tpl->tpl_vars['openlist']->value['pname'];?>
】</td>
                                <td width=100>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_start_time'],"m-d");?>

                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_start_time'],"H:i");?>
<br/>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_end_time'],"m-d");?>

                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_end_time'],"H:i");?>

                                </td>
                                <td width=80>
                                    <a href="<?php echo smarty_function_link(array('m'=>'open_packs','app_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_app_id'],'open_name'=>$_smarty_tpl->tpl_vars['openlist']->value['open_name'],'p_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_id']),$_smarty_tpl);?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/li_bao.jpg">
                                    </a>
                                </td>
                                <td width=80><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_app_id']),$_smarty_tpl);?>
" class="kf-btn">下载</a></td>
                            </tr>
                            <?php }?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_openlist(array('row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div><span class="clear clearfix"></span></div>
            </div>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <!--游戏开服结束-->
        <div class="box">
            <div class="itit"><a href="<?php echo smarty_function_link(array('m'=>'necessaries'),$_smarty_tpl);?>
" class="more" target="_blank">更多</a><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>31)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>31), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>31), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
            <ul class="ifenlei clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>31,'row'=>8)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>31,'row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="ifenlei_list clearfix">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="app_90">
                            <i class="app_img_90"></i>
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                        </a>

                        <p class="app_tit_90"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                 target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></p>

                        <div class="app_intro"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
人安装 ·
                            <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB
                        </div>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>31,'row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <!-- f-link -->
        <div class="box">
            <div class="itit">友情链接</div>
            <div class="flink">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>1)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
">
                    <b><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</b>
                </a>
                <?php } else { ?>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
">
                    <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
"/>
                    <b><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</b>
                </a>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
        <!-- f-link -->
    </div>
</div>
<?php echo '<script'; ?>
>
    function hod() {
        $("#hod").css('display', 'block');
        $("#newapp").css('display', 'none');
    }
    function newapp() {
        $("#newapp").css('display', 'block');
        $("#hod").css('display', 'none');
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    /**焦点广告js */
    var glide = new function () {
        function $id(id) {
            return document.getElementById(id);
        };
        this.layerGlide = function (auto, oEventCont, oSlider, sSingleSize, second, fSpeed, point) {
            var oSubLi = $id(oEventCont).getElementsByTagName('li');
            var interval, timeout, oslideRange;
            var time = 1;
            var speed = fSpeed
            var sum = oSubLi.length;
            var a = 0;
            var delay = second * 1000;
            var setValLeft = function (s) {
                return function () {
                    oslideRange = Math.abs(parseInt($id(oSlider).style[point]));
                    $id(oSlider).style[point] = -Math.floor(oslideRange + (parseInt(s * sSingleSize) - oslideRange) * speed) + 'px';
                    if (oslideRange == [(sSingleSize * s)]) {
                        clearInterval(interval);
                        a = s;
                    }
                }
            };
            var setValRight = function (s) {
                return function () {
                    oslideRange = Math.abs(parseInt($id(oSlider).style[point]));
                    $id(oSlider).style[point] = -Math.ceil(oslideRange + (parseInt(s * sSingleSize) - oslideRange) * speed) + 'px';
                    if (oslideRange == [(sSingleSize * s)]) {
                        clearInterval(interval);
                        a = s;
                    }
                }
            }

            function autoGlide() {
                for (var c = 0; c < sum; c++) {
                    oSubLi[c].className = '';
                }
                ;
                clearTimeout(interval);
                if (a == (parseInt(sum) - 1)) {
                    for (var c = 0; c < sum; c++) {
                        oSubLi[c].className = '';
                    }
                    ;
                    a = 0;
                    oSubLi[a].className = "active";
                    interval = setInterval(setValLeft(a), time);
                    timeout = setTimeout(autoGlide, delay);
                } else {
                    a++;
                    oSubLi[a].className = "active";
                    interval = setInterval(setValRight(a), time);
                    timeout = setTimeout(autoGlide, delay);
                }
            }

            if (auto) {
                timeout = setTimeout(autoGlide, delay);
            }
            ;
            for (var i = 0; i < sum; i++) {
                oSubLi[i].onmouseover = (function (i) {
                    return function () {
                        for (var c = 0; c < sum; c++) {
                            oSubLi[c].className = '';
                        }
                        ;
                        clearTimeout(timeout);
                        clearInterval(interval);
                        oSubLi[i].className = "active";
                        if (Math.abs(parseInt($id(oSlider).style[point])) > [(sSingleSize * i)]) {
                            interval = setInterval(setValLeft(i), time);
                            this.onmouseout = function () {
                                if (auto) {
                                    timeout = setTimeout(autoGlide, delay);
                                }
                                ;
                            };
                        } else if (Math.abs(parseInt($id(oSlider).style[point])) < [(sSingleSize * i)]) {
                            interval = setInterval(setValRight(i), time);
                            this.onmouseout = function () {
                                if (auto) {
                                    timeout = setTimeout(autoGlide, delay);
                                }
                                ;
                            };
                        }
                    }
                })(i)
            }
        }
    };
    glide.layerGlide(true, 'icon-num', 'show-pic', 508, 2, 0.1, 'left');
    /**参数设置
     *glide.layerGlide((oEventCont,oSlider,sSingleSize,sec,fSpeed,point);
     *@param auto type:bolean 是否自动滑动 当值是true的时候 为自动滑动
     *@param oEventCont type:object 包含事件点击对象的容器
     *@param oSlider type:object 滑动对象
     *@param sSingleSize type:number 滑动对象里单个元素的尺寸（width或者height）
     *@param second type:number 自动滑动的延迟时间  单位/秒
     *@param fSpeed type:float   速率 取值在0.05--1之间 当取值是1时  没有滑动效果
     *@param point type:string   向left滚动
     */
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>