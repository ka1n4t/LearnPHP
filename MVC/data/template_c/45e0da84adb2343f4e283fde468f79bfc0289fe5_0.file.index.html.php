<?php
/* Smarty version 3.1.30, created on 2018-04-17 11:53:30
  from "H:\PHPStudy\PHPTutorial\WWW\LAB\MVC\tpl\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad56fba25fdb5_44049621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e0da84adb2343f4e283fde468f79bfc0289fe5' => 
    array (
      0 => 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\MVC\\tpl\\index\\index.html',
      1 => 1523937207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
    'file:./sidebar.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5ad56fba25fdb5_44049621 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>新闻列表</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="img/css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
	
	<?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
		<div class="post">
			<h1 class="title"><a href="index.php?controller=index&method=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a><span style="color:#ccc;font-size:14px;">　　作者：<?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
</span></h1>
			<div class="entry">
				<?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>

			</div>
			<?php echo $_smarty_tpl->tpl_vars['news']->value['dateline'];?>

			<div class="meta">
				<p class="links"><a href="index.php?controller=index&method=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
" class="more">查看详细</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php } else { ?>
		<?php echo "还未有新闻，请联系管理员添加...";?>

	<?php }?>
	</div>
	<!-- end content -->
	<?php $_smarty_tpl->_subTemplateRender("file:./sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
