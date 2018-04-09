<?php
	require 'connect.php';
	/*了解PDO的预处理机制*/
 
	//1.发送预处理语句
	$sql = "insert into updatetable values(?, ?, ?)";
	//$sql = "insert into updatetable values(:id, :uname, :passwd)";
	$stmt = $pdo->prepare($sql);
	echo "<br>";
	
	//2.绑定参数
	$id = 16;
	$uname = 'abc';
	$passwd = 'abc';
	
	//Error, bind**函数不可用，不知为何。只能通过数组传参
	//bindParam()是引用传递，bindValue()是值传递
	/* $stmt->bindParam('1', $id); //或$stmt->bindValue(1, 12);
	$stmt->bindParam('2', $uname);
	$stmt->bindParam('3', $passwd);
	var_dump($stmt); */
	
	//3.执行预处理
	//$stmt->execute(array(':id'=>18, ':uname'=>$uname, ':passwd'=>$passwd));
	if($stmt->execute(array($id,$uname,$passwd))){
		echo "True";
	} else {
		echo "False";
	}
	
?> 