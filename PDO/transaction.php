<?php
	require 'connect.php';
	//MySQL事务处理
	//start transaction;
	//回滚 rollback;
	//执行事务 commit;  

	//使用PDO操作
	//1.开启事务
	$pdo->beginTransaction();
	
	//2.执行sql语句
	$isSuc = True;
	$sql = "update updatetable set password = password+100 where username='aaa'";
	$result = $pdo->exec($sql);
	if(!$result) $isSuc = False;
	
	$sql = "update updatetable set password = password-100 where username='bbb'";
	$result = $pdo->exec($sql);
	if(!$result) $isSuc = False;
	
	//3.若SQL执行成功则事务生效，否则回滚(rollback)
	if($isSuc) {
		$pdo->commit();
		echo "Success";
	} else {
		$pdo->rollback();
		echo "Fail";
	}
	
	
	
	
	
	
	
?>