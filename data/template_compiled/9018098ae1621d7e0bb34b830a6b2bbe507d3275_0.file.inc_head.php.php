<?php /* Smarty version 3.1.27, created on 2017-08-20 07:25:48
         compiled from "D:\wamp\www\templates\mobile_103\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:249875999397cdd63e0_89237079%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9018098ae1621d7e0bb34b830a6b2bbe507d3275' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_103\\inc_head.php',
      1 => 1500969782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249875999397cdd63e0_89237079',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5999397ce3eb64_96568488',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5999397ce3eb64_96568488')) {
function content_5999397ce3eb64_96568488 ($_smarty_tpl) {
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '249875999397cdd63e0_89237079';
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/TouchSlide.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function build_url_js(c, m, arg, d, rewrite){
        var c = c.toLowerCase();
        var url = {};
        var build = '';
        var query = '';
        if (rewrite == 1) {
            var keywords = arg.keywords;
            return "/search/"+keywords;
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
    $(function() {
        /*soft*/
        $("#section_soft_hot_tab").click(function () {
            $("#hot_tab").show();
            $("#section_soft_hot_tab").addClass("active");
            $("#section_soft_rank1_tab,#section_soft_rank2_tab").removeClass("active");
            $("#rank1_tab,#rank2_tab").hide();
        });
        $("#section_soft_rank1_tab").click(function () {
            $("#rank1_tab").show();
            $("#section_soft_rank1_tab").addClass("active");
            $("#section_soft_hot_tab,#section_soft_rank2_tab").removeClass("active");
            $("#hot_tab,#rank2_tab").hide();
        });
        $("#section_soft_rank2_tab").click(function () {
            $("#rank2_tab").show();
            $("#section_soft_rank2_tab").addClass("active");
            $("#section_soft_hot_tab,#section_soft_rank1_tab").removeClass("active");
            $("#hot_tab,#rank1_tab").hide();
        });
        /*game*/
        $("#section_game_hot_tab").click(function () {
            $("#game_hot_tab").show();
            $("#section_game_hot_tab").addClass("active");
            $("#section_game_rank1_tab,#section_game_rank2_tab").removeClass("active");
            $("#game_rank1_tab,#game_rank2_tab").hide();
        });
        $("#section_game_rank1_tab").click(function () {
            $("#game_rank1_tab").show();
            $("#section_game_rank1_tab").addClass("active");
            $("#section_game_hot_tab,#section_game_rank2_tab").removeClass("active");
            $("#game_hot_tab,#game_rank2_tab").hide();
        });
        $("#section_game_rank2_tab").click(function () {
            $("#game_rank2_tab").show();
            $("#section_game_rank2_tab").addClass("active");
            $("#section_game_hot_tab,#section_game_rank1_tab").removeClass("active");
            $("#game_hot_tab,#game_rank1_tab").hide();
        });
        /*necessary*/
        $("#section_categorys_tab0").click(function () {
            $("#section_hot_soft").show();
            $("#section_categorys_tab0").addClass("cur");
            $("#section_categorys_tab1,#section_categorys_tab2,#section_categorys_tab3").removeClass("cur");
            $("#section_hot_game,#section_hot_rank,#section_hot_category").hide();
        });
        $("#section_categorys_tab1").click(function () {
            $("#section_hot_game").show();
            $("#section_categorys_tab1").addClass("cur");
            $("#section_categorys_tab0,#section_categorys_tab2,#section_categorys_tab3").removeClass("cur");
            $("#section_hot_soft,#section_hot_rank,#section_hot_category").hide();
        });
        $("#section_categorys_tab2").click(function () {
            $("#section_hot_rank").show();
            $("#section_categorys_tab2").addClass("cur");
            $("#section_categorys_tab0,#section_categorys_tab1,#section_categorys_tab3").removeClass("cur");
            $("#section_hot_soft,#section_hot_game,#section_hot_category").hide();
        });
        $("#section_categorys_tab3").click(function () {
            $("#section_hot_category").show();
            $("#section_categorys_tab3").addClass("cur");
            $("#section_categorys_tab0,#section_categorys_tab1,#section_categorys_tab2").removeClass("cur");
            $("#section_hot_soft,#section_hot_game,#section_hot_rank").hide();
        });
        /*search*/
        $('#search-btn').click(function(){
            window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
            // window.location = $('#search-form').attr('action') + "&keywords=" + $('#search-input').val();
        });
    });
<?php echo '</script'; ?>
>
<!--游戏 软件 推荐位加载-->
<!--熱門-->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var id = $("#section_hot_soft").attr("data-id");
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

                            html += '<li>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + ' " class="con"><img src="'+ image_url(v.app_logo) +'" class="photo" width="54" height="54"/>';
                            html += '<div class="info">';
                            html += '<span class="size">'+ Math.round(v.history_size/1024/1024*100)/100 +' MB<br/>'+ num_down(v.app_down) +'次下载</span>';
                            html += '</div>';
                            html += '<div class="detail">';
                            html += '<h3>'+ v.app_title +'</h3>';
                            html += '<div class="stars_holder">';
                            html += '<div class="stars" '+ num_star(v.app_recomment) +'></div>';
                            html += '</div>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="down"><span>下载</span></a>';
                            html += '</a>';
                        });
                        $("#soft").append(html);
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
<!--精品-->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var id = $("#section_hot_game").attr("data-id");
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


                            html += '<li>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + ' " class="con"><img src="'+ image_url(v.app_logo) +'" class="photo" width="54" height="54"/>';
                            html += '<div class="info">';
                            html += '<span class="size">'+ Math.round(v.history_size/1024/1024*100)/100 +' MB<br/>'+ num_down(v.app_down) +'次下载</span>';
                            html += '</div>';
                            html += '<div class="detail">';
                            html += '<h3>'+ v.app_title +'</h3>';
                            html += '<div class="stars_holder">';
                            html += '<div class="stars" '+ num_star(v.app_recomment) +'></div>';
                            html += '</div>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="down"><span>下载</span></a>';
                            html += '</a>';

                        });
                        $("#game").append(html);
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
<!--排行-->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var id = $("#section_hot_rank").attr("data-id");
        $(".list-K").click(function(){
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


                            html += '<li>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + ' " class="con"><img src="'+ image_url(v.app_logo) +'" class="photo" width="54" height="54"/>';
                            html += '<div class="info">';
                            html += '<span class="size">'+ Math.round(v.history_size/1024/1024*100)/100 +' MB<br/>'+ num_down(v.app_down) +'次下载</span>';
                            html += '</div>';
                            html += '<div class="detail">';
                            html += '<h3>'+ v.app_title +'</h3>';
                            html += '<div class="stars_holder">';
                            html += '<div class="stars" '+ num_star(v.app_recomment) +'></div>';
                            html += '</div>';
                            html += '</div>';
                            html += '<a href="/index.php?c=index&m=content_app&app_id=' + v.app_id + '" class="down"><span>下载</span></a>';
                            html += '</a>';

                        });
                        $("#rank").append(html);
                    }else{
                        $(".list-K").html('天啦噜！你竟然看到底了！');
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



<?php }
}
?>