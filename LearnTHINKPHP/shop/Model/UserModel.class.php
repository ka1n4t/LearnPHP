<?php

namespace Model;
use Think\Model;

class UserModel extends Model {
	
	protected $patchValidate = true;
	
	protected $_validate = array(
	
		array('username', 'require', '用户名不能为空'),
		array('username', '', '用户名已存在', 0, 'unique'),
		
		array('password', 'require', '密码不能为空'),
		array('password2', 'require', '验证密码不能为空'),
		array('password', 'password2', '两次密码不一致', 0, 'confirm'),
		
		array('email', 'email', '邮箱不符合规范'),
		
		array('favourite', 'check_favourite', '爱好必须选择一项或以上', 1, 'callback'),
	
	);
	
	function check_favourite($arg) {
		if(count($arg) < 2) {
			return false;
		}
		return true;
	}
	
}

?>