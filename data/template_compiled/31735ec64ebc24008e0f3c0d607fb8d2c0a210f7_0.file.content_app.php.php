<?php /* Smarty version 3.1.27, created on 2017-09-02 10:42:40
         compiled from "D:\wamp\www\templates\mobile_104\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:3071159aa8b202efeb0_25542232%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31735ec64ebc24008e0f3c0d607fb8d2c0a210f7' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_104\\content_app.php',
      1 => 1504321881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3071159aa8b202efeb0_25542232',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'tpl_path' => 0,
    'row' => 0,
    'comment_count' => 0,
    'imagelist' => 0,
    'relevant' => 0,
    'comment_code' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa8b204d0366_52146441',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa8b204d0366_52146441')) {
function content_59aa8b204d0366_52146441 ($_smarty_tpl) {
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_countstar')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countstar.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_imagelist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_block_relevant')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.relevant.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_commentcode')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.commentcode.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.list.php';

$_smarty_tpl->properties['nocache_hash'] = '3071159aa8b202efeb0_25542232';
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

</head>

<body>

<div class="container">
    <div class="search-head-bg">
        <header class="search-head">
            <h2>
                <a href="javascript:history.back();">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/fanhui.png" class="w7">
                </a><a href="/" class="fs24 col-fff">详情</a>
                <input type="hidden" id="search-input" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='#333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
                <a href="javascript:;" id="search-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/white-search.png" class="w14"></a>
            </h2>
        </header>
    </div>

    <div class="content mt50">
        <div class="game01">
            <dl class="game-pic">
                <dt class="fl">
                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
" height="72"></dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
（<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['cname'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
）</dd>
                <dd>
                   <span class="level_big">
                       <i id="pfuc_cur" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['app']->value['app_recomment']),$_smarty_tpl);?>
></i>
                   </span>
                </dd>
                <dd class="col-ccc"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['cname'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 | <?php echo round($_smarty_tpl->tpl_vars['app']->value['history_size']/1024/1024,2);?>
M | <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
万次下载</dd>
            </dl>

        </div>
    </div>

    <!--hot-->
    <div class="hot-bg  fs20">
        <h2>
            <a href="javascript:;" class="current-back">简介</a>
            <a href="javascript:;">评论（<span><?php echo $_smarty_tpl->tpl_vars['comment_count']->value;?>
</span>）</a>
            <a href="javascript:;">推荐</a>
        </h2>
    </div>
    <!--grayline-->
    <div class="noline-grayline"></div>
    <!--简介-->
<div class="ly-ta">
    <!--title-->
    <div class="title2 title-gre">
        <h2 class="fs30">游戏截图</h2>
    </div>
    <div class="appImg clearf">
        <div class="img">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
"/>
                </a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>

    <!--grayline-->
    <div class="noline-grayline"></div>
    <!--title-->
    <div class="title2 title-gre">
        <h2 class="fs30">游戏介绍</h2>
    </div>
    <div class="font-con">
        <div class="fs18 col-666">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>
</div>
    </div>
    <!--title-->
    <div class="title2 title-gre">
        <h2 class="fs30">相似推荐</h2>
    </div>
    <div class="same">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'order'=>'app_down desc','row'=>6)); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'order'=>'app_down desc','row'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <dl>
                <dt class="pic">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" style="height:72px;">
                    </a>
                </dt>
                <dd class="title fs12">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                        <?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>

                    </a>
                </dd>
                <dd class="title down-load fs14">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                        立即下载
                    </a>
                </dd>
            </dl>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'order'=>'app_down desc','row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <!--download-->
    <div class="blue-down">
        <h2><a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" class="fs30 col-fff">下载</a></h2>
    </div>
</div>
    <!--评论-->
<div class="ly-ta" style="display: none;">
    <!--content-->
    <?php if (!empty($_smarty_tpl->tpl_vars['comment_code']->value)) {?>
    <?php echo smarty_function_commentcode(array(),$_smarty_tpl);?>

    <?php } else { ?>
    <div class="content">
        <div class="num-join fs14">
            <h2>综合评分
                <em><?php echo $_smarty_tpl->tpl_vars['app']->value['app_grade'];?>
分</em>
                <span class="col-999">
                    <em><?php echo $_smarty_tpl->tpl_vars['comment_count']->value;?>
</em>人参与
                </span>
            </h2>
        </div>
    </div>
    <!--grayline-->
    <div class="noline-grayline"></div>
    <!--title-->
    <div class="title2 title-gre title-blue">
        <h2 class="fs30">评论内容</h2>
    </div>
    <!--grayline-->
    <div class="noline-grayline"></div>
    <div class="con-talk">
        <p class="num-t">当前版本(<?php echo $_smarty_tpl->tpl_vars['comment_count']->value;?>
)条评论</p>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>10)); $_block_repeat=true; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="commun">
            <h2 class="col-ff5d31 fs24 mb10"><?php echo $_smarty_tpl->tpl_vars['list']->value['comment_uname'];?>
</h2>
            <ul class="mb10">
                <li class="fs14" style="margin-left:60px;text-indent:0;color:#666"><?php echo $_smarty_tpl->tpl_vars['list']->value['comment_content'];?>
</li>
            </ul>
            <p class="fs24 col-999 pinglun"><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['list']->value['comment_date']);?>

            </p>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php }?>
    <!--download-->
    <div class="blue-down">
        <h2><a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" class="fs30 col-fff">下载</a></h2>
    </div>
</div>
    <!--推荐-->
<div class="ly-ta" style="display: none;">
    <div class="title2 title-gre title-blue">
        <h2 class="fs30">安装

            <a href="" class="col-4FB0E4"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</a>的人还会下载

        </h2>
    </div>
        <div class="same">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'order'=>'app_down desc','row'=>6)); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'order'=>'app_down desc','row'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <dl>
                <dt class="pic">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" style="height:72px;">
                    </a>
                </dt>
                <dd class="title fs12">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                        <?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>

                    </a>
                </dd>
                <dd class="title down-load fs14">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                        立即下载
                    </a>
                </dd>
            </dl>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'order'=>'app_down desc','row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <!--download-->
        <div class="blue-down">
            <h2><a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" class="fs30 col-fff">下载</a></h2>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 >
    $(function(){
        $('.hot-bg a').click(function(){
            $(this).addClass("current-back").siblings().removeClass("current-back");
            $('.ly-ta').hide();
            $('.ly-ta').eq($(this).index()).show();
        });//tab 选项卡


        $("area[rel^='prettyPhoto']").prettyPhoto();
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:1000, hideflash: true});

    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>