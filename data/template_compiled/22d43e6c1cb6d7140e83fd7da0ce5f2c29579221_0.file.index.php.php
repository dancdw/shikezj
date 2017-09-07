<?php /* Smarty version 3.1.27, created on 2017-09-02 10:41:05
         compiled from "D:\wamp\www\templates\mobile_105\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:2775759aa8ac124b718_10507045%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d43e6c1cb6d7140e83fd7da0ce5f2c29579221' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_105\\index.php',
      1 => 1504321885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2775759aa8ac124b718_10507045',
  'variables' => 
  array (
    'setting' => 0,
    'tpl_path' => 0,
    'ad' => 0,
    'navicat' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa8ac134f2b7_62692732',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa8ac134f2b7_62692732')) {
function content_59aa8ac134f2b7_62692732 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '2775759aa8ac124b718_10507045';
?>
<!DOCTYPE HTML>
<html>
<head>
    <!--网页标题-->
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>
    <style type="text/css">
        .make { background: #fff; padding: 0 10px; padding-bottom: 25px; }
        .make p { padding-top: 10px; font-size: 15px; line-height: 24px; }
        .make p img { margin: 0 auto; display: block; max-width: 100%; }
        .make .red { color: #f00; font-weight: bold; font-size: 16px; }
        .make p a { color: #0000ee; }
        .make p strong { font-weight: bold; }
    </style>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<!--<div id="left_layer" style="position:fixed; bottom:50px; right:90px; text-align:center;">
<a href="https://engine.tuia.cn/index/activity?appKey=24YKCZ2CYtoSm6vqRhYyeLhva6ye&adslotId=905" target="_blank"><img src="http://swg.anzhuotui.com/images/tuia.gif" alt="红包" border="0"></a> <br>
 <a href="javascript:;" onclick="javascript:document.getElementById('left_layer').style.display='none';">关闭</a>
</div>-->
<div class="wide">
<!--
<div class="statement hide">声明：本活动及礼品与苹果公司无关</div>
-->

<!-- <div class="header">
    <div class="top"><a href="/" class="brand">掌上试客</a></div>
</div> -->

<!--<section class="kf-icon">
    <a href="mqqwpa://im/chat?chat_type=wpa&uin=275528896&version=1&src_type=web&web_src=null">
        <em class="qq-icon">
            <img src="/images/qq-icon.png" />
        </em>
        <strong>客服</strong>
    </a>
</section>-->

<!--焦点图-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/touchSlide.1.1.js"><?php echo '</script'; ?>
>
<div class="focus" id="focus">
      <div class="hd">
        <ul></ul>
      </div>
      <div class="bd">
        <ul>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>32)); $_block_repeat=true; echo smarty_block_ad(array('id'=>32), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
" /></a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>32), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
      </div>
</div>
<?php echo '<script'; ?>
>
TouchSlide({
slideCell:"#focus",
titCell:".hd ul",
mainCell:".bd ul",
effect:"leftLoop",
autoPage:true,
autoPlay:true
});
<?php echo '</script'; ?>
>

<section class="list-box">
    <section class="list-tl">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array('row'=>4)); $_block_repeat=true; echo smarty_block_navicat(array('row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <span class="current"><a href="/new"><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</a></span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array('row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </section>
</section>
<!--焦点图-->
<!-- <div style="height:30px; line-height:30px; text-align:center"><a href="http://swg.anzhuotui.com/vote/" style="color:#FF0000">---===== 投票兼职点这里 =====---</a></div> -->
        <section class="list-txt">
            <ul>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>45,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>45,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

   <li class="pd72">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_logo'];?>
" />
                            <strong>
                                <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
<span class="hot-icon">热</span>
                            </strong>
              <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_seokey'];?>
</p>
                            <em>免费下载</em>
                        </a>
                    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>45,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
</section>
<!-- <div class="appcnt_bg" style="text-align:center;margin-top:10px">共43应用&nbsp;页次：<font color=red>1</font>/3&nbsp;&nbsp;
           &nbsp;
          <a href="/?page=2" style="color:#EB7601">下一页</a>&nbsp;  <a href="/?page=3" style="color:#EB7601">最后一页</a>


</div> -->

            <div class="loading"></div>
</section>
<div class="go-top"><a href="javascript: scrollTo(0, 1);">↑返回顶部</a></div>

<div class="copyright">
    Copyright &copy; 2017 掌上试客 版权所有 
</div>


    <div class="hide">
        <!-- <?php echo '<script'; ?>
 src="https://s9.cnzz.com/z_stat.php?id=5662693&web_id=5662693" language="JavaScript"><?php echo '</script'; ?>
> -->
    </div>
</div>
</body>
</html>
<?php }
}
?>