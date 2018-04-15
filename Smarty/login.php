<?php
	require 'smarty-3.1.30/libs/Smarty.class.php';
	header('content-type: text/html;charset=utf-8');
	
	$smarty = new Smarty();
	$smarty->setTemplateDir('./template/');
	$smarty->setCompileDir('./template_c/');
	
	$tpl = 'login.html';
	$smarty->display($tpl);