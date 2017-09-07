<?php /* Smarty version 3.1.27, created on 2017-08-20 02:05:48
         compiled from "D:\wamp\www\templates\template_002\inc_top.php" */ ?>
<?php
/*%%SmartyHeaderCode:234895998ee7cda2b17_23285769%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b1ffe3e8f83f8de561a004adc674a9c8eff6bdb' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\template_002\\inc_top.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234895998ee7cda2b17_23285769',
  'variables' => 
  array (
    'setting' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5998ee7cdc94c9_59884884',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5998ee7cdc94c9_59884884')) {
function content_5998ee7cdc94c9_59884884 ($_smarty_tpl) {
if (!is_callable('smarty_block_keyword')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '234895998ee7cda2b17_23285769';
?>


    <div class="headercon">
        <div class="layout clearfix">
            <div class="logo"><a href="/"><img  src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_logo'];?>
" style="width:235px;height:65px;"></a></div>
            <div class="search">
                    <input class="search_input" value="" placeholder="精品应用，海量搜索！" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" data-url="/index.php?c=index&m=search" id="search-input" onkeydown="if(event.keyCode == 13) search_app()" />
                    <input type="submit" id="search-button" class="search_button" style="cursor:pointer;" value="搜索" onclick="search_app()">

                <div class="hotkey">热门搜索：
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>3)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
</a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
            <ul class="bnav">
            </ul>
        </div>
    </div>
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
        function search_app() {
            if ($('#search-input').val() != '') {
                window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
               // window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
            }
        }
    <?php echo '</script'; ?>
><?php }
}
?>