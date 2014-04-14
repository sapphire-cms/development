<?php 
	class db {
		public $mysqli ; 
		public function __construct() {
			$this->mysqli = new mysqli('localhost', 'root', '', 'blog') or die ('Not connection database') ; 
		}

		public function add() {
			$this->mysqli->query("INSERT INTO entry (login, password, email) VALUES ('".$_POST['login']."', '".sha1($_POST['password'])."', '".$_POST['email']."')") ;

		}

  	}
  	
	$db = new db() ;
	  

