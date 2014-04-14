<?php 
	class tpl {
		private $path, $template, $file, $dir ;
		private $vars = array() ; 
		public function __construct() {
			$this->dir = 'templates/' ; 

		}

		public function pathtpl($tmp, $tpl_name = 'default') {
			$this->path = $tmp.$tmp->dir.$tpl_name ;
			if (!is_dir($this->path)) {
			 	throw new Exception("Path Directory". $this->path. 'not exists') ;
			} 
		}

		public function setvar($name, $value) {
			$this->vars[$name] = $value ; 
		}

		public function display($file_include) {
			$this->template = $file_include ;
			if (!file_exists($this->path. '/'. $this->template)) {
			 	throw new Exception("Include file". $this->path. '/'. $this->template. 'not exists') ; 	
			 }
			 
			require_once $this->path. '/'. $this->template ;  
		}

		public function __get($name) {
			if (isset($this->vars[$name])) {
				$variable = $this->vars[$name] ;
				return $variable ;  
			}
			return NULL ; 
		}
	}

 ?>