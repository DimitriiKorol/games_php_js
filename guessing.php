<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">

    // Генератор случайных чисел
      var answer = parseInt(Math.random() * 100);

      function readInt(){
        return +document.getElementById("userAnswer").value;
      }

      function write(text){
        document.getElementById('info').innerHTML = text;
      }

      function hide(id){
        document.getElementById(id).style.display = "none";
      }

      function name1(){
        var name = document.getElementById("Player1").value;
        document.getElementById('playerStr1').innerHTML = "Игрок1<br>"+name;
        hide("Player1");
        hide("name1button");
        return name;
      }

      function name2(){
        var name = document.getElementById("Player2").value;
        document.getElementById('playerStr2').innerHTML = "Игрок2<br>"+name;
        hide("Player2");
        hide("name2button");
        return name;
      }

      function guess(){
        //Поочередная смена игроков
        if (playerId == 1){
          playerId = 2;
        } else {
          playerId = 1;
        }

        //смена имен
        if (playerId == 1) {
          var name = name1();
          var elseName = name2();
        } else {
          name = name2();
          elseName = name1();
        }

        //Обработка ответов
        write(name + alerts[0]);
        var userAnswer = readInt();
        if (userAnswer == exit) {
          write(alerts[1] + alerts[5] + answer);
          hide("userAnswer");
          hide("button");
          return;
        }

        if (userAnswer == answer) {
          write(name + alerts[2]);
          hide("userAnswer");
          hide("button");
        } else if (userAnswer > answer) {
          write(name + alerts[3] + "<br> Ходит " + elseName);
        } else if (userAnswer < answer) {
          write(name + alerts[4] + "<br> Ходит " + elseName);
        }

      }



      //переменные
      var exit = "000";
      var playerId = 1;
      var alerts = [
        ", Угадайте число от 0 до 100",
        "Выход из программы. Нам будет Вас не хватать... <br>",
        " -  Вы угадали!",
        ", слишком большое число!",
        ", слишком маленькое число!",
        "Правильный ответ: "
      ];




    </script>
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

      <h2>Угадай - ка!</h2>

      <div class="box">

        <p>Приветсвуем в игре "Угадай число!" <br>
          Для игры нужно 2 игрока. Выиграет тот, кто первым угадает число.<br>
          Для выхода из игры  в поле ответа наберите "000".<br><br>
        </p>

        <div class="players">
          <div class="name">
            <p id="playerStr1">Введите имя игрока №1.</p>
            <input id="Player1" type="text" placeholder="введите имя" spellcheck="false" size="20">
            <a href="#" onclick="name1();" id="name1button">OK</a>
          </div>
          <div class="name">
            <p id="playerStr2">Введите имя игрока №2.</p>
            <input id="Player2" type="text" placeholder="введите имя" spellcheck="false" size="20">
            <a href="#" onclick="name2();" id="name2button">OK</a>
          </div>
          <div class="clear"></div>
        </div>


        <br><br>

        <p id="info">Первым ходит Игрок2. <br>
          Угадайте число от 0 до 100.
        </p>

        <input id="userAnswer" type="text" placeholder="введите ответ" spellcheck="false" size="20">
        <a href="#" onclick="guess();" id="button">Ответить</a>

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
