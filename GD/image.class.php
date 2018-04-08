<?php
	class Image{
		//图片的基本信息
		private $info;
		//内存中的图片
		private $image;
		
		//读取图片到内存中
		public function __construct($src){
			$info = getimagesize($src);
			$this->info = array(
				'width' => $info[0],
				'height' => $info[1],
				'type' => image_type_to_extension($info[2], false),
				'mime' => $info[3]
			);
			$fun = "imagecreatefrom{$this->info['type']}";
			$this->image = $fun($src);
		}
		
		//创建缩略图
		public function thumb($width, $height){
			$image_thumb = imagecreatetruecolor($width, $height);
			imagecopyresampled($image_thumb, $this->image, 0, 0, 0, 0, $width, $height, $this->info['width'], $this->info['height']);
			$this->image = $image_thumb;
		}
		
		//创建文字水印图片
		public function fontMark($font_src, $content){
			$col = imagecolorallocatealpha($this->image, 50, 50, 200, 0);
			imagettftext($this->image, 50, 5, 20, 100, $col, $font_src, $content);
		}
		
		//创建图片水印图片
		public function photoMark($src){
			$info = getimagesize($src);
			$type = image_type_to_extension($info[2], false);
			$fun = "imagecreatefrom{$type}";
			$image = $fun($src);
			
			imagecopymerge($this->image, $image, 20, 30, 0, 0, $info[0], $info[1], 50);
			imagedestroy($image);
		}
		
		//在浏览器中显示
		public function show(){
			header("Content-Type:".$this->info['mime']);
			$fun = "image{$this->info['type']}";
			$fun($this->image);
		}
		
		//保存图片
		public function save($name){
			$fun = "image{$this->info['type']}";
			$fun($this->image, "$name.".$this->info['type']);
		}
		
		//销毁图片
		public function __destruct(){
			imagedestroy($this->image);
		}
	}

?>