<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="news.css">
    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="news.js"></script>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview',
          toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image'
        });
      </script>
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
                    <li><hr/><a  class="dot" href="news.php">Новости</a></li>
                    <li><hr/><a href="rules.php">Правила</a></li>
                    <li><hr/><a href="donat.php">Донат</a></li>
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
                <h>Новости</h>
            </div>
            <div class="news">
                <img src="photo/develop.png" alt="developer" class="developer">
                <h3>Разработчик</h3>
                <h2>Ранг: Разработчик</h2>
                <h4>12.07.2022</h4>
                <div class="about-news">
                <h1>Заключительное глобальное обновление. (ЧАСТЬ 3 из 3) </h1>
                <p>1. Добавлен шкаф, где можно переодеться и изменить боди группы 
                    2. Добавлены аксессуары (Будут дополнятся со временем) 
                    3. Урон по сидящим 
                    4. Кровь в 4К качестве 
                    5. Урон кулаков снижен с (12-24) до (1-5) 
                    6. Fix телепорта. Блинк теперь работает раз в 10 секунд (вместо 1), дистанция изменена с 600 до 3000 
                    7. Ассасинам добавлена маскировка 
                    8. Вернул Blink Ассасинам 
                    9. Добавил SWEP разбойникам, с помощью которого можно своровать Флорены в размере (100 - 300) 
                    10. Ассасинам и разбойникам добавлена маскировка 
                    11. Автоматическая очистка крови на карте каждые 2 минуты. 
                    12. Доработал и верунул инвентарь 
                    13. Добавлена алхимия 
                    14. Колбы для алхимии теперь можно купить в F4 
                    15. Добавлена кровь на экране, когда вы на грани смерти 
                    16. Убран донат за наигранное время, во 2 части будет добавлена новая система. 
                    17. Добавлен статуя, которая перенесет вас основные точки на карте. 
                    18. Убран статус ОБТ у сервера.</p>
                    </div>
                    <?php
if($_COOKIE['user'] == 'Brenott'):
?>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <?php endif;?>
            </div>
            <div class="rate">
                <ul>
               <li><img src="photo/like.png" alt="Лайк"><p>516</p></li>
               <li><img src="photo/dislike.png" alt="Дизлайк"><p>20</p></li>
                </ul>
            </div>
        </div>
    </main>
    
</body>
</html>