<?php 
error_reporting(0);
include "assets/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <title>CRUD</title>
</head>
<body>
    <div class="container">
        <h2>CRUD PHP MYSQL</h2>
        <div class="row">
            <div class="col-sm-3">
                <a class="list-group-item" href="index.php?page=admin">admin</a>
                <a class="list-group-item" href="index.php?page=kategori">kategori</a>
                <a class="list-group-item" href="index.php?page=artikel">artikel</a>
            </div>
        </div>
        <div class="col-sm-9">
            <?php
                switch ($_GET['page']) {
                    default :
                        include "page/admin.php";
                    break;
                    case 'kategori':
                        include "page/kategori.php";
                    break;
                    case 'artikel':
                        include "page/artikel.php";
                    break;
                }
            ?>
        </div>
    </div>
    <script src="assets/bootstrap/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>