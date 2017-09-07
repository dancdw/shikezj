<?php /* Smarty version 3.1.27, created on 2017-08-20 07:28:45
         compiled from "D:\wamp\www\templates\mobile_103\list_game.php" */ ?>
<?php
/*%%SmartyHeaderCode:1750459993a2de74b94_98914821%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9663fb5bada9b55a3c0edc88ab73ea20e783b000' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_103\\list_game.php',
      1 => 1500969782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1750459993a2de74b94_98914821',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'recommend' => 0,
    'appnav' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59993a2e1af5f5_27087275',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59993a2e1af5f5_27087275')) {
function content_59993a2e1af5f5_27087275 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_countstar')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countstar.php';
if (!is_callable('smarty_block_appnav')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_applist')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.applist.php';

$_smarty_tpl->properties['nocache_hash'] = '1750459993a2de74b94_98914821';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="cache-control" content="no-cache" />
    <?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['ckey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>3)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
    <li id="section_categorys_tab0" class="cur"><a href="#">热门</a> </li> 
    <li id="section_categorys_tab1"><a href="#">精品</a> </li> 
    <li id="section_categorys_tab2"><a href="#">排行榜</a> </li> 
    <li id="section_categorys_tab3"><a href="#">分类</a> </li> 
   </ul> 
   <div id="bd">

       <!--热门-->
<DIV class="soft_list" id="section_hot_soft" data-id="46">
        <ul  id="soft">
                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"46",'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"46",'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                     <li>
                      <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
                       <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

                       <div class="info">
                        <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
                       </div>
                       <div class="detail">
                        <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>
                        <div class="stars_holder">
                            <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
                        </div>
                       </div>
                        </a>
                      <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down"><span>下载</span></a>
                     </li>
                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"46",'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
       <div class="more mb50">
           <p><a href="#" class="list-W"><<加载更多</a></p>
       </div>
</DIV>


    <!--精品-->
    <DIV class="soft_list" id="section_hot_game" style="display: none;" data-id="48">
    <ul id="game">
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"48",'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"48",'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

     <li>
         <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
       <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

       <div class="info">
           <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
       </div>
       <div class="detail">
        <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

        <div class="stars_holder">
            <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
        </div>
       </div>
      </a> <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down"> <span>下载</span>
      </a>
     </li>
     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"48",'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
    <div class="more mb50">
        <p><a href="#" class="list-S"><<加载更多</a></p>
    </div>
    </DIV>
       <!--排行-->
<div id="section_hot_rank" style="display: none;" class="soft_list" data-id="52">
    <ul id="rank">
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>"52",'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>"52",'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

     <li><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="con">
       <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="photo" width="54" height="54"/>

       <div class="info">
           <span class="size"><?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
MB <br/><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载 </span>
       </div>
       <div class="detail">
        <h3><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h3>

        <div class="stars_holder">
            <div class="stars" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
></div>
        </div>
       </div>
      </a> <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down"> <span>下载</span>
      </a>
     </li>
     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>"52",'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<div class="more mb50">
    <p><a href="#" class="list-K"><<加载更多</a></p>
</div>
</div>
       <!--分类-->
    <ul id="section_hot_category" style="display: none;"  class="soft_list2">
           <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>2)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

           <li> <a href="<?php echo smarty_function_link(array('m'=>'categories','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
">
                   <img src="<?php echo $_smarty_tpl->tpl_vars['appnav']->value['cate_logo'];?>
" class="photo" />
                   <div class="detail">
                       <h3><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</h3>
                       <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id'],'row'=>3)); $_block_repeat=true; echo smarty_block_applist(array('id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id'],'row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
&nbsp;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id'],'row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
                   </div>
                   <div class="arr"></div>
               </a>
           </li>
           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
   </div>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
 </body>
</html><?php }
}
?>