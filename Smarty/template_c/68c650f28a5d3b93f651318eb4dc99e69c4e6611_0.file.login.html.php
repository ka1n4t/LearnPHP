<?php
/* Smarty version 3.1.30, created on 2018-04-15 00:44:39
  from "H:\PHPStudy\PHPTutorial\WWW\LAB\Smarty\template\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad2a0771370e5_21978729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68c650f28a5d3b93f651318eb4dc99e69c4e6611' => 
    array (
      0 => 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\Smarty\\template\\login.html',
      1 => 1523753077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.html' => 1,
  ),
),false)) {
function content_5ad2a0771370e5_21978729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50695ad2a077136474_60822281', 'main');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'} */
class Block_50695ad2a077136474_60822281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>我是登录页面</div>
<?php
}
}
/* {/block 'main'} */
}
