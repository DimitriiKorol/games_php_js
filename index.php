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

      <p><img src="img/groomy_bear1.png" alt="groomy bear"><b>Добро пожаловать!</b> <br><br> Вы на моей <i>личной</i> страничке.<br><br>
      А теперь рекламная интеграция:) <br>
      Эта страничка была сделана благодаря обучению на сайте <a href="https://geekbrains.ru/">GeekBrains</a>. <a href="https://geekbrains.ru/">GeekBrains</a> - это всегда самая свежая информация, грамотная подача материала и море позитива! <br>
      Вступай в клуб <a href="https://geekbrains.ru/">Geekов</a> и кодь как Lord (конец рекламной интеграции).<br><br>
      Ниже собран небольшой сборник простеньких игр, чтобы поразвлечься и скоротать время на работе/учебе/дома: <a href="puzzle.php">Загадки</a> и <a href="guessing.php">Угадайка (на 2-х игроков)</a>. Также на сайте есть <a href="passgen.php">генератор паролей</a>.</p>

    </div>

    <div class="footer">
      <?php
        include "menu.php";
      ?>
      </nav>
      <div class="copywrite"> Copyright &copy Dmitry King <?php echo date(Y);?></div>
    </div>
  </body>
</html>
