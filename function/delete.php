<?php
include "../server/bdconnect.php";


//Код удаления товара
if(isset($_POST["ud_id"]))
{
    $mass=$_POST["ud_id"];
    $i=0;
    while($mass[$i])
{

    $sql = "DELETE FROM tovars WHERE id=$mass[$i]";
    $result = mysqli_query($link,$sql) or die("Ошибка запроса");
    $i++;
}
Header("Location:../index.php");
}