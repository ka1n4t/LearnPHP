<?php
/* Smarty version 3.1.30, created on 2018-04-15 06:20:48
  from "H:\PHPStudy\PHPTutorial\WWW\LAB\Smarty\template\cacheLearn.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad2ef40c329e6_99184827',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '1e472297b52322a1e422ee4c0e8d9c4a6504ed50' => 
    array (
      0 => 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\Smarty\\template\\cacheLearn.html',
      1 => 1523773246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad2ef40c329e6_99184827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '173975ad2ef40be2f54_41299710';
?>
<html>
<body>
	第<?php echo $_GET['page'];?>
页
	<hr>
	
	<div><b>局部不缓存</b></div>
	<div>单个变量不缓存: {$title nocache}</div>
	<div>单个变量不缓存: $smarty->assign(name, value, true)</div>
	<div>块不缓存: {nocache}不缓存的内容{/nocache}</div>
	
	a
	<div><?php echo '/*%%SmartyNocache:173975ad2ef40be2f54_41299710%%*/<?php echo time();?>
/*/%%SmartyNocache:173975ad2ef40be2f54_41299710%%*/';?>
</div>
	<div><?php echo '/*%%SmartyNocache:173975ad2ef40be2f54_41299710%%*/<?php echo $_smarty_tpl->tpl_vars[\'test1\']->value;?>
/*/%%SmartyNocache:173975ad2ef40be2f54_41299710%%*/';?>
</div>
	<div><?php echo $_smarty_tpl->tpl_vars['test2']->value;?>
</div>
	<hr>
	
	<div><b>缓存集合</b></div>
	<div>brand: <?php echo $_GET['brand'];?>
</div>
	<div>price: <?php echo $_GET['price'];?>
</div>
	<div>network: <?php echo $_GET['network'];?>
</div>
	<div>size: <?php echo $_GET['size'];?>
</div>
	
</body>
</html><?php }
}
