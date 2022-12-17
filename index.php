<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна сторінка</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<?php include "_header.php"; ?>

<?php
include_once "connection_database.php";
?>

<div class="container">
    <h1 class="text-center">Список продуктів</h1>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <?php
                $sql = "SELECT * FROM tbl_products";
                foreach ($dbh->query($sql) as $row) {
                    $id = $row['id'];
                    $image = $row['image'];
                    $name = $row["name"];
                    $price = $row["price"];
                    //echo "<h1>$id</h1>";
                    echo '
                <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                    <div class="card">
                         <div class="m-2 d-flex justify-content-end">
                          <button type="button" class="btn btn-danger" onclick="deleteme('. $id .')" name="Delete">Видалити</button>
                        </div>
                        <img src="images/' . $image . '"
                             class="card-img-top" alt="Клавіатура" height="218" width="auto"/>
                        <div class="card-body">

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">' . $name . '</h5>
                            </div>

                            <div class="mb-2 d-flex justify-content-between">
                                <h5 class="text-dark mb-0">' . $price . '₴</h5>
                                <button type="button" class="btn btn-success">Купити</button>
                            </div>
                        </div>
                    </div>
                </div>
                    ';
                }
                ?>

            </div>
        </div>
    </section>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    function deleteme(delid)
    {
        if(confirm("Do you want Delete!")){
            window.location.href='delete.php?del_id=' +delid+'';
            return true;
        }
    }
</script>
</body>
</html>
