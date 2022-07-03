<?php
include "../server/bdconnect.php";

$category_id = htmlspecialchars($_POST['category'], ENT_QUOTES,'UTF-8');
$name = htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8');
$info = htmlspecialchars($_POST['info'], ENT_QUOTES,'UTF-8');
$kol = htmlspecialchars($_POST['kol'], ENT_QUOTES,'UTF-8');
$cena = htmlspecialchars($_POST['cena'], ENT_QUOTES,'UTF-8');

$sql = "INSERT INTO tovars(category_id,name,info,kol,cena) VALUES ('$category_id','$name','$info','$kol','$cena')";

$addtovar = mysqli_query($link,$sql) or die("Ошибка запроса");

Header("Location:../index.php");
?>