<?php
	//open
	$src = '001.jpg';
	$info = getimagesize($src);
	$type = image_type_to_extension($info[2], false);
	$fun = "imagecreatefrom{$type}";
	$image = $fun($src);
	
	//operate
	#set font route
	$font = "STXINGKA.TTF";
	#content
	$content = "Hello GD Library";
	#set color
	$col = imagecolorallocatealpha($image, 50, 50, 200, 0);
	#write content
	imagettftext($image, 50, 5, 20, 100, $col, $font, $content);
	
	//output
	#Browser
	header("Content-Type:".$info['mime']);
	$fun = "image{$type}";
	$fun($image);
	#save to disk
	$fun($image,'newimage.'.$type);
	
	//destroy
	imagedestroy($image);
?>