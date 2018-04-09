<?php
	require 'connect.php';

	$sql = "select * from updatetable";
	$stmt = $pdo->query($sql);
	
	var_dump($stmt);
	echo $stmt->rowCount();
	echo "<br>";
	echo $stmt->columnCount();
	echo "<br>";
	
	//返回关联数组
	var_dump($stmt->fetch(PDO::FETCH_ASSOC));
	echo "<br>";
	var_dump($stmt->fetch(PDO::FETCH_ASSOC));
	
	//返回索引与关联并存的数组
	echo "<br>";
	var_dump($stmt->fetch(PDO::FETCH_BOTH));
	
	//返回对象
	echo "<br>";
	var_dump($stmt->fetch(PDO::FETCH_OBJ)); //相当于$stmt->fetchObject()
	echo "<br>";
	echo $stmt->fetch(PDO::FETCH_OBJ)->username;
	echo "<br>";
	 
	//fetchAll
	var_dump($stmt->fetchAll());
?>