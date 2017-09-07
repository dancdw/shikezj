<?php /* Smarty version 3.1.27, created on 2017-09-02 03:57:47
         compiled from "D:\wamp\www\templates\template_001\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:282259aa2c3bc62230_19100861%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '982806f2efb483745437735ab95806d8accc7c6f' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_001\\content_app.php',
      1 => 1504321885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282259aa2c3bc62230_19100861',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'row' => 0,
    'imagelist' => 0,
    'comment_code' => 0,
    'commentlist' => 0,
    'relevant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa2c3be582c8_49912755',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa2c3be582c8_49912755')) {
function content_59aa2c3be582c8_49912755 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_imagelist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_function_commentcode')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.commentcode.php';
if (!is_callable('smarty_block_commentlist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.commentlist.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_relevant')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.relevant.php';

$_smarty_tpl->properties['nocache_hash'] = '282259aa2c3bc62230_19100861';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

<div class="apps PC">

    <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <!-- game-detail -->
        <div class="crumb">
            <a>您的位置：</a>
            <a href="/">首页</a>
            <span>&gt;</span>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['row']->value['parent_id'] == 1) {?>
            <a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
">软件</a>
            <span>&gt;</span>
            <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>
            <?php } else { ?>
            <a href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
">游戏</a>
            <span>&gt;</span>
            <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <span>&gt;</span>
            <span class="cur"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</span>
        </div>
        <div class="detail-wrap ">

            <div class="detail-top clearfix">
                <div class="app-icon">
                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
" width="110" height="110" alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
" />
                </div>
                <div class="app-info">
                    <p class="app-name"> </p>
                    <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</h1>
                    <p class="tagline"> </p>
                    <div class="download-wp">
                        <a class="btn-ss" style="display:inline-block;"  rel="nofollow" href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
">本地下载</a>
                        <a class="btn-rn btn-ss" style="display:inline-block;" href="<?php echo smarty_function_link(array('m'=>'high_speed_download'),$_smarty_tpl);?>
">高速下载</a>
                    </div>
                </div>
                <div class="qr-info">
                    <img src="<?php echo smarty_function_link(array('m'=>'qrcode','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
 下载二维码" style="width:90px;height:90px;" />
                    <a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
"  rel="nofollow" style="font-size:12px;color:#777">下载 APK 文件</a>
                </div>
                <div class="num-list">
                <span class="item">
                    <i> <?php echo $_smarty_tpl->tpl_vars['app']->value['app_visitors'];?>
 </i>
                    <b>人浏览</b>
                </span>
                <span class="item love">
                    <i> <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
 </i>
                    <b>人下载</b>
                </span>
                    <a title="查看评论" class="item last comment-open" href="#comments">
                        <i> <?php echo $_smarty_tpl->tpl_vars['app']->value['app_comments'];?>
 </i>
                        <b>人评论</b>
                    </a>
                    <div class="view-stat" id="j-view-stat">
                        <i class="arrow-down"></i>
                    </div>
                    <div class="score-container">
                        <meta content="3" itemprop="ratingValue" />
                        <meta content="15" itemprop="ratingCount" />
                    </div>
                </div>
            </div>

            <div class="cols clearfix">
                <div class="col-left">

                    <div class="screenshot">
                        <h2 class="block-title"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
 截图</h2>
                        <div class="appImg clearf">
                            <div class="img">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <img alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
" height="320" src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
" />
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                        </div>
                    </div>

                    <div class="desc-info">
                        <h2 class="block-title"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
 介绍</h2>
                        <div class="con">
                            <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

                        </div>
                    </div>

                    <a name="comments"></a>
                    <div class="comments">
                        <div>
                            <h2 class="block-title"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
 评论</h2>
                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['comment_code']->value)) {?>
                            <?php echo smarty_function_commentcode(array(),$_smarty_tpl);?>

                        <?php } else { ?>
                            <ul class="comments-list tab-panel active" id="game_rank">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('commentlist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>8)); $_block_repeat=true; echo smarty_block_commentlist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="normal-li">
                                    <p class="first">
                                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['commentlist']->value['comment_uname'];?>
</span>
                                        <span><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['commentlist']->value['comment_date']);?>
</span>
                                    </p>
                                    <p class="cmt-content">
                                        <span><?php echo $_smarty_tpl->tpl_vars['commentlist']->value['comment_content'];?>
</span>
                                    </p>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_commentlist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                            <div class="ft" style="text-align: center;" >
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1)); $_block_repeat=true; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a id="more_comment" class="more" style="display: none;"> <span>正在加载最近15条评论...</span> </a>
                                <a  class="more" id="morePage" style="cursor:pointer;">查看更多评论</a>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            </div>
                            <div style="margin-top:10px;">
                                <form action="/api.php?c=ajax&m=comment&app_id=<?php echo $_smarty_tpl->tpl_vars['app']->value['app_id'];?>
" method="post" id="commentForm">
                                    <div style="line-height:200%; font-size:14px">网友评论仅供网友表达个人看法，并不表明 <strong>本站</strong> 同意其观点或证实其描述</div>
                                    <div id="star">
                                        <span style="font-size:14px;">点击星星对应用打分</span>
                                        <ul>
                                            <li class=""><a href="javascript:;" class="selected">1</a></li>
                                            <li class=""><a href="javascript:;" class="selected">2</a></li>
                                            <li class=""><a href="javascript:;" class="selected">3</a></li>
                                            <li class=""><a href="javascript:;" class="selected">4</a></li>
                                            <li class=""><a href="javascript:;" class="selected">5</a></li>
                                        </ul>
                                        <span></span>
                                        <p style="display: none; left: 134px;"><em><b>5</b> 分 非常满意</em>强烈推荐</p>
                                    </div>
                                    <div style="margin-top:5px;">
                                        <textarea name="comment" style="width:100%;height:80px;border:1px solid #ccc;font-size:12px;line-height:200%;resize:none;"></textarea>
                                    </div>
                                    <div style="margin-top:10px;height:40px;">
                                    <span class="comment_l">
                                        昵称：<input type="text" class="comment_ipt" value="" name="user" />
                                    </span>
                                    <span class="comment_l">
                                        验证码：<input type="text" style="width:60px;" class="comment_ipt" value="" name="xcode" tabindex="4" />
                                    </span>
                                    <span class="comment_l">
                                        <img onclick="this.src='/api.php?c=index&m=xcode&t='+Math.random();" style="width:60px;height:25px;margin:-4px 8px 0 6px;vertical-align: bottom;" src="/api.php?c=index&m=xcode" id="chk_code" title="点击更换验证码">
                                    </span>
                                    <span class="comment_l">
                                        <input type="button" style="width:auto;height:26px;" class="comment_ipt" value="发表评论" onclick="send_comment();" id="sub">
                                    </span>
                                    </div>
                                </form>
                            </div>
                            <?php echo '<script'; ?>
 type="application/javascript">
                                var oStar = document.getElementById("star");
                                var aLi = oStar.getElementsByTagName("li");
                                var oUl = oStar.getElementsByTagName("ul")[0];
                                var oSpan = oStar.getElementsByTagName("span")[1];
                                var oP = oStar.getElementsByTagName("p")[0];
                                var i = iScore = iStar = 0;
                                var aMsg = [
                                    "很不满意|不给力",
                                    "不满意|凑合",
                                    "一般|一般",
                                    "满意|还不错",
                                    "非常满意|强烈推荐"
                                ]
                                for (i = 1; i <= aLi.length; i++)
                                {
                                    aLi[i - 1].index = i;
                                    //鼠标移过显示分数
                                    aLi[i - 1].onmouseover = function ()
                                    {
                                        fnPoint(this.index);
                                        //浮动层显示
                                        oP.style.display = "block";
                                        //计算浮动层位置
                                        oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";
                                        //匹配浮动层文字内容
                                        oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]
                                    };
                                    //鼠标离开后恢复上次评分
                                    aLi[i - 1].onmouseout = function ()
                                    {
                                        fnPoint();
                                        //关闭浮动层
                                        oP.style.display = "none"
                                    };
                                    //点击后进行评分处理
                                    aLi[i - 1].onclick = function ()
                                    {
                                        $("#xx").val($(this).children(".selected").text());
                                        iStar = this.index;
                                        oP.style.display = "none";
                                        oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
                                    }
                                }
                                //评分处理
                                function fnPoint(iArg)
                                {
                                    //分数赋值
                                    iScore = iArg || iStar;
                                    for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "pd on" : "";
                                }
                                function send_comment()
                                {
                                    $.post($('#commentForm').attr('action'), $('#commentForm').serialize(), function(result){
                                        if (!result) {
                                            alert('远程服务器无响应');
                                            return false;
                                        }
                                        alert(result.msg);
                                    }, 'json');
                                }
                            <?php echo '</script'; ?>
>
                        <?php }?>
                    </div>
                </div>

                <div class="col-right">
                    <div class="infos">
                        <h2 class="block-title"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
 信息</h2>
                        <dl class="infos-list">
                            <dt>大小</dt>
                            <dd><?php echo round($_smarty_tpl->tpl_vars['app']->value['history_size']/1024/1024,2);?>
MB</dd>
                            <dt>分类</dt>
                            <dd><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dd>
                            <dt>更新</dt>
                            <dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['app']->value['app_update_time'],"%Y-%m-%d");?>
</dd>
                            <dt>版本</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['app']->value['history_version'];?>
</dd>
                            <dt>要求</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['app']->value['history_system'];?>
</dd>
                            <dt>厂商</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['app']->value['app_company'];?>
</dd>
                            <dt>网站</dt>
                            <dd><?php echo $_smarty_tpl->tpl_vars['app']->value['app_company_url'];?>
</dd>
                        </dl>
                        <div class="clearfix" style="height:25px"></div>

                        <h2 class="block-title"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
 相关应用</h2>
                        <ul class="side-list">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>5)); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
下载" />
                                </a>
                                <p>
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>

                                    </a>
                                    <br />
                                    <span>下载：<?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['relevant']->value['app_down']),$_smarty_tpl);?>
 次</span>
                                </p>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="install-btn">下载</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                        <div class="clearfix" style="height:25px"></div>

                        <h2 class="block-title"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
 同类热门</h2>
                        <ul class="side-list">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>5,'order'=>'app_down desc')); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>5,'order'=>'app_down desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
下载" />
                                </a>
                                <p>
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>

                                    </a>
                                    <br />
                                    <span>下载：<?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['relevant']->value['app_down']),$_smarty_tpl);?>
 次</span>
                                </p>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="install-btn">下载</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>5,'order'=>'app_down desc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <!-- game-detail -->
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript">
    Date.prototype.Format = function (fmt) { //author: meizz
        var o = {
            "M+": this.getMonth() + 1, //月份
            "d+": this.getDate(), //日
            "h+": this.getHours(), //小时
            "m+": this.getMinutes(), //分
            "s+": this.getSeconds(), //秒
            "q+": Math.floor((this.getMonth() + 3) / 3), //季度
            "S": this.getMilliseconds() //毫秒
        };
        if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for (var k in o)
            if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        return fmt;
    }
    $(document).ready(function() {
        var i = 2;
        $("#morePage").click(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'commentLoad'),$_smarty_tpl);?>
",
                data: {'page': i++,'appid':<?php echo $_smarty_tpl->tpl_vars['app']->value['app_id'];?>
},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var game_html = '';
                        $.each(msg.list, function (k, v) {
                            var datecou = new Date(parseInt(v.comment_date) * 1000).Format("yyyy-MM-dd hh:mm:ss");
                            game_html += '<li class="normal-li">';
                            game_html += ' <p class="first">';
                            game_html += ' <span class="name">'+v.comment_uname+'</span>';
                            game_html += '  <span>'+datecou+'</span>';
                            game_html += ' <div class="cmt"> ';
                            game_html += '</p>';
                            game_html += ' <p class="cmt-content"> ';
                            game_html += '<span>'+v.comment_content+'</span>';
                            game_html += ' </p>';
                            game_html += '</li>';
                        });
                        $("#game_rank").append(game_html);
                    }else{
                        $("#morePage").html('加载完成');
                    }
                }
            });
        });
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>