<?php
	require 'smarty-3.1.30/libs/Smarty.class.php';
	
	define('Hello', '我是常量');
	
	//实例化
	$smarty = new Smarty();
	
	//设置模板文件和编译文件目录
	$smarty->setTemplateDir('./template/');
	$smarty->setCompileDir('./template_c/');
	
	//设置模板文件属性
	$tpl = 'template.html';
	$smarty->assign('title', '我是smarty的title！');
	$smarty->assign('content', '我是smarty的content！');
	$smarty->assign('hobby', 'section1');//选择配置文件中的段
	$smarty->assign('names', array('Jone', 'LeBron', 'Kobe', 'Russell'));//使用索引数组
	$smarty->assign('fullNames', array(//使用关联数组
		'LeBron' => 'James',
		'Kobe'	 => 'Bryant',
		'Russell'=> 'Westbrook'
	));
	
	//设置模板文件标记
	/* $smarty->left_delimiter = '{';
	$smarty->right_delimiter = '}'; */
	
	//开启页面缓存，生成的缓存文件放在./cache目录下
	/* 混编文件是php+html代码，必须要通过php解释器才能返回给用户
	 * 而开启页面缓存之后生成的静态页面是纯html代码(有少量php，不过仅仅是页面
	 * 的属性信息，不需要给用户看到)不需要经过php解释器，故提高了访问速度
	**/
	$smarty->caching = 1;
	$smarty->cache_lifetime = 20;//设置缓存更新时间(秒)
	
	//根据模板，返回页面
	/* 1. 判断模板文件是否有更新(如果有更新，直接跳进5) 
	 * 2. 判断缓存文件是否存在(以及时间是否过期，如果存在，直接进入5)
	 * 3. 判断混编文件是否存在(存在则直接解释，放入缓存文件，进入5)
	 * 4. compile模板文件，生成混编文件，解释后放入缓存，进入5
	 * 5. 返回给Client
	**/
	$smarty->display($tpl);
	
	/* Smarty与已有项目结合
	 * 1.自动加载机制设置，都通过spl_autoload_register注册 
	 * 2.在父类控制器的构造方法里实例化Smarty对象，并做具体配置
	**/
	
	
	
	
	
	
	
	
	
	
	