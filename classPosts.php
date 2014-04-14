<?php require "db.php" ?>
<?php  
	class Posts extends db {
		public $stmt ; 
		public $data = array() ;
		public $error_records = array() ;  

		public function add_query_Topic() {
			$this->mysqli->query("INSERT INTO `topic` (title, content) VALUES('".$_POST['header']."', '".$_POST['topics']."')") ;
		}

		public function checkPosts() {
            if (strlen($_POST['header']) >=10 and strlen($_POST['topics']) >= 15) {
                $this->post = htmlspecialchars($_POST['topics'] and $_POST['header']) ;
                $this->post = html_entity_decode($this->post) ; 
                $this->post = strip_tags($this->post) ; 
                $this->post = trim($this->post) ;  
             }  else {
                $this->error_records['header']=$this->error_records['topics'] = "Заголовок должен быть не менее 10 символов, а содержание статьи не менее 100 символов." ; 
                } 
                if (count($this->error_records) == 0) {
                	return true ;    
                }              
            }	

		 public function getPosts() {
		 		$this->stmt = $this->mysqli->query("SELECT title, content, date FROM `topic`") ;
		 		$result = $this->stmt ;  
		 			while ($row = $result->fetch_assoc()) {
		 				$row['date'] = time() ;
		 				$row['date'] = date('d/m/Y H:i',$row['date']) ;
		 				$this->data[] = $row ;
		 			}
		 				return $this->data ; 		 		 
		 	}

	}
	
	$posts = new Posts() ; 
