<?php /* Smarty version 3.1.27, created on 2017-08-20 06:23:17
         compiled from "D:\wamp\www\templates\mobile_105\list_info.php" */ ?>
<?php
/*%%SmartyHeaderCode:886659992ad5cdbae1_46871283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243ae2645c2c8bdb6a0eca1f4e6e9178eb9c0753' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_105\\list_info.php',
      1 => 1500971544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '886659992ad5cdbae1_46871283',
  'variables' => 
  array (
    'last_cate_id' => 0,
    'row' => 0,
    'tpl_path' => 0,
    'setting' => 0,
    'infonav' => 0,
    'page' => 0,
    'infolist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59992ad5efc668_14917428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59992ad5efc668_14917428')) {
function content_59992ad5efc668_14917428 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_infonav')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.infonav.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_infolist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '886659992ad5cdbae1_46871283';
?>
<!DOCTYPE HTML>
<html>
<head>
    <!--网页标题-->
    <?php if ($_smarty_tpl->tpl_vars['last_cate_id']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['ckey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>5)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<div class="container">
    <!--head-->
    <div class="search-head-bg">
        <header class="search-head">
            <h2>
                <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/fanhui.png" class="w7"></a>
                <a  class="fs24 col-fff">资讯</a>
                <input type="hidden" id="search-input" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='#333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
                <a href="javascript:;" id="search-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/white-search.png" class="w14"></a>
            </h2>
        </header>
    </div>
    <div class="hot-bg  mt50 fs20">
        <h2>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array()); $_block_repeat=true; echo smarty_block_infonav(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a
            <?php if ($_smarty_tpl->tpl_vars['last_cate_id']->value == $_smarty_tpl->tpl_vars['infonav']->value['cate_id']) {?>
            class="btn-a current-back"
            <?php } else { ?>
            <?php }?>
            href="<?php echo smarty_function_link(array('m'=>'list_info','last_cate_id'=>$_smarty_tpl->tpl_vars['infonav']->value['cate_id']),$_smarty_tpl);?>
">
            <?php echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];?>

            </a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h2>
    </div>
    <div class="grayline1"></div>
    <div id="info_k" data-id="<?php echo $_smarty_tpl->tpl_vars['last_cate_id']->value;?>
" >
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="grayline"></div>
        <div class="con-bg">
            <div class="con">
                <ul>
                    <li>
                        <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
"></a>
                    </li>
                    <li class="bbt fs34 lh">
                        <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
">
                            <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>

                        </a>
                    </li>
                    <li class="fs20 col-666 lh"><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_desc'];?>
</li>
                    <li class="fs18 col-999 lh">
                        <span>时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['infolist']->value['info_update_time'],"%Y-%m-%d");?>
 | </span>
                        <span>来源：<?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array()); $_block_repeat=true; echo smarty_block_infonav(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php if ($_smarty_tpl->tpl_vars['infolist']->value['last_cate_id'] == $_smarty_tpl->tpl_vars['infonav']->value['cate_id']) {
echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];
}?> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                    </li>
                </ul>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <div class="more dibu fs20">
        <p><a href="javascript:;" class="info"><<加载更多</a></p>
    </div>
</div>
<?php echo '<script'; ?>
 style="text/javascript">
    $(function(){
        var i = 2;
        var last_cate_id = $('#info_k').attr('data-id');
        $(".info").click(function (){
            $.ajax({
                type: "POST",
                url: "api.php?c=ajax&m=infos",
                data: {'page': i++, 'last_cate_id':last_cate_id},
                dataType: 'json',
                success: function(msg) {
                    if (msg.status == '1') {
                        var html = '';
                        $.each(msg.list, function (k, v) {
                            var time = v.info_update_time;
                            newDate = new Date();
                            newDate.setTime(time * 1000);

                            html += '<div class="grayline"></div>';
                            html += '<div class="con-bg">';
                            html += '<div class="con">';
                            html += '<ul>';
                            html += '<li><a href="' + v.info_url + '"></a>';
                            html += '</li>';
                            html += '<li class="bbt fs34 lh">';
                            html += '<a href="' + v.info_url + '">' + v.info_title + '</a>';
                            html += '</li>';
                            html += '<li class="fs20 col-666 lh">' + v.info_desc +'</li>';
                            html += '<li class="fs18 col-999 lh">';
                            html += ' <span>时间：' + newDate.toJSON('YYYY-MM-DD').substr(0, 10); + ' | </span>';
                            html += ' <span>来源：' + v.info_from + '</span>';
                            html += '</li>';
                            html += '</ul>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $("#info_k").append(html);
                    } else {
                        $(".info").html('天啦噜！你竟然看到底了！');
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

</body>
</html>
<?php }
}
?>