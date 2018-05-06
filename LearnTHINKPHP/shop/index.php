<?php
	header('content-type: text/html;charset=utf-8');
	
	//使用开发(调试)模式
	define('APP_DEBUG', true);
	
	
	//设置默认分组
	define('DEFAULT_MODULE', 'home');
	
	//定义静态资源路径常量
	//前台
	define('CSS_URL', '/LAB/LearnTHINKPHP/shop/Public/css/');
	define('IMG_URL', '/LAB/LearnTHINKPHP/shop/Public/images/');
	define('JS_URL', '/LAB/LearnTHINKPHP/shop/Public/js/');
	//后台
	define('ADMIN_CSS_URL', '/LAB/LearnTHINKPHP/shop/Admin/Public/css/');
	define('ADMIN_IMG_URL', '/LAB/LearnTHINKPHP/shop/Admin/Public/images/');
	
	require_once "../ThinkPHP/ThinkPHP.php";
	

?>