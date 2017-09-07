<?php /* Smarty version 3.1.27, created on 2017-08-20 00:52:59
         compiled from "D:\wamp\www\templates\mobile_102\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:276955998dd6b2b1576_87789291%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73476908705fa66cf208cf7ca5e039d55bce6c08' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_102\\content_app.php',
      1 => 1500538774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276955998dd6b2b1576_87789291',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'keyword' => 0,
    'imagelist' => 0,
    'relevant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998dd6b409691_09322057',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998dd6b409691_09322057')) {
function content_5998dd6b409691_09322057 ($_smarty_tpl) {
if (!is_callable('smarty_block_keyword')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_imagelist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_block_relevant')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.relevant.php';

$_smarty_tpl->properties['nocache_hash'] = '276955998dd6b2b1576_87789291';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

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

</head>
<body>
        <!--nav-->
        <div class=" text-center nav-color elementwidth text-big padding-left padding-right" style="height: 40px">
            <div class="line">
               <div class="xl2 xs2 xm2 xb2">
            <a class="icon-angle-left text-large ellipsis" href="Javascript:history.go(-1);void(0);"></a>
        </div>
             <div class="xl8 xs8 xm8 xb8" style="height: 20px;overflow:hidden;margin-top: 8px">
            <span class="text-white text-big"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</span>
        </div>
                <div class="xl2 xs2 xm2 xb2 padding-small-top">
                    <a href="javascript:void(0)" id="search"><span class="icon-search text-white" style="font-size: 20px"></span></a>
                </div>
            </div>
        </div>
        <div class="hidden" id="dialog" style="position:fixed;left:0;top:0;right:0;bottom:0;background:#FFFFFF;z-index:10;display:block;overflow-x:hidden;overflow-y:auto;">
            <div class="text-center elementwidth text-big padding-left padding-right bg-sub" style="height: 40px">
                <form method="post" action="#" class="form-inline">
                    <div class="line">
                        <div class="xl2 xs2 xm2 xb2 margin-small-top">
                            <span class="icon-angle-left text-large text-white" id="close"></span>
                        </div>
                        <div class="xl8 xs8 xm8 xb8 margin-small-top">
                            <input type="text" class="input" value=""  data-url="/index.php?c=index&m=search" id="search-input" onkeydown="if(event.keyCode == 13) search_app()" name="keyword" placeholder="精品应用、海量搜索"  style="height: 30px">
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

    <li style=" height:40px"><a  href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
<!--<span class="text-green icon-arrow-up"></span>--></a></li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>
</div>
</div>
        </div>
       
       
       
       <!-- inner -->
          <div class="container padding-top padding-right padding-left padding-bottom">
    <div class="line">
        <div class="media media-x">
            <a href="javascript:void(0);" class="float-left">
                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big game-icon">
            </a>
            <div class="float-right padding-top"><a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" class="button button-small border-sub">下载</a></div>
            <div class="media-body">
                <strong><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</strong>
                <div class="line padding-small-bottom padding-small-top">
                    <span class="star bigstar35 text-left"></span>
                </div>
                <p class="text-left height-little margin-small-bottom text-small text-gray"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
万下载<span>|</span><?php echo round($_smarty_tpl->tpl_vars['app']->value['history_size']/1024/1024,2);?>
MB</p>
            </div>
        </div>
    </div>
</div>
<div class="container" style="width: 300px;">
    <div class="swiper-container swiper-container-horizontal" id="gallery">
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-300px, 0px, 0px);">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                       <div class="swiper-slide swiper-slide-next" style="width: 300px;"><img src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
" class="img-responsive"></div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    </div>
        <div class="swiper-pagination swiper-pagination-clickable"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
    </div>
</div>
<div class="container padding-big-top padding-right padding-left ">
    <div class="container">
        <div class="line padding-right padding-left">
            <div class="xl6 xs6 xm6 xb6">
                <div class="text-big border-left border-sub border-big">应用介绍</div>
            </div>
        </div>
        <hr>
        <div class="line padding-right padding-left">
            <div>
                <p class="text-indent text-left text-small text-gray" style="height: 70px;overflow: hidden" id="content">
                    <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

                </p>
            </div>
                <div class="text-right collapse">
                    <a class="" id="collapse">+展开全部</a>
                </div>
        </div>
    </div>
    
    <div class="container">
        <div class="line padding-right padding-left">
            <div class="text-left text-big border-left border-sub border-big">你可能还喜欢</div>
        </div>
        <hr>
        <div class="line padding-bottom text-center">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>3,'order'=>'app_down desc')); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>3,'order'=>'app_down desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                  <div class="xl3 xs3 xm3 xb3">
                <div class="media clearfix">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" class="radius-big game-icon"></a>
                    <div class="media-body text-center padding-left">
                        <p class="text-small" style="font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
</p>
                    </div>
                </div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>3,'order'=>'app_down desc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



                   </div>
    </div>

</div>
<div class="line" style="height: 45px"></div>
       <!-- inner -->

        <!--footer-->
     <div class="padding-small-top padding-small-bottom padding-big-left padding-big-right elementwidth bg-white" style="position:fixed;bottom:0;z-index: 1;">
    <a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" class="button bg-sub button-block text-center">下载</a>
</div> 

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
    $('#collapse').click(function(){
        if($(this).text()=='+展开全部'){
            $('#content').css('height', 'auto');
            $(this).html('-收起部分');
        }else if($(this).text()=='-收起部分'){
            $('#content').height(70);
            $(this).html('+展开全部');
        }
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>