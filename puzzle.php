<!DOCTYPE html>
<html lang="ru">
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

    <title>Личный сайт</title>

  </head>

  <body>
    <div class="header">
      <h1>Личный сайт</h1>
    </div>

    <?php
      include "menu.php";
    ?>


    <div class="content">

      <h2>Игра в загадки</h2>

      <div class="box">

        <?php
          if (isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3']) ) {
            $userAnswer = $_GET["userAnswer1"];
            $score = 0;
            if ($userAnswer == "утюг") {
              $score++;
            }

            $userAnswer = $_GET["userAnswer2"];
            if ($userAnswer == "чайник" || userAnswer == "заварник") {
              $score++;
            }

            $userAnswer = $_GET["userAnswer3"];
            if ($userAnswer == "граммофон") {
              $score++;
            }

            echo "<p>Вы разгадали ".$score." загадки(ку).</p>";
          }

        ?>
        <form method="get">

          <p>В Полотняной стране<br>По реке Простыне<br>Плывет пароход<br>То назад, то вперед,<br>А за ним такая гладь —<br>Ни морщинки не видать.
          </p>
          <input type="text" name="userAnswer1" placeholder="введите ответ" spellcheck="true" size="30">
          <br>
          <br>

          <p>В брюшке — баня,<br>В носу — решето,<br>Нос — хоботок,<br>На голове — пупок,<br>Всего одна рука<br>Без пальчиков,<br>И та — на спине<br>Калачиком.</p>
          <input type="text" name="userAnswer2" placeholder="введите ответ" spellcheck="true"  size="30">
          <br>
          <br>

          <p>"Музыкант, певец, рассказчик —<br>А всего труба да ящик."</p>
          <input type="text" name="userAnswer3" placeholder="введите ответ" spellcheck="true"  size="30">
          <br>
          <br>
          <input type="submit" value="ответить">
        </form>
        <br>
        <br>


      </div>

    </div>

    <div class="footer">
      <?php
        include "menu.php";
      ?>
      <div class="copywrite"> Copyright &copy Dmitry King <?php echo date(Y);?></div>
    </div>
  </body>
</html>
