<?php
	require 'connect.php';
	//设置PDO属性
	
	
	//PDO::ATTR_AUTOCOMMIT  自动提交 value:0/1
	//PDO::ATTR_CASE  		返回结果集的大小写
	//--PDO::ATTR_LOWER
	//--PDO::ATTR_UPPER
	//--PDO::ATTR_NATURAL
	
	//设置PDO属性
	$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
	
	$sql = "select * from updatetable";
	$stmt = $pdo->query($sql);
	$rows = $stmt->fetchAll();
	print_r($rows);

	//PDO::ATTR_ERRMODE			返回的错误模式
	//--PDO::ERRMODE_SILENT		静默模式(default)
	//--PDO::ERRMODE_WARNING	警告模式
	//--PDO::ERRMODE_EXCEPTION	异常模式
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "select * from updatetasdfable";
	$stmt = $pdo->query($sql);
	







?>