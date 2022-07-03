<?php
    include "./function/func.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добавление товара</title>
</head>
<body>
  
<form action="./function/add.php" method="post" style="display:flex;flex-direction:column">
  
    <a href="../index.php">Вернуться назад</a>

     <label for="name">Название товара</label>
     <input type="text" name="name" require />

     <label for="info">Информация товара</label>
     <input type="text" name="info" require />
     
     <label for="category">Категория</label>
     <select name="category">
          <option value="all">Все</option>
          <?php
                echo show_category();
          ?>
        </select>

     <label for="cena">Цена</label>
     <input type="text" name="cena" require />

     <label for="kol">Количество</label>
     <input type="text" name="kol" require />

     <input type="submit" value="Добавить" name="insert">
</form>





</body>
</html>