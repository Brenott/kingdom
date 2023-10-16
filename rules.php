<!DOCTYPE html>
<html lang="en">
<head>
        <style>
        .mce-tinymce {
          resize: none;
        }
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Правила</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="rules.css">
    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
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
                    <li><hr/><a href="news.php">Новости</a></li>
                    <li><hr/><a class="dot" href="rules.php">Правила</a></li>
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
            </div>
        </div>
        <hr style="border: none;border-bottom: 2px solid #000;">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="h1">
                <h>Правила</h>
            </div>
            <?php
            if($_COOKIE['user'] != ''):
            ?>
            <div class="rules">
            <h1>Правила сервера</h>
            </div>
            <?php endif;?>
            <?php
            if($_COOKIE['user'] == 'Brenott'):
            ?>
            <div class="rules">

                <textarea name="" id="mce-edit-area" cols="30" rows="10"></textarea>

            </div>
            <?php endif;?>
        </div>
    </main>
</body>
</html>