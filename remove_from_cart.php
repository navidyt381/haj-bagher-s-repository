<?php
include("up.php");

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
    header("Location: cart.php");
    exit();
} else {
    echo "<p>شناسه محصول برای حذف ارسال نشده است.</p>";
}

include("down.html");
?>
