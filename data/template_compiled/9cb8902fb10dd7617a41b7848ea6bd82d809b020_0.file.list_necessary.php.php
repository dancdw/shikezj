<?php /* Smarty version 3.1.27, created on 2017-08-20 04:33:12
         compiled from "D:\wamp\www\templates\mobile_102\list_necessary.php" */ ?>
<?php
/*%%SmartyHeaderCode:2587859991108928a98_37323312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb8902fb10dd7617a41b7848ea6bd82d809b020' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\list_necessary.php',
      1 => 1500538774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2587859991108928a98_37323312',
  'variables' => 
  array (
    'row' => 0,
    'keyword' => 0,
    'list' => 0,
    'necessary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59991108a53e40_47987237',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59991108a53e40_47987237')) {
function content_59991108a53e40_47987237 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_keyword')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_block_necessary')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.necessary.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '2587859991108928a98_37323312';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>4)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
        <!--nav-->
        <div class=" text-center nav-color elementwidth text-big padding-left padding-right" style="height: 40px">
            <div class="line">
                <div class="xl2 xs2 xm2 xb2 padding-small-top">
                    <a href="/"><span class="icon-home text-white text-large"></span></a>
                </div>
               <div class="xl7 xs7 xm7 xb7" style="margin-top: 5px;">
            <div class="button-group button-group-small choose bg radius">
                <a href="#" class="button nav-font " id="month" onclick="soft_rank()">软件必备</a>
                <a href="#" class="button nav-font nav-color text-white " id="week" onclick="game_rank()">游戏必备</a>
               
            </div>
        </div>
                <div class="xl2 xs2 xm2 xb2 padding-small-top">
                    <a href="javascript:void(0)" id="search"><span class="icon-search text-white" style="font-size: 20px"></span></a>
                </div>
            </div>
        </div>
        <div class="hidden" id="dialog" style="position:fixed;left:0;top:0;right:0;bottom:0;background:#FFFFFF;z-index:10;display:block;overflow-x:hidden;overflow-y:auto;">
            <div class="text-center elementwidth text-big padding-left padding-right bg-sub" style="height: 40px">
                <form method="get" action="#" class="form-inline">
                    <div class="line">
                        <div class="xl2 xs2 xm2 xb2 margin-small-top">
                            <span class="icon-angle-left text-large text-white" id="close"></span>
                        </div>
                        <div class="xl8 xs8 xm8 xb8 margin-small-top">
                            <input type="text" class="input" value="" name="keyword" placeholder="精品应用、海量搜索"  style="height: 30px"  data-url="/index.php?c=index&m=search" id="search-input" onkeydown="if(event.keyCode == 13) search_app()">
                        </div>
                        <div class="xl2 xs2 xm2 xb2 margin-small-top">
                            <button type="button" id="search-btn" onclick="search_app()" class="button button-small bg"><span class="icon-search text-sub"></span></button>
                        </div>
                    </div>
                </form>
            </div>

         <div class="form-group">
<div class="field">
<div class="line">
<p class="text-left">大家都在搜</p>
</div>
<ul class="list-inline height text-big">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>4)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li style=" height:40px" ><a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
<!--<span class="text-green icon-arrow-up"></span>--></a></li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>
</div>
</div>
        </div>
        <!--banner-->

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary','type'=>1)); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary','type'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="container padding-top padding-left padding-right" id="soft_list">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('necessary', array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'])); $_block_repeat=true; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

               <div class="line">
                <div class="xs9 xm9 xl9 xb9">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
">
                        <div class="xs3 xm3 xl3 xb3">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['necessary']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                        </div>
                        <div class="xs9 xm9 xl9 xb9 padding-left">
                            <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
</p>
                            <div class="line padding-bottom padding-top">
                                <span class="star bigstar50 text-left"></span>
                            </div>
                            <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['necessary']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['necessary']->value['history_size']/1024/1024,2);?>
MB</p>
                        </div>
                    </a>
                </div>
                <div class="xs3 xm3 xl3 xb3">
                    <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
                </div>
            </div>
            <hr class="bg-line">
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary','type'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary','type'=>2)); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary','type'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="container padding-top padding-left padding-right" style="display:none;" id="game_list">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('necessary', array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'])); $_block_repeat=true; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="line">
                <div class="xs9 xm9 xl9 xb9">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
">
                        <div class="xs3 xm3 xl3 xb3">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['necessary']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                        </div>
                        <div class="xs9 xm9 xl9 xb9 padding-left">
                            <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
</p>
                            <div class="line padding-bottom padding-top">
                                <span class="star bigstar50 text-left"></span>
                            </div>
                            <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['necessary']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['necessary']->value['history_size']/1024/1024,2);?>
MB</p>
                        </div>
                    </a>
                </div>
                <div class="xs3 xm3 xl3 xb3">
                    <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
                </div>
            </div>
            <hr class="bg-line">
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary','type'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ajax_loading text-center" style="display:none"><span class="icon-refresh rotate"></span>努力加载中...</div>
 <input type="hidden" value="2" id="page_num" loading='no'>
        <div class="line" style="height:75px; color:#cccccc;"></div>
        <!--footer-->
        <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
    var height= $(window).height();
    $('#search').click(function(){
        $('#dialog').removeClass('hidden');
        $('#dialog').height(height);
    });
    $('#close').click(function(){
        $('#dialog').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    //banner
    var swiper = new Swiper('.swiper-container', {
        loop:true,
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function soft_rank(){
        $("#soft_list").css('display','block');
        $("#game_list").css('display','none');
    }
    function game_rank(){
        $("#soft_list").css('display','none');
        $("#game_list").css('display','block');
    }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>