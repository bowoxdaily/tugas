<?php
error_reporting(0);
ini_set('date.timezone','Asia/Jakarta');
include "assets/database.php";
include "assets/tgl_indo.php";
include "assets/functionAll.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/style.css" rel="stylesheet" />
    <title>OOP Website</title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="container">
                <h1>OOP Website</h1>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class= col-sm-4>
                <div class="list-group">
                    <a href="a" class="list-group-item active">
                        <?=tgl_full(date('Y-m-d H:i:s')); ?>
                    </a>
                <a href="<?=base_url()."/home"?>" class="list-group-item">Home</a>
                <a href="<?=base_url()."/kategori"?>" class="list-group-item">kategori</a>
                </div>

            <div class= "col-sm-8">
            <?php 
                switch (url_segment(1)){
                    default :
                        include "page/home.php";
                        break;
                    case 'kategori':
                        include "page/kategori.php";
                    break;

                }
            ?>    
            </div>
            </div>

        </div>
    </div>
    <script src="<?=base_url()?>/assets/jquery-3.6.0.min.js"></script>
    <script src="<?=base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>