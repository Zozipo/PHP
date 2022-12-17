<?php
include_once("connection_database.php");
$sql = "DELETE from tbl_products where id='".$_GET['del_id']."'";
$stmt = $dbh->prepare($sql);
$stmt->execute();
header ("Location: index.php");
exit;
?>