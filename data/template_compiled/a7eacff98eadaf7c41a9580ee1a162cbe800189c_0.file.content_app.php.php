<?php /* Smarty version 3.1.27, created on 2017-08-20 07:31:23
         compiled from "D:\wamp\www\templates\mobile_103\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:3186359993acbcf38c6_00453945%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7eacff98eadaf7c41a9580ee1a162cbe800189c' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_103\\content_app.php',
      1 => 1503214278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3186359993acbcf38c6_00453945',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'imagelist' => 0,
    'row' => 0,
    'comment_count' => 0,
    'list' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59993acbdfc228_30550028',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59993acbdfc228_30550028')) {
function content_59993acbdfc228_30550028 ($_smarty_tpl) {
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countstar')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countstar.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_imagelist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.list.php';

$_smarty_tpl->properties['nocache_hash'] = '3186359993acbcf38c6_00453945';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="cache-control" content="no-cache" />
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
<div id="doc">
    <header id="hds">
        <div class="titlebar" id="section_titlebar">
            <a class="g-block go-back" href="javascript:history.back();"></a>
            <span class="sep"></span>

            <h2 class="g-ellipsis title"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</h2>
            <a class="g-block go-home" href="/" id="link-go-home"></a>
        </div>
    </header>
    <div id="bd">
        <div class="soft_detail" id="soft_detail">
            <div class="info">
                <img width="45" height="45" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
" class="photo"/>

                <div class="con">
                    <h3><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</h3>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
" id="soft_name"/>

                    <div class="stars_holder">
                        <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['app']->value['app_recomment']),$_smarty_tpl);?>
></div>
                    </div>
                    <p class="size"><?php echo round($_smarty_tpl->tpl_vars['app']->value['history_size']/1024/1024,2);?>
MB</p>

                    <p class="source">来自：<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</p>
                </div>
                <div class="down">
                    <p>下载：<?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
次</p>
                    <a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" class="download">下载</a>
                </div>
            </div>
            <div class="from">
                <div class="check_pass">
                    <p>已通过安全检测</p>
                </div>

            </div>
            <div class="appImg clearf">
                <div class="img">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
"/>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <div class="version">
                <ul>
                    <li>版本：<?php echo $_smarty_tpl->tpl_vars['app']->value['history_version'];?>
</li>
                    <li>系统：<?php echo $_smarty_tpl->tpl_vars['app']->value['history_system'];?>
</li>
                    <li>分类：<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </li>
                    <li>作者：<?php echo $_smarty_tpl->tpl_vars['app']->value['app_company'];?>
</li>
                    <li>更新：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['app']->value['app_update_time'],"%Y-%m-%d");?>
 </li>
                </ul>
            </div>
            <div class="intro">
                <div class="details-item-r-text" >
                    <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

                 </div>
                <div class="control">
                    <span id="btn_open">展开</span>
                </div>
            </div>



            <dl class="comment" id="comment" style="display: block;">
                <dt class="g-title">
                    用户评价
                    <span id="comment_total">(<?php echo $_smarty_tpl->tpl_vars['comment_count']->value;?>
)</span>
                </dt>
                <dd>
                    <ul id="comment_list">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>10)); $_block_repeat=true; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <div>
                                <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['comment_date'],"%Y-%m-%d %H:%i:%s");?>
</span>

                                <h3><?php echo $_smarty_tpl->tpl_vars['list']->value['comment_uname'];?>
</h3>
                            </div>
                            <p><?php echo $_smarty_tpl->tpl_vars['list']->value['comment_content'];?>
</p>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                    <div class="loadmore loadmore-normal" id="loadmore">
                        <div class="load-status load-status-btn load-status-normal" style="display: none;">
                            加载更多&gt;&gt;
                        </div>
                        <div class="load-status load-status-btn load-status-loading" style="display: none;">
                            <span>加载中</span>
                        </div>
                        <div class="load-status load-status-btn load-status-failed" style="display: none;">
                            加载失败
                        </div>
                        <div class="load-status load-status-btn load-status-reload" style="display: none;">
                            重新加载&gt;&gt;
                        </div>
                    </div>
                </dd>
            </dl>
        </div>
        <div class="picbox" id="picbox">
            <ul id="pageWrap"
                style="width: 1920px; height: 470px; backface-visibility: hidden; transform: translate3d(0px, 0px, 0px);">
                <li style="transform: translate3d(0px, 0px, 0px); width: 1920px;"><img
                        src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/t016c28726532911ef7.png"/></li>
                <li style="transform: translate3d(1920px, 0px, 0px); width: 1920px;"><img
                        src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/t012e90056b05f87388.png"/></li>
                <li style="transform: translate3d(3840px, 0px, 0px); width: 1920px;"><img
                        src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/t011250125fe02a8147.png"/></li>
            </ul>
        </div>
        <style>
            .details-item-r-text{overflow: hidden;}
            .details-item-r-text p{ line-height: 1.6em; text-indent: 2em; }
            .details-item-r-text{ height: 64px;}
             .current_detail{ height: auto; }

            .picbox {
                background-color: rgba(0, 0, 0, .7);
                display: none;
                overflow: hidden;
                position: absolute;
                top: 0;
                z-index: 100
            }

            .picbox > ul {
                height: 100%;
                width: 300%
            }

            .picbox li {
                -webkit-box-align: center;
                display: -webkit-box;
                height: 100%;
                position: absolute;
                top: 0
            }

            .picbox img {
                display: block;
                margin: 0 auto;
                max-height: 95%;
                max-width: 95%
            }</style>

        <?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php echo '<script'; ?>
>
            $(function(){

                $("#btn_open").toggle(function(){
                    $(this).addClass("close");
                    $(".details-item-r-text").addClass("current_detail");
                },function(){
                    $(this).removeClass("close");
                    $(".details-item-r-text").removeClass("current_detail");
                });//详情隐藏

            });
            function slide(e, t) {
                function p() {
                    isSliding = !1, d(), r.style.webkitTransition = "-webkit-transform 0 ease-out", r.style.webkitBackfaceVisibility = "hidden", r.style.webkitTransform = "translate3d(0,0,0)", r.addEventListener("touchstart", g, !1), r.addEventListener("touchmove", y, !1), r.addEventListener("touchend", b, !1), r.addEventListener("webkitTransitionEnd", m, !1), window.addEventListener("orientationchange"in window ? "orientationchange" : "resize", v, !1)
                }

                function d() {
                    o = window.innerWidth, r.style.width = o + "px", r.style.height = window.innerHeight + "px";
                    for (var e = 0; e < s; e++)i[e].style.webkitTransform = "translate3d(" + o * e + "px,0,0)", i[e].style.width = o + "px"
                }

                function v() {
                    setTimeout(d, 200)
                }

                function m() {
                    isSliding = !1
                }

                function g() {
                    if (isSliding)return;
                    var e = event.touches[0];
                    a = e.screenX, f = 0, isMoving = !1
                }

                function y() {
                    event.preventDefault();
                    if (isSliding)return;
                    var e = event.touches[0];
                    f = e.screenX - a, N(l + parseInt(f) / 2, 0)
                }

                function b() {
                    if (isSliding)return;
                    Math.abs(f) < 10 ? E() : f > 10 ? S() : f < -10 ? x() : T(c, u)
                }

                function w() {
                    n.style.display = "block"
                }

                function E() {
                    n.style.display = "none"
                }

                function S() {
                    c = --c >= 0 ? c : 0, T(c, u)
                }

                function x() {
                    c = ++c < s ? c : s - 1, T(c, u)
                }

                function T(e, t) {
                    isSliding = !0;
                    var n = -1 * e * o;
                    N(n, t), l = n
                }

                function N(e, t) {
                    r.style.webkitTransform = "translate3d(" + e + "px,0,0)", r.style.webkitTransitionDuration = t
                }

                var n = document.getElementById(e), r = t.wrap || n, i = t.conTn ? n.getElementsByTagName(t.conTn) : n.getElementsByClassName(t.conCn), s = i.length, o = 0, u = t.duration || ".3s", a = 0, f = 0, l = 0, c = 0, h = {
                    init: p,
                    slideTo: function (e, t) {
                        c != e && (c = e, T(e, u), isSliding = !1)
                    },
                    showSelf: w,
                    hideSelf: E
                };
                return h
            }
            (function () {
                var e = 0, t = 0, n = 0, r = 0, i = !1, s, o = slide("picbox", {
                    wrap: document.getElementById("pageWrap"),
                    conTn: "li"
                });
                setTimeout(function () {
                    o.init()
                }, 500), $(document.body).on("touchmove", function () {
                    if (i) {
                        var s = event.touches[0];
                        n = s.screenX - e, r = s.screenY - t
                    }
                }).on("touchend", function () {
                    if (!i)return;
                    Math.abs(n) < 5 && Math.abs(r) < 5 && (document.body.scrollTop = 0, o.showSelf(), o.slideTo(s)), e = 0, t = 0, n = 0, r = 0, i = !1
                }), $("#pic li>img").each(function (n) {
                    $(this).on("touchstart", function () {
                        s = n, e = event.touches[0].screenX, t = event.touches[0].screenY, i = !0
                    })
                })
            })()
        <?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>