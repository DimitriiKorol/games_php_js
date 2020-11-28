<meta charset="utf-8">

<script type="text/javascript">
// Генератор случайных чисел
  var answer = parseInt(Math.random() * 100);
  //Условия игры
  alert("Приветсвуем в игре \nУгадай число!\n Для игры нужно 2 игрока!\n Выиграет тот, кто первым угадает число! \n Для выхода из игры наберите \"выйти\"")
  //переменные
  var name1 = prompt("Введите имя 1-го игрока:");
  var name2 = prompt("Введите имя 2-го игрока:");
  var exit = "выйти";
  var playerId = 1;

  //Цикл
  while (true) {

    //Поочередная смена игроков
    if (playerId == 1){
      playerId = 2;
    } else {
      playerId = 1;
    }

    //смена имен
    if (playerId == 1) {
      var name = name1;
    } else {
      name = name2;
    }

    //Обработка ответов
    var playerAnswer = prompt(name + ", Угадайте число от 0 до 100");
    if (playerAnswer == exit) {
      alert("Выход из программы. Нам будет Вас не хватать...");
      break;
    }
    playerAnswer = +playerAnswer;

    if (playerAnswer == answer) {
      alert(name + ' -  Вы угадали!');
      break;
    } else if (playerAnswer > answer) {
      alert(name + ', Слишком большое число!');
    } else if (playerAnswer < answer) {
      alert(name + ', Слишком маленькое число!');
    }
  }

  alert("Правильный ответ: " + answer);

</script>
