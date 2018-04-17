<?php
/* Smarty version 3.1.30, created on 2018-04-17 11:51:02
  from "H:\PHPStudy\PHPTutorial\WWW\LAB\MVC\tpl\index\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad56f26db0a75_78110597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f73a430049b81b680fc362739422f678c41ca7d0' => 
    array (
      0 => 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\MVC\\tpl\\index\\sidebar.html',
      1 => 1484056474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad56f26db0a75_78110597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="post" action="index.php?controller=index&method=search">
					<fieldset>
					<input type="text" id="s" name="key" value=""  style="border:1px solid grey"/>
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
<?php }
}
