<?php
error_reporting(0);
include "../server/bdconnect.php";
 if(isset($_POST["ud_id"]))
 {
     $mass=$_POST["ud_id"];
     $i=0;
     while($mass[$i])
 {
 
 $sql="DELETE FROM tovars WHERE id=$mass[$i]";
 $result1 = mysqli_query($link,$sql) or die("Query failed");
 $i++;
 }
 Header("Location:../index.php");
 }
?>

<?php

 function show_category(){
     include "./server/bdconnect.php";
     $sql = "SELECT * FROM category";

     $result= mysqli_query($link,$sql) or die("Query failed");
     while( $row=mysqli_fetch_array($result)){
         $array_category[$row["category_id"]]=$row["catname"];
     };
     $str="";
     foreach($array_category as $key => $value){
            $str=$str. "<option value='".$key."' >".$value."</option>";
     }
     return $str;
 }

 function show_tovars(){
  include "./server/bdconnect.php";
  $sql="SELECT id,catname,name,info,cena,kol FROM tovars,category WHERE
  tovars.category_id=category.category_id";

        $category=$_POST["category"];
        if($category=="Все")
        $sql="SELECT id,catname,name,info,cena,kol FROM tovars,category WHERE
  tovars.category_id=category.category_id";
        else 
        $sql="SELECT id,catname,name,info,cena,kol FROM tovars,category WHERE
        tovars.category_id=category.category_id
        && category.category_id=$category";


    $result = mysqli_query($link,$sql) or die ("Query failed");
    echo "<form method=post action=./function/funcTable.php>";
    echo "<div class=delete_tovars>";
    echo "<input type=submit id=delete_tovars name=ud value=Удалить>";
    echo "</div>";
  
    echo "<table class='table-3'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Категория</th>";
    echo "<th>Название</th>";
    echo "<th>Инфо</th>";
    echo "<th>Цена</th>";
    echo "<th>Кол-во</th>";
    echo "<th>Удалить</th>";
    echo "<tr>";
    echo "</thead>";
    echo "</tbody>";
    while($row = mysqli_fetch_array($result))
    {
        $ids=$row[0];
        echo "<tr>";
        printf(" %s %s %s %s %s %s<br>","<td data-label=ID>" .$row['id'],
        "<td data-label=Категория>" .$row['catname'],"<td data-label=Название>" .$row['name'],
        "<td data-label=Инфо >" .$row['info'],"<td data-label=Цена>" .$row['cena'],
        "<td data-label=Кол-во>" .$row['kol']);
        ?>
      <td data-label=Удалить>
        <input type=checkbox name=ud_id[] value="<?php echo $ids ?>">
        <?php echo " </td>
      </tr>";
     
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
   <link rel="stylesheet" href="./function/style.css">
   <title>Таблица Товаров</title>
 </head>
 <body>
   
 </body>
 </html>