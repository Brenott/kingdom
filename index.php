<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KingdomWar</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
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
        <h>Выбери свою сторону</h>
        </div>
        <div class="detail">
            <section>
                <img src="photo/assassins.jpg" alt="Гильдия ассасинов" class="left">
                <div class="detail-class">
                    <div class="detail-right">
                    <div class="detail-class-up">
                    <img src="photo/assasins_logo.png" alt="" class="right">
                    <h1>Гильдия ассасинов</h1>
                    </div>
                    <div class="detail-class-down">
                    <p>Гильдия Ассасинов - это таинственная и
                         элитная организация, специализирующаяся на выполнении секретных миссий
                          и устранении важных целей. Они оперируют в тени и предпочитают держаться
                           в секрете, обладая навыками скрытности и боевых искусств. Гильдия Ассасинов
                            обладает уникальными способностями, такими как маскировка и отравления,
                             и применяет их в своих операциях. Они гибки и мобильны, умеют 
                             перемещаться по городу, проникать в запретные зоны и использовать паркур.
                              Внутри гильдии существует строгая иерархия и система обучения,
                               новички проходят тренировки, чтобы стать полноправными членами. 
                               Гильдия получает заказы и контракты от различных заказчиков и 
                               выполняет их секретно и эффективно. Гильдия Ассасинов сохраняет
                                нейтральность и независимость, не вступая в политические конфликты 
                                и сражения.</p>
                </div>
                </div>
                </div>
            </section>
            <hr style="border: none;border-bottom: 2px solid #000;width: 100%;margin-bottom: 130px;">
            <section>
                <img src="photo/worker.png" alt="Простой крестьянин" class="left">
                <div class="detail-class">
                    <div class="detail-right">
                    <div class="detail-class-up">
                    <img src="photo/worker_logo.png" alt="" class="right">
                    <h1>Жители королевства</h1>
                </div>
                <div class="detail-class-down">
                    <p>Жители королевства представляют собой разнообразную
                         группу людей, которые проживают и работают внутри королевства. Они обычно живут в деревнях или городах, они участвуют в 
                         местных событиях и торжествах, а также имеют свои обычаи и традиции.
                          Они могут быть подчинены определенным законам и правилам, установленным 
                          правительством или монархом. Во времена войны или угрозы со стороны 
                          внешних сил, жители королевства могут быть вызваны на службу или вступать
                           в местные отряды защитников. </p>
                    </div>
                </div>
                </div>
            </section>
            <hr style="border: none;border-bottom: 2px solid #000;width: 100%;margin-bottom: 130px;">
            <section>
                <img src="photo/mag.png" alt="Коалиция магов" class="left">
                <div class="detail-class">
                    <div class="detail-right">
                    <div class="detail-class-up">
                    <img src="photo/mag_logo.png" alt="" class="right">
                    <h1>Коалиция магов</h1>
                    </div>
                    <div class="detail-class-down">
                    <p>В коалицию магов могут вступить только 
                        одарённые, те, чьи магические способности
                         были приобретены при рождении. 
                        В коалиции Магов заведено следующим 
                        образом, каждый, кто получает степень 
                        Магистра - отправляется на служение одному 
                        из Королей. Сам Верховный Маг проводит отбор 
                        и распределение, его слово для его последователей - 
                        закон! Магистры и Архимаги будучи на службе 
                        у короля обязаны в первую очередь исполнять 
                        приказы Верховного Мага, а затем уже Короля. 
                        Король обязуется выплачивать ежедневную плату 
                        за каждого мага на службе суду в размере 10 Флоренов. 
                        Эта система создана для того, чтобы поддерживать 
                        баланс между королевствами.</p>
                    </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </main>
    
</body>

</html>