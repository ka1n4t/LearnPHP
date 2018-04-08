<?php
	$src1 = '001.jpg';
	$src2 = '002.jpg';
	
	$info1 = getimagesize($src1);
	$type1 = image_type_to_extension($info1[2], false);
	$fun1 = "imagecreatefrom{$type1}";
	$image1 = $fun1($src1);

	$info2 = getimagesize($src2);
	$type2 = image_type_to_extension($info2[2], false);
	$fun2 = "imagecreatefrom{$type2}";
	$image2 = $fun2($src2);
	
	//merge
	imagecopymerge($image1, $image2, 20, 30, 0, 0, $info2[0], $info2[1], 50);
	imagedestroy($image2);
	header("Content-Type:".$info1['mime']);
	$fun3 = "image{$type1}";
	$fun3($image1);
	
	imagedestroy($image1);

?>