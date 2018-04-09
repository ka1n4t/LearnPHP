<?php
	require 'connect.php';

	#$sql = "insert into updatetable values('12', 'aaa', 'bbb')";
	$sql = "delete from updatetable where id=12";
	
	$count = $pdo->exec($sql);
	
	echo $pdo->lastInsertId();
	var_dump($count);
?>