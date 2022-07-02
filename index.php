
<?php
    include "./function/funcTable.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица Товаров</title>
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <div class="container">
    <form method="post" class="form_sortiorovka">
    <div class="container_menu">
        <a href="./add_tovar.php">Добавить товар</a><br>
    </div>
        <div class="container_menu">
    <label for="category">Выбор по категории </label>
        <select name="category">
            <option value="Все">Все</option>
            <?php
                echo show_category();
            ?>
        </select>
        <input type="submit" value="Фильтр" name="filtr">
        </div>
    </form>
    <br>

        <?php
if(isset($_POST["filtr"])){

    echo show_tovars();

}

?>

    </table>
    </div>

</body>

</html>