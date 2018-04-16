<?php
/* 	require_once('./../Model/testModel.class.php');
	require_once('./../View/testView.class.php'); */
	class testController{
		function show(){
			$testModel = new testModel();
			$data = $testModel->get();
			$testView = new testView();
			$testView->display($data);
		}
	}