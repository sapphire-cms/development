<?php require_once "db.php" ?>
<?php 
	class Auth extends db {
		public function checkUser() {
			if (isset($_POST['login'])) {
				$resquery = $this->mysqli->query("SELECT * FROM entry  WHERE login='".$_POST['login']."'") ;
				if ($resquery->num_rows($resquery)==1) {
				  	$row = $resquery->fetch_assoc() ;
				  } 

				  setcookie("login", $row['login'], time() + 50000) ;
				  setcookie("password", md5($row['login'].$row['password']), time() +50000) ;
				  $id = $_SESSION['id'] ;     
			}
		}
	}
 ?>