<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {
	
	function login() {
		$this->display();
	}
	
	function register() {
		
		if(!empty($_POST)) {
			//处理注册信息
			$user = new \Model\UserModel();
			$data = $user->create();
			
			if($data) {
				$data['favourite'] = implode(',', $_POST['favourite']);
				$res = $user->add($data);
				$this->redirect('Index/index');else {
			}else {
				$this->assign('errorInfo', $user->getError());
			}

		}
		//展示注册页面
		$this->display();

	}
	
}

?>