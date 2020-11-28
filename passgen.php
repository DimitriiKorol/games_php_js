<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">

    function readInt(){
      return +document.getElementById("userAnswer").value;
    }

    function write(text){
      document.getElementById('info').innerHTML = text;
    }

      function genpass(){
        var userAnswer = readInt();
        var password = '';
        for (var i = 0; i < userAnswer; i++) {
          password += array.charAt(Math.round(Math.random() * length));
        }
        write(password);
      }

      //массив
      var array = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      var length = array.length - 1;

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

      <h2>Генератор паролей.</h2>

      <div class="box">

        <p>Здесь Вы можете сгененрировать пароль из случайных цифр и букв на латиннице. <br>
          Просто введите длину пароля и нажмите "Сгенерировать".<br>

        </p>

        <br><br>

        <p id="info">Укажите длину пароля. пароль будет состоять из цифр 0-9 и букв a-z,A-Z.

        </p>

        <input id="userAnswer" type="text" placeholder="сколько символов?" spellcheck="false" size="20">
        <a href="#" onclick="genpass();" id="button">Сгенерировать</a>

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
