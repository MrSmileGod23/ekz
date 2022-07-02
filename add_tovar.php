<?php
    include "./function/funcTable.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Добавление товара</title>
</head>
<body>

    <form action="./function/insert_tovars.php" method="post" class="add_form" name="form1">
<a href="../index.php">Вернуться назад</a>
            <label for="name">Название товара</label>
            <input type="text" name="name" require />

            <label for="info">Информация о товаре</label>
            <textarea name="info" id="" cols="35" rows="5" require></textarea>

            <label for="category">Категории</label>
            <select name="category" require>
                <?php
        echo show_category();
    ?>
            </select>
    
        <label for="cena">Цена товара</label>
        <input type="number" name="cena" require />
   
        <label for="kol">Количество</label>
        <input type="number" name="kol" require />

        <input type="submit" name="insert" value="Добавить">
</body>

</html>