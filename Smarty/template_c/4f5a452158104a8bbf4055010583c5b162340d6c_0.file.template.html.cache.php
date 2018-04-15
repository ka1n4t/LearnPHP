<?php
/* Smarty version 3.1.30, created on 2018-04-15 02:22:22
  from "H:\PHPStudy\PHPTutorial\WWW\LAB\Smarty\template\template.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad2b75ea546e0_12318889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5a452158104a8bbf4055010583c5b162340d6c' => 
    array (
      0 => 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\Smarty\\template\\template.html',
      1 => 1523758172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad2b75ea546e0_12318889 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\Smarty\\smarty-3.1.30\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_checkboxes')) require_once 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\Smarty\\smarty-3.1.30\\libs\\plugins\\function.html_checkboxes.php';
if (!is_callable('smarty_function_html_options')) require_once 'H:\\PHPStudy\\PHPTutorial\\WWW\\LAB\\Smarty\\smarty-3.1.30\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '156125ad2b75e9b91e1_87284468';
?>
<html>
<head>
	<meta http-equiv="content-type" content="txt/html; charset=utf-8" />
</head>
<body>
	
	<div><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
	<div><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
	<hr/>
	
	<div><b>使用Smarty接收请求参数</b></div>
	<div>smarty.get.name=<?php echo $_GET['name'];?>
</div>
	<br>
	<div><b>使用Smarty输出常量</b></div>
	<div>smarty.const.Hello=<?php echo @constant('Hello');?>
</div>
	<br>
	<div><b>使用Smarty输出时间戳(使用变量修饰器将其格式化)</b></div>
	<div>smarty.now=<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
</div>
	<br>
	<div><b>使用Smarty获得当前模板名称</b></div>
	<div>smarty.template=<?php echo basename($_smarty_tpl->source->filepath);?>
</div>
	<br>
	<div><b>使用Smarty获得当前模板路径</b></div>
	<div>smarty.current_dir=<?php echo dirname($_smarty_tpl->source->filepath);?>
</div>
	<br>
	<div><b>使用Smarty获得当前版本</b></div>
	<div>smarty.version=<?php echo Smarty::SMARTY_VERSION;?>
</div>
	<hr/>
	
	<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'site.conf', $_smarty_tpl->tpl_vars['hobby']->value, 0);
?>

	<div><b>使用配置文件(配置文件默认放在configs文件夹下)</b></div>
	<div><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'CONFIG1');?>
</div>
	<div><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'CONFIG2');?>
</div>
	<div><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'CONFIG3');?>
</div>
	<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'site.conf', 'section2', 0);
?>

	<div><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'CONFIG1');?>
</div>
	<div><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'CONFIG2');?>
</div>
	<div><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'CONFIG3');?>
</div>
	<hr/>
	
	<div><b>使用数组</b></div>
	<div>索引数组:</div>
	<div><?php echo $_smarty_tpl->tpl_vars['names']->value[0];?>
</div>
	<div><?php echo $_smarty_tpl->tpl_vars['names']->value[1];?>
</div>
	<div>关联数组:</div>
	<div><?php echo $_smarty_tpl->tpl_vars['fullNames']->value['LeBron'];?>
</div>
	<div><?php echo $_smarty_tpl->tpl_vars['fullNames']->value['Kobe'];?>
</div>
	<div><b>foreach遍历数组</b></div>
	<pre>
	值变量
	@iteration,是从1开始的序号
	@index是从0开始
	@first, 判断是否是数组的第一个元素
	@total, 计算数组的元素个数
	</pre>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fullNames']->value, 'lastname', true, 'firstname');
$_smarty_tpl->tpl_vars['lastname']->iteration = 0;
$_smarty_tpl->tpl_vars['lastname']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['firstname']->value => $_smarty_tpl->tpl_vars['lastname']->value) {
$_smarty_tpl->tpl_vars['lastname']->iteration++;
$_smarty_tpl->tpl_vars['lastname']->index++;
$_smarty_tpl->tpl_vars['lastname']->first = !$_smarty_tpl->tpl_vars['lastname']->index;
$__foreach_lastname_0_saved = $_smarty_tpl->tpl_vars['lastname'];
?>
		isFirst:<?php echo $_smarty_tpl->tpl_vars['lastname']->first;?>

		No.<?php echo $_smarty_tpl->tpl_vars['lastname']->iteration;?>
 
		姓:<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>

		名:<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>

		</br>
	<?php
$_smarty_tpl->tpl_vars['lastname'] = $__foreach_lastname_0_saved;
}
} else {
?>

		数组为空！
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	数组个数为<?php echo $_smarty_tpl->tpl_vars['lastname']->total;?>

	<hr/>
	
	<div><b>条件分支</b></div>
	<?php if (1 == 1) {?>
		first if section
	<?php } elseif (2 == 2) {?>
		second if section
	<?php } else { ?>
		else section
	<?php }?>
	<hr/>
	
	<div><b>复选框</b></div>
	<?php echo smarty_function_html_checkboxes(array('name'=>"hobby",'options'=>$_smarty_tpl->tpl_vars['fullNames']->value),$_smarty_tpl);?>

	<div><b>下拉列表</b></div>
	<?php echo smarty_function_html_options(array('name'=>"hobby",'options'=>$_smarty_tpl->tpl_vars['fullNames']->value,'multiple'=>'multiple'),$_smarty_tpl);?>

	<hr/>
	
	<div><b>将已有前端模板与Smarty结合</b></div>
	<ul>
		<li>复制模板文件到根目录</li>
		<li>修改html中js,css,img等静态资源的相对路径</li>
		<li>修改css中引入图片的相对路径</li>
		<li>在入口文件中设置变量信息，使其在模板文件中显示</li>
	</ul>
	<hr/>
	
	<div><b>变量修饰器</b></div>
	<div>初始：<?php echo $_GET['name'];?>
</div>
	<div>小写：<?php echo mb_strtolower($_GET['name'], 'UTF-8');?>
</div>
	<div>大写：<?php echo mb_strtoupper($_GET['name'], 'UTF-8');?>
</div>
	<hr/>
	
	
	<hr/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
</body>
</html><?php }
}
