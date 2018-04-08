<?php
	require 'image.class.php';
	
	$src = '001.jpg';
	$image = new Image($src);
	//$image->fontMark('STXINGKA.TTF', 'Hello!!!!!');
	$image->photoMark('002.jpg');
	$image->show();
?>