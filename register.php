<?php session_start() ?>
<?php require_once "validator.php" ?>
<?php ?>
<?php if(isset($obj) && $obj->checkAll()){
$db->add() ;
header("Location: index.php") ; 
} elseif(isset($obj)) { 
echo 'Вы не заполнили поля';
} ?>
    
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Блог</title>
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script scr="js/jquery-2.1.0.min.js"></script>
            <script src="js/modernizr.custom.js"></script>
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
        


        <form method="post" action="register.php">
            <div class="register">
                    <div>
                    <label for="login">Логин</label><br>
                     <span class="add-on"><i class="icon-user"></i>
                            <input name="login" id="login" type="text">
                        <?php if (isset($obj) and isset($obj->errors['login'])) {
                            echo '<span class="help-inline">'.$obj->errors['login'].'</span>';
                        } ?> </span></div>
                        <div>
                         <label for="password">Пароль</label><br>
                        <span class="add-on"><i class="icon-lock"></i>
                            <input name="password" id="password" type="password">
                        <?php if (isset($obj) and isset($obj->errors['password'])) {
                            echo '<span class="help-inline">'.$obj->errors['password'].'</span>';
                        } ?></span></div>
                   <div>
                    <label for="email">Email</label><br>
                     <span class="add-on1"><i class="icon-envelope"></i>
                            <input name="email" id="email" type="email">
                        <?php if (isset($obj) and isset($obj->errors['email'])) {
                            echo $obj->errors['email'];
                        } ?></span></div>


                    <div><button class="regbutton sbutton">Зарегистрироваться</button></div>
        
</form>
    </div></div>
    
    <div id="lower-info"></div>
    </div>


</body>
</html>

