<?php /* Smarty version 3.1.27, created on 2017-09-02 10:41:04
         compiled from "D:\wamp\www\templates\mobile_105\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:1971159aa8ac0aa1c79_34835334%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '494e2689730a6b6e15e656b318ebb493a43aade4' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_105\\content_app.php',
      1 => 1504321881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971159aa8ac0aa1c79_34835334',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'tpl_path' => 0,
    'imagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa8ac0b3ef85_68872413',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa8ac0b3ef85_68872413')) {
function content_59aa8ac0b3ef85_68872413 ($_smarty_tpl) {
if (!is_callable('smarty_block_imagelist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '1971159aa8ac0aa1c79_34835334';
?>
<!DOCTYPE HTML>
<html>
<head>
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

    <style>
        .content-bg { width: 100%; height: 100%; background-color: #f7f7f7; background-image: url(/images/ios-wx-body-bg.gif); background-position: top right; background-repeat: no-repeat; background-size: contain; overflow: hidden; position: absolute; top: 0; }
        .load-notice { padding-top: 45px; padding-left: 18px; padding-bottom: 25px; padding-left: 10px; }
        .load-notice p { padding: 0; margin: 0; color: #dc570a; line-height: 24px; font-size: 14px; }
        .first-on { margin-top: 30px; margin-left: 15px; }
        .first-on span { background: #fff; border-radius: 40px; padding: 7px 8px; color: #282828; font-size: 12px; line-height: 24px; display: inline-block; border: 1px solid #0c0307; background-clip: padding-box; }
        .first-on img { width: 20px; height: 16px; display: inline-block; margin: 0px 3px; position: relative; top: 3px; }
        .first-on i { float: left; background: #ffba00; width: 24px; height: 24px; line-height: 24px; border-radius: 24px; color: #fff; font-size: 15px; margin-right: 4px; display: inline-block; text-align: center; font-style: normal; font-weight: bold; }
        .mt-lt10 i { margin-top: 13px; }
        .first-on b { float: left; font-weight: normal; }

        .grayback { width: 100%; height: 100%; background-color: #000000; opacity: 0.7; position: fixed; top: 0; left: 0; z-index: 99; }
        
    </style>
</head>

<body>

<!-- <div id="left_layer" style="position:fixed; top:190px; right:30px; text-align:center;">
<a href="https://engine.tuia.cn/index/activity?appKey=24YKCZ2CYtoSm6vqRhYyeLhva6ye&adslotId=905" target="_blank"><img src="http://swg.shouzhuanzhushou.com/images/tuia.gif" alt="红包" border="0"></a><br>
 <a href="javascript:;" onclick="javascript:document.getElementById('left_layer').style.display='none';">关闭</a>
</div>-->

<div class="wide">
<!--
<div class="statement hide">声明：本活动及礼品与苹果公司无关</div>


<section class="kf-icon">
    <a href="mqqwpa://im/chat?chat_type=wpa&uin=275528896&version=1&src_type=web&web_src=null">
        <em class="qq-icon">
            <img src="/images/qq-icon.png" />
        </em>
        <strong>客服</strong>
    </a>
</section>
-->

<section class="article-box">
    <section class="article">
        <h1 class="Rtitle"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
 - 兼职试玩平台</h1>
        <span class="time"><?php echo $_smarty_tpl->tpl_vars['app']->value['create_time'];?>
<a href="/"><em>掌上试客</em></a> www.zhangshangshike.com</span>
        <span class="article-info">
               <p class="red">送1元</p>
               <p>支持系统：苹果iOS和安卓</p>
                <p class="red">3元提现</p>
                <p>单价1元起</p>
                <p>下载1501次</p>
                <p><a href="http://jq.qq.com/?_wv=1027&k=41C9meN" style="color:#FFFFFF" target="_blank">点击这里加群</a></p>
                <p>谷主微信：Yuri-le</p>
        </span>
    </section>

        <section class="down-btn">

            <a href="/go/4.html"><!--  class="urltip" -->
                    <i class="icon-xz" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/icon-down.png);"></i>
                    开始赚钱
            </a>

        </section>  

    <section class="article-txt">
        <p><?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>
</p>
        <!--iMoney试玩平台截图开始-->
    <div id="jietu">
        <div class="scroll_detail">
            <div class="slide_02" id="slide_02">
                <div>
                    <div>
                        
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="mod_02">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
" alt="iMoney试玩平台截图1" />
                        </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        
                    </div>
                </div>
            </div>
            <div class="dotModule_2">
                <div id="slide_02_dot">
                    <span class="dotItem" title="第1页"></span>
                    <span class="dotItem" title="第2页"></span>
                    <span class="dotItem" title="第3页"></span>
                    <span class="selected" title="第4页"></span>
                </div>
            </div>
            <div id="sl_left"></div>
            <div id="sl_right"></div>
        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
 if(document.getElementById("slide_02")){
      var slide_02 = new ScrollPic();
      slide_02.scrollContId   = "slide_02"; //内容容器ID
      slide_02.dotListId      = "slide_02_dot";//点列表ID
      slide_02.dotOnClassName = "selected";
      slide_02.arrLeftId      = "sl_left"; //左箭头ID
      slide_02.arrRightId     = "sl_right";//右箭头ID
      slide_02.frameWidth     = 226;
      slide_02.pageWidth      = 226;
      slide_02.upright        = false;
      slide_02.speed          = 10;
      slide_02.space          = 30; 
      slide_02.initialize(); //初始化
}

<?php echo '</script'; ?>
>
<!--iMoney试玩平台截图结束-->
        <!--<p><img src="/editor/upload/image/20160731/20160731085433773377.jpg" /><img src="/editor/upload/image/20160731/2016073108550196196.jpg" /><img src="/editor/upload/image/20160731/20160731085517711771.jpg" /><img src="/editor/upload/image/20160731/20160731085593339333.jpg" /></p>-->
    </section>

    <section class="ewm-img hide">
        
    </section>
    <!--<section class="more" style="padding-bottom:10px; text-align: right;"><a href="/"></a></section>-->
</section>

<div class="go-top"><a href="javascript: scrollTo(0, 1);">↑返回顶部</a></div>

<div class="copyright">
    Copyright &copy; 2017 掌上试客 版权所有
</div>

<div id="cover"></div>
<?php echo '<script'; ?>
>
  var isWeixin = /micromessenger/i.test(navigator.userAgent);
  if (isWeixin) {
    document.addEventListener('click', function (event) {
      if (event.target.classList.contains('urltip')) {
        document.getElementById('cover').style.display = 'block';
        event.preventDefault();
      } else if (event.target.id === 'cover') {
        event.target.style.display = 'none';
      }
    }, false);
  }
<?php echo '</script'; ?>
>


    <!--<section class="download-btn">
        <a href="/go/4.html" class="urltip">
           ↓ iMoney试玩平台官方下载
        </a>
    </section>-->
    <div id="weixinshareimg" class="share hide" style="position: fixed; right: 10px; top: 10px; z-index: 9999;">
        <img src="/images/android-share.png" width="210" height="140">
    </div>

    <div class="hide">
        <?php echo '<script'; ?>
 src="https://s9.cnzz.com/z_stat.php?id=5662693&web_id=5662693" language="JavaScript"><?php echo '</script'; ?>
>
    </div>
    
    <div class="footer_float">
        <a class="a" href="/go/4.html">
            <div class="left">
                <img class="img" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
" alt="iMoney试玩平台" />
            </div>
            <div class="middle">
                <p class="one"><?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_title']),$_smarty_tpl);?>
</p>
               <p class="two">官方下载</p>
            </div>
            <p class="right">
                <span class="freedownload">立即下载</span>
            </p>
        </a>
    </div>
</div>  
</body>
</html>
<?php }
}
?>