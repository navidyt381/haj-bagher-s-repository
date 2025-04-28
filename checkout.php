<?php
include("up.php");

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo '<main class="container my-5">';
    echo '<p class="backing">سفارش شما با موفقیت ثبت شد.</p>';
    echo '<a href="index.php" class="btn btn-primary">بازگشت به صفحه اصلی</a>';
    echo '</main>';
    unset($_SESSION['cart']);
} else {
    echo '<p>سبد خرید شما خالی است.</p>';
}

include("down.html");
?>
