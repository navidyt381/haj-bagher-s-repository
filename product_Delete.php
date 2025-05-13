<?php
include("up.php");


$isAdmin = false;
if (isset($_SESSION["login"]) && isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $connect = mysqli_connect("localhost", "root", "", "parsnovindb");
    if ($connect) {
        $query = "SELECT admin FROM users WHERE name='$username'";
        $result = mysqli_query($connect, $query);
        if ($result && $row = mysqli_fetch_array($result)) {
            if ($row["admin"] == 1) {
                $isAdmin = true;
            }
        }
        mysqli_close($connect);
    }
}
if  ($isAdmin==false) {
?>
<script>location.replace("index.php");</script>
<?php } 



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
