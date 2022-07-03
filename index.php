<?php
  include "./function/func.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Страница товаров</title>
</head>
<body>
  <header>
    <form method="post">
        <a href="./add_tovar.php">Добавить товар</a>

        <select name="category">
          <option value="all">Все</option>
          <?php
                echo show_category();
          ?>
        </select>


        <input type="submit" value="Поиск" name="search">
    </form>
  </header>

  <?php
  if(isset($_POST["search"])){

    echo show_tovars();

  }
  ?>






</body>
</html>