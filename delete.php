<?php
include_once("connection_database.php");

//Отримуємо id
$id=$_GET['del_id'];

//Видадяємо фото проодукту
$sql = "DELETE from tbl_product_images where product_id=:id";
$stmt = $dbh->prepare($sql);
$stmt->execute([':id'=>$id]);

//Видаляємо сам продукт
$sql = "DELETE from tbl_products where id=:id";
$stmt = $dbh->prepare($sql);
$stmt->execute([':id'=>$id]);

//Переходимо в мейн
header ("Location: index.php");
exit;
?>