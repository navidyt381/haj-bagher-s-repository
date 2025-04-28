<?php
include("up.php");

if (isset($_POST["name"]) && isset($_POST["password"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    $link = mysqli_connect("localhost", "hajbag_root", "Nn123456*", "hajbag_parsnovindb");
    if (!$link) {
        die("خطا در اتصال به دیتابیس: " . mysqli_connect_error());
    }

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
$_SESSION["username"] = $name;
include("down.html");
?>