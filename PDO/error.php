<?php
	require 'connect.php';
	
	//PDO异常处理

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	try {
		$sql = 'select * from updatetaable'; //表名拼错
		$stmt = $pdo->query($sql);
	}catch (Exception $e) {
		//捕获异常
		echo $e->getmessage().'<br>';
		echo $e->getcode().'<br>';
		echo $e->getFile().'<br>';
		echo $e->getLine().'<br>';
	}






?>