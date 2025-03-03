<?php
include("up.php");

$id = $_POST["id"];
$title = $_POST["title"];
$price = $_POST["price"];
$image = "";

if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $targetDir = "images/";
    $fileName = $_FILES["image"]["name"];
    $targetFile = $targetDir . $fileName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    $image = $targetFile;
}

$connect = mysqli_connect("localhost", "root", "", "parsnovindb");

if(!empty($image)) {
    $query = "UPDATE products SET title='$title', price='$price', image='$image' WHERE id='$id'";
} else {
    $query = "UPDATE products SET title='$title', price='$price' WHERE id='$id'";
}

$result = mysqli_query($connect, $query);
mysqli_close($connect);

if ($result == true) {
    echo '<p class="backing">محصول با موفقیت ویرایش شد.</p>';
    echo '<a class="backing" href="adminpanel.php"><button class="btn btn-primary mt-3">بازگشت به صفحه اصلی</button></a>';
} else {
    echo "<p>ویرایش محصول با مشکل مواجه شد.</p>";
}

include("down.html");
?>
