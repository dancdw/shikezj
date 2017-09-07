<?php /* Smarty version 3.1.27, created on 2017-09-03 01:58:51
         compiled from "D:\wamp\www\templates\mobile_104\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:2563159ab61db8206c5_40786975%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d15f47d9585839677f5599d8064c00e403a8ba' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_104\\list_soft.php',
      1 => 1504321884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2563159ab61db8206c5_40786975',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'tpl_path' => 0,
    'recommend' => 0,
    'appnav' => 0,
    'foo' => 0,
    'page' => 0,
    'applist' => 0,
    'show_sort_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ab61dbaa9217_77919515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ab61dbaa9217_77919515')) {
function content_59ab61dbaa9217_77919515 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_appnav')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_applist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.applist.php';

$_smarty_tpl->properties['nocache_hash'] = '2563159ab61db8206c5_40786975';
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['ckey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>2)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<div class="container">
    <!--head-->
    <div class="gray-head-bg2">
        <header class="search-input">
            <p>
                <a href="/" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['wap_logo'];?>
" ></a>
            </p>
            <p class="search-bg">
                <input type="text" id="search-input" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='javascript:;333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
                <a href="javascript:;" id="search-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/search.png"></a>
            </p>
        </header>
    </div>
    <!--nav-->
    <nav class="mt50">
        <div class="menu">
            <ul>
                <li>
                    <a href="javascript:;" class="btn-a  current">热门</a>
                    <a href="javascript:;" class="btn-a">精品</a>
                    <a href="javascript:;" class="btn-a">分类</a>
                    <a href="javascript:;" class="btn-a">排行</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--grayline-->
    <div class="grayline"></div>
    <!--热门-->
    <div class="ly-ta">
        <div class="banner">
            <div class="title-gre">
                <h2 class="fs30">软件热门</h2>
            </div>
            <div class="bd">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>45,'row'=>3,'start'=>0)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>45,'row'=>3,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <dl>
                    <dt class="pic">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" style="height:72px;width:72px;"/>
                        </a>
                    </dt>
                    <dd class="title g-title">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                        </a>
                    </dd>
                    <dd class="title down-load">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">立即下载</a>
                    </dd>
                </dl>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>45,'row'=>3,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
        <!--grayline-->
        <div class="noline-grayline"></div>
        <!--content-->
        <div id="rank_hot" data-id="45">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>45,'row'=>15,'start'=>3)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>45,'row'=>15,'start'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="game">
                <div class="game-pic">
                    <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" style="height:72px;width:72px;"/></a></div>
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
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>45,'row'=>15,'start'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div class="more mb50">
            <p><a href="javascript:;" class="list-rank"><<加载更多</a></p>
        </div>
    </div>
    <!--精品-->
    <div class="ly-ta" style="display:none;" >
        <div id="rankS" data-id="47">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>47,'row'=>15,'start'=>0)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>47,'row'=>15,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="game">
                <div class="game-pic">
                    <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" style="height:72px;width:72px;"/></a></div>
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
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>47,'row'=>15,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div class="more mb50">
            <p><a href="javascript:;" class="list-S"><<加载更多</a></p>
        </div>
    </div>

    <!--分类-->
    <div class="ly-ta" style="display:none;" >
        <div class="range">
            <table class="fs20" border="1" width="0" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td style="text-align: center"><a href="javascript:;" title="全部"><span>全部</span></a> </td>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1,'row'=>3,'start'=>0)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1,'row'=>3,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <td>
                        <a href="<?php echo smarty_function_link(array('m'=>'categories','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_logo']),$_smarty_tpl);?>
">&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</span>
                        </a>
                    </td>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1,'row'=>3,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </tr>
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <tr>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1,'row'=>4,'start'=>$_smarty_tpl->tpl_vars['foo']->value*4-1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1,'row'=>4,'start'=>$_smarty_tpl->tpl_vars['foo']->value*4-1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <td>
                        <a href="<?php echo smarty_function_link(array('m'=>'categories','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_logo']),$_smarty_tpl);?>
">&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</span>
                        </a>
                    </td>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1,'row'=>4,'start'=>$_smarty_tpl->tpl_vars['foo']->value*4-1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </tr>
                <?php }} ?>
            </table>
        </div>
        <div class="noline-grayline"></div>

        <div id="categary_hot_soft"  data-id="<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
" data-parent="1">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'start'=>0,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>15,'parent'=>1)); $_block_repeat=true; echo smarty_block_applist(array('id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'start'=>0,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>15,'parent'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="game" >
                <div class="game-pic">
                    <div class="fl">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" style="height:72px;width:72px;"/></a>
                    </div>
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
                    <ul>
                        <li class="fs14 col-333 g-title"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</li>
                        <li class="fs12 col-999">
                            <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
次下载<span class="m-none">| <?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
M</span></li>
                        <li class="fs12 col-666"><span class="btn-s col-999"><?php echo $_smarty_tpl->tpl_vars['applist']->value['cname'];?>
</span></li>
                    </ul>
                    </a>
                    <p class="fs14 fr load"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="col-4FB0E4 btn-a">立即下载</a></p>
                </div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'start'=>0,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>15,'parent'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div class="more mb50">
            <p><a href="javascript:;" class="load-status-normal"><<加载更多</a></p>
        </div>
    </div>

    <!--排行-->
    <div class="ly-ta" style="display:none;" >
        <div id="rankW" data-id="51">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>51,'row'=>3,'start'=>0)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>51,'row'=>3,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="game">
                <span class="num fs12"><?php echo $_smarty_tpl->tpl_vars['show_sort_id']->value++;?>
</span>
                <div class="game-pic ml36">

                    <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" style="height:72px;width:72px;"/></a></div>
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
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>51,'row'=>3,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>51,'row'=>12,'start'=>3)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>51,'row'=>12,'start'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="game">
                <span class="num fs12 back-none"><?php echo $_smarty_tpl->tpl_vars['show_sort_id']->value++;?>
</span>
                <div class="game-pic ml36">

                    <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" style="height:72px;width:72px;"/></a></div>
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
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>51,'row'=>12,'start'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div class="more mb50">
            <p><a href="javascript:;" class="list-W"><<加载更多</a></p>
        </div>
    </div>
    <!--foot-->
    <?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>