<?php /* Smarty version 3.1.27, created on 2017-09-02 10:42:29
         compiled from "D:\wamp\www\templates\mobile_104\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:1951959aa8b15c8e0e6_51965362%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15292811c578f704974d1e07cf15f6919cb78ccd' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_104\\inc_head.php',
      1 => 1504321884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1951959aa8b15c8e0e6_51965362',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59aa8b15cf4de2_96430118',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59aa8b15cf4de2_96430118')) {
function content_59aa8b15cf4de2_96430118 ($_smarty_tpl) {
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '1951959aa8b15c8e0e6_51965362';
?>
<!--申明当前页面的编码集-->
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<!--禁止自动识别电话号码-->
<meta name="format-detection" content="telephone=no" />
<!--uc字体问题-->
<meta name="wap-font-scale" content="no">
<!--禁止自动识别邮箱-->
<meta content="email=no" name="format-detection" />
<!--iphone中safari私有meta标签,允许全屏模式浏览,隐藏浏览器导航栏-->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!--iphone中safari顶端的状态条的样式black(黑色)-->
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery.prettyphoto.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/touch.slide.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/swiper.3.1.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function(e) {
        $('#btn').click(function () {
            window.location = build_url_js('index', 'search', {'keywords': $('#search-type').val()}, undefined, rewrite = $('#search-type').attr('data-rewrite'));
        });
        $('#search-btn').click(function () {
            window.location = build_url_js('index', 'search', {'keywords': $('#search-input').val()}, undefined, rewrite = $('#search-input').attr('data-rewrite'));
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function build_url_js(c, m, arg, d, rewrite) {
        var c = c.toLowerCase();
        var url = {};
        var build = '';
        var query = '';
        if (rewrite == 1) {
            var keywords = arg.keywords;
            return "/search/?keywords=" + encodeURI(keywords);
        }
        if (d != undefined) {
            $.extend(url, {"d": d});
        }
        if (c != undefined) {
            $.extend(url, {"c": c});
        }
        if (m != undefined) {
            $.extend(url, {"m": m});
        }
        if (typeof arg == 'object') {
            $.extend(url, arg);
        }
        query = $.param(url);
        if (query.length > 0) {
            query = '?' + query;
        }
        build = "/index.php" + query;
        return build;
    }
<?php echo '</script'; ?>
>
<!--排行榜推荐位加载-->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var id = $("#rank_H").attr("data-id");
        $(".list-R").click(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'list_rank'),$_smarty_tpl);?>
",
                data: {'page': i++, 'id':id},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var j = 15*(msg.page-1)+1;
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += '<div class="game">';
                            html += '<span class="num fs12 back-none">' + j++ + '</span>';
                            html += '<div class="game-pic ml36">';
                            html += '<div class="fl">';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '"><img src="'+ image_url(v.app_logo) +'" width="72"/></a>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '">';
                            html += '<ul>';
                            html += '<li class="fs14 col-333">'+ v.app_title +'</li>';
                            html += '<li class="fs12 col-999">'+ num_down(v.app_down) +'次下载 <span class="m-none"> | '+ Math.round(v.history_size/1024/1024*100)/100 +'M</span></li>';
                            html += '<li class="fs12 col-666"><span class="btn-s col-999">'+ v.cname +'</span></li>';
                            html += '</ul>';
                            html += '</a>';
                            html += '<p class="fs14 fr load"><a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="col-4FB0E4 btn-a">立即下载</a></p>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $("#rank_H").append(html);
                    }else{
                        $(".list-R").html('天啦噜！你竟然看到底了！');
                    }
                }
            });
        });
        function num_star(num){
            var numm = parseInt(num);
            switch (numm) {
                case 1:
                    return 'style="width:20%"';
                    break;
                case 2:
                    return 'style="width:40%"';
                    break;
                case 3:
                    return 'style="width:60%"';
                    break;
                case 4:
                    return 'style="width:80%"';
                    break;
                case 5:
                    return 'style="width:100%"';
                    break;
                default:
                    return 'style="width:100%"';
                    break;
            }
        }

        function num_down(num){
            var down_umm = parseInt(num);
            if(down_umm >= 100000000){
                down_umm = Math.round(down_umm/100000000*100)/100 +'亿';
            }
            if(down_umm >= 10000 && down_umm < 100000000 ){
                down_umm = Math.round(down_umm/10000*100)/100 +'万';
            }
            return down_umm;
        }

        function image_url(url) {

            if(url == '' || url == 'undefined' || url == 'http://cdn.171cms.net/'){
                return '/templates/cates/no_picture.png';
            }
            return url;
        }
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var id = $("#rank_D").attr("data-id");
        $(".list-D").click(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'list_rank'),$_smarty_tpl);?>
",
                data: {'page': i++, 'idS':id},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var j = 15*(msg.page-1)+1;
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += '<div class="game">';
                            html += '<span class="num fs12 back-none">' + j++ + '</span>';
                            html += '<div class="game-pic ml36">';
                            html += '<div class="fl">';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '"><img src="'+ image_url(v.app_logo) +'" width="72"/></a>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '">';
                            html += '<ul>';
                            html += '<li class="fs14 col-333">'+ v.app_title +'</li>';
                            html += '<li class="fs12 col-999">'+ num_down(v.app_down) +'次下载 <span class="m-none"> | '+ Math.round(v.history_size/1024/1024*100)/100 +'M</span></li>';
                            html += '<li class="fs12 col-666"><span class="btn-s col-999">'+ v.cname +'</span></li>';
                            html += '</ul>';
                            html += '</a>';
                            html += '<p class="fs14 fr load"><a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="col-4FB0E4 btn-a">立即下载</a></p>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $("#rank_D").append(html);
                    }else{
                        $(".list-D").html('天啦噜！你竟然看到底了！');
                    }
                }
            });
        });
        function num_star(num){
            var numm = parseInt(num);
            switch (numm) {
                case 1:
                    return 'style="width:20%"';
                    break;
                case 2:
                    return 'style="width:40%"';
                    break;
                case 3:
                    return 'style="width:60%"';
                    break;
                case 4:
                    return 'style="width:80%"';
                    break;
                case 5:
                    return 'style="width:100%"';
                    break;
                default:
                    return 'style="width:100%"';
                    break;
            }
        }

        function num_down(num){
            var down_umm = parseInt(num);
            if(down_umm >= 100000000){
                down_umm = Math.round(down_umm/100000000*100)/100 +'亿';
            }
            if(down_umm >= 10000 && down_umm < 100000000 ){
                down_umm = Math.round(down_umm/10000*100)/100 +'万';
            }
            return down_umm;
        }

        function image_url(url) {

            if(url == '' || url == 'undefined' || url == 'http://cdn.171cms.net/'){
                return '/templates/cates/no_picture.png';
            }
            return url;
        }
    });
<?php echo '</script'; ?>
>
<!--游戏 软件 推荐位加载-->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var id = $("#rankW").attr("data-id");
        $(".list-W").click(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'list_rank'),$_smarty_tpl);?>
",
                data: {'page': i++, 'id':id},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var j = 10*(msg.page-1)+1;
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += '<div class="game">';
                            html += '<span class="num fs12 back-none">' + j++ + '</span>';
                            html += '<div class="game-pic ml36">';
                            html += '<div class="fl">';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '"><img src="'+ image_url(v.app_logo) +'" width="72"/></a>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '">';
                            html += '<ul>';
                            html += '<li class="fs14 col-333">'+ v.app_title +'</li>';
                            html += '<li class="fs12 col-999">'+ num_down(v.app_down) +'次下载 <span class="m-none"> | '+ Math.round(v.history_size/1024/1024*100)/100 +'M</span></li>';
                            html += '<li class="fs12 col-666"><span class="btn-s col-999">'+ v.cname +'</span></li>';
                            html += '</ul>';
                            html += '</a>';
                            html += '<p class="fs14 fr load"><a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="col-4FB0E4 btn-a">立即下载</a></p>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $("#rankW").append(html);
                    }else{
                        $(".list-W").html('天啦噜！你竟然看到底了！');
                    }
                }
            });
        });
        function num_star(num){
            var numm = parseInt(num);
            switch (numm) {
                case 1:
                    return 'style="width:20%"';
                    break;
                case 2:
                    return 'style="width:40%"';
                    break;
                case 3:
                    return 'style="width:60%"';
                    break;
                case 4:
                    return 'style="width:80%"';
                    break;
                case 5:
                    return 'style="width:100%"';
                    break;
                default:
                    return 'style="width:100%"';
                    break;
            }
        }

        function num_down(num){
            var down_umm = parseInt(num);
            if(down_umm >= 100000000){
                down_umm = Math.round(down_umm/100000000*100)/100 +'亿';
            }
            if(down_umm >= 10000 && down_umm < 100000000 ){
                down_umm = Math.round(down_umm/10000*100)/100 +'万';
            }
            return down_umm;
        }

        function image_url(url) {

            if(url == '' || url == 'undefined' || url == 'http://cdn.171cms.net/'){
                return '/templates/cates/no_picture.png';
            }
            return url;
        }
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var id = $("#rank_hot").attr("data-id");
        $(".list-rank").click(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'list_rank'),$_smarty_tpl);?>
",
                data: {'page': i++, 'id':id},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var j = 10*(msg.page-1)+1;
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += '<div class="game">';
                            html += '<div class="game-pic">';
                            html += '<div class="fl">';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '"><img src="' + image_url(v.app_logo) + '" width="72"/></a>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '">';
                            html += '<ul>';
                            html += '<li class="fs14 col-333">'+ v.app_title +'</li>';
                            html += '<li class="fs12 col-999">'+ num_down(v.app_down) +'次下载 <span class="m-none"> | '+ Math.round(v.history_size/1024/1024*100)/100 +'M</span></li>';
                            html += '<li class="fs12 col-666"><span class="btn-s col-999">'+ v.cname +'</span></li>';
                            html += '</ul>';
                            html += '</a>';
                            html += '<p class="fs14 fr load"><a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="col-4FB0E4 btn-a">立即下载</a></p>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $("#rank_hot").append(html);
                    }else{
                        $(".list-rank").html('天啦噜！你竟然看到底了！');
                    }
                }
            });
        });
        function num_star(num){
            var numm = parseInt(num);
            switch (numm) {
                case 1:
                    return 'style="width:20%"';
                    break;
                case 2:
                    return 'style="width:40%"';
                    break;
                case 3:
                    return 'style="width:60%"';
                    break;
                case 4:
                    return 'style="width:80%"';
                    break;
                case 5:
                    return 'style="width:100%"';
                    break;
                default:
                    return 'style="width:100%"';
                    break;
            }
        }

        function num_down(num){
            var down_umm = parseInt(num);
            if(down_umm >= 100000000){
                down_umm = Math.round(down_umm/100000000*100)/100 +'亿';
            }
            if(down_umm >= 10000 && down_umm < 100000000 ){
                down_umm = Math.round(down_umm/10000*100)/100 +'万';
            }
            return down_umm;
        }

        function image_url(url) {

            if(url == '' || url == 'undefined' || url == 'http://cdn.171cms.net/'){
                return '/templates/cates/no_picture.png';
            }
            return url;
        }
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var id = $("#rankS").attr("data-id");
        $(".list-S").click(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'list_rank'),$_smarty_tpl);?>
",
                data: {'page': i++, 'id':id},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var j = 10*(msg.page-1)+1;
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += '<div class="game">';
                            html += '<div class="game-pic">';
                            html += '<div class="fl">';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '"><img src="' + image_url(v.app_logo) + '" width="72"/></a>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '">';
                            html += '<ul>';
                            html += '<li class="fs14 col-333">'+ v.app_title +'</li>';
                            html += '<li class="fs12 col-999">'+ num_down(v.app_down) +'次下载 <span class="m-none"> | '+ Math.round(v.history_size/1024/1024*100)/100 +'M</span></li>';
                            html += '<li class="fs12 col-666"><span class="btn-s col-999">'+ v.cname +'</span></li>';
                            html += '</ul>';
                            html += '</a>';
                            html += '<p class="fs14 fr load"><a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="col-4FB0E4 btn-a">立即下载</a></p>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $("#rankS").append(html);
                    }else{
                        $(".list-S").html('天啦噜！你竟然看到底了！');
                    }
                }
            });
        });
        function num_star(num){
            var numm = parseInt(num);
            switch (numm) {
                case 1:
                    return 'style="width:20%"';
                    break;
                case 2:
                    return 'style="width:40%"';
                    break;
                case 3:
                    return 'style="width:60%"';
                    break;
                case 4:
                    return 'style="width:80%"';
                    break;
                case 5:
                    return 'style="width:100%"';
                    break;
                default:
                    return 'style="width:100%"';
                    break;
            }
        }

        function num_down(num){
            var down_umm = parseInt(num);
            if(down_umm >= 100000000){
                down_umm = Math.round(down_umm/100000000*100)/100 +'亿';
            }
            if(down_umm >= 10000 && down_umm < 100000000 ){
                down_umm = Math.round(down_umm/10000*100)/100 +'万';
            }
            return down_umm;
        }

        function image_url(url) {

            if(url == '' || url == 'undefined' || url == 'http://cdn.171cms.net/'){
                return '/templates/cates/no_picture.png';
            }
            return url;
        }
    });
<?php echo '</script'; ?>
>
<!--分类加载-->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var last_cate_id = $("#categary_hot_soft").attr("data-id");
        var parent_id = $("#categary_hot_soft").attr("data-parent");
        $(".load-status-normal").click(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'list_game'),$_smarty_tpl);?>
",
                data: {'page': i++, 'last_cate_id': last_cate_id ,'parent_id':parent_id},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += '<div class="game">';
                            html += '<div class="game-pic">';
                            html += '<div class="fl">';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '"><img src="'+ image_url(v.app_logo) +'" width="72"/></a>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '">';
                            html += '<ul>';
                            html += '<li class="fs14 col-333">'+ v.app_title +'</li>';
                            html += '<li class="fs12 col-999">'+ num_down(v.app_down) +'次下载 <span class="m-none"> | '+ Math.round(v.history_size/1024/1024*100)/100 +'M</span></li>';
                            html += '<li class="fs12 col-666"><span class="btn-s col-999">'+ v.cname +'</span></li>';
                            html += '</ul>';
                            html += '</a>';
                            html += '<p class="fs14 fr load"><a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="col-4FB0E4 btn-a">立即下载</a></p>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $("#categary_hot_soft").append(html);
                    }else{
                        $(".load-status-normal").html('天啦噜！你竟然看到底了！');
                    }
                }
            });
        });

        function num_star(num){
            var numm = parseInt(num);
            switch (numm) {
                case 1:
                    return 'style="width:20%"';
                    break;
                case 2:
                    return 'style="width:40%"';
                    break;
                case 3:
                    return 'style="width:60%"';
                    break;
                case 4:
                    return 'style="width:80%"';
                    break;
                case 5:
                    return 'style="width:100%"';
                    break;
                default:
                    return 'style="width:100%"';
                    break;
            }
        }
        function num_down(num){
            var down_umm = parseInt(num);
            if(down_umm >= 100000000){
                down_umm = Math.round(down_umm/100000000*100)/100 +'亿';
            }
            if(down_umm >= 10000 && down_umm < 100000000 ){
                down_umm = Math.round(down_umm/10000*100)/100 +'万';
            }
            return down_umm;
        }

        function image_url(url) {

            if(url == '' || url == 'undefined' || url == 'http://cdn.171cms.net/'){
                return '/templates/cates/no_picture.png';
            }
            return url;
        }
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $(".menu a").click(function(){
            $(this).addClass("current").siblings().removeClass("current");
            $('.ly-ta').hide();
            $('.ly-ta').eq($(this).index()).show();
        });//tab 选项卡
    });
<?php echo '</script'; ?>
>
<?php }
}
?>