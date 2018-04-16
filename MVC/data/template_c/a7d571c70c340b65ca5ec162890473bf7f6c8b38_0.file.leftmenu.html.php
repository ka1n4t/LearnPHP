<?php
/* Smarty version 3.1.30, created on 2018-04-16 15:06:18
  from "H:\PHPStudy\PHPTutorial\WWW\LAB\MVC\tpl\admin\leftmenu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad4bbeacb6131_16992207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7d571c70c340b65ca5ec162890473bf7f6c8b38' => 
    array (
      0 => 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\MVC\\tpl\\admin\\leftmenu.html',
      1 => 1402838738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad4bbeacb6131_16992207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?controller=admin&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="admin.php?controller=admin&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?controller=admin&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }
}
