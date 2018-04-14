<?php
	require 'smarty-3.1.30/libs/Smarty.class.php';
	
	define('Hello', '我是常量');
	
	//实例化
	$smarty = new Smarty();
	
	//设置模板文件和编译文件目录
	$smarty->setTemplateDir('./template./');
	$smarty->setCompileDir('./template_c./');
	
	//设置模板文件属性
	$tpl = 'template.html';
	$smarty->assign('title', '我是smarty的title！');
	$smarty->assign('content', '我是smarty的content！');
	$smarty->assign('hobby', 'section1');//选择配置文件中的段
	$smarty->assign('names', array('Jone', 'LeBron', 'Kobe', 'Russell'));//使用索引数组
	$smarty->assign('fullNames', array(//使用关联数组
		'LeBron' => 'James',
		'Kobe'	 => 'Bryant',
		'Russell'=> 'Westbrook'
	));
	
	//设置模板文件标记
	/* $smarty->left_delimiter = '{';
	$smarty->right_delimiter = '}'; */
	
	//显示生成的缓存文件(编译文件)
	$smarty->display($tpl);