<?php /* Smarty version 3.1.27, created on 2017-08-20 07:44:57
         compiled from "D:\wamp\www\templates\mobile_103\list_info.php" */ ?>
<?php
/*%%SmartyHeaderCode:760059993df96b1d36_28571547%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1d9ab7e829db3f7d4c0b78974b8c8a29c3720b7' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_103\\list_info.php',
      1 => 1500969782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '760059993df96b1d36_28571547',
  'variables' => 
  array (
    'last_cate_id' => 0,
    'row' => 0,
    'infonav' => 0,
    'page' => 0,
    'infolist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59993df9793239_61087538',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59993df9793239_61087538')) {
function content_59993df9793239_61087538 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_infonav')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.infonav.php';
if (!is_callable('smarty_block_infolist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '760059993df96b1d36_28571547';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="cache-control" content="no-cache" />
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
<div id="doc">
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   <!-- bd -->
   <ul class="cate" id="section_categorys">
       <?php if (!$_smarty_tpl->tpl_vars['last_cate_id']->value) {?>
       <li class="cur"><a href="<?php echo smarty_function_link(array('m'=>'infos'),$_smarty_tpl);?>
">综合</a> </li>
       <?php } else { ?>
       <li><a href="<?php echo smarty_function_link(array('m'=>'infos'),$_smarty_tpl);?>
">综合</a> </li>
       <?php }?>
       <?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array()); $_block_repeat=true; echo smarty_block_infonav(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

       <li  <?php if ($_smarty_tpl->tpl_vars['last_cate_id']->value == $_smarty_tpl->tpl_vars['infonav']->value['cate_id']) {?>
       class="cur"
       <?php } else { ?>
       <?php }?>>
       <a href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>$_smarty_tpl->tpl_vars['infonav']->value['cate_id']),$_smarty_tpl);?>
">
       <?php echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];?>

       </a></li>
       <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


   </ul>
   <div id="bd">
      <div class="news-top-detail">
        <ul id="new_append" data-id="<?php echo $_smarty_tpl->tpl_vars['last_cate_id']->value;?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <h2><a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
">
                        <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a></h2>

                <p><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_desc'];?>
</p>

                <div class="">
                    <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
"
                       class="read-more">[阅读全文]</a>
                    <span>发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['infolist']->value['info_update_time'],"%Y-%m-%d");?>
</span>
                </div>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
          <div class="loadmore loadmore-normal" id="loadmore">
              <div class="load-status load-status-btn load-status-normal">
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

      </div>
   </div>
       <?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
       <?php echo '<script'; ?>
 type="text/javascript">
           $(function(){
               var i = 2;
               var last_cate_id = $("#new_append").attr("data-id");
               $(".load-status-normal").click(function(){
                   $.ajax({
                       type: "POST",
                       url: "api.php?c=ajax&m=infos",
                       data: {'page': i++, 'last_cate_id': last_cate_id},
                       dataType: 'json',
                       success: function (msg) {
                           if (msg.status == '1') {
                               var html = '';
                               $.each(msg.list, function (k, v) {
                                   var time = v.info_update_time;
                                   newDate = new Date();
                                   newDate.setTime(time * 1000);

                                   html += "<li>";
                                   html += '<h2>';
                                   html += '<a href="' + v.info_url + '">' + v.info_title + '</a>';
                                   html += '</h2>';
                                   html += '<p>' + v.info_desc + '</p>';
                                   html += '<div class="">';
                                   html += '<a href="' + v.info_url + '" class="read-more">[阅读全文]</a>';
                                   html += '<span>发布时间：' + newDate.toJSON('YYYY-MM-DD').substr(0, 10); + '</span>';
                                   html += "</div>";
                                   html += "</li>";
                               });
                               $("#new_append").append(html);
                           }else{
                               $(".load-status-normal").css("display", "none");
                           }
                       }
                   });
               });
           });

       <?php echo '</script'; ?>
>


       </body>
</html><?php }
}
?>