<?php
include_once("connection_database.php");
$id=$_GET['del_id'];
$sql = "DELETE from tbl_product_images where product_id=:id";
$stmt = $dbh->prepare($sql);
$stmt->execute([':id'=>$id]);
$sql = "DELETE from tbl_products where id=:id";
$stmt = $dbh->prepare($sql);
$stmt->execute([':id'=>$id]);
header ("Location: index.php");
exit;
?>