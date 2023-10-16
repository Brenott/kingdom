<?php
    session_start();
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $mail = filter_var(trim($_POST['mail']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $root = "user";

    if(mb_strlen($login) < 5 || mb_strlen($login) > 20){
        $_SESSION['message'] = 'Недопустимая длина логина от 5 до 20 символов';
        header('Location: ../reg.php');
        exit();
    } else if(mb_strlen($mail) < 7 || mb_strlen($mail) > 50){
        $_SESSION['message'] = 'Недопустимая длина почты';
        header('Location: ../reg.php');
        exit();
    }else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 20){
        $_SESSION['message'] = 'Недопустимая длина пароля от 6 до 20 символов';
        header('Location: ../reg.php');
        exit();
    }
    //$_FILES['avatar']['name']
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if(!move_uploaded_file($_FILES['avatar']['tmp_name'],  $path)){
        $_SESSION['message'] = 'Ошибка при загрузке изображения';
        header('Location: ../reg.php');
    }



    $pass = md5($pass."dsndadjaj2321n");

    $mysql = new mysqli ('localhost','root','root','Kingdom');
    if (!$mysql) {
        die('Error connect to DataBase');
    }
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` =
    '$login' AND `pass` = '$pass' AND `root` = '$root' AND `mail` = 'mail'");





    $logch = $mysql->query("SELECT * FROM `users` WHERE `login` =
    '$login'");

    if (mysqli_num_rows($logch) > 0) {
        $_SESSION['message'] = 'Такой логин уже используется';
        header('Location: ../reg.php');
        exit();
    }

    $maich = $mysql->query("SELECT * FROM `users` WHERE `mail` =
    '$mail'");

    


    if (mysqli_num_rows($maich) > 0) {
        $_SESSION['message'] = 'Такая почта уже используется';
        header('Location: ../reg.php');
        exit();
    }
    

    $mysql->query("INSERT INTO `users` (`login`, `pass`, `mail`, `root`, `avatar`) 
    VALUES('$login','$pass','$mail', '$root', '$path')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: signin.php');

    $mysql->close();


    
?>