<?php

	class adminController {
		
		public function __construct() {
			if(!isset($_SESSION['is_login']) && PC::$method != 'login') {
				$this->showMessage('未登录， 登录后再操作...', 'admin.php?controller=admin&method=login');
				exit();
			}
		}
		
		public function index() {
			VIEW::display('admin/index.html');
		}
		
		public function login() {
			if(isset($_POST['submit'])) {
				$this->checkLogin();
				
			} else {
				session_destroy();
				VIEW::display('admin/login.html');
			}
		}
		
		public function checkLogin() {
			$authObj = M('auth');
			if($authObj->loginSubmit()) {
				$this->showMessage('登录成功！', 'admin.php?controller=admin&method=index');
			} else {
				$this->showMessage('登录失败！', 'admin.php?controller=admin&method=login');
			}
		}
		
		public function logout() {
			$authObj = M('auth');
			$authObj->logout();
			showMessage('登出成功！', 'admin.php?controller=admin&method=login');
		}
		
		public function showMessage($text, $loc) {
			echo "<script>alert('$text');window.location.href='$loc';</script>";
			exit();
		}
	}

?>