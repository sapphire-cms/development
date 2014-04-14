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



	<div id="header-style">
		<input id="showLeft" type = "image" src = "img/menu.png" name = "open" value = "open" alt="Меню" />
		<form action="new-topic.php">
		<input id="b-newtopic" type = "image" src = "img/new-topic.png" alt="Новая статья" /></form>
							

</div> <!--header-style -->
								
							
	<div id="content-block">

<?php 
		if (isset($posts) && $post = $posts->getPosts()) {
			foreach ($post as $key) { 
		 		echo '<div id="title-topic">'.$key['title']."<br>"."</div>" ; 
		 		echo '<div id="content-topic">'.$key['content']."<br>"."</div>" ;
		 		echo '<div id="info-topic">'.$key['date']."<br>"."</div>" ;  
			} 	
		}	
?>
	<div id="lower-info"></div>
	</div>


	</body>
</html>