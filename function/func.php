<?php
include "./server/bdconnect.php";


//Код просмотра категорий
function show_category(){
  include "./server/bdconnect.php";
  $sql = "SELECT * FROM category";
  $showcat = mysqli_query($link,$sql) or die("Ошибка запроса");
  while($row=mysqli_fetch_array($showcat)){
        $array_category[$row["id"]]=$row["catname"];
  };
  $str="";
  foreach($array_category as $key => $value){
    $str= $str."<option value='".$key."'>".$value."</option>";
  }
  return $str;
}


//Код просмотра товара
function show_tovars(){
  include "./server/bdconnect.php";
  $sql = "SELECT tovars.id,catname,name,info,cena,kol FROM tovars,category WHERE tovars.category_id=category.id";
  
  //Код просмотра товара с категориями
  $category=$_POST["category"];
  if($category == "all"){
    $sql = "SELECT tovars.id,catname,name,info,cena,kol FROM tovars,category WHERE tovars.category_id=category.id";
  }
  else{
    $sql = "SELECT tovars.id,catname,name,info,cena,kol FROM tovars,category WHERE tovars.category_id=category.id && category.id=$category";
  }

  $show = mysqli_query($link,$sql) or die("Ошибка запроса");
    
  echo "<form method=POST action=./function/delete.php>";
  echo "<input type=submit id=delete_tovars name=ud value=Удалить>";
  echo "<table>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Категория</th>";
  echo "<th>Название</th>";
  echo "<th>Информация</th>";
  echo "<th>Цена</th>";
  echo "<th>Количество</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
  while($row = mysqli_fetch_array($show))
  {
    $id=$row[0];
    echo "<tr>";
    printf("%s %s %s %s %s %s<br>","<td data-label=ID>" .$row['id'],
    "<td data-label=Категория>" .$row['id'],"<td data-label=Категория>" .$row['catname'],
    "<td data-label=Название>" .$row['name'],"<td data-label=Информация>" .$row['info'],
    "<td data-label=Цена>" .$row['cena'],"<td data-label=Количество>" .$row['kol']);
    echo "<td data-label=Удалить>";
    echo "<input type=checkbox name=ud_id[] value=$id>";
    echo "</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  echo "</form>";
  mysqli_close($link);
}











?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>