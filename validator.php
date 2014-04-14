<?php require_once "db.php" ?>
<?php

class validationForm

{
    public $name ;
    public $pass ; 
    public $errors = array();

    public function checkAll() {
        if (strlen($_POST['login']) >= 3 and (strlen($_POST['login']) <= 25)) {
            $this->name = stripcslashes($_POST['login']);
            $this->name = html_entity_decode($this->name);
            $this->name = strip_tags($this->name);
            $this->name = trim($this->name) ;

        } else {

            $this->errors['login'] = "<br>Логин должен быть не менее 3 символов и не больше 25.";
 
        }

        if (!preg_match('/[a-z0-9]+([_.-][a-z0-9]+)?/', $_POST['password'])) {
            $this->errors['password'] = "<br>Пароль должен состоять только из букв латинского алфавита, цифр и символов.";
        }
        if (strlen($_POST['password']) >= 6 and (strlen($_POST['password']) <= 30)) {
            $this->pass = sha1($_POST['password']);
        } else {
            $this->errors['password'] = "<br>Пароль должен быть не менее 3 символов и не более 30 символов.";
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) {
            $this->errors['email'] = "<br>Email ввден неверно.";
        }
       if (count($this->errors) == 0) { 
            return true ; 
        }

    }
    
    }



    if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
        $obj = new validationForm();
        $obj->checkAll() ; 
    } 