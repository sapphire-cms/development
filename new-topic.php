<?php require "classPosts.php" ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Блог</title>
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">

		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script src="js/modernizr.custom.js"></script>
		 <script src="js/jquery-ui-1.10.4.custom.js"></script>
		<script scr="js/jquery-2.1.0.min.js"></script> 
	</head>
	<body>




<div id="mainstyle">
<div id="menu-style" >
	<nav class="main-menu">
			<div id="header-menu">
			<input name="login" type="text" placeholder="Логин"/>
			<input name="password" type="password" placeholder="Пароль"/>
			<form action="register.php">
			<button type="submit" class="btn">Регистрация</button></form> 
			<form method = "POST"> 
			<button class="btn" name="login">Войти</button>
			</form></div>
			<a href="index.php">Главная страница</a>
			<a href="#">Настройки</a>
		</nav>
</div>	
	<div id="header-style">
		<input id="showLeft" type = "image" src = "img/menu.png" name = "open" value = "open" alt="Меню" />
		<form action="new-topic.php">
		<input id="b-newtopic" type = "image" src = "img/new-topic.png" alt="Новая статья" /></form>
							

</div> <!--header-style -->
								
							
	<div id="content-block">
<form method="POST" action="index.php">
<input name="header" id="header-newtopic" type="text" placeholder="Заголовок" maxlength="100">
<textarea name="topics" maxlength="1000000"></textarea><br>
<button name="Submit" id="add-topic" class="btn" >Опубликовать статью</button>
</form>



	<div id="lower-info"></div>
	</div>


	</body>
</html>