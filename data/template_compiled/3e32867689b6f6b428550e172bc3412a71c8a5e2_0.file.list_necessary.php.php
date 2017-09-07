<?php /* Smarty version 3.1.27, created on 2017-08-20 04:59:32
         compiled from "D:\wamp\www\templates\mobile_104\list_necessary.php" */ ?>
<?php
/*%%SmartyHeaderCode:1564059991734a45c97_34494272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e32867689b6f6b428550e172bc3412a71c8a5e2' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_104\\list_necessary.php',
      1 => 1500971544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564059991734a45c97_34494272',
  'variables' => 
  array (
    'row' => 0,
    'setting' => 0,
    'tpl_path' => 0,
    'necessary_type' => 0,
    'list' => 0,
    'necessary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59991734b5ed01_68613373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59991734b5ed01_68613373')) {
function content_59991734b5ed01_68613373 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_list')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_necessary')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.necessary.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '1564059991734a45c97_34494272';
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>4)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seotitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>

        <?php }?></title>
    <meta name="keywords"
          content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seokey']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>"/>
    <meta name="description"
          content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seodesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>"/>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
                <a href="/" class="fs24 col-fff">必备</a>
                <input type="hidden" id="search-input" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='#333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
                <a href="javascript:;" id="search-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/white-search.png" class="w14"></a>
            </h2>
        </header>
    </div>

    <!--grayline-->
    <div class="grayline  mt50"></div>
    <!--title-->
    <div class="title2 title-gre">
        <span>
         <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>4)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <h2 class="fs30">
                <?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_name'];?>

                 <span class="fr">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary')); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a
                        <?php if ((isset($_smarty_tpl->tpl_vars['necessary_type']->value) && $_smarty_tpl->tpl_vars['necessary_type']->value == $_smarty_tpl->tpl_vars['list']->value['necessary_type']) || ($_smarty_tpl->tpl_vars['necessary_type']->value == 0 && $_smarty_tpl->tpl_vars['list']->value['special_sort_show'] == 1)) {?>
                        class="curr"<?php }?> href="<?php echo smarty_function_link(array('m'=>'necessaries','necessary_type'=>$_smarty_tpl->tpl_vars['list']->value['necessary_type']),$_smarty_tpl);?>
">
                        <?php echo $_smarty_tpl->tpl_vars['list']->value['necessary_title'];?>

                     </a>
                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                 </span>
            </h2>
         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>

    </div>
    <div id="categary_hot_soft"  data-id="<?php echo $_smarty_tpl->tpl_vars['necessary_type']->value;?>
">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value)); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('necessary', array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'row'=>10)); $_block_repeat=true; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="game">
            <div class="game-pic">
                <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
">

                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['necessary']->value['app_logo']),$_smarty_tpl);?>
" style="width: 72px;"/></a></div>
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
">
                <ul>
                    <li class="fs14 col-333 g-title"><?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
</li>
                    <li class="fs12 col-999"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['necessary']->value['app_down']),$_smarty_tpl);?>
次下载<span class="m-none"> | <?php echo round($_smarty_tpl->tpl_vars['necessary']->value['history_size']/1024/1024,2);?>
MB</span></li>
                    <li class="fs12 col-666">
                        <span class="btn-s col-999"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['necessary']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['necessary']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['necessary']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                    </li>
                </ul>
                </a>
                <p class="fs14 fr load"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
" class="col-4FB0E4 btn-a">立即下载</a></p>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    </div>
    <div class="more" style="line-height: 40px;color: #5c5c5c;font-size: 14px;">
        <p><a href="javascript:;" class="load-status" ><<加载更多</a></p>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        var i = 2;
        var necessary_type = $("#categary_hot_soft").attr("data-id");
        $(".load-status").click(function(){
            $.ajax({
                type: "POST",
                url: "api.php?c=ajax&m=necessaries",
                data: {'page': i++, 'necessary_type':necessary_type},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += '<div class="game">';
                            html += '<div class="game-pic">';
                            html += '<div class="fl">';
                            html += '<a href="' + v.app_url + '"><img src="'+ image_url(v.app_logo) +'" width="72"/></a>';
                            html += '</div>';
                            html += '<a href="' + v.app_url + '">';
                            html += '<ul>';
                            html += '<li class="fs14 col-333">'+ v.app_title +'</li>';
                            html += '<li class="fs12 col-999">'+ num_down(v.app_down) +'次下载<span class="m-none"> | '+ Math.round(v.history_size/1024/1024*100)/100 +' M</span></li>';
                            html += '<li class="fs12 col-666"><span class="btn-s col-999">'+ v.cname +'</span></li>';
                            html += '</ul>';
                            html += '</a>';
                            html += '<p class="fs14 fr load"><a href="' + v.app_url + '" class="col-4FB0E4 btn-a">立即下载</a></p>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $("#categary_hot_soft").append(html);
                    }else{
                        $(".more").html('天啦噜！你竟然看到底了！');
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