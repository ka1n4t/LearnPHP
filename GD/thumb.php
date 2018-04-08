<?php
	/* 生成缩略图 */
	
	//open image
	$src = '001.jpg';
	$info = getimagesize($src);
	$type = image_type_to_extension($info[2], false);
	$fun = "imagecreatefrom{$type}";
	$image = $fun($src);

	//operate
	//1.建立一个宽300，高200的真色彩图片
	$image_thumb = imagecreatetruecolor(300, 200);
	//2.将原图复制到新建的真色彩图片上，并且按照一定比例压缩
	imagecopyresampled($image_thumb, $image, 0, 0, 0, 0, 300, 200, $info[0], $info[1]);
	imagedestroy($image);
	
	//show
	header("Content-Type:".$info[2]);
	$fun2 = "image{$type}";
	$fun2($image_thumb);
	
	imagedestroy($image_thumb);
?>