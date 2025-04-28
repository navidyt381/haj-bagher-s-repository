<?php
include("up.php");

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $connect = mysqli_connect("localhost", "hajbag_root", "Nn123456*", "hajbag_parsnovindb");
    if (!$connect) {
        die("خطا در اتصال به دیتابیس: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM products WHERE id='$product_id'";
    $result = mysqli_query($connect, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $product = array(
            "id"       => $row['id'],
            "title"    => $row['title'],
            "price"    => $row['price'],
            "image"    => $row['image'],
            "quantity" => 1
        );
        mysqli_close($connect);
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$product_id] = $product;
        }
        header("Location: cart.php");
        exit();
    } else {
        mysqli_close($connect);
        echo "<p>محصول مورد نظر یافت نشد.</p>";
    }
} else {
    echo "<p>شناسه محصول ارسال نشده است.</p>";
}

include("down.html");
?>
