<?php
	require 'smarty-3.1.30/libs/Smarty.class.php';
	
	header('content-type: text/html;charset=utf-8');
	
	//实例化
	$smarty = new Smarty();
	
	//设置模板文件和编译文件目录
	$smarty->setTemplateDir('./template/');
	$smarty->setCompileDir('./template_c/');
	
	$smarty->caching = 1; //注意与caching=2的区别
	$smarty->cache_lifetime = 10;
	
	//单个变量不缓存
	$test1 = time();
	$test2 = time();
	$smarty->assign('test1', $test1, true);
	$smarty->assign('test2', $test2);
	
	//使用缓存集合
	//即为每个标记的值创建一个缓存
	$brand = $_GET['brand'];
	$price = $_GET['price'];
	$network = $_GET['network'];
	$size = $_GET['size'];
	
	//强制重新生成缓存
	//$smarty->force_cache = true;
	
	$tpl = 'cacheLearn.html';
	
	//display(模板文件, 生成单模板多缓存的标志)
	//$smarty->display($tpl, $_GET['page']);
	
	//缓存集合
	//display(模板文件, mark|mark|mark|...)
	$smarty->display($tpl, $brand."|".$price."|".$network."|".$size);
	
	//缓存删除
	//$smarty->clearCache($tpl); //删除$tpl的缓存文件
	//$smarty->clearCache($tpl, $brand); //删除以$brand开头的$tpl缓存
	//$smarty->clearCache(null, $brand); //删除以$brand开头的全部缓存
	//$smarty->clearAllCache(); //删除全部缓存文件
	
	
	
	
	
	
	
	
	
	