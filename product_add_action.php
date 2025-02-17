<?php
include("up.php");

$title = $_POST["title"];
$price = $_POST["price"];

$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "INSERT INTO products (title, price) VALUES ('$title', '$price')");
mysqli_close($connect);

if ($result == true) {
    echo '<p class="backing">محصول با موفقیت اضافه شد.</p>';
    echo '<a class="backing" href="adminpanel.php"><button class="btn btn-primary mt-3">بازگشت به صفحه اصلی</button></a>';
} else {
    echo "<p>ثبت محصول با مشکل مواجه شد.</p>";
}

include("down.html");
?>