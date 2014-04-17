<?php session_start() ?>
<?php require "classPosts.php" ?>
<?php if (isset($posts) && $posts->checkPosts()) {
			$posts->add_query_Topic() ;
			header("Location: index.php") ; 
		}
?>		

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Блог</title>
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script src="js/modernizr.custom.js"></script>
		 <script src="js/jquery-ui-1.10.4.custom.js"></script>
		<script scr="js/jquery-2.1.0.min.js"></script> 
	</head>
	<body>




<div id="wrapper">
<div id="sidebar" >
	<div id="header-menu">
			
                            <div class="username">   
                                <span class="user-icon"></span>
                                <input name="login" type="text" placeholder="Логин"/></div>
                            <div class="password">
                                <span class="password-icon"></span>
                                <input name="password" type="password" placeholder="Пароль"/></div>
                            <span class="forgot-password"><a href="#">Забыли пароль?</a></span>
			<form action="register.php">
			<button type="submit" class="reg-button">Регистрация</button></form> 
			<form method = "POST"> 
			<button class="sign-in" name="login">Войти</button>
			</form></div>
                        <nav class="main-menu">
			<a href="index.php">Главная страница</a>
			<a href="#">Настройки</a>
		</nav>
</div>
	<div id="header">
		<input id="showMenu" type = "image" src = "img/menu.png" name = "open" value = "open" alt="Меню" />
		<form action="new-topic.php">
		<input id="b-newtopic" type = "image" src = "img/new-topic.png" alt="Новая статья" /></form>
							

</div> <!--header-style -->
								
							
	<div id="content">

<?php 
		if (isset($posts) && $post = $posts->getPosts()) {
			foreach ($post as $key) { 
		 		echo '<div id="title-topic">'.$key['title']."</div>" ; 
		 		echo '<div id="content-topic">'.$key['content']."</div>" ;
		 		echo '<div id="info-topic">'.$key['date']."</div>" ;  
			} 	
		}	
?>
	<div id="footer">© Sapphire-CMS 2014</div>
	</div>


	</body>
</html>