<?php

namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller {
	
	function test_showlist1() {
		/* $goods = new \Model\GoodsModel();
		var_dump($goods);
		
		$goods = D();
		var_dump($goods); */
		
		$goods = D('Goods');
		
		$info = $goods->select();
		$this->assign('info', $info);
		$this->display("show");
	}
	
	function showlist() {
		$goods = D('Goods'); 

		//1. where()用法
		//$goods->where('goods_price < 1300 and 1="1"');

		//2. field()方法 限制查询字段
		//$goods->field('goods_name, goods_price');
		
		//3. limit() 限制查询条数
		//$goods->limit(2);
		
		//4. order() 
		//$goods->order('goods_id desc');
		
		//5. group()
		//$goods->group('goods_price');

		//6. having()
		//$goods->group('goods_price');
		//$goods->having('goods_price>1000');

		//7. 执行原生SQL
		//$goods->query($sql); //返回一个二维数组结果    查
		//$goods->execute($sql); //返回受影响记录的条数  增删改
		
		$info = $goods->order('goods_id desc')->select();
		$this->assign('info', $info);
		$this->display('show');
		
	}
	
	//形参自动读取get参数，形式为：
	//__ACTION__/goods_id/1
	function update($goods_id) {
		$goods = D('Goods');
		//$goods_id = $_GET['goods_id'];
		if(!empty($_POST)) {
			//处理数据
			$goods_name = $_POST['goods_name'];
			$goods_price = $_POST['goods_price'];
			$goods_num = $_POST['goods_num'];
			$goods_weight = $_POST['goods_weight'];
			$goods_introduce = $_POST['goods_introduce'];
			
			$data = array(
				'goods_name' => $goods_name,
				'goods_price' => $goods_price,
				'goods_num' => $goods_num,
				'goods_weight' => $goods_weight,
				'goods_introduce' => $goods_introduce
			);
			
			$res = $goods->where("goods_id = $goods_id")->save($data);
			if($res) {
				$this->redirect('showlist', array(), 1, 'success! wait 1 sec...');
			} else {
				$this->redirect('update', array('goods_id'=>$goods_id), 1, 'fail! wait 1 sec...');
			}
		} else {
			$info = $goods->where("goods_id = '$goods_id'")->find(); //find() 只返回一条信息(格式为一位数组)
			$this->assign('info', $info);
			$this->display();
		}
		
		//$goods = D('Goods');
		//1. 数组方式
		/* $data = array(
			'goods_price' => 999
		);
		$goods->where('goods_name = \'test1\'')->save($data); */

		//2. AR方式
		//	pass
		
	}
	
	function addgoods() {
		//两个逻辑: 展示表单/处理表单数据
		
		if(!empty($_POST)) {
			//处理数据
			$goods = D('Goods');
			
			$goods_name = $_POST['goods_name'];
			$goods_price = $_POST['goods_price'];
			$goods_num = $_POST['goods_num'];
			$goods_weight = $_POST['goods_weight'];
			$goods_introduce = $_POST['goods_introduce'];
			
			$data = array(
				'goods_name' => $goods_name,
				'goods_price' => $goods_price,
				'goods_num' => $goods_num,
				'goods_weight' => $goods_weight,
				'goods_introduce' => $goods_introduce
			);
			
			$res = $goods->add($data);
			if($res) {
				//页面跳转
				$this->redirect('showlist', array(), 1, 'success! wait 1 sec...');
			} else {
				$this->redirect('addgoods', array(), 1, 'fail! wait 1 sec...');
			}
		} else {
			//展示表单
			$this->display('add');
		}
		
		//数据添加
		//$goods = D('Goods');
		//1. 数组方式
		/* $data = array(
			'goods_name' => 'test2',
			'goods_price' => 1000
		);
		$goods->add($data); */

		//2. AR方式
		/* $goods->goods_name = 'test1';
		$goods->goods_price = 1000;
		$goods->add(); */
		
	}
	
	function deletegoods($goods_id) {
		$goods = D('Goods');
		$res = $goods->where("goods_id = $goods_id")->delete();
		if($res) {
			$this->redirect('showlist', array(), 1, 'success! wait 1 sec...');
		} else {
			$this->redirect('showlist', array(), 1, 'fail! wait 1 sec...');
		}
	}
	
}



















































?>