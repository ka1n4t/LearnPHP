<?php
	//模板引擎类
	class MiniSmarty{
		private $template_dir = './template/';
		private $template_compiled_dir = './template_compiled/';
		private $tmp_var = array();
		
		//给变量赋值
		public function assign($key, $value){
			$this->tmp_var[$key] = $value;
		}
		
		public function display($tpl){
			$tpl_c = $this->compile($tpl);
			require $tpl_c;
		}
		
		//‘编译’模板文件
		public function compile($tpl){
			$tpl_file = $this->template_dir.$tpl;
			$compiled_file = $this->template_compiled_dir.$tpl.".php";
			
			if(file_exists($compiled_file) && filemtime($tpl_file) < filemtime($compiled_file)){
				//直接返回之前生成的模板缓存文件
				return $compiled_file;
			}
			//生成新的缓存文件并返回
			//获得模板文件内容
			$cont = file_get_contents($tpl_file);
			
			//替换模板内容
			$cont = str_replace('{$', '<?php echo $this->tmp_var["', $cont);
			$cont = str_replace('}', '"];?>', $cont);
	
			//保存至文件
			file_put_contents($compiled_file, $cont);
			
			//返回编译完成的模板文件
			return $compiled_file;


		}
	}