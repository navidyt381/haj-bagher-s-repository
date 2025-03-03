<?php
include("up.php");

$title = $_POST["title"];
$price = $_POST["price"];
$image = "";

if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
    $targetDir = "images/";
    $fileName = $_FILES["image"]["name"];
    $targetFile = $targetDir . $fileName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    $image = $targetFile;
}

$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "INSERT INTO products (title, price, image) VALUES ('$title', '$price', '$image')");
mysqli_close($connect);

if ($result == true) {
    echo '<p class="backing">محصول با موفقیت اضافه شد.</p>';
    echo '<a class="backing" href="adminpanel.php"><button class="btn btn-primary mt-3">بازگشت به صفحه اصلی</button></a>';
} else {
    echo "<p>ثبت محصول با مشکل مواجه شد.</p>";
}

include("down.html");
?>
