<?php
	/* $title = '我是title';
	$content = '我是content'; */
	require './class/miniSmarty.class.php';
	//1.实例化类
	$tpl = 'template.html';
	$tp = new MiniSmarty();
	
	//2.分配参数
	$tp->assign('title', '我是title');
	$tp->assign('content', '我是content');
	
	//3.compile
	$tp->display($tpl);