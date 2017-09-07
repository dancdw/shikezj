<?php /* Smarty version 3.1.27, created on 2017-08-20 00:53:00
         compiled from "D:\wamp\www\templates\mobile_102\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:153015998dd6c0dbbb7_56767702%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7568868889fb8edb327bb38345db382f8194b6f2' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\index.php',
      1 => 1500538774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153015998dd6c0dbbb7_56767702',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'tpl_path' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998dd6c2a8b54_03575764',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998dd6c2a8b54_03575764')) {
function content_5998dd6c2a8b54_03575764 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '153015998dd6c0dbbb7_56767702';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>32)); $_block_repeat=true; echo smarty_block_ad(array('id'=>32), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="swiper-slide"><a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" class="img-responsive"></a></div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>32), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <div class="swiper-pagination"></div>
</div>
<div class=" line border-bottom border-gray padding-top padding-bottom text-center">
    <a href="<?php echo smarty_function_link(array('m'=>'specials'),$_smarty_tpl);?>
"><div class=" xl6 xs6 xm6 xb6" ><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/zhuanti.png" class="img-responsive" style="display: inline">&nbsp精品专题</div></a>
    <a href="<?php echo smarty_function_link(array('m'=>'necessaries'),$_smarty_tpl);?>
"><div class=" xl6 xs6 xm6 xb6" ><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/zixun.png" class="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img-responsive" style="display: inline">&nbsp装机必备</div></a>

</div>

<div class="container padding-top padding-left padding-right le-tabview">
    <!-- title -->
    <div class="g-title header">
        <h2 class="title">软件</h2>
        <ul class="le-tabs">
            <li id="section_game_hot_tab" class=""><a href="javascript:void(0)"  onclick="soft_hold()">热门</a></li>
            <li id="section_game_rank1_tab" class=""><a href="javascript:void(0)"  onclick="soft_gift()">精品</a></li>
            <li id="section_game_rank2_tab" class="active"><a href="javascript:void(0)"  onclick="soft_soar()">飙升</a></li>

        </ul>
    </div>
    <!--/ title -->

    <div id="soft_holdrank" >
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"45",'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"45",'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="line">
        <div class="xs9 xm9 xl9 xb9">
            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                <div class="xs3 xm3 xl3 xb3">
                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                </div>
                <div class="xs9 xm9 xl9 xb9 padding-left">
                    <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                    <div class="line padding-bottom padding-top">
                        <span class="star bigstar50 text-left"></span>
                    </div>
                    <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB</p>
                </div>
            </a>
        </div>
        <div class="xs3 xm3 xl3 xb3">
            <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
        </div>
    </div>
    <hr class="bg-line">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"45",'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>


    <div  id="soft_giftrank" style="display:none;">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"47",'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"47",'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="line"  >
        <div class="xs9 xm9 xl9 xb9">
            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                <div class="xs3 xm3 xl3 xb3">
                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                </div>
                <div class="xs9 xm9 xl9 xb9 padding-left">
                    <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                    <div class="line padding-bottom padding-top">
                        <span class="star bigstar50 text-left"></span>
                    </div>
                    <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB</p>
                </div>
            </a>
        </div>
        <div class="xs3 xm3 xl3 xb3">
            <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
        </div>
    </div>
    <hr class="bg-line">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"47",'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>


    <div  id="soft_soarrank" style="display:none;">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"49",'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"49",'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="line" >
            <div class="xs9 xm9 xl9 xb9">
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                    <div class="xs3 xm3 xl3 xb3">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                    </div>
                    <div class="xs9 xm9 xl9 xb9 padding-left">
                        <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                        <div class="line padding-bottom padding-top">
                            <span class="star bigstar50 text-left"></span>
                        </div>
                        <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB</p>
                    </div>
                </a>
            </div>
            <div class="xs3 xm3 xl3 xb3">
                <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
            </div>
        </div>
        <hr class="bg-line">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"49",'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <!-- title -->
    <div class="g-title header" style="margin:20px 0 10px;">
        <h2 class="title">游戏</h2>
        <ul class="le-tabs">
            <li id="section_game_hot_tab" class=""><a href="javascript:void(0)" onclick="game_hold()">热门</a></li>
            <li id="section_game_rank1_tab" class=""><a href="javascript:void(0)" onclick="game_gift()">精品</a></li>
            <li id="section_game_rank2_tab" class="active"><a href="javascript:void(0)" onclick="game_soar()">飙升</a></li>

        </ul>
    </div>
    <!--/ title -->



    <div  id="game_holdrank" >
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"46",'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"46",'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="line" >
            <div class="xs9 xm9 xl9 xb9">
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                    <div class="xs3 xm3 xl3 xb3">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                    </div>
                    <div class="xs9 xm9 xl9 xb9 padding-left">
                        <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                        <div class="line padding-bottom padding-top">
                            <span class="star bigstar50 text-left"></span>
                        </div>
                        <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB</p>
                    </div>
                </a>
            </div>
            <div class="xs3 xm3 xl3 xb3">
                <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
            </div>
        </div>
        <hr class="bg-line">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"46",'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <div  id="game_giftrank" style="display:none;">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"48",'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"48",'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="line" >
            <div class="xs9 xm9 xl9 xb9">
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                    <div class="xs3 xm3 xl3 xb3">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                    </div>
                    <div class="xs9 xm9 xl9 xb9 padding-left">
                        <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                        <div class="line padding-bottom padding-top">
                            <span class="star bigstar50 text-left"></span>
                        </div>
                        <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB</p>
                    </div>
                </a>
            </div>
            <div class="xs3 xm3 xl3 xb3">
                <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
            </div>
        </div>
        <hr class="bg-line">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"48",'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <div  id="game_soarrank" style="display:none;">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"50",'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"50",'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="line" >
            <div class="xs9 xm9 xl9 xb9">
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                    <div class="xs3 xm3 xl3 xb3">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big float-left game-icon">
                    </div>
                    <div class="xs9 xm9 xl9 xb9 padding-left">
                        <p class="gamename"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                        <div class="line padding-bottom padding-top">
                            <span class="star bigstar50 text-left"></span>
                        </div>
                        <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB</p>
                    </div>
                </a>
            </div>
            <div class="xs3 xm3 xl3 xb3">
                <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
            </div>
        </div>
        <hr class="bg-line">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"50",'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

</div>


<input type="hidden" value="2" id="page_num" loading='no'>
<div class="line" style="height:75px; color:#cccccc;"></div>
<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
    function soft_hold(){
        $("#soft_holdrank").css('display','block');
        $("#soft_giftrank").css('display','none');
        $("#soft_soarrank").css('display','none');
    }
    function soft_gift(){
        $("#soft_soarrank").css('display','none');
        $("#soft_giftrank").css('display','block');
        $("#soft_holdrank").css('display','none');
    }
    function soft_soar(){
        $("#soft_soarrank").css('display','block');
        $("#soft_giftrank").css('display','none');
        $("#soft_holdrank").css('display','none');
    }
    function game_soar(){
        $("#game_soarrank").css('display','block');
        $("#game_giftrank").css('display','none');
        $("#game_holdrank").css('display','none');
    }
    function game_gift(){
        $("#game_giftrank").css('display','block');
        $("#game_soarrank").css('display','none');
        $("#game_holdrank").css('display','none');
    }
    function game_hold(){
        $("#game_holdrank").css('display','block');
        $("#game_soarrank").css('display','none');
        $("#game_giftrank").css('display','none');
    }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>