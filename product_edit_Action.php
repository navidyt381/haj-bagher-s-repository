<?php
include("up.php");

$id = $_POST["id"];
$title = $_POST["title"];
$price = $_POST["price"];

$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "UPDATE products SET title='$title', price='$price' WHERE id='$id'");
mysqli_close($connect);

if ($result == true) {
    echo '<p class="backing" >محصول با موفقیت ویرایش شد.</p>';
    echo '<a class="backing" href="adminpanel.php"><button class="btn btn-primary mt-3">بازگشت به صفحه اصلی</button></a>';
} else {
    echo "<p>ویرایش محصول با مشکل مواجه شد.</p>";
}

include("down.html");
?>
