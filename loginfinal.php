<?php
include("up.php");

if (isset($_POST["name"]) && isset($_POST["password"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // اتصال به دیتابیس
    $link = mysqli_connect("localhost", "root", "", "parsnovindb");
    if (!$link) {
        die("خطا در اتصال به دیتابیس: " . mysqli_connect_error());
    }

    // استفاده از ورودی‌ها بدون پاکسازی
    $query = "SELECT `name`, `password` FROM `users` WHERE `name`='$name' AND `password`='$password' LIMIT 1";
    $result = mysqli_query($link, $query);
    mysqli_close($link);

    $row = mysqli_fetch_array($result);
    if ($row) {
        $_SESSION["login"] = true;
        ?>
        <script>
            location.replace("index.php");
        </script>
        <?php
    } else {
        echo "<p>نام کاربری یا رمز عبور صحیح نیست</p>";
    }
} else {
    echo "<p>لطفاً نام کاربری و رمز عبور را وارد کنید</p>";
}
$_SESSION["login"] = true;
$_SESSION["username"] = $name; // نام کاربری که وارد شده
include("down.html");
?>