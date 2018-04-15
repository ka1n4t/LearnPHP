<?php
/* Smarty version 3.1.30, created on 2018-04-15 00:44:33
  from "H:\PHPStudy\PHPTutorial\WWW\LAB\Smarty\template\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad2a0717e6ad2_59738759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f5a19cccd110c2281f399da4d54387de67b522' => 
    array (
      0 => 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\Smarty\\template\\layout.html',
      1 => 1523752652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad2a0717e6ad2_59738759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
</head>
<body>
	<div>我是首部</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130475ad2a0717e47f6_91942222', 'main');
?>

	<div>我是尾部</div>
</body>
</head><?php }
/* {block 'main'} */
class Block_130475ad2a0717e47f6_91942222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
