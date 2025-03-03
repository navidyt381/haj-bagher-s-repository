<?php
include("up.php");

$id = $_GET["id"];
$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "DELETE FROM products WHERE id='$id'");
mysqli_close($connect);

if ($result == true) {
    echo '<p class="backing">محصول با موفقیت حذف شد.</p>';
    echo '<a class="backing" href="adminpanel.php"><button class="btn btn-primary mt-3">بازگشت به صفحه اصلی</button></a>';
} else {
    echo "<p>حذف محصول با مشکل مواجه شد.</p>";
}

include("down.html");
?>
