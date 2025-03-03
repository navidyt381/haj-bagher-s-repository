<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه نوین پارس</title>

    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="design.css">
</head>
<body>
    <header class="bg-success text-white text-center py-3">
        <h1>فروشگاه نوین پارس</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">نوین پارس</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تغییر نمایش ناوبری">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav" dir="rtl">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">محصولات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">خدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy.php">خرید</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">ثبت نام</a>
                    </li>
                    <?php if(isset($_SESSION["login"])){?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">خروج</a>
                    </li>
                    <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">ورود</a>
                    </li>
                    <?php }?>
                    <?php if(isset($_SESSION["login"])){?>
                    <li class="nav-item">
                        <a class="nav-link" href="adminpanel.php">پنل ادمین</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
