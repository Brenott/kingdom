<?php
    session_start();
    if($_COOKIE['user'] != ''){
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="log">
        <a href="index.php"> <img src="photo/castle (1).png" alt="" class="logo"  style="position: relative; max-width: 110px; height: 100px; display: flex;"></a>
    <div class="box">
        <span class="borderLine"></span>
        <form action="check.php" method="post" enctype="multipart/form-data"><h2>Регистрация</h2>
        <div class="inputBox"><input type="text" required="required" name="login">
        <span>Логин</span><i></i>
        </div>
        <div class="inputBox"><input type="email" required="required" name="mail">
        <span>Почта</span><i></i>
        </div>
        <div class="inputBox"><input type="password" required="required" name="pass">
        <span>Пароль</span><i></i>
        </div>
        <div class="inputBox"><input type="file"  name="avatar">
            <span>Аватар</span><i></i>
            </div>
        <div class="links">
            <a href="signin.php">Есть аккаунт? Войти</a>
            <a href="index.php">Вернуться</a>
        </div>
        <input type="submit" value="Зарегистрироваться">
        <?php 
            if ($_SESSION['message']){
                echo '<p class="msg"> '.$_SESSION['message'].' </p>';
            }
             unset($_SESSION['message']);
            
            ?>
        
    </form></div>
    </div>
</body>
</html>