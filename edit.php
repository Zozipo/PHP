<?php
include_once("connection_database.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    print_r([$id ,$name, $price, $description]);

    //Оновлюємо продукт
    $sql = "UPDATE `tbl_products` SET name='$name',price='$price',description='$description' WHERE id='$id'";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    //Видаляємо старі фото
    $sql = "DELETE from tbl_product_images where product_id='$id'";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    include($_SERVER['DOCUMENT_ROOT'] . '/lib/guidv4.php');

    //Зберігаємо і інсертимо нові
    $images = $_POST['images'];
    $count = 1;
    foreach ($images as $base64) {
        $dir_save = 'images/';
        $image_name = guidv4() . '.jpeg';
        $uploadfile = $dir_save . $image_name;
        list(, $data) = explode(',', $base64);
        $data = base64_decode($data);
        file_put_contents($uploadfile, $data);
        $sql = 'INSERT INTO tbl_product_images (name, datecreate, priority, product_id) VALUES(:name, NOW(), :priority, :product_id);';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':name', $image_name);
        $stmt->bindParam(':priority', $count);
        $stmt->bindParam(':product_id', $id);
        $stmt->execute();
        $count++;
    }

//Переходимо в мейн
    header("Location: /");
    exit();

}
?>