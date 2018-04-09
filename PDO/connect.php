<?php
	$dbms = 'mysql';
	$host = 'localhost';
	$port = '3306';
	$dbname = 't';
	$charset = 'utf8';
	$dsn = "$dbms:host=$host;port=$port;dbname=$dbname;charset=$charset";
	$username = 'root';
	$password = 'root';
	$pdo = new PDO($dsn, $username, $password);