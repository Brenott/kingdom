<?php
    session_start();
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."dsndadjaj2321n");

    $mysql = new mysqli ('localhost','root','root','Kingdom');
    
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` =
    '$login' AND `pass` = '$pass'");

    
        $user = $result->fetch_assoc();
        if (count($user) == 0) {
            $_SESSION['message'] = 'Неверный логин или пароль';
            header('Location: signin.php');
            exit();
        }
        
        setcookie('user', $user['login'], time() + 3600, "/");
        
    $mysql->close();
    header('Location: /');
?>