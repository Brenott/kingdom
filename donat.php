<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Правила</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="rules.css">
    <script src="donat.js"></script>
</head>
<body>
    <header> 
        <div class="header-background">
            <div class="header-content">
                <div class="header-top">
                   <a href="index.php"> <img src="photo/castle (1).png" alt="" class="header-logo">
                    KingdomWar</a>
                </div>
                </div>
            </div>
            <div class="container">
            <div class="header-botomm-content">
            <div class="header-bottom">
                <ul>
                    <li><hr/><a href="news.php">Новости</a></li>
                    <li><hr/><a href="rules.php">Правила</a></li>
                    <li><hr/><a class="dot" href="donat.php">Донат</a></li>
                    <?php
if($_COOKIE['user'] == ''):
?>
 <li><hr/><a href="signin.php"><button type="button" class="button">Вход</button></a></li>
 <?php endif;?>
 <?php
if($_COOKIE['user'] != ''):
?>
                    <li><hr/><a href="exit.php"><button type="button" class=""button>Выйти</button></a></li>
                    <?php endif;?>   
                </ul>
                
            </div>
        </div>
        <hr style="border: none;border-bottom: 2px solid #000;">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="h1">
                <h>Донат</h>
            </div>
            <div class="base">
                <div class="up">
                    <h1>Выберите что хотите приобрести</h1>
                </div>
                <div class="center">
                    <select id="selectdonat" data-style="btn-primary" onchange="showPrice()">
                    <option value="0">Выберите товар</option>
                    <option value="1">Vip</option>
                    <option value="2">Premium</option>
                    </select>
                </div>

                <div id="price">
                    Выберите донат
                </div>
                <div class="input">
                    <form action="send.php" method="post">
                <input type="text" name="steamid" value="" placeholder="Ваш SteamID" required><br>
                <input class="button" type="submit" name="Submit" value="Купить">
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>