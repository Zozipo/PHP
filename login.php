<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<?php include "_header.php" ?>

<div class="container" style="background: whitesmoke; height: 100vh">
    <h1 class="text-center p-5">Логін</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <div class="form-outline">
                <label class="form-label" for="typeText">Логін</label>
                <input type="text" id="typeText" class="form-control"/>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <div class="form-outline">
                <label class="form-label" for="typePassword">Пароль</label>
                <input type="password" id="typePassword" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col text-center mt-5">
            <button type="button" class="btn btn-primary" style="width: 100px">Логін</button>
        </div>
        <div class="text-center">
            <p class="mt-3" style="font-size: 14px">Немає акаунту?<a href="register.php">Реєстрація</a></p>

        </div>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

